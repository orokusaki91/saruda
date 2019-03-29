<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Database\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.auth.passwords.change');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'current-password' => 'required|min:6',
            'new-password' => 'required|min:6|confirmed'
        ]);

        $user = User::find( auth()->id() );
        $currentPassCheck = Hash::check(request( 'current-password'), $user->password );

        if( !$currentPassCheck ) {

            return redirect()->back()->with(['error' => 'Current Password is wrong. Please try again.']);

        }

        if( request( 'current-password') == request( 'new-password') ) {

            return redirect()->back()->with(['error' => 'Current Password can not be the same as New Password. Please try again.']);

        }

        $user->update([
            'password' => Hash::make(request('new-password'))
        ]);

        return redirect()->back()->with(['success' => 'You changed your password.']);
    }

}

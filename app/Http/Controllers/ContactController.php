<?php

namespace App\Http\Controllers;

use Mail;
use Session;
use Exception;
use Validator;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ], [
            'required' => 'Campo obbligatorio',
            'email' => 'Email non valida'
        ]);

        if ($validator->passes()) {
            try {
	            Mail::to('disabledbyfb@gmail.com')->send(new ContactMail($request));

	        	Session::flash('success', 'Messaggio inviato con successo. Grazie per la sua comunicazione. Le risponderemo entro 48 ore.');
	        } catch (Exception $e) {
	            Session::flash('error', 'Qualcosa è andato storto. Prego riprovare.');
                return response()->json([
                    'status' => false
                ]);
	        }

        	return response()->json([
	        	'status' => true
	        ]);
        } else {
    	    return response()->json([
                'errors' => $validator->getMessageBag()->toArray()
            ]);
        }
    }
}

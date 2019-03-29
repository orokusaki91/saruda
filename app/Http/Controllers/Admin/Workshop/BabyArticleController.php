<?php

namespace App\Http\Controllers\Admin\Workshop;

use App\Database\Workshop;
use App\Database\WorkshopArticle;
use App\Http\Requests\Workshop\ArticleStoreRequest;
use App\Http\Requests\Workshop\ArticleUpdateRequest;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class BabyArticleController extends Controller
{
    public function index(Workshop $article)
    {
        $records = $article->articles;
        return view('admin.pages.workshop.baby.article.show', compact('records', 'article'));
    }

    public function create(Workshop $article)
    {
        return view('admin.pages.workshop.baby.article.create', compact('article'));
    }

    public function store(ArticleStoreRequest $request, Workshop $article)
    {
        WorkshopArticle::create([
            'heading' => $request->heading,
            'description' => $request->description,
            'image_path' => uploadFileInPublicFolder($request->file('image'), $request->heading, "/img/workshop/{$article->type}/"),
            'workshop_id' => $article->id
        ]);
        
        return redirect()->route('admin.workshop.baby.article', ['article' => $article->id])->with(['success' => 'You successfuly created new record']);
    }

    public function edit(WorkshopArticle $record)
    {
        return view('admin.pages.workshop.baby.article.edit', compact('record'));
    }

    public function update(ArticleUpdateRequest $request, WorkshopArticle $record)
    {
        if (isset($request->image)) {
            File::delete(public_path($record->image_path));
            $request->merge([
                'image_path' => uploadFileInPublicFolder($request->file('image'), $request->heading, "/img/workshop/{$record->category->type}/")
            ]);
        }
        $record->update($request->except('image'));
        
        return redirect()->route('admin.workshop.baby.article', ['article' => $record->workshop_id])->with(['success' => 'You successfuly updated the record']);
    }

    public function destroy(WorkshopArticle $record)
    {
        $redirect_param = $record->workshop_id;

        File::delete(public_path($record->image_path));
        $record->delete();
        
        return redirect()->route('admin.workshop.baby.article', ['article' => $redirect_param])->with(['success' => 'You successfuly deleted the record']);
    }
}

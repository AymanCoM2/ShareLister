<?php

use App\Models\Ellink;
use App\Models\Ellist;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/create-list', function () {
    return view('list.create');
})->name('create-list-get');
Route::post('/create-list', function (Request $request) {
    $request->validate([
        'title' => 'required|min:3|max:250',
        'type' => 'required|in:type1,type2,type3,type4',
    ]);
    $newList  = new Ellist();
    $newList->title  = $request->title;
    $newList->description  = $request->description;
    $newList->user_id  = $request->user()->id;
    if ($request->isPublic) {
        $newList->isPublic =  true;
    } else {
        $newList->isPublic = false;
    }
    $newList->save();
    if ($request->tags) {
        foreach ($request->tags as $tag) {
            $aTag  = new Tag();
            $aTag->tagWord  = $tag;
            $aTag->save();
            $newList->tags()->attach($aTag->id);
        }
    }
    return redirect()->route('view-list', $newList->id);
})->name('create-list-post');
// ! Create list [ GET and POST]

Route::get('/list/{id}', function ($id) {
    $viewedList = Ellist::find($id);
    $allLinks  = Ellink::orderBy('updated_at', 'desc')->get();
    $theListId  = $id;
    return view('list.list-page', compact(['viewedList', 'allLinks', 'theListId']));
})->name('view-list');


Route::get('/my-lists', function () {
    $userLists  = Ellist::where('user_id', request()->user()->id)->paginate(2);
    return view('list.user-lists', compact('userLists'));
})->name('my-lists');

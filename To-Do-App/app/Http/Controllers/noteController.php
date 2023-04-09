<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\note;

class noteController extends Controller
{
    //
    public function store(Request $request){
        note::create([
            'user_id' => auth()->user()->id,
            'head'=> $request->head,
            'body' => $request->body
        ]);
        return redirect(route('activity.display'))->with('status','Activity Added !');
    }

    public function display(){
        return view('addNote');
    }
    public function displayOne($userid){
        $note = note::findOrFail($userid);

        return view('displayOneNote', compact('note'));
    }
    public function edit($userid){
        $note = note::findOrFail($userid);
        return view('updateNote', compact('note'));
    }
    public function updateNote($userid, Request $request){
        note::findOrFail($userid)->update($request->all());

        return redirect(route('note.one', $userid))->with('status','Note Updated !');
    }
    public function deleteNote($userid){
        note::findOrFail($userid)->delete();

        return redirect(route('activity.display'))->with('status','Note Deleted !');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\activities;

class ActivityCOntroller extends Controller
{
    //
    public function stroe(Request $request){
        activities::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'date' => $request->date,
            'time' => $request->time,
            'description' => $request->description,
            'priority' => $request->priority,
            'actions' => $request->actions
        ]);
       // return back();  <= aye inna page ekatama add wenawa

       return redirect(route('activity.display'))->with('status','Activity Added !');
    }

    public function show($userId){
        $act = activities::findOrFail($userId);
        return view('displayOne', compact('act'));
    }

    public function edit($userId){
        $act = activities::findOrFail($userId);
        return view('updateActivity',compact('act'));
    }

    public function update($userId, Request $request){
        activities::findOrFail($userId)->update($request->all());

        return redirect(route('activity.displayOne',$userId))->with('status','Activity Updated !');
    }
    public function delete($userId){
        activities::findOrFail($userId)->delete();

        return redirect(route('activity.display'))->with('status','Activity Deleted !');
    }
}

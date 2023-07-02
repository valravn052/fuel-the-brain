<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpeakingInsert;
use DB;

class AdminSpeakingInsertController extends Controller
{
    public function index(){

        return view('admin/speaking_insert');
    }

    public function store(Request $request){
       
        $request->validate([
            'topic_name' => 'required|unique:speaking_topics,topic_name|max:255'
        ]);

        WritingTopic::create([
            'topic_name' => $request->topic_name
        ]);

        return redirect()->route('speaking_insert.index')->with('msg', 'Question inserted successfuly');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\WritingTopic;
use Illuminate\Http\Request;

class WritingInsertController extends Controller
{
    public function index(){

        return view('admin/writing_ques_ins');
    }

    public function store(Request $request){
       
        $request->validate([
            'topic_name' => 'required|unique:writing_topic,topic_name|max:255'
        ]);

        WritingTopic::create([
            'topic_name' => $request->topic_name
        ]);

        return redirect()->route('writingInsert.index')->with('msg', 'Question inserted successfuly');
    }
}

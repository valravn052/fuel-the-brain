<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writing;
use DB;

class WritingController extends Controller
{
    public function writingSubmit(Request $request) {
        if ($request->isMethod('post')) {
            $writing = new Writing;
            $writing->student_id = $request['stu_id'];
            $writing->student_name = $request['stu_name'];
            $writing->paragraph = $request['para'];
            $writing->save();
            return redirect()->route('reading');
        }
        return view('writing');
    }

    // public function writingSubmit(Request $request){
        
    // }

    public function fetchTopic(Request $request)
    {
        $topic = DB::select('select topic_name from writing_topic order by rand() limit 1');
        return view('writing',compact('topic'));
    }
}

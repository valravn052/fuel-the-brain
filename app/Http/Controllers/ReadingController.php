<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use DB;

class ReadingController extends Controller
{
    public function index(Request $request) {
        if ($request->isMethod('post')) {
            dd($request->input());
            return redirect()->route('homepage');
        }
        return view('reading');
    }

    public function readingSubmit(Request $request){
        $writing = new Writing;
        $writing->student_id = $request['stu_id'];
        $writing->student_name = $request['stu_name'];
        $writing->paragraph = $request['para'];
        $writing->save();
    }

    public function rendomFormation($answers = [])
    {
        $subject=array("a"=>"java","b"=>"dbms","c"=>"os","d"=>"compiler","e"=>"networking");  
        shuffle($subject);
        print_r($subject);
    }

    public function fetchTopic(Request $request)
    {
        $topic = DB::select('select topic_name from reading_topic order by rand() limit 1');
        return view('reading',compact('topic'));
    }

    public function fetchQues(Request $request) {
        
    }
}








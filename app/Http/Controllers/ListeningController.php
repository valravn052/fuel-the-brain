<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ListeningInsert;
use App\Models\ListeningQuestionInsert;
use App\Models\Listening;
use DB;

class ListeningController extends Controller
{
    public function lis_ans(Request $request) {
        // $ques = $this->fetchQues();
        if ($request->isMethod('post')) {
            $answ = new Listening;
            $answ->ans = $request['ans'];
            $answ->save();
            return redirect()->route('speaking');
        }
        return view('listening', compact('$ques'));
    }

    public function fetchAudio(Request $request) {
        $item = DB::select('select file from audio order by rand() limit 1');
        

        // $ques = DB::select('select listening_question.ques from listening_question inner join audio on listening_question.aud_id = audio.id limit 1');

        $ques = DB::select('select ques from listening_question order by rand() limit 1');

        return view('listening',compact('item', 'ques'));
    }

    // public function lis_ans(Request $request) {
    //     $answ = new Listening;
    //     $answ->ans = $request['ans'];
    //     $answ->save();
    // }

    
}







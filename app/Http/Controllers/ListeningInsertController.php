<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListeningInsert;
use App\Models\ListeningQuestionInsert;
use DB;

class ListeningInsertController extends Controller
{
    public function index(Request $request) {
        if ($request->isMethod('post')) {
            //dd($request->input());
            return redirect()->route('homepage');
        }
        return view('admin/listening_insert');
    }

    public function listening_insertSubmit(Request $request) {
        $file = $request->file('audioFile');

        $filename = time().''.$file->getClientOriginalName();
        $filePath = $file->storeAs('public/app/public/audio/admin', $filename);
        // dd($filePath);

        $listening_insert = new ListeningInsert;
        $listening_insert->file = $filePath;
        $listening_insert->save();

        $lis_ques_ins = new ListeningQuestionInsert;
        $lis_ques_ins->ques = $request['ques1'];
        $lis_ques_ins->cans = $request['ca1'];
        $lis_ques_ins->aud_id = $listening_insert->id;
        $lis_ques_ins->save();

        $lis_ques_ins2 = new ListeningQuestionInsert;
        $lis_ques_ins2->ques = $request['ques2'];
        $lis_ques_ins2->cans = $request['ca2'];
        $lis_ques_ins2->aud_id = $listening_insert->id;
        $lis_ques_ins2->save();

        $lis_ques_ins3 = new ListeningQuestionInsert;
        $lis_ques_ins3->ques = $request['ques3'];
        $lis_ques_ins3->cans = $request['ca3'];
        $lis_ques_ins3->aud_id = $listening_insert->id;
        $lis_ques_ins3->save();

        return response()->json(['res'=>'Uploaded Successfully']);
    }

    // public function listening_quesSubmit(Request $request) {
        
    // }

}

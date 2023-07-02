<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReadingInsert;
use App\Models\QuestionInsert;
use DB;

class ReadingInsertController extends Controller
{
    public function index(Request $request) {
        if ($request->isMethod('post')) {
            //dd($request->input());
            return redirect()->route('homepage');
        }
        return view('admin/reading_insert');
    }

    public function reading_insertSubmit(Request $request) {

        // dd($request->all());
        $reading_insert = new ReadingInsert;
        $reading_insert->topic_name = $request['comprehension'];
        //dd($reading_insert);
        $reading_insert->save();

        // $question_insert = new QuestionInsert;
        // $question_insert = reading_insertSubmit();

        $question_insert = new QuestionInsert;
        $question_insert->ques = $request['ques1'];
        $question_insert->opt1 = $request['opt1a'];
        $question_insert->opt2 = $request['opt1b'];
        $question_insert->opt3 = $request['opt1c'];
        $question_insert->opt4 = $request['opt1d'];
        $question_insert->cans = $request['ca1'];
        $question_insert->pass_id = $reading_insert->id;
        //dd($question_insert);
        $question_insert->save();

        $question_insert2 = new QuestionInsert;
        $question_insert2->ques = $request['ques2'];
        $question_insert2->opt1 = $request['opt2a'];
        $question_insert2->opt2 = $request['opt2b'];
        $question_insert2->opt3 = $request['opt2c'];
        $question_insert2->opt4 = $request['opt2d'];
        $question_insert2->cans = $request['ca2'];
        $question_insert2->pass_id = $reading_insert->id;
        $question_insert2->save();

        $question_insert3 = new QuestionInsert;
        $question_insert3->ques = $request['ques3'];
        $question_insert3->opt1 = $request['opt3a'];
        $question_insert3->opt2 = $request['opt3b'];
        $question_insert3->opt3 = $request['opt3c'];
        $question_insert3->opt4 = $request['opt3d'];
        $question_insert3->cans = $request['ca3'];
        $question_insert3->pass_id = $reading_insert->id;
        $question_insert3->save();

        $question_insert4 = new QuestionInsert;
        $question_insert4->ques = $request['ques4'];
        $question_insert4->opt1 = $request['opt4a'];
        $question_insert4->opt2 = $request['opt4b'];
        $question_insert4->opt3 = $request['opt4c'];
        $question_insert4->opt4 = $request['opt4d'];
        $question_insert4->cans = $request['ca4'];
        $question_insert4->pass_id = $reading_insert->id;
        $question_insert4->save();

        $question_insert5 = new QuestionInsert;
        $question_insert5->ques = $request['ques5'];
        $question_insert5->opt1 = $request['opt5a'];
        $question_insert5->opt2 = $request['opt5b'];
        $question_insert5->opt3 = $request['opt5c'];
        $question_insert5->opt4 = $request['opt5d'];
        $question_insert5->cans = $request['ca5'];
        $question_insert5->pass_id = $reading_insert->id;
        $question_insert5->save();

        // return $reading_insert->id;
        // return view('admin/question_insert');
        return back()->with(['alert' => 'Saving Successful']);
    }

    // public function question_insertSubmit(Request $request) {
    //     $reading_insert = new QuestionInsert;
    //     $reading_insert = reading_insertSubmit();

    //     $question_insert = new QuestionInsert;
    //     $question_insert->ques = $request['ques1'];
    //     $question_insert->opt1 = $request['opt1a'];
    //     $question_insert->opt2 = $request['opt1b'];
    //     $question_insert->opt3 = $request['opt1c'];
    //     $question_insert->opt4 = $request['opt1d'];
    //     $question_insert->cans = $request['ca1'];
    //     $question_insert->pass_id = $reading_insert;
    //     dd($question_insert);
    //     $question_insert->save();

    //     $question_insert2 = new QuestionInsert;
    //     $question_insert2->ques = $request['ques2'];
    //     $question_insert2->opt1 = $request['opt2a'];
    //     $question_insert2->opt2 = $request['opt2b'];
    //     $question_insert2->opt3 = $request['opt2c'];
    //     $question_insert2->opt4 = $request['opt2d'];
    //     $question_insert2->cans = $request['ca2'];
    //     $question_insert2->pass_id = $reading_insert;
    //     dd($question_insert2);
    //     $question_insert2->save();

    //     $question_insert3 = new QuestionInsert;
    //     $question_insert3->ques = $request['ques3'];
    //     $question_insert3->opt1 = $request['opt3a'];
    //     $question_insert3->opt2 = $request['opt3b'];
    //     $question_insert3->opt3 = $request['opt3c'];
    //     $question_insert3->opt4 = $request['opt3d'];
    //     $question_insert3->cans = $request['ca3'];
    //     $question_insert3->pass_id = $reading_insert;
    //     dd($question_insert3);
    //     $question_insert3->save();

    //     $question_insert4 = new QuestionInsert;
    //     $question_insert4->ques = $request['ques4'];
    //     $question_insert4->opt1 = $request['opt4a'];
    //     $question_insert4->opt2 = $request['opt4b'];
    //     $question_insert4->opt3 = $request['opt4c'];
    //     $question_insert4->opt4 = $request['opt4d'];
    //     $question_insert4->cans = $request['ca4'];
    //     $question_insert4->pass_id = $reading_insert;
    //     dd($question_insert4);
    //     $question_insert4->save();

    //     $question_insert5 = new QuestionInsert;
    //     $question_insert5->ques = $request['ques5'];
    //     $question_insert5->opt1 = $request['opt5a'];
    //     $question_insert5->opt2 = $request['opt5b'];
    //     $question_insert5->opt3 = $request['opt5c'];
    //     $question_insert5->opt4 = $request['opt5d'];
    //     $question_insert5->cans = $request['ca5'];
    //     $question_insert5->pass_id = $reading_insert;
    //     dd($question_insert5);
    //     $question_insert5->save();

    //     return back()->with(['alert' => 'Saving Successful']);
    // }
}

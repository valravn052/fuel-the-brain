<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writing;
use DB;

class WritingEvaluationController extends Controller
{
    public function wri_eval(Request $request) {
        // $ques = $this->fetchQues();
        if ($request->isMethod('post')) {
            //dd($request->input());
            return redirect()->route('homepage');
        }

        $files = Writing::paginate(5);

        return view('admin/wri_evaluation', compact('files'));
    }
}

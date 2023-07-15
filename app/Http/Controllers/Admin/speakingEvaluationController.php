<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Speaking;
use App\Models\Ranking;
use App\Models\Writing;
use App\Models\Listening;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SpeakingEvaluationController extends Controller
{
    public function spea_eval(Request $request) {
        // $ques = $this->fetchQues();
        if ($request->isMethod('post')) {
            $ranking = new Ranking;
            $ranking->student_id = $request['id'];
            $ranking->student_name = $request['name'];
            $ranking->writing_marks = $request['wri_mark'];
            $ranking->speaking_marks = $request['spe_mark'];
            $ranking->listening_marks = $request['lis_mark'];
            $ranking->save();
        }

        $files = Speaking::paginate(5);
        $item = DB::select('select file from speakings order by rand() limit 1');
        $paras = DB::select('select paragraph from writing order by rand() limit 1');
        $ans = DB::select('select ans from listening order by rand() limit 1');

        return view('admin/spea_evaluation', compact('files', 'item', 'paras', 'ans'));


    }
}


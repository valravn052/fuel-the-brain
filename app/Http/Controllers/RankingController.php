<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ranking;
use DB;

class RankingController extends Controller
{
    public function index(Request $request) {
        // $ranks = DB::select('select student_id, student_name, total_marks dense_rank() over(order by total_marks desc) Rank from ranking order by Rank');

        $ranks = DB::select('select student_id, student_name, total_marks from ranking order by total_marks desc');

        // $ranks = Ranking::paginate(5);

        return view('ranking', compact('ranks'));
    }
}

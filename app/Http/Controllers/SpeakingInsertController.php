<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpeakingInsert;
use DB;

class SpeakingInsertController extends Controller
{
    public function index(Request $request) {
        if ($request->isMethod('post')) {
            //dd($request->input());
            return redirect()->route('homepage');
        }
        return view('admin/listening_insert');
    }

    public function speaking_insertSubmit(Request $request) {
        $file = $request->file('audioFile');

        $filename = time().''.$file->getClientOriginalName();
        $filePath = $file->storeAs('public/app/public/audio/admin', $filename);

        $speaking_insert = new SpeakingInsert;
        $speaking_insert->audio = $filePath;
        $speaking_insert->save();

        return response()->json(['res'=>'Uploaded Successfully']);
    }

}

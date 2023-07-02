<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speaking;
use DB;

class SpeakingController extends Controller
{
    public function speakingSubmit(Request $request) {
        if ($request->isMethod('post')) {
            $file = $request->file('audioFile');

            $filename = time().''.$file->getClientOriginalName();
            $filePath = $file->storeAs('public/app/public/audio/student', $filename);

            $speaking = new Speaking;
            $speaking->file = $filePath;
            $speaking->save();
            return redirect()->route('student');
        }
        
        $topic = DB::select('select topic_name from speaking_topics order by rand() limit 1');
        return view('speaking',compact('topic'));
    }

    // public function speakingSubmit(Request $request) {

    //     $file = $request->file('audioFile');

    //     $filename = time().''.$file->getClientOriginalName();
    //     $filePath = $file->storeAs('public/app/public/audio/student', $filename);

    //     $speaking = new Speaking;
    //     $speaking->file = $filePath;
    //     $speaking->save();

    //     return response()->json(['res'=>'Uploaded Successfully']);
    // }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpeakingInsert;
use DB;

class AdminInsertController extends Controller
{
    public function speaking_insertSubmit(Request $request) {
        $file = $request->file('audioFile');

        $filename = time().''.$file->getClientOriginalName();
        $filePath = $file->storeAs('audio/admin', $filename, 'public');

        $speaking_insert = new SpeakingInsert;
        $speaking_insert->audio = $filePath;
        $speaking_insert->save();

        return response()->json(['res'=>'Uploaded Successfully']);
    }
}

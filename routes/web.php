<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\WritingInsertController;
use App\Http\Controllers\AdminSpeakingInsertController;
use App\Http\Controllers\SpeakingEvaluationController;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('writing', function() {
//     return view('writing');
// });

// Route::any('homepage', function() {
//     return view('homepage');
// });

Route::any('/homepage', function() {
    return view('homepage');
})->name('homepage');

Route::any('/home', function() {
    return view('home');
})->name('home');

Route::any('/student', function() {
    return view('student');
})->name('student');

// Route::any('/speaking', function() {
//     return view('speaking');
// })->name('speaking');

// Route::any('/ranking', function() {
//     return view('ranking');
// })->name('ranking');

// Route::any('/listening', function() {
//     return view('listening');
// })->name('listening');

Route::any('/admin_marking', function() {
    return view('admin/admin_marking');
})->name('admin_marking');

// Route::any('/admin-home', function() {
//     return view('admin/admin-home');
// })->name('admin-home');

Route::any('/ques-ins-panel', function() {
    return view('admin/ques-ins-panel');
})->name('ques-ins-panel');

Route::any('/writing', 'WritingController@index')->name('writing');
Route::any('/reading', 'ReadingController@index')->name('reading');
Route::any('/speaking', 'SpeakingController@index')->name('speaking');

Route::any('/writing-eval', 'WritingEvaluationController@wri_eval')->name('writing-eval');
// Route::any('/speaking-eval', 'SpeakingEvaluationController@spea_eval')->name('speaking-eval');

// Route::any('/listening', 'ListeningController@index')->name('listening');

Route::any('/reading_insert', 'ReadingInsertController@index')->name('reading_insert');
Route::any('/question_insert', 'ReadingInsertController@index')->name('question_insert');
// Route::any('/speaking_insert', 'SpeakingInsertController@index')->name('speaking_insert');
Route::any('/listening_insert', 'ListeningInsertController@index')->name('listening_insert');

Route::post('/writing-submit', 'WritingController@writingSubmit')->name('writing-submit');
Route::post('/reading-submit', 'WritingController@readingSubmit')->name('reading-submit');
Route::post('/speaking-submit', 'SpeakingController@speakingSubmit')->name('speaking-submit');

Route::post('/reading_insert-submit', 'ReadingInsertController@reading_insertSubmit')->name('reading_insert-submit');
Route::post('/question_insert-submit', 'ReadingInsertController@question_insertSubmit')->name('question_insert-submit');
Route::post('/listening_insert-submit', 'ListeningInsertController@listening_insertSubmit')->name('listening_insert-submit');
Route::post('listening_submit', 'ListeningController@lis_ans')->name('listening_submit');

Route::get('/writing', 'WritingController@fetchTopic');
Route::get('/reading', 'ReadingController@fetchTopic');

// Route::get('/listening', 'ListeningController@fetchQues');
Route::any('/listening', 'ListeningController@fetchAudio');
Route::get('/ranking', 'RankingController@index');

// Route::Controller(ListeningController::class)->group(function(){
//     Route::get('/listening', 'index');
//     Route::get('/listening', 'fetchAudio');
//     Route::get('/listening', 'fetchQues');
// });

//Route::get('/reading_insert', 'ReadingInsertController@index');
//Route::get('/fetchTopic', 'WritingController@fetchTopic');

// Route::resource('/crud-data', CrudController::class);

Route::get('/writing_ques_ins', [WritingInsertController::class, 'index'])->name('writingInsert.index');
Route::post('/writing_ques_ins/store', [WritingInsertController::class, 'store'])->name('writingInsert.store');

Route::get('/speaking_insert', [AdminSpeakingInsertController::class, 'index'])->name('speaking_insert.index');
Route::post('/speaking_insert/store', [AdminSpeakingInsertController::class, 'store'])->name('speaking_insert.store');

Route::any('/shufl', 'ReadingController@rendomFormation');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['namespace' => 'Admin'], function() {

    Route::get('/admin', 'LoginController@login');
    Route::post('/postAdminlogin', 'LoginController@postAdminLogin')->name('postAdminlogin');
    Route::get('/admin/logout', 'LoginController@logout');
});
Route::group(['middleware' => 'admin-auth', 'namespace' => 'Admin'], function() {
    Route::get('/admin/admin-home', 'AdminhomeController@index');
    Route::any('/admin/speaking-eval', 'SpeakingEvaluationController@spea_eval')->name('speaking-eval');
});

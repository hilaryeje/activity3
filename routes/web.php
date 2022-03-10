<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('record.index');
})->name('record.index');

Route::get('/record', function () use ($student){
    return view('record.index',['posts'=>$student]);
})-> name('myblogs.index');


Route::get('/record/{id}', function ($id) use ($student){
     abort_if(!(isset($posts[$id])), 404);
     return view('record.show',['post'=>$student[$id] ]);
})-> name('record.show');

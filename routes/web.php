<?php

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
    return view('welcome');
});

Route::get('/arcade', function () {
    return view('arcade/arcade');
});

Route::get('arcade/game1', function () {
    return view('arcade/game1/game1');
});

Route::get('arcade/game2', function () {
    return view('arcade/game2/game2');
});

Route::get('arcade/game3', function () {
    return view('arcade/game3/game3');
});

Route::get('arcade/game3', function () {
    return view('arcade/game3/game3');
});


Route::get('arcade/game2/highScores/', 'arcade\game2\HighScoresController@highScores');
Route::post('arcade/game2/highScores/', 'arcade\game2\HighScoresController@highScores');
Route::post('arcade/game2/addScore/', 'arcade\game2\HighScoresController@addScore');
Route::get('arcade/game2/addScore/', 'arcade\game2\HighScoresController@index');

Route::get('arcade/game1/highScores/', 'arcade\game1\HighScoresg1Controller@highScores');
Route::post('arcade/game1/highScores/', 'arcade\game1\HighScoresg1Controller@highScores');
Route::post('arcade/game1/addScore/', 'arcade\game1\HighScoresg1Controller@addScore');
Route::get('arcade/game1/addScore/', 'arcade\game1\HighScoresg1Controller@index');
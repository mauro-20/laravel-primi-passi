<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Cloner\Data;

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
    $data = [
        'firstName'=>'Marco',
        'lastName'=>'Gherardini',
        'skills'=>[
            'bosco',
            'funghi',
            'elfi'
        ]
    ];
    return view('home', $data);
});

Route::get('/bosco', function () {
    return view('bosco');
});

Route::get('/funghi', function () {
    return view('funghi');
});

Route::get('/elfi', function () {
    return view('elfi');
});
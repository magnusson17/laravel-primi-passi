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

    $data = [
        'teams' => [
            'ferrari',
            'red bul',
            'alpine',
        ],

        'drivers' => [
            // 'sainz',
            // 'checo',
            // 'ocon'
        ]
    ];

    return view('home', $data);

})->name('home');


Route::get('/favoriti', function () {

    $data = [
        'drivers' => [
            'le clerc',
            'max',
        ],
    ];

    return view('favoriti', $data);

})->name('favoriti');
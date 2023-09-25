<?php

use App\Jobs\SendEmail;
use Illuminate\Support\Facades\Route;

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



Route::get('/test', function () {


    $arr = [
        'name' => 'x1',
        'addr' => [
            'city'   => 'taipei',
            'zip'    => '100',
            'street' => 'aaa'
        ]
    ];
    dispatch(new SendEmail($arr));


    // return '測試開發';
    return env('APP_TYPE');
});
<?php

use App\Jobs\SendEmail;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AjaxDemoController;


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



/**
 * 隊列測試
 */
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


// 首頁的路由
Route::get('/homepage', function () {
    $blogs = Blog::query()->latest()->take(3)->get();
    return view('homepage', ['blogs' => $blogs]);
});


Route::get('/detail', function () {
    return view('posts.detail');
});



Route::get('/ajaxDemo', [AjaxDemoController::class, 'index']);

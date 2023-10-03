<?php

use App\Http\Controllers\BlogController;
use App\Jobs\SendEmail;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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


// ==============隊列測試=============

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


// ==============登入測試=============

// 註冊
Route::get('/user/register', function () {
    $user = User::create([
        'name'     => 'x1',
        'password' => Hash::make('123456'),
        'email'    => 'test@gmail.com'
    ]);
    return $user;
})->name('user.register');

// 登入
Route::get('/user/login', function () {
    // $rs = Auth::attempt(['email' => 'test@gmail.com', 'password' => '123456']);
    if (Auth::check()) {
        return '已經登入';
    }
    return '尚未登入';

})->name('user.login');


// get user
Route::get('/user/getUser', function () {
    return Auth::user();
})->name('user.getUser');


// ajaxUserDemo
Route::any('/user/ajaxUserDemo', function (Request $request) {

    // dd(request()->cookie());

    Log::error('error', [
        'ok'        => 'ok',
        'sessionId' => session()->getId(),
        // 'cookieName' => cookie()->getName(),
        // 'cookieValue' => cookie()->getValue(),
    ]);
    if ($request->ajax()) {
        return response()->json([
            'method' => $request->method(),
            'msg'    => 'ok',
            'user'   => Auth::user()?->toArray()
        ]);
    }

    return view('user.ajaxUserDemo');
})->name('user.ajaxUserDemo');



// ==============博客測試=============

// 首頁
Route::get('/homepage', [BlogController::class, 'index']);
// 詳情頁
Route::get('/blogs/{id}', [BlogController::class, 'show']);




Route::get('/ajaxDemo', [AjaxDemoController::class, 'index']);

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
})->name('index');
// Route::get('hello',function(){
// return 'HELLOW WORLD';
// });
// Route::get('foo', 'TestsController@index'); //打一個路徑foo ,跑一個控制器index函式
// Route::get('foo/{ne}/foo2/{sex}','TestsController@index');//多個參數寫法
// Route::get('foo/{ne?}', 'TestsController@index'); //打一個路徑foo ,跑一個控制器index函式
// Route::get('foo/{ne?}', 'TestsController@index')->name('foo');//指定路由


// Route::get('test2',function(){
//     // return redirect('index');//打test2轉止到index
//     return redirect()->route('foo'); ////打test2藉由路由轉止到foo
// });

// Auth::routes();

#登入
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
#登出
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

#註冊
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register.post');

#忘記密碼
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



// ----------------------------------------------------------------------------
//顯示最新公告
Route::get('posts','PostsController@index')->name('posts.index');//命名唯一

//出現新增公告表單
Route::get('posts/create','PostsController@create')->name('posts.create');//新增表單

//實際post儲存公告資料
Route::post('posts/store','PostsController@store')->name('posts.store');//sore儲存

//秀出指定很多公告
Route::get('posts/{post}','PostsController@show')->name('posts.show');

//出現要修改指定公告
Route::get('posts/{post}/edit','PostsController@edit')->name('posts.edit');

//實際儲存修改好的公告資料
Route::patch('posts/{post}/patch','PostsController@update')->name('posts.update');

//刪除指定公告
Route::delete('posts/{post}','PostsController@destroy')->name('posts.destroy');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'user'], function(){
    //使用者驗證
    Route::group(['prefix' => 'auth'], function(){
        //Facebook登入
        Route::get('/facebook-sign-in', 'UserAuthController@facebookSignInProcess');
        //Facebook登入重新導向授權資料處理
        Route::get('/facebook-sign-in-callback', 'UserAuthController@facebookSignInCallbackProcess');
    });
});

//OAuth 登入
Route::get('auth/{provider}', 'AuthController@authRedirect');

//OAuth 回傳
Route::get('auth/{provider}/callback', 'AuthController@authCallback');
<?php
use \Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::resource('students', 'StudentController');

Route::resource('topics', 'TopicController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('subscribe/{student}', 'StudentTopicController@showSubscribeForm')->name('subscribe.subscribe');
Route::post('subscribe/{student}', 'StudentTopicController@subscribe');

Route::get('unsubscribe/{student}/{topic}', 'StudentTopicController@unsubscribe')->name('subscribe.unsubscribe');

Route::get('/{student}/{topic}/mark', 'StudentMarkController@showFormMark')->name('marks.edit');
Route::put('/{student}/{topic}/mark', 'StudentMarkController@updateMark');
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
    return view('welcome');
});

// Route::redirect('/here', '/there');

// Route::redirect('/there', '/somewhere', 301);
// Route::permanentRedirect('/somewhere', '/somewhereelse');

// Route::view('/simple', 'simple');

// Route::get('/user/{id?}', function ($id = null) {
//     if ($id === null) {
//         return 'nullはだめよ';
//     }
//     return 'User '.$id;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return "posts $postId comments $commentId";
// });

// Route::get('/postcode/{code}', function ($code) {
//     return 'good';
// })->where('name', '[A-Za-z]+');

// // 後ろにくると正規表現を無視する
// // Route::get('/postcode/{code}', function ($code) {
// //     return 'bad';
// // });

// // キーワード検索「/」（スラッシュ）も対応
// Route::get('/search/{search}', function ($search) {
//     return $search;
// })->where('search', '.*');

// Route::get('mypage/profile/detail', function () {
//     return 'mypage profile detail';
// });
// Route::get('mypage/profile', function () {
//     return 'mypage profile detail';
// });

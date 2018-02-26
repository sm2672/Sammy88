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
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', function () {

    $data = request()->all();

    echo "Email:" . $data['email'] . '<br>';
    echo "Subject:" . $data ['subject'] . '<br>';
    echo "Body:" . $data['body'] . '<br>';

});
Route::get('/login', function () {
    return view('pages.login');
});
Route::post('/login', function () {

    $data = request()->all();

    echo "Email:" . $data['email'] . '<br>';
    echo "Password:" . $data['password'];
});

Route::get('/signup', function () {
    return view('pages.signup');
});
Route::post('/signup', function () {

    $data = request()->all();

    echo "Email:" . $data['email'] . '<br>';
    echo "Password:" . $data['password'];
});
Route::get('/view messages', function () {
    return view('pages.view messages');
});
Route::get('/logout', function () {
    return view('pages.logout');
});

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

Route::get('/', 'PagesController@home')->name('home');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::post('/contact', 'PagesController@save')->name('contact.save');

Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');


    //$data = request()->all();

   //// echo "Email:" . $data['email'] . '<br>';
   // echo "Subject:". $data['subject'] . '<br>';
    //echo "Body:" . $data['body'] . '<br>';

//});
Route::get('/signin', function () {
    return view('pages.signin');
})->name('signin');

Route::post('/login', function () {

    $data = request()->all();

   echo "Email:" . $data['email'] . '<br>';
    echo "Password:" . $data['password'];
});

Route::get('/signup', function () {
    return view('pages.signup');
})->name('signup');

Route::post('/signup', function () {

    $data = request()->all();

    echo "Email:" . $data['email'] . '<br>';
    echo "Password:" . $data['password'];
});
Route::get('/view message', function () {
    return view('pages.view message');
})->name('view message');

Route::get('/logout', function () {
    return view('pages.logout');
})->name('logout');

Route::get('/bootcard', function () {
    return view('pages.bootcard');
});


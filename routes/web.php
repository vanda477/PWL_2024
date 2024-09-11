<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
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
// Pratikum 1 

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//  return 'Hello World';
// });

Route::get('/world', function () {
    return 'World';
   });

Route::get('/selamatdatang', function () {
    return 'Selamat Datang';
   });


// Route::get('/about', function () {
//     return 'Nama : Anas Nurhidayat : 2241760069';
//    });

Route::get('/user/{name}', function ($name) {
    return 'Nama saya Anas'.$name;
    });

Route::get('/posts/{post}/comments/{comment}', function 
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='anas') {
    return 'Nama saya '.$name;
});

//Praktikum 2 Controller
use App\Http\Controllers\WelcomeController;

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/index', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

//controller photo
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
  'index', 'show'
 ]);
 Route::resource('photos', PhotoController::class)->except([
  'create', 'store', 'update', 'destroy'
 ]);
 

//Pratikum 3

// Route::get('/greeting', function () {
//   return view('blog.hello', ['name' => 'Anas']);
//   });

Route::get('/greeting', [WelcomeController::class,
'greeting']);
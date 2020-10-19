<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test2', function () {
    return 'testing';
});


Route::post('/test-post-store', function () {
    return request()->all();
})->name('test-post');


Route::put('/test-post-update/{StudentID}', function () {
    return request()->all();
})->name('test-update');

Route::delete('/test-post-delete/{StudentID}', function () {
    return redirect()->route('index');
})->name('test-delete');

Route::get('/faculty/{facultyID}/{facultyName}', function () {
    return 'Faculty details';
})->name('multiple-params');


Route::get('/', [WelcomeController::class, 'index'])->name('index');


Route::get('/posts', [PagesController::class, 'posts'])->name('posts');
Route::get('/posts-view-single/{id}', [PagesController::class, 'show'])->name('posts.show');

Route::get('/posts-view', [PostsController::class, 'index'])->name('posts.view');
Route::post('/posts/store', [PostsController::class, 'store'])->name('posts.store');

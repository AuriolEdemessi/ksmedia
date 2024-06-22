<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TeamMemberController;



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
    return view('portal');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});


// Routes for Authors
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('/authors/{author}', [AuthorController::class, 'update'])->name('authors.update');
Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');

Route::get('/team', [TeamMemberController::class, 'index'])->name('team.index');

Route::get('/manageteam', [TeamMemberController::class, 'manageteam'])->name('admin.manageteam');

    Route::get('/team/create', [TeamMemberController::class, 'create'])->name('team.create');
    Route::post('/team', [TeamMemberController::class, 'store'])->name('team.store');
    Route::get('/team/{teamMember}', [TeamMemberController::class, 'show'])->name('team.show');
    Route::get('/team/{teamMember}/edit', [TeamMemberController::class, 'edit'])->name('team.edit');
    Route::put('/team/{teamMember}', [TeamMemberController::class, 'update'])->name('team.update');
    Route::delete('/team/{teamMember}', [TeamMemberController::class, 'destroy'])->name('team.destroy');
    Route::delete('/team/{id}', [TeamMemberController::class, 'destroy'])->name('team.destroy');

// Routes for Categories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/exhibitions', [PostController::class, 'exhibitions'])->name('exhibitions.index');

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/manageposts', [PostController::class, 'manageposts'])->name('admin.manageposts');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
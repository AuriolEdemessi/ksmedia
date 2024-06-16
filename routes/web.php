<?php
use App\Http\Controllers\PostController;
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

// Route for the welcome page without auth middleware
Route::get('/', function(){
    return view('portal');
});

Route::get('/artworks', [PostController::class, 'artworks']);

Route::get('/admin', function(){
    return view('admin.index');
});

// Grouping routes that require authentication
Route::middleware(['auth'])->group(function () {
    // Routes inside this group will require authentication

    Route::get('/projects', [PostController::class, 'index']);

    Route::get('/create', function(){
        return view('create');
    });


    Route::get('/team', function(){
        return view('team');
    });


    Route::get('/exhibitions', function(){
        return view('exhibitions');
    });

    Route::post('/post', [PostController::class, 'store']);
    Route::delete('/delete/{id}', [PostController::class, 'destroy']);
    Route::get('/edit/{id}', [PostController::class, 'edit']);
    Route::delete('/deleteimage/{id}', [PostController::class, 'deleteimage']);
    Route::delete('/deletecover/{id}', [PostController::class, 'deletecover']);
    Route::put('/update/{id}', [PostController::class, 'update']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

// Auth routes for login, register, etc.
Auth::routes();

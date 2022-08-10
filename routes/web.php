<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
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
Route::get('/home', [HomeController::class, 'show']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/tag/{slug}', [TagController::class, 'index'])->name('tag.index');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('post.show');

Route::get('/search', [PostController::class, 'search']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
require __DIR__.'/auth.php';

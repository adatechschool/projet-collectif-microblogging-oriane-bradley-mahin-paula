<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard', ['user'=> $user]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/posts')->name('posts.')->controller(PostController::class)->group(function(){
    Route::get('/', 'index')->name('index');

    Route::get('/{slug}-{id}', 'show')->where ([
        'id'=> '[0-9]+',
        'slug'=> '[a-z0-9\-]+'
    ]) ->name('show');
});

// Route::get('/{user_name}', function(){ [UserController::class, 'profil']})
//     ->where('user_name', '[a-zA-Z\s\.]+')
//     ->name('profil');

Route::get('/{user_name}/{id}', [UserController::class, 'show'])
->where(['user_name'=> '[a-zA-Z\s\.]+','id'=> '[0-9]+'])
->name('profil.show');

require __DIR__.'/auth.php';

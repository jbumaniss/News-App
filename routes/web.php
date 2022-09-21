<?php


use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [PostController::class, 'index'])->name('index');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/posts/admin-manage/posts', [AdministrationController::class, 'managePosts'])->name(
        'admin-managePosts'
    );
    Route::get('/posts/admin-manage/comments', [AdministrationController::class, 'manageComments'])->name(
        'admin-manageComments'
    );
    Route::get('/posts/admin-manage/categories', [AdministrationController::class, 'manageCategories'])->name(
        'admin-manageCategories'
    );
    Route::get('/posts/admin-manage/users', [AdministrationController::class, 'manageUsers'])->name(
        'admin-manageUsers'
    );
    Route::post('/posts/admin-manage/categories', [AdministrationController::class, 'store'])->name(
        'admin-manageCategories'
    );
    Route::delete('/posts/admin-manage/categories/{category}', [AdministrationController::class, 'destroyCategory']
    )->name('admin-destroyCategory');
    Route::delete('/posts/admin-manage/users/{user}', [AdministrationController::class, 'destroyUser'])->name(
        'admin-destroyUser'
    );
    Route::delete('/posts/admin-manage/posts/{post}', [AdministrationController::class, 'destroyPost'])->name(
        'admin-destroyPost'
    );
    Route::delete('/posts/admin-manage/comments/{comment}', [AdministrationController::class, 'destroyComment'])->name(
        'admin-destroyComment'
    );
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [UserController::class, 'create'])->name('create');
    Route::post('/users', [UserController::class, 'store'])->name('userStore');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('authenticate');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/posts/create', [PostController::class, 'create'])->name('create');
    Route::post('/posts', [PostController::class, 'store'])->name('store');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('destroy');
    Route::get('/posts/manage', [PostController::class, 'manage'])->name('manage');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('show');
});


Route::post('/comments/{post}', [CommentController::class, 'store'])->name('commentStore');
Route::get('/category/{cat}', [PostController::class, 'showCategory'])->name('showCategory');

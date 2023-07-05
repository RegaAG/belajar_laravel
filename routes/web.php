<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;




Route::get('/', [PostController::class, 'home']);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'register']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/project', [PostController::class, 'project']);

Route::get('/kategori', [PostController::class, 'kategori']);

Route::get('{user:name} ', [PostController::class, 'username']);

Route::get('/project/{db_project:nama_project} ', [PostController::class, 'halaman_project']);

Route::get('project/kategori/{db_kategori:nama_kategori} ', [PostController::class, 'project_kategori']);
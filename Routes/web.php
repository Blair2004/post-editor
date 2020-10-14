<?php

use Illuminate\Support\Facades\Route;
use Modules\PostEditor\Http\Controllers\PostsController;

Route::get( '/dashboard/posts', [ PostsController::class, 'posts' ]);
Route::get( '/dashboard/posts/new', [ PostsController::class, 'createPost' ]);
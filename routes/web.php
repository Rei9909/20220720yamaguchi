<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', [AuthorController::class, 'index']);

Route::post('/todo/create', [AuthorController::class, 'create']);
Route::get('/todo/update', [TodoController::class, 'edit']);
Route::post('/todo/update', [AuthorController::class, 'update']);
Route::get('/todo/delete', [AuthorController::class, 'delete']);


Route::get('/confirmation', function () {
    return view('confirmation');
    });
Route::get('/thanks', function () {
    return view('thanks');
    });
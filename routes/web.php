<?php

use App\Http\Livewire\UsersTable;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController as User;

// Route::get('/', function () {
//     return view('user.index');
// });

Route::get('/', [User::class, 'index'])->name('index');
Route::get('/edit-user/{user}', [User::class, 'edit'])->name('editar');
Route::get('/new-user', [User::class, 'new'])->name('crear');
Route::post('/new-user', [User::class, 'store']);
Route::patch('/update/{user}', [User::class, 'update'])->name('update');

Route::get('/table', UsersTable::class)
    ->name('table');

// Route::get('/clear', function() {
//     Artisan::call('cache:clear');
//     Artisan::call('route:cache');
//     Artisan::call('view:clear');
//     Artisan::call('config:cache');
//     return  "all cleared ..."; 
// });

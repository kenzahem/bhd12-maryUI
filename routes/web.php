<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Logout;
use App\Livewire\Homepage\Index;
use App\Livewire\Homepage\Browse;
use App\Livewire\Backend\Dashboard;
use App\Livewire\Backend\Rooms\Table;
use Illuminate\Support\Facades\Route;
use App\Livewire\Backend\Rooms\CreateRoom;
use App\Livewire\Backend\Rooms\ViewRoom;
use App\Livewire\Backend\Users\AddCredits;
use App\Livewire\Backend\Users\CreateUser;
use App\Livewire\Profile\Index as ProfileIndex;
use App\Livewire\Backend\Users\Table as UsersTable;
use App\Livewire\Homepage\UserPost;

// FRONTEND
Route::get('/', Index::class);
Route::get('/rooms/browse', Browse::class);

//AUTH
Route::get('/login', Login::class)->name('login');
Route::get('/logout', Logout::class);

// BACKEND ADMIN
Route::middleware('VerifyRole', 'auth')->group( function(){
    Route::get('/admin', Dashboard::class);
    Route::get('/admin/rooms', Table::class);
    Route::get('/admin/rooms/create', CreateRoom::class);
    Route::get('/admin/rooms/{room}/view', ViewRoom::class);
    Route::get('/admin/users', UsersTable::class);
    Route::get('/admin/users/create', CreateUser::class);
    Route::get('/admin/users/add-credits', AddCredits::class);

});

Route::middleware('auth')->group(function(){
    Route::get('/profile', ProfileIndex::class);
    Route::get('/post-room', UserPost::class);
});

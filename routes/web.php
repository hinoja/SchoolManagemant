<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PersonnalController;
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

 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route:: view('/Edit','Edit')->middleware(['auth'])->name('Profile.Edit');
Route:: view('/administrator','admins.layouts.admin-dash-layout')->middleware(['auth'])->name('Profile.admin');
Route:: view('/administrator profile','admins.layouts.profile')->middleware(['auth'])->name('admin.Profile2');
Route:: view('/administrator settings','admins.layouts.settings')->middleware(['auth'])->name('admin.Settings');
//Route:: view('/administrator index','admins.layouts.index')->middleware(['auth'])->name('admin.index');
 Route::get('administrator_index',[AdminController::class,'adminTest'])->middleware(['auth'])->name('admin.index');
//Route que j'ai ajouté

Route::get('/userlogin',function()
{
   return view('welcome2');
})->middleware(['auth'])->name('login.user');

  
Route::resource('/CRUD',AdminController::class)->middleware(['auth']); 

Route::get('/useradmin',function()
{

   return view('admin');
})->middleware(['auth'])->name('login.admin');

//  CRUD du cote admin
// Route::get('CRUD/{id}/edit',[AdminController::class,'edit'])->name('CRUD.edit')->middleware(['auth']);
// Route::post('CRUD',[AdminController::class,'store'])->name('CRUD.store')->middleware(['auth']);
// Route::delete('',[AdminController::class,'destroy'])->name('CRUD.destroy')->middleware(['auth']);
// Route::put('CRUD/{id}',[AdminController::class,'update'])->name('CRUD.update')->middleware(['auth']);
// Route::get('CRUD/{id}',[AdminController::class,'show'])->name('CRUD.show')->middleware(['auth']);

// Fin dudit CRUD

//Route que j'ai ajouté
 
require __DIR__.'/auth.php';

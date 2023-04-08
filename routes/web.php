<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\ContactController as ControllersContactController;
use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use Illuminate\Contracts\View\View;

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

Route::get('/', function()
{
    return View('home');
})->name('home');
Route::get('/about', function()
{
    return View('about');
})->name('about');
Route::get('/services', function()
{
    return View('services');
})->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class,'postData']);
Route::get('/contact/view', [ContactController::class,'viewData']);
Route::get('/contact/delete/{id}',[ContactController::class, 'delete'])->name('contact.delete');
Route::get('/edit/form/{id}', [ContactController::class, 'editData']);
Route::put('update-data/{id}', [contactController::class, 'update']);
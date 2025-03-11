<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

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

//  Route::view('/', 'welcome')->name('home');
Route::get('/', [WelcomeController::class , 'index'])->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/video', 'video')->name('video');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contacts.store');
Route::post('/enquiry/store', [EnquiryController::class, 'store'])->name('enquiry.store');
Route::get('layout/{slug}', [LayoutController::class, 'show'])->name('layout');

Route::prefix('layouts')->name('layout.')->group(function(){
    Route::view('singapore', 'singapore')->name('singapore');
    Route::view('ujwala', 'layout.ujwala')->name('ujwala');
    Route::view('bambubazar', 'layout.bambubazar')->name('bambubazar');
    Route::view('tank-bund-gated-community', 'layout.tankbund')->name('tankbund');
});

Route::get('app', function () {
    return redirect(route('dashboard'));
});

Route::prefix('app')->middleware('auth')->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware('verified')->name('dashboard');
    Route::get('/dashboard', [WelcomeController::class, 'dashboard'])->name('dashboard');
    
    // Route::get('clear', function(){
    //     Illuminate\Support\Facades\Artisan::call('optimize:clear');
    //     return 'done';
    // });

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        
        Route::Get('contacts', [ContactController::class, 'index'])->name('contacts.index');
        Route::delete('contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
        Route::Get('enquiries', [EnquiryController::class, 'index'])->name('enquiries.index');
        Route::delete('enquiries/{id}', [EnquiryController::class, 'destroy'])->name('enquiries.destroy');

        Route::resource('layouts', LayoutController::class);
        // layout medias
        Route::get('layouts/{slug}/medias', [MediaController::class, 'index'])->name('layout.medias.index');
        Route::post('layouts/{slug}/medias', [MediaController::class, 'store'])->name('layout.medias.store');
        Route::delete('layouts/{slug}/medias/{id}', [MediaController::class, 'destroy'])->name('layout.medias.destroy');
    });
});


require __DIR__.'/auth.php';

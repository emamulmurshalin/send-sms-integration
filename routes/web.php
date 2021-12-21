<?php

use App\Http\Controllers\NotificationController;
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

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('sms.dashboard.dashboard');
    })->name('dashboard');

    Route::get('/send-sms', [NotificationController::class, 'loadSendSmsView'])
        ->name('send_sms.view');

    Route::post('/send-sms-to-customer', [NotificationController::class, 'sendSms'])
        ->name('send_sms.store');
});


require __DIR__.'/auth.php';

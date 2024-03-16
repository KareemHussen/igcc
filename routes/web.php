<?php

use App\Http\Controllers\ContactController;
use App\Mail\SupportMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return redirect('/LTR/index.html');
    // return view('welcome');
});

// Route::get('/send', function () {
    
//     $subject = "Help Me";
//     $body = "Sometimes you just want to send a simple HTML email with a simple design and clear call to action. This is it.";
//     $params =[
//         "name" => "Kareem Hussen",
//         "phone" => "123456789",
//         "email" => "kareemhussen500@gmail",
//     ];

//     Mail::to('kareemhussen500@gmail.com')->send(new SupportMail($subject , $body , $params));
// });



Route::get('/contact/en', [ContactController::class, 'create_ltr'])->name('contact.create.ltr');
Route::get('/contact/ar', [ContactController::class, 'create_rtl'])->name('contact.create.rtl');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

<?php
use App\Http\Controllers\JeuxWebsite\WebsiteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WebsiteController::class, 'homePage'])->name('pages.homePage');
Route::get('customSoftwarePage', [WebsiteController::class, 'customSoftwarePage'])->name('pages.customSoftwarePage');
Route::get('androidLeadingPage', [WebsiteController::class, 'androidLeadingPage'])->name('pages.androidLeadingPage');
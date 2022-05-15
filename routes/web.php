<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanController;
use Illuminate\Http\Request;
use App\Http\Controllers\LoansGuestController;

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

Route::resource('loans', LoanController::class);
// Route::resource('admin', AdminController::class);

// Route::get('/admin-list', function () {
//     return view('admin.list');
// })->name('admin-list');


// Route::get('/loans', function () {
//     return view('loans-list');
// })->middleware(['auth'])->name('loans');

Route::get('/loan-type/loan-com', function () {
    return view('loan-category.loan-commercial');
})->name('loan-com');

Route::get('/loan-type/loan-car', function () {
    return view('loan-category.loan-car');
})->name('loan-car');

Route::get('/loan-type/loan-iskan', function () {
    return view('loan-category.loan-iskan');
})->name('loan-iskan');
// -------------
Route::get('/guest-type/guest-com', function () {
    return view('guest-category.guest-commercial');
});

Route::get('/guest-type/guest-car', [LoansGuestController::class,'index']);

Route::get('/guest-type/guest-iskan', function () {
    return view('guest-category.guest-iskan');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(
    ['middleware' => ['auth']],
    function () {
        Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    }
);

require __DIR__ . '/auth.php';

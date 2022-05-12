<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WithdrawalController;
use App\Models\Withdrawal;
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
    return view('front_end.index');
});

Route::get('/dashboard', function () {

    //if (auth()->user()->role == 'administrator') {
        return view('back_end.dashboard');
    //} else {
    //    return view('front_end.dashboard');
    //}
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
// Users ..........///////...
//User Management
Route::get('index', [UserController::class, 'index'])->name('index')->middleware('auth');


//plans..................///....
//1. Pland List
Route::get('/Manageplans', [WebsiteController::class, 'plans'])->name('manageplans')->middleware('auth');
//2. Add Plans

Route::get('/addplans', [PlansController::class, 'index'])->name('addplans')->middleware('auth');
Route::post('plansadd', [PlansController::class, 'create'])->name('plansadd')->middleware('auth');



//Deposits...........///....
// 1. Deposits List
Route::get('/deposits', [WebsiteController::class, 'deposits'])->name('depositlists')->middleware('auth');

//2. Add Deposits
Route::get('/add-deposits', [DepositController::class, 'index'])->name('viewadddeposits')->middleware('auth');
Route::post('/add_deposit', [DepositController::class, 'create'])->name('adddeposit')->middleware('auth');

//3. Deposit Status
Route::get('/change-deposit-status/{id}', [DepositController::class, 'changeStatus'])->name('changeDepositStatus')->middleware('auth');



//Withdrawals.......///....
// 1. Withdrawal List
Route::get('/withdrawals', [WebsiteController::class, 'withdrawals'])->name('withdrawals')->middleware('auth');

//2. Add withdrawal
Route::get('/add-withdrawal', [WithdrawalController::class, 'index'])->name('add_withdrawal_page')->middleware('auth');
Route::post('/withdraw', [WithdrawalController::class, 'create'])->name('add_withdrawal')->middleware('auth');

//3. Withdrawal Status
Route::get('/change-withdrawal-status/{id}', [WithdrawalController::class, 'changeStatus'])->name('changewithdrawalStatus')->middleware('auth');



//settings.....///....
Route::get('/view-settings', [WebsiteController::class, 'settings'])->name('view_settings')->middleware('auth');
Route::post('/settings', [SettingsController::class, 'settings'])->name('settings')->middleware('auth');


//Transaction History..../////..
Route::get('/view-transactions', [WebsiteController::class, 'settings'])->name('view_settings')->middleware('auth');



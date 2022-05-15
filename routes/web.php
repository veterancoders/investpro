<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\DashboardController;
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
})->name('home');

Route::get('/about', function () {
    return view('front_end.about');
})->name('about');

Route::get('/contact', function () {
    return view('front_end.contact');
})->name('contact');

Route::get('/frequently-asked-question', function () {
    return view('front_end.faq');
})->name('faq');


Route::get('/dashboard', [DashboardController::class, 'index'] )->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
// Users ..........///////...
//User Management
Route::get('customers', [UserController::class, 'index'])->name('customers')->middleware('auth');
Route::get('/customers/{id}', [UserController::class, 'view'])->name('customer_show')->middleware('auth');
Route::get('/customers/{id}/edit', [UserController::class, 'view'])->name('customer_edit')->middleware('auth');
Route::get('/customers/{id}/delete', [UserController::class, 'view'])->name('customer_delete')->middleware('auth');

//plans..................///....
//1. Pland List
Route::get('/Manageplans', [WebsiteController::class, 'plans'])->name('manageplans')->middleware('auth');
Route::get('/viewplan/{id}', [WebsiteController::class, 'viewplan'])->name('viewplan')->middleware('auth');
//2. Add Plans

Route::get('/addplans', [PlansController::class, 'index'])->name('addplans')->middleware('auth');
Route::post('plansadd', [PlansController::class, 'create'])->name('plansadd')->middleware('auth');
//3. Edit plan
Route::get('/editplan/{id}', [PlansController::class, 'edit'])->name('editplan')->middleware('auth');
Route::post('/updateplan/{id}', [PlansController::class, 'update'])->name('updateplan')->middleware('auth');
//4. Delete plan
Route::get('/deleteplan/{id}', [PlansController::class, 'delete'])->name('deleteplan')->middleware('auth');


//Deposits...........///....
// 1. Deposits List
Route::get('/deposits', [WebsiteController::class, 'deposits'])->name('depositlists')->middleware('auth');


//2. Add Deposits
Route::get('/add-deposits', [DepositController::class, 'index'])->name('viewadddeposits')->middleware('auth');
Route::post('/add_deposit', [DepositController::class, 'create'])->name('adddeposit')->middleware('auth');
Route::get('/deposits-payment-details/{id}', [DepositController::class, 'paymentDetails'])->name('paymentDetails')->middleware('auth');
Route::post('/payment_prove/{id}', [DepositController::class, 'payment_prove'])->name('payment_prove')->middleware('auth');

//3. Deposit Status
Route::get('/change-deposit-status/{id}', [DepositController::class, 'changeStatus'])->name('changeDepositStatus')->middleware('auth');
//4. view deposits
Route::get('/veiwdeposit/{id}', [DepositController::class, 'veiwdeposit'])->name('veiwdeposit')->middleware('auth');


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
Route::get('/tansactions', [WebsiteController::class, 'transactions'])->name('transactions')->middleware('auth');
Route::get('/delete_transaction/{id}', [WebsiteController::class, 'delete_transaction'])->name('delete_transaction')->middleware('auth');

//Account Settings...../////....
Route::get('/account_settings', [WebsiteController::class, 'account_settings'])->name('account_settings')->middleware('auth');
Route::post('/update_account', [AccountController::class, 'update_account'])->name('update_account')->middleware('auth');
//change-email
Route::post('/update-email', [AccountController::class, 'update_email'])->name('update_email')->middleware('auth');

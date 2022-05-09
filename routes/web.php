<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\UserController;
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

    if (auth()->user()->role == 'administrator') {
        return view('back_end.dashboard');
    } else {
        return view('front_end.dashboard');
    }
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

//plans..................//////..............
Route::get('/addplans', [AllController::class, 'addplans'])->name('addplans')->middleware('auth');
Route::get('/Manageplans', [AllController::class, 'manageplans'])->name('manageplans')->middleware('auth');
//add plans
Route::post('plansadd', [AllController::class, 'plansadd'])->name('plansadd')->middleware('auth');
//deleteplans

//Deposits...........///....(Admin Area)
// 1. add_deposits
// ...(a)view page
Route::get('/add-deposits', [AllController::class, 'viewadddeposits'])->name('viewadddeposits')->middleware('auth');
// ...(b)add depoist
Route::post('/add_deposit', [AllController::class, 'add_deposit'])->name('adddeposit')->middleware('auth');
// ....(C)Deposit Status
Route::get('/approve_deposit/{id}', [AllController::class, 'approve_deposit'])->name('approve_deposit')->middleware('auth');
Route::get('/unapprove_deposit/{id}', [AllController::class, 'unapprove_deposit'])->name('unapprove_deposit')->middleware('auth');
Route::get('/awaiting_deposit_approval/{id}', [AllController::class, 'awaiting_deposit_approval'])->name('awaiting_deposit_approval')->middleware('auth');



// 2. Deposits List
Route::get('/deposits', [AllController::class, 'depositlists'])->name('depositlists')->middleware('auth');


// Users ..........///////...
//User Management
Route::get('index', [UserController::class, 'index'])->name('index')->middleware('auth');

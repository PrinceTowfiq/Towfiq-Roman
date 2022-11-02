<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Admin\MembersController;

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
    return view('web.index');
})->name('index');


Route::get('/member-form', [MemberController::class, 'memberForm'])->name('memberForm');
Route::post('/member-form', [MemberController::class, 'storeMemberData'])->name('storeMemberData');
Route::get('/virtual-tour', [CommonController::class, 'virtualTour'])->name('virtualTour');

Route::middleware(["auth"])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.home');

    Route::get('admin/members', [MembersController::class, 'index'])->name('admin.members');
});

Auth::routes(['register' => false]);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\auth\FrontendController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Livewire\Backend\AdminDashboardComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class,'login_page'])->name('login.page');
Route::get('/register-page', [FrontendController::class,'register_page'])->name('register.page');
Route::get('/complain-page', [FrontendController::class,'complain_page'])->name('complain.page');
Route::post('/create-complain', [FrontendController::class,'create_complain'])->name('create.complain');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    // Route::get('/main/dashboard',AdminDashboardComponent::class)->name('main.dashboard');
    Route::get('/main/dashboard',[DashboardController::class,'index'])->name('main.dashboard');
    Route::get('/all-user-list',[UserController::class,'all_user_list'])->name('admin.user.list')->middleware('can:show_all_data');
    Route::get('/show-user-details/{id}',[UserController::class,'show_user_details'])->name('admin.user.show.details')->middleware('can:show_details');
    Route::get('/create-user-page',[UserController::class,'create_user_page'])->name('admin.user.create.page')->middleware('can:create_data');
    Route::post('/create-user',[UserController::class,'create_user'])->name('admin.user.create')->middleware('can:show_details');
    Route::get('/edit-user-page/{id}',[UserController::class,'edit_user_page'])->name('admin.user.edit.page')->middleware('can:edit_data');
    Route::post('/update-user/{id}',[UserController::class,'update_user'])->name('admin.user.update')->middleware('can:update_data');
    Route::get('/delete-user/{id}',[UserController::class,'delete_user'])->name('admin.user.delete')->middleware('can:delete_data');
    // Route::get('/update-user/{id}',UserUpdateComponent::class)->name('admin.user.update');

    // Route::get('/change-password',AdminChangePasswordComponent::class)->name('admin.change.password');
    // Route::get('/profile/',AdminProfileComponent::class)->name('admin.profile');
});
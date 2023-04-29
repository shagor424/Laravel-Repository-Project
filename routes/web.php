<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\auth\FrontendController;
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
    Route::get('/main/dashboard',AdminDashboardComponent::class)->name('main.dashboard');
    // Route::get('/user-list',UserListComponent::class)->name('admin.user.list');
    // Route::get('/update-user/{id}',UserUpdateComponent::class)->name('admin.user.update');

    // Route::get('/change-password',AdminChangePasswordComponent::class)->name('admin.change.password');
    // Route::get('/profile/',AdminProfileComponent::class)->name('admin.profile');
});
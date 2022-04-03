<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use function PHPUnit\Framework\returnSelf;
use App\Http\Controllers\DashboardChatsController;
use App\Http\Controllers\DashboardAppointmentsController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardNewAppointmentController;
use App\Models\Appointments;

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


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard', function () {
    $appointments = Appointments::paginate(10);
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/appointment/', DashboardAppointmentsController::class)->middleware('auth');

Route::get('/appointment/edit/{id}', [DashboardAppointmentsController::class, 'edit'])->middleware('auth');
Route::post('/appointment/update/{id}', [DashboardAppointmentsController::class, 'update'])->middleware('auth');

Route::get('/appointment/delete/{id}', [DashboardAppointmentsController::class, 'destroy'])->middleware('auth');

//Route::resource('/dashboard/Chats', DashboardChatsController::class);
Route::get('dashboard/Chats', [DashboardChatsController::class, 'index']);
Route::post('/dashboard/Chats/send', [DashboardChatsController::class, 'send']);

Route::get('/dashboard/NewAppointment', function () {
    return view('dashboard.Newappointment.index');
});
Route::get('/appointments/create', [DashboardNewAppointmentController::class, 'create'])->middleware('auth');
Route::post('/appointments/store', [DashboardNewAppointmentController::class, 'store'])->middleware('auth');

//export PDF
Route::get('/exportpdf', [DashboardAppointmentsController::class, 'exportpdf'])->middleware('auth');

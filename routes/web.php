<?php

use App\Http\Controllers\AdminRoomContrller;
use App\Http\Controllers\AdminServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\ServiceController;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/auth/login', [LoginController::class, 'loginForm'])->name('login-form');
Route::post('/auth/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/auth/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/sign-in/github', [LoginController::class, 'github'])->name('github-login');
Route::get('/sign-in/github/redirect', [LoginController::class, 'githubRedirect'])->name('github-redirect');

Route::get('/hotel', [HotelController::class, 'hotelForm'])->name('hotel-form');

Route::get('/room', [RoomtypeController::class, 'roomList'])->name('room-list');

Route::get('/booking',[BookingController::class, 'bookingForm'])->name('booking-form');
Route::post('/booking/create', [BookingController::class, 'create'])->name('booking-create');
Route::get('/booking-roomtype',[BookingController::class, 'bookingRoomtype'])->name('booking-roomtype-form');

Route::get('/my-booking', [BookingController::class, 'myBooking'])->name('my-booking');
Route::get('/booking/{id}/update', [BookingController::class, 'updateBookingform'])->name('update-booking-form');
Route::post('/booking/{id}/update', [BookingController::class, 'update'])->name('update-booking');
Route::get('/booking/{id}/delete', [BookingController::class, 'delete'])->name('delete-booking');

Route::get('/service', [ServiceController::class, 'serviceForm'])->name('service-form');

Route::get('/furniture', [FurnitureController::class, 'showFurniture'])->name('show-furniture');

Route::get('/admin/hotel', [AdminRoomContrller::class, 'adminHotel'])->name('admin-hotel');
Route::get('/admin/room', [AdminRoomContrller::class, 'adminRoom'])->name('admin-room');

Route::get('/admin/create/room', [AdminRoomContrller::class, 'createRoomform'])->name('admin-create-room');
Route::post('/create/room/', [AdminRoomContrller::class, 'createRoom'])->name('create-room');
Route::get('/admin/update/{id}', [AdminRoomContrller::class, 'updateForm'])->name('update-room-form');
Route::post('/update/room/{id}', [AdminRoomContrller::class, 'update'])->name('update-room');
Route::get('/admin/delete/{id}', [AdminRoomContrller::class, 'deleteRoom'])->name('delete-room');

Route::get('/admin/service', [AdminServiceController::class, 'adminService'])->name('admin-service');
Route::get('/admin/create/service', [AdminServiceController::class, 'createServiceform'])->name('create-service-form');
Route::post('/create/service', [AdminServiceController::class, 'createService'])->name('create-service');
Route::get('/admin/service/update/{id}', [AdminServiceController::class, 'updateService'])->name('update-serviceform');
Route::post('/service/update/{id}', [AdminServiceController::class, 'update'])->name('update-service');
Route::get('/service/delete/{id}', [AdminServiceController::class, 'delete'])->name('delete-service');
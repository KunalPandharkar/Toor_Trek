<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


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

Route::get('/', [HomeController::class, 'loadHome'])->name('Home');
Route::get('/about', [HomeController::class, 'loadAboutus'])->name('Aboutus');
Route::get('/contactus', [HomeController::class, 'loadContactus'])->name('Contactus');
Route::get('/login', [AuthenticationController::class, 'loadLogin'])->name('login');
Route::get('/register', [AuthenticationController::class, 'loadRegister'])->name('register');
Route::post('/register', [AuthenticationController::class, 'registerUser'])->name('register.user');
Route::post('/login', [AuthenticationController::class, 'loginUser'])->name('login.user');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout.user')->middleware(['auth']);
Route::get('/profile', [UserController::class, 'loadUserProfile'])->name('user.profile')->middleware(['auth']);
Route::post('/profile', [UserController::class, 'updateProfile'])->name('profile.update')->middleware(['auth']);
Route::get('/toor/{event}', [HomeController::class, 'loadToorInfo'])->name('toor.info');
Route::post('/sendEnquiry', [HomeController::class, 'SaveEnquiry'])->name('save.enquiry');
Route::get('/toorlist/{event}', [HomeController::class, 'loadToorList'])->name('toor.list');
Route::get('/booking/{tour}', [HomeController::class, 'loadToorBooking'])->name('toor.booking');
Route::post('/storeBooking/{tour}', [HomeController::class, 'StoreBooking'])->name('booking.store');
Route::get('/gallaries', [HomeController::class, 'loadAllGallary'])->name('album.all');
Route::get('/bloginfo/{blog}', [HomeController::class, 'BlogInfo'])->name('blog.info');


// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/admin', [AdminController::class, 'loadDashboard'])->name('user.admin');
    Route::get('/events', [AdminController::class, 'loadEvents'])->name('admin.events');
    Route::get('/eventdelete/{event}', [AdminController::class, 'deleteEvent'])->name('delete.event');
    Route::post('/event', [AdminController::class, 'storeEvent'])->name('store.event');
    Route::post('/eventupdate/{event}', [AdminController::class, 'updateEvent'])->name('update.event');
    Route::get('/eventinfo/{event}', [AdminController::class, 'getTours'])->name('admin.events.tours');
    Route::post('/tour', [AdminController::class, 'storeTour'])->name('store.event.tours');
    Route::post('/tourupdate/{tour}', [AdminController::class, 'updateTour'])->name('update.event.tours');
    Route::get('/tourdelete/{tour}', [AdminController::class, 'deleteTour'])->name('delete.tour');
    Route::get('/tour/{tour}', [AdminController::class, 'loadEditTour'])->name('admin.tour.edit');
    Route::get('/addtour/{event}', [AdminController::class, 'loadAddTour'])->name('admin.tour.add');
    Route::get('/users', [AdminController::class, 'loadUsers'])->name('admin.users');
    Route::get('/user/delete/{user}', [AdminController::class, 'DeleteUser'])->name('admin.users.delete');
    // Route::get('/enquiries', [AdminController::class, 'LoadEnquiry'])->name('admin.enquiry');
    Route::get('/bookings', [AdminController::class, 'LoadBookings'])->name('admin.bookings');
    Route::get('/gallary', [AdminController::class, 'LoadGallary'])->name('admin.gallary');
    Route::post('/album', [AdminController::class, 'storeAlbum'])->name('store.album');
    Route::get('/delete/{album}', [AdminController::class, 'deleteAlbum'])->name('delete.album');
    Route::post('/upadtealbum/{album}', [AdminController::class, 'updateAlbum'])->name('update.album');
    Route::get('/album/{album}/images', [AdminController::class, 'loadAlbumImages'])->name('album.images');
    Route::get('/delete/album/image/{image}', [AdminController::class, 'deleteAlbumImage'])->name('delete.album.image');
    Route::post('/album/{album}/images', [AdminController::class, 'storeAlbumImages'])->name('store.album.images');
    Route::get('/blogs', [AdminController::class, 'loadAdminBlogs'])->name('admin.blogs');
    Route::get('/blogs/create', [AdminController::class, 'loadCreateBlog'])->name('admin.blogs.load');
    Route::post('/blogs/store', [AdminController::class, 'storeBlog'])->name('admin.blogs.store');
    Route::get('/blogs/delete/{blog}', [AdminController::class, 'deleteBlog'])->name('delete.blog');

});



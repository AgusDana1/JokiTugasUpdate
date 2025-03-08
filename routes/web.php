<?php

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PenjokiController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Middleware\PreventBackHistory;

Route::get('/', function () {
    return view('homePage');
})->name('home');

// caraOrder
Route::get('/caraOrder', function () {
    return view('caraOrder');
})->name('caraOrder');

// blog page
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/payment', [PayController::class, 'showForm'])->name('payment.form');
Route::post('/payment', [PayController::class, 'processPay'])->name('payment.page');

// hanya untuk admin
Route::middleware(RoleMiddleware::class.':admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/orders/{id}', [AdminController::class, 'showOrder'])->name('order.show');
});

// Hanya untuk penjoki
Route::middleware(RoleMiddleware::class.':penjoki')->group(function () {
    Route::get('/penjoki/dashboard', [PenjokiController::class, 'dashboard'])->name('penjoki.dashboard');
    Route::get('/penjoki/orders/{id}', [PenjokiController::class, 'TampilkanOrder'])->name('order.tampilkan');
});

// logic route admin untuk update status pending/paid/completed
Route::middleware(RoleMiddleware::class.':admin')->prefix('admin')->group(function () {
    Route::patch('/orders/{order}/update-status', [OrderController::class, 'updateStatus'])->name('admin.updateOrderStatus');
});

// Halaman Pembayaran Tf Bank
Route::get('/payment/ewallet/{order_id}/{ewallet}', [PayController::class, 'ewalletPayment'])->name('payment.ewallet');
Route::get('/payment/bank-transfer/{order_id}', [PayController::class, 'bankTransferPayment'])->name('payment.bank_transfer');

// Dashboard user biasa
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('homePage');
    })->name('home');
});

// callback setelah user membayar
Route::post('/payment/callback', function (Request $request) {
    $order = Order::find($request->input('order_id'));

    if (!$order) return response()->json(['error' => 'Pesanan tidak dapat ditemukan!'], 404);

    return response()->json(['message' => 'Pembayaran berhasil diproses!']);
});

// Login register 
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Reset password
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');

// Google id route
Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/upload', [ProfileController::class, 'upload'])->name('profile.upload');
});

// route feedback dari user ke admin melalui email
Route::post('/send-feedback', [FeedbackController::class, 'sendFeedback'])->name('send.feedback');

// Logic previous & next
Route::middleware(['guest', PreventBackHistory::class])->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
});

Route::middleware(['auth', PreventBackHistory::class])->group(function () {
    Route::get('/', function () {
        return view('homePage');
    })->name('home');
});

// task/jawaban terkirim
Route::post('/tasks', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/view-answer/{id}', [TaskController::class, 'viewAnswer'])->name('task.view-answer');

// notificationn
Route::get('/notifications', [NotificationController::class, 'getNotifications'])->name('notifications');
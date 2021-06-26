<?php

use App\Http\Controllers\admin\auth\AdminController;
use App\Http\Controllers\admin\BoardMemberController;
use App\Http\Controllers\admin\FaqCategoryController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\GiftCategoryController;
use App\Http\Controllers\admin\GiftController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\PdfOrderController;
use App\Http\Controllers\admin\SiteProfileController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\user\auth\UserController;
use App\Http\Controllers\user\PagesController;
use App\Http\Livewire\Pages\SingleNewsPage;
use App\Models\News;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('web.index', [
        'testimonials' => Testimonial::orderBy('id', 'DESC')->get(),
        'news' => News::orderBy('id', 'desc')->take(4)->get(),
    ]);
})->name('home');




Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::group(['middleware', 'guest:admin'], function () {\
            Route::get('/', [AdminController::class, 'showLoginForm'])->name('showLoginForm');
            Route::post('/', [AdminController::class, 'login'])->name('login');
        });

        Route::group(['middleware', 'auth:admin'], function () {
            Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

            Route::resource('gift-category', GiftCategoryController::class);
            Route::resource('gift', GiftController::class);
            Route::resource('pdf-orders', PdfOrderController::class);

            // site profile
            Route::resource('site-profile', SiteProfileController::class);
            Route::resource('testimonial', TestimonialController::class);
            Route::resource('board-member', BoardMemberController::class);
            Route::resource('faq-category', FaqCategoryController::class);
            Route::resource('faq', FaqController::class);
            Route::resource('news', NewsController::class);
            Route::get('change-password', [AdminController::class, 'password'])->name('password');
            Route::post('change-password', [AdminController::class, 'updatepassword'])->name('updatePassword');

            Route::get('logout', [AdminController::class, 'logout'])->name('logout');

        });
    });

Route::name('user.')
    ->group(function () {
        Route::group(['middleware', 'guest:web'], function () {
            Route::get('/login', [UserController::class, 'showLoginForm'])->name('showLoginForm');
            Route::post('/login', [UserController::class, 'login'])->name('login');
            Route::post('/register', [UserController::class, 'register'])->name('register');
        });

        Route::group(['middleware', 'auth:web'], function () {
            Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

            Route::get('change-password', [UserController::class, 'password'])->name('password');
            Route::post('change-password', [UserController::class, 'updatepassword'])->name('updatePassword');

            Route::get('logout', [UserController::class, 'logout'])->name('logout');

        });
    });



    Route::get('place-pdf-orders', [PagesController::class, 'PdfOrderShowPage'])->name('PdfOrderShowPage');
    Route::post('place-pdf-orders', [PagesController::class, 'PlacePdfOrder'])->name('PlacePdfOrder');
    Route::get('gifts', [PagesController::class, 'showGiftPage'])->name('ShowGiftPage');
    Route::get('news', [PagesController::class, 'showNewsPage'])->name('ShowNewsPage');
    Route::get('news/{slug}', SingleNewsPage::class)->name('ShowSingleNews');
    Route::get('contact-us', [PagesController::class, 'showContactUsPage'])->name('ShowContactUs');
    Route::get('about-us', [PagesController::class, 'showAboutUsPage'])->name('ShowAboutUs');
    Route::get('faq/{cat}', [PagesController::class, 'ShowFaqPage'])->name('ShowFaqPage');

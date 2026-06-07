<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\ServiceController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/our-team', [HomeController::class, 'ourTeam'])->name('our_team');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/our-service', [ServiceController::class, 'ourService'])->name('our_service');
Route::get('/service-details', [ServiceController::class, 'serviceDetails'])->name('service_details');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/our-blog', [BlogController::class, 'ourBlog'])->name('our_blog');
Route::get('/blog-details', [BlogController::class, 'blogDetails'])->name('blog_details');
Route::get('/project', [ProjectController::class, 'project'])->name('project');
Route::get('/more-details', [ProjectController::class, 'moreDetails'])->name('more_details');

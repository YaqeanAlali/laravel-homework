<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\cattController;
use App\Http\Controllers\Admin\TrainerController;
use App\Http\Controllers\Admin\coursesController;
use App\Http\Controllers\Admin\StudentController;




use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\MessageController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\hPageController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::namespace('Front')->group(function(){
    Route::get('/',[HomepageController::class,'index'])->name('front.homepage');
    Route::get('/cat/{id}',[CourseController::class,'cat'])->name('front.cat');
    Route::get('/cat/{id}/course/{c_id}',[CourseController::class,'show'])->name('front.show');
    Route::get('/contact',[ContactController::class,'index'])->name('front.contact');
    
    Route::post('/message/newsletter',[MessageController::class,'newsletter'])->name('front.message.newsletter');
    Route::post('/message/contact',[MessageController::class,'contact'])->name('front.message.contact');
    Route::post('/message/register',[MessageController::class,'register'])->name('front.message.register');
});
Route::namespace('Admin')->prefix('dashboard')->group(function(){
    Route::get("/login", [AuthController::class, "login"])->name("admin.login");
    Route::post("/do_login", [AuthController::class, "doLogin"])->name("admin.doLogin");
    
    Route::middleware('adminAuth:admin')->group(function(){   

        Route::get("/logout", [AuthController::class, "logout"])->name("admin.logout");
        Route::get('/',[HomeController::class,'index'])->name('admin.home');
        Route::get('/cats',[cattController::class,'index'])->name('admin.cats.index');
        Route::get('/cats/create',[cattController::class,'create'])->name('admin.cats.create');
        Route::post('/cats/store',[cattController::class,'store'])->name('admin.cats.store');
        Route::get('/cats/edit/{id}',[cattController::class,'edit'])->name('admin.cats.edit');
        Route::post('/cats/update',[cattController::class,'update'])->name('admin.cats.update');
        Route::get('/cats/delete/{id}',[cattController::class,'destroy'])->name('admin.cats.destroy');

        Route::get('/trainers',[TrainerController::class,'index'])->name('admin.trainers.index');
        Route::get('/trainers/create',[TrainerController::class,'create'])->name('admin.trainers.create');
        Route::post('/trainers/store',[TrainerController::class,'store'])->name('admin.trainers.store');
        Route::get('/trainers/edit/{id}',[TrainerController::class,'edit'])->name('admin.trainers.edit');
        Route::post('/trainers/update',[TrainerController::class,'update'])->name('admin.trainers.update');
        Route::get('/trainers/delete/{id}',[TrainerController::class,'destroy'])->name('admin.trainers.destroy');

        Route::get('/courses',[coursesController::class,'index'])->name('admin.courses.index');
        Route::get('/courses/create',[coursesController::class,'create'])->name('admin.courses.create');
        Route::post('/courses/store',[coursesController::class,'store'])->name('admin.courses.store');
        Route::get('/courses/edit/{id}',[coursesController::class,'edit'])->name('admin.courses.edit');
        Route::post('/courses/update',[coursesController::class,'update'])->name('admin.courses.update');
        Route::get('/courses/delete/{id}',[coursesController::class,'destroy'])->name('admin.courses.destroy');

        Route::get('/students',[StudentController::class,'index'])->name('admin.students.index');
        Route::get('/students/create',[StudentController::class,'create'])->name('admin.students.create');
        Route::post('/students/store',[StudentController::class,'store'])->name('admin.students.store');
        Route::get('/students/edit/{id}',[StudentController::class,'edit'])->name('admin.students.edit');
        Route::post('/students/update',[StudentController::class,'update'])->name('admin.students.update');
        Route::get('/students/delete/{id}',[StudentController::class,'destroy'])->name('admin.students.destroy');
        Route::get('/students/show-courses/{id}',[StudentController::class,'showCourses'])->name('admin.students.showCourses');
        Route::get('/students/{id}/courses/{c_id}/approve',[StudentController::class,'approveCourse'])->name('admin.students.approveCourse');
        Route::get('/students/{id}/courses/{c_id}/reject',[StudentController::class,'rejectCourse'])->name('admin.students.rejectCourse');
        Route::get('/students/{id}/add-to-course',[StudentController::class,'addCourse'])->name('admin.students.addCourse');
        Route::post('/students/{id}/add-to-cours',[StudentController::class,'storeCourse'])->name('admin.students.storeCourse');
    });



});

   
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'home'])->name('home-page');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/activities', [PagesController::class, 'activities'])->name('activities');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [PagesController::class, 'contact_post'])->name('contact-post');
Route::get('/courses', [PagesController::class, 'courses'])->name('courses');
Route::get('/intakes', [PagesController::class, 'intakes'])->name('intakes');
Route::get('/mobigirlz', [PagesController::class, 'mobigirlz'])->name('mobigirlz');
Route::get('/ajira', [PagesController::class, 'ajira'])->name('ajira');
Route::get('/bootcamps', [PagesController::class, 'bootcamps'])->name('bootcamps');
Route::get('/news', [PagesController::class, 'articles'])->name('news');
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/articles', [PagesController::class, 'articles'])->name('articles');
Route::post('/join/mailing/list', [PagesController::class, 'join_mailing_list'])->name('join-mailing-list');
Route::get('/scholarships', [PagesController::class, 'scholarships'])->name('scholarships');

Route::get('/profiles/{name}', [ProfileController::class, "show"])->name('profiles');


//Courses
Route::get('/courses/full-stack', [CourseController::class, 'full_stack'])->name('full-stack');
Route::get('/courses/android', [CourseController::class, 'android'])->name('android');
Route::get('/courses/data-science', [CourseController::class, 'data_science'])->name('data-science');
Route::get('/courses/python', [CourseController::class, 'python'])->name('python');

Route::get('/courses/cyber-security', [CourseController::class, 'cyber_security'])->name('cyber-security');
Route::get('/courses/laravel', [CourseController::class, 'laravel'])->name('laravel');
Route::get('/courses/digital-skills', [CourseController::class, 'digital_skills'])->name('digital-skills');
Route::get('/courses/html-5', [CourseController::class, 'html5'])->name('html-5');
Route::get('/courses/react', [CourseController::class, 'react'])->name('react');
Route::get('/courses/ussd', [CourseController::class, 'ussd'])->name('ussd');
Route::get('/courses/oracle', [CourseController::class, 'oracle'])->name('oracle');

Route::get('/students/enroll', [RegistrationController::class, 'index'])->name('enroll');
Route::get('/new/student', [RegistrationController::class, 'index'])->name('enroll');
Route::get('/students/terms', [RegistrationController::class, 'terms'])->name('terms');
Route::post('/students/save', [RegistrationController::class, 'store'])->name('enroll-save');

Route::get('/register', function (){
   return redirect()->to('/students/enroll');
});

Auth::routes(['register'=> false]);

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/registrations', [AdminController::class, 'registrations'])->name('registrations');
    Route::delete('/enquiry', [AdminController::class, 'deleteEnquiry'])->name('delete.enquiry');
    Route::delete('/registrations', [AdminController::class, 'deleteRegistration'])->name('delete.registrations');

    Route::put('/enquiry', [AdminController::class, 'clearEnquiry'])->name('clear.enquiry');
    Route::put('/registrations', [AdminController::class, 'clearRegistration'])->name('clear.registrations');
});
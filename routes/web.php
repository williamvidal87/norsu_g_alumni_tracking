<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AlumniMiddleware;
use App\Http\Middleware\UserSessionMiddleware;
use App\Livewire\AdminPanel\AdminDashBoard\AdminDashboard;
use App\Livewire\AdminPanel\AlumniManagement\AlumniManagementTable;
use App\Livewire\AdminPanel\CollegeDepartment\CollegeDepartmentTable;
use App\Livewire\AdminPanel\Course\CourseTable;
use App\Livewire\AdminPanel\Degree\DegreeTable;
use App\Livewire\AdminPanel\ManageUser\AlumniTable;
use App\Livewire\AdminPanel\TypeWork\TypeWorkTable;
use App\Livewire\AlumniPanel\AlumniHomePage\AlumniHomePage;
use App\Livewire\Profile\EditPassword;
use App\Livewire\Profile\EditProfile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/edit-profile', EditProfile::class)->name('edit-profile')->middleware(UserSessionMiddleware::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/edit-password', EditPassword::class)->name('edit-password');

    Route::middleware([AdminMiddleware::class])->group(function () {
        Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
        Route::get('/alumni-management-table', AlumniManagementTable::class)->name('alumni-management-table');
        Route::get('/user-management-table', AlumniTable::class)->name('user-management-table');
        Route::get('/degree-table', DegreeTable::class)->name('degree-table');
        Route::get('/college-department-table', CollegeDepartmentTable::class)->name('college-department-table');
        Route::get('/course-table', CourseTable::class)->name('course-table');
        Route::get('/type-work-table', TypeWorkTable::class)->name('type-work-table');
    });

    Route::middleware([AlumniMiddleware::class])->group(function () {
        Route::get('/alumni-home-page', AlumniHomePage::class)->name('alumni-home-page');
    });

});

<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('dashbroadgv', function () {
        return view('admin.layout.dashbroad_gv');
    });
    Route::get('dashbroadad', [TeacherController::class, 'dashadminn'])->name('admin.dashadminn');

    Route::get('grade', [GradeController::class, 'index'])->name('admin.grade.index');
    Route::get('grade/create', [GradeController::class, 'create'])->name('admin.grade.create');
    Route::post('grade/store', [GradeController::class, 'store'])->name('admin.grade.store');
    Route::get('grade/edit/{id}', [GradeController::class, 'edit'])->name('admin.grade.edit');
    Route::put('grade/update/{id}', [GradeController::class, 'update'])->name('admin.grade.update');
    Route::delete('grade/destroy/{id}', [GradeController::class, 'destroy'])->name('admin.grade.destroy');

    Route::get('exam', [ExamController::class, 'index'])->name('admin.exam.index');
    Route::get('exam/create', [ExamController::class, 'create'])->name('admin.exam.create');
    Route::post('exam/store', [ExamController::class, 'store'])->name('admin.exam.store');
    Route::get('exam/edit/{id}', [ExamController::class, 'edit'])->name('admin.exam.edit');
    Route::put('exam/update/{id}', [ExamController::class, 'update'])->name('admin.exam.update');
    Route::delete('exam/destroy/{id}', [ExamController::class, 'destroy'])->name('admin.exam.destroy');
});
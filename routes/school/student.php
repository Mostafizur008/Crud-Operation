<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\School\DepartmentController;
use App\Http\Controllers\School\StudentController;
use App\Http\Controllers\School\ResultController;



// Department Section

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DepartmentController::class, 'DepartmentView'])->name('dashboard');
    Route::get('/department/add', [DepartmentController::class, 'DepartmentAdd'])->name('department.add');
    Route::post('/department/store', [DepartmentController::class, 'DepartmentStore'])->name('department.store');
    Route::get('/department/edit/{id}',[DepartmentController::class,'DepartmentEdit'])->name('department.edit');
    Route::post('/department/update/{id}',[DepartmentController::class,'DepartmentUpdate'])->name('department.update');
    Route::get('/department/{id}',[DepartmentController::class,'DepartmentDelete'])->name('department.delete');
});



// Students Section

Route::middleware('auth')->group(function () {
    Route::get('/student', [StudentController::class, 'StudentView'])->name('student');
    Route::get('/student/add', [StudentController::class, 'StudentAdd'])->name('student.add');
    Route::post('/student/store', [StudentController::class, 'StudentStore'])->name('student.store');
    Route::get('/student/edit/{id}',[StudentController::class,'StudentEdit'])->name('student.edit');
    Route::post('/student/update/{id}',[StudentController::class,'StudentUpdate'])->name('student.update');
    Route::get('/student/{id}',[StudentController::class,'StudentDelete'])->name('student.delete');
    Route::get('/student/search',[StudentController::class,'Search'])->name('search');
});

    // Result Section

Route::middleware('auth')->group(function () {
    Route::get('/result', [ResultController::class, 'ResultView'])->name('result');
    Route::get('/result/add', [ResultController::class, 'ResultAdd'])->name('result.add');
    Route::post('/result/store', [ResultController::class, 'ResultStore'])->name('result.store');
    Route::get('/result/edit/{id}',[ResultController::class,'ResultEdit'])->name('result.edit');
    Route::post('/result/update/{id}',[ResultController::class,'ResultUpdate'])->name('result.update');
    Route::get('/result/{id}',[ResultController::class,'ResultDelete'])->name('result.delete');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index'])->name('students.index');

// Show form
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

// Save data
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

// Edit form
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');

// Update record
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');

// Delete record
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

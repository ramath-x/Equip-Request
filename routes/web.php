<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EquipRequestController;
use App\Http\Controllers\AdminEquipRequestController;

Route::redirect('/', 'login');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/equip_request', [EquipRequestController::class, 'index'])->name('equip.request.index');
    Route::get('/equip_request/create', [EquipRequestController::class, 'index'])->name('equipment.request.create');
    Route::post('/equip_request/store', [EquipRequestController::class, 'store'])->name('equipment.request.store');

    // addmin
    Route::get('/admin/equipment', [AdminEquipRequestController::class, 'index'])->name('admin.equipment');
    Route::post('admin/equipment/store', [AdminEquipRequestController::class, 'store'])->name('equipment.store');


});



require __DIR__.'/auth.php';

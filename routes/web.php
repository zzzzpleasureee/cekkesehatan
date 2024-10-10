<?php
use App\Http\Controllers\FormController;
use App\Http\Controllers\MedicalRecordController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormController::class, 'index'])->name('form.index');
Route::post('/', [FormController::class, 'store'])->name('form.store');



Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
        'middleware' => ['auth'],
        'prefix' => 'admin',  //admin/pasien
        'as' => 'admin.' 
    ], function () {
    
     //cekkesehatan.test/admin -> route('admin.index')
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

    //cekkesehatan.test/admin/menu -> route('admin.menu')
    Route::get('/menu', [App\Http\Controllers\HomeController::class, 'index'])->name('menu');
    Route::post('/doctor', [App\Http\Controllers\HomeController::class, 'store'])->name('doctor');

    // Routing CRUD: Doctor
    Route::resource('/doctor', App\Http\Controllers\DoctorController::class);
    Route::resource('patient', App\Http\Controllers\PatientController::class); 

    // Routing CRUD: Kunjungan
    Route::resource('/kunjungan', App\Http\Controllers\KunjunganController::class);

    // Routing CRUD: Treatment
    Route::resource('/treatment', App\Http\Controllers\TreatmentController::class);

    
});

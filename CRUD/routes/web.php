<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PlaceController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/Admin/Controller',[HomeController::class,'AdminDash'])->middleware(['auth','admin']);
Route::get('/Editor/Controller',[HomeController::class,'EditorDash'])->middleware(['auth','editor']);
Route::resource("/student", StudentController::class);


//--------------------------------------------PlaceController--------------------------------------------------------

Route::get('/add-places',[PlaceController::class,'addPlaces'])->name('places.add');

Route::get('/getCountry/{id}',[PlaceController::class,'getCountries'])->name('places.countries');

Route::get('/getCity/{id}',[PlaceController::class,'getCities'])->name('places.cities');



//---------------------------------------------MemberController-------------------------------------------------------

use App\Http\Controllers\MemberController;

Route::get('/members', [MemberController::class, 'index'])->name('members.index');
Route::get('/members/filter', [MemberController::class, 'filter'])->name('members.filter');



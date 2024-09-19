<?php

use Carbon\Carbon;
use App\Models\Visitor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LocationController;

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

Route::get('/' , [HomeController::class, 'index'])->name('home');
Route::get('/about' , [HomeController::class, 'about'])->name('about');
Route::get('/service' , [HomeController::class, 'service'])->name('service');
Route::get('/locations' , [HomeController::class, 'locations'])->name('locations');
Route::get('/contact-us' , [HomeController::class, 'contactUs'])->name('contact-us');
Route::post('/quote-request', [QuoteController::class, 'store'])->name('quote.store');


Route::prefix('locations')->group(function () {
    Route::get('/denver', [LocationController::class, 'denver'])->name('denver');
    Route::get('/northglenn', [LocationController::class, 'northglenn'])->name('northglenn');
    Route::get('/henderson', [LocationController::class, 'henderson'])->name('henderson');
    Route::get('/broomfield', [LocationController::class, 'broomfield'])->name('broomfield');
    Route::get('/wheat-ridge', [LocationController::class, 'wheatRidge'])->name('wheat-ridge');
    Route::get('/lochbuie', [LocationController::class, 'lochbuie'])->name('lochbuie');
    Route::get('/golden', [LocationController::class, 'golden'])->name('golden');
    Route::get('/brighton', [LocationController::class, 'brighton'])->name('brighton');
    Route::get('/west-minster', [LocationController::class, 'westMinster'])->name('west-minster');
    Route::get('/lakewood', [LocationController::class, 'lakewood'])->name('lakewood');
    Route::get('/fort-lupton', [LocationController::class, 'fortLupton'])->name('fort-lupton');
    Route::get('/boulder', [LocationController::class, 'boulder'])->name('boulder');
    Route::get('/thornton', [LocationController::class, 'thornton'])->name('thornton');
    Route::get('/lafayette', [LocationController::class, 'lafayette'])->name('lafayette');
    Route::get('/englewood', [LocationController::class, 'englewood'])->name('englewood');
    Route::get('/aurora', [LocationController::class, 'aurora'])->name('aurora');
    Route::get('/louisville', [LocationController::class, 'louisville'])->name('louisville');
    Route::get('/littleton', [LocationController::class, 'littleton'])->name('littleton');
    Route::get('/castle-rock', [LocationController::class, 'castleRock'])->name('castle-rock');
    Route::get('/arvada', [LocationController::class, 'arvada'])->name('arvada');
    Route::get('/highlands-ranch', [LocationController::class, 'highlandsRanch'])->name('highlands-ranch');
});


Route::prefix('services')->group(function () {
    Route::get('/emergency-tree-service-denver', [ServiceController::class, 'emergency'])->name('emergency');
    Route::get('/stump-removal-denver', [ServiceController::class, 'stumpRemoval'])->name('stump-removal');
    Route::get('/tree-pruning-denver', [ServiceController::class, 'treePruning'])->name('tree-pruning');
    Route::get('/tree-removal', [ServiceController::class, 'treeRemoval'])->name('tree-removal');
});

Route::get('/dashboard', function () {

    $visitors = Visitor::where('created_at', '>=', Carbon::now()->subDays(30))
        ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
        ->groupBy('date')
        ->get();
    return view('dashboard', compact('visitors'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/quote-request', [QuoteController::class, 'index'])->name('quote.index');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

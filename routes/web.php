<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\VenuesController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\AnswerController;
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

Route::get('/start', function () {
    return view('frontend.start');
})->name('start');
Route::get('/questions', function () {
    return view('frontend.questions');
})->name('questions');

Route::get('/questions', [FrontendController::class, 'showQuestion'] )->name('questions');

Route::get('/end', function () {
    return view('frontend.end');
})->name('end');
// Route for saving responses
Route::post('/save-response', [FrontendController::class, 'saveResponse'])
    ->name('save_response');
Route::get('/questions/{id}', [FrontendController::class, 'showQuestion'] )->name('render');
Route::post('/clear-responses', [FrontendController::class, 'clearResponses'])
    ->name('clear_responses');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/backend', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::resource('/backend/questions',QuestionController::class);
    Route::resource('/backend/destinations',DestinationController::class);
    Route::resource('/backend/venues',VenuesController::class);
    Route::resource('/backend/types',TypesController::class);
    Route::resource('/backend/answers',AnswerController::class);


    Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

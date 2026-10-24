<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});


Route::get('About', function () {
    return view('About');
});

Route::get('ContactUs', function () {
    return view('ContactUs');
});

// Jobs pages read sample listings until the backend passes real jobs to these views.
Route::get('jobs', function () {
    return view('Jobs');
})->name('jobs.index');

Route::get('jobs/{id}', function (string $id) {
    return view('JobDetail', ['id' => $id]);
})->name('jobs.show');

// The application form. It shows a preview (nothing is sent) until the backend defines a POST route named
// jobs.apply.store - see the notes at the top of resources/data/sample-application-form.php.
Route::get('jobs/{id}/apply', function (string $id) {
    return view('Apply', ['id' => $id]);
})->middleware('auth')->name('jobs.apply');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

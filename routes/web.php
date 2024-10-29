<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return view('home');
});

Route::get('/jobs', static function () {
    $JobsWithEmployer = Job::with('employer')->cursorPaginate(5);

    return view('jobs', [
        'jobs' => $JobsWithEmployer,
    ]);
});

Route::get('/jobs/{id}', static function ($id) {
    return view('job', ['job' => Job::find($id)]);
});

Route::get('/contact', static function () {
     return view('contact');
});

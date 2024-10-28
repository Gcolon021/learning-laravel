<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    $Jobs = Job::all();

    dd($Jobs);
//    return view('home');
});

Route::get('/jobs', static function () {
    return view('jobs', [
        'jobs' => Job::all(),
    ]);
});

Route::get('/jobs/{id}', static function ($id) {
    return view('job', ['job' => Job::find($id)]);
});

Route::get('/contact', static function () {
     return view('contact');
});

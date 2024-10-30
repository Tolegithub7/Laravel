<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    $job = Job::all();
    dd($job);
    // return view('home');
});
Route::get('/jobs', function() {
    return view('jobs', [
        'jobs' => Job::all(),
    ]);
});
Route::get('/jobs/{id}', function($id) {
    $job = Job::find($id);
    if (!$job) {
        // You can return a 404 error page or a custom response
        abort(404, 'Job not found');
    }
    // dd($job);    
    return view('job', ['job' => $job]);
});

Route::get('/contact', function() {
    return view('contact');
});
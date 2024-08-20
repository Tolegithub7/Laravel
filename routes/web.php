<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Pest\Support\View;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    return View('jobs', [
        $jobs = [

            [
                'id' => 1,
                'title' => 'bodyguard',
                'salary' => 90,000,
                'place' => 'adama'
            ], [
                'id' => 2,
                'title' => 'programmer',
                'salary' => 70,000,
                'place' => 'bishoftu'
            ], [
                'id' => 3,
                'title' => 'Driver',
                'salary' => 80,000,
                'place' => 'Asella'
            ]
        ]]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Developer',
            'salary' => 70000,
            'place' => 'Bishoftu'
        ], [
            'id' => 2,
            'title' => 'Designer',
            'salary' => 80000,
            'place' => 'Asella'
        ], [
            'id' => 3,
            'title' => 'Driver',
            'salary' => 60000,
            'place' => 'Addis Ababa'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('jobs', ['job' => $job]);
});


Route::get('/contact', function () {
    return View('contact');
});
<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Pest\Support\View;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    return View('jobs', [
        'jobs' => [

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
        ];

        $job = Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);
        dd($job);

    return View('contact');
});

Route::get('/contact', function () {
    return View('contact');
});
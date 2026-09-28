<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $services = [
        'Web Development',
        'UI Design',
        'Technical Support'
    ];

    return view('home', [
        'services' => $services
    ]);
});


Route::get('/about', function () {

    $showMessage = true;

    return view('about', [
        'showMessage' => $showMessage
    ]);
});


Route::get('/contact', function () {

    return view('contact');

});
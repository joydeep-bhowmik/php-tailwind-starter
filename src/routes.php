<?php

use App\Controllers\ContactFormController;
use Pecee\SimpleRouter\SimpleRouter as Router;


Router::get('/', function () {

    $course = env('APP_COURSE_MODE');
    return view('index', compact('course'));
})->name('home');

Router::get('/diploma', function () {

    $course = 'diploma';
    return view('index', compact('course'));
})->name('home');

Router::get('/advance-diploma', function () {

    $course = 'ad-diploma';
    return view('index', compact('course'));
})->name('home');

Router::get('submit-form', [ContactFormController::class, 'submit']);
Router::start();

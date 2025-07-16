<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Nested route file
Route::get('/blog/html', function() {
    return view("blog.html");
});


// Parsing Data
// 1. With array
Route::get('/about', function () {
    $name = "Kukuh Ardi Ramadhan";
    $birthYear = 2005;
    $currentYear = gmdate('Y');
    $age = $currentYear - $birthYear;
    return view('about', ['name' => $name, 'age' => $age]);
});
// 2/ Using compact()
Route::get('/contact', function () {
    $instagram = "https://www.instagram.com/kuh.rmdhn/";
    return view("contact", compact('instagram'));
});
// 3. Using with()
Route::get('/personal-web', function () {
    $personalWebUrl = "https://kuhrmdhn.my.id";
    return view('personalWeb')->with('personalWebUrl', $personalWebUrl);
});

// Wildcard
// Dynamic route using wildcard
Route::get('/project/{projectId}', function ($projectId) {
    return view("project", compact('projectId'));
});
<?php

use Illuminate\Support\Facades\Route;

/*
    get
    post
    put
    patch
    delete
*/
Route::get ('/', function () {
    return "Hello, World!";
});

// Route::post ('/', 'action');
// Route::put ('/', 'action');
// Route::patch ('/', 'action');
// Route::delete ('/', 'action');

// Class Car {

//    public static function getName () {
//         return "Car Name";
//     }

// }

// Car::getName ();
// $BMW = new Car ();
// $BMW->getName ();

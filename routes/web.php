<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return 'home page';
});


Route::get('/about',function(){
    return 'About us page';
});

Route::get('/contact',function(){
    return 'contact page';
});
Route::view('ezz','welcome');


Route::match(['put','patch'],'edit',function(){
    return'edit page';
});
Route::any('ezzz',function(){
    return 'hi ezz';

});
Route::get('user/{name}',function($name){
    return 'contact '. $name;
});






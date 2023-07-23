<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/',function(){
//     return 'home page';
// });


// Route::get('/about',function(){
//     return 'About us page';
// });

// Route::get('/contact',function(){
//     return 'contact page';
// });
// Route::view('ezz','welcome');


// Route::match(['put','patch'],'edit',function(){
//     return'edit page';
// });
// Route::any('ezzz',function(){
//     return 'hi ezz';

// });
// Route::get('user/{name}/{age}',function($name,$age){
//     return "welcome $name, your age $age";
// });

// Route::get('ezz/{name}/{Avg}',function($name,$Avg){
//     return"welcom $name ,your avg $Avg";
// });

       //     Route::get('/',function(){
        //       $name='ezz';
        //       $type='prof';
        //       $link=route('corses',[$name,$type]);
        //       return "<a href='$link'>prof ezz</a>";
        //     });

        //  Route::get('corses/{name}/{type?}',function($name,$type="self"){
        //         return "course $name and type $type";
        //  })->name('corses');
        // });
        Route::prefix("student")->name('student.')->group(function(){
            Route::get('home',[StudentController::class,'index'])->name('home');
            Route::get('about',[StudentController::class,'about'])->name('about');
            Route::get('shop',[StudentController::class,'shop'])->name('shop');
            Route::get('seteng',[StudentController::class,'seteng'])->name('seteng');
            Route::get('seaport',[StudentController::class,'seaport'])->name('seaport');
       
           
       
});

    




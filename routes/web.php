<?php
use App\Http\controllers\frontcontroller
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//rouete admin(Backend)
Route::group(['prefix' => 'admin', 'middleware' =>'auth'], function () {
    Route::get('/', function () {
        return view('admin.index');
});
//route selanjutnya....
});

//route frontend(Depan)
Route::get('/', [frontcontroller::class,index]);
Route::get('about', [frontcontroller::class,index]);


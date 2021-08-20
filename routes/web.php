<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function(){
    $config = base_path().'/site/settings/site.json'; 
    $homepage = base_path().'/site/homepage.json'; 


    function variableData($fileToParse){
        $getConfig = file_get_contents($fileToParse); 
        $data = json_decode($getConfig, true); 
        return $data; 
    }


    return view('partials.shaan')->with([
        'config'=> variableData($config), 
        'user' => variableData($homepage)
    ]);
    
}); 

Route::any('/show', function(){
    return view("show"); 
}); 


Route::prefix('settings')->group(function(){
    // Shows the route list 
    Route::get('/', [SettingsController::class, 'index'])->name('admin-home'); 
    Route::post('/', [SettingsController::class, 'update'])->name('admin-update');  

}); 



// Default error Page
Route::any('/{any}', function () {
    return view('error');
})->where('any', ".*");

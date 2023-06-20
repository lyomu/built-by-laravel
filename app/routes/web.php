<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController:: class, 'index'] );

Route:: get('/about',[HomeController:: class, 'about'] );
Route:: get('/contact', [HomeController:: class, 'contact'] );

// Route:: get('/store/{category?}/{item?}', function($category = null, $item= null){
//     if (isset($category)){

//         if(isset($item)){
//             return "you are viewing the store for {$category} for {$item}";
//         }
//         return 'you are viewing the store for ' . strip_tags($category);
//     }
//     return 'you are viewing all instruments';
// });
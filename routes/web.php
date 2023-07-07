<?php

use App\Models\users;
use Illuminate\Http\Request;
use App\Http\Controllers\userAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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


// //  Filtering Routes with only id is number by 'where' constraints
// Route::get('/User/{id}', function($id){
//     return response('<h1>Rohit is</h1>'.$id);
//     // ->header('Content-Type', 'text/plain');  //Pass any header with header function
// })->where('id', '[0-9]+');


// Route::get('/hello', function(Request $req){
//     dd($req->name.' '.$req->city);  
// });

// Get All User Details Data
Route::get('/', [userController::class, 'index']);


// Get Search result of a particular User from All Data
Route::get('/user',[userController::class, 'searchIndex']);

// show a create user form
Route::get('/user/createform',[userController::class, 'show']);

// post the user data
Route::post('/user/create', [userController::class, 'store']);

// Edit UserForm
Route::get('/edit', [userController::class, 'showUpdateForm']);

// Save Edit User Details
Route::post('/edit', [userController::class, 'update']);

// Delete Existed User Data
Route::get('/delete', [userController::class, 'deleteUser']);



// userAuth Controller

// Show Register Form
Route::get('/registerForm', [userAuth::class, 'registerForm']);

// Handle Register user req
Route::post('/register', [userAuth::class, 'handleRegisterReq']);

// Show Login Form
Route::get('/loginForm', [userAuth::class, 'loginForm']);

// Handle User log in req
Route::post('/login', [userAuth::class, 'handleLoginReq']);

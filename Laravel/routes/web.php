<?php

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

use App\User;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('create');
});


//Route "Create"
Route::post('/create-users', function (Request $request) {
    User::create([
        'name' => $request->name,
        'address' => $request->address,
        'city' => $request->city,
        'state' => $request->state
    ]);

    echo "User registered in the database successfully!";
});



//Route "Read"
Route::get('/read-users/{id}', function($id){
    $users = User::find($id);
    return view('read', ['users' => $users]);
});


//Route "update" finding data
Route::get('/update-users/{id}', function($id){
    $users = User::find($id);
    return view('update', ['users' => $users]);
});

//Route "update" updating data
Route::post('/update-users/{id}', function (Request $request, $id) {
    $users = User::find($id);
    $users->update([
        'name' => $request->name,
        'address' => $request->address,
        'city' => $request->city,
        'state' => $request->state
    ]);

    echo "User updated in database successfully!";

});

//Route "delete"
Route::get('/delete-users/{id}', function ($id) {
    $users = User::find($id);
    $users->delete();
    echo "User deleted in database successfully!";

});
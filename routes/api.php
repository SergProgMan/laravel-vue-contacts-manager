<?php

use Illuminate\Http\Request;
use App\Contact;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function(){
    //fetch contacts
    Route::get('contacts', function(){
        return Contact::latest()->orderBy('created_at', 'desc')->get();
    });

    //get single Contact
    Route::get('contact/{id}', function($id){
        return Contact::findOrFail($id);
    });

    //add Contact
    Route::post('contact/store', function(Request $request){
        return Contact::create(['name' => $request->input(['name']), 
                                'email' => $request->input(['email']),
                                'phone' => $request->input(['phone'])]);
    });

    //update Contact
    Route::patch('contact/{$id}', function(Request $request, $id){
        Contact::findOrFail
    });


});
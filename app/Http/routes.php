<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//
//    $people = ['ala', 'basia', 'cosia'];
//    // compact will create key => value array like that
//    // ['people' => $people]
//    //return view('welcome', compact('people'));
//    return view('welcome', [
//        'people' => $people,
//    ]);
//});


// CRUD interactions
//// create
//Route::get('/cards/create', 'CardsController@create'); // to display form to create card
//Route::post('/cards', 'CardsController@add'); // to save new card (submit to)
//
//// read
//Route::get('/cards', 'CardsController@index'); // to show all cards
//Route::get('/cards/1', 'CardsController@show'); // to show specific card
//
//// update
//Route::get('/cards/1/edit', 'CardsController@edit'); // to display form to edit specific card
//Route::put('/cards/1', 'CardsController@update'); // to update specific card
//
//// delete
//Route::delete('/cards/1', 'CardsController@destroy'); // to delete specific card

Route::get('', 'PagesController@home');
Route::get('home', 'PagesController@home');
Route::get('about', 'PagesController@about');

// cards
Route::get('cards', 'CardsController@index'); // to show all cards
Route::post('cards', 'CardsController@store'); // to store (save) specific card of specific id
Route::get('cards/{card}', 'CardsController@show'); // to show a card of specific id with notes


// notes
Route::post('cards/{card}/notes', 'NotesController@store'); // to store (save) note for the card
Route::get('notes/{note}/edit', 'NotesController@edit'); // to show form to edit note of id
Route::patch('notes/{note}', 'NotesController@update'); //




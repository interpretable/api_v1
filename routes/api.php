<?php

use Illuminate\Http\Request;
use App\Item;

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

if (env('APP_ENV') === 'production') {
    URL::forceScheme('https');
}


// Table state
/*Route::get('state', 'TableController@state');
Route::post('state/{id}', 'TableController@setCardId');*/

// Item CRUD
Route::get('items', 'ItemController@listItems');
Route::get('item/{id}', 'ItemController@listItem');
Route::post('item/new', 'ItemController@createItem');
Route::post('item/{id}', 'ItemController@updateItem');
// TODO Change it to a delete request
Route::get('item/delete/{id}', 'ItemController@deleteItem');

// Thematics CRUD
Route::get('thematics', 'ThematicController@listThemes');


// Updates a machine based on id in url
Route::post('machine/{id}', 'MachineController@updateMachine');

// Lists a machine in db based on url id
Route::get('machine/{id}', 'MachineController@listMachine');

// Lists every machine in db
Route::get('machines', 'MachineController@listMachines');

Route::get('machine/shutdown', 'MachineController@shutdown');


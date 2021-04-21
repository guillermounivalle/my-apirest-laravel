<?php


/**
 * Aquí generamos la rutas de mi API
 */

use Illuminate\Http\Request;

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

//NOta: En el archivo .env debo asignar el nombre de la base de datos y la contraseña
Route::apiResource("students", "StudentsController");

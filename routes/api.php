<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PetController;
use App\Models\Appointment;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/customers", [CustomerController::class, "index"]);
Route::post("/customers", [CustomerController::class, "store"]);
Route::put("/customers/{customer}", [CustomerController::class, "update"]);
Route::get("/customers/{customer}", [CustomerController::class, "show"]);
Route::delete("/customers/{customer}", [CustomerController::class, "destroy"]);

Route::get("/appointments", [AppointmentController::class, "index"]);
Route::post("/appointments", [AppointmentController::class, "store"]);
Route::put("/appointments/{appointment}", [AppointmentController::class, "update"]);
Route::get("/appointments/{appointment}", [AppointmentController::class, "show"]);
Route::delete("/appointments/{appointment}", [AppointmentController::class, "destroy"]);

Route::get("/branches", [BranchController::class, "index"]);
Route::post("/branches", [BranchController::class, "store"]);
Route::put("/branches/{branch}", [BranchController::class, "update"]);
Route::get("/branches/{branch}", [BranchController::class, "show"]);
Route::delete("/branches/{branch}", [BranchController::class, "destroy"]);

Route::get("/pets", [PetController::class, "index"]);
Route::post("/pets", [PetController::class, "store"]);
Route::put("/pets/{pet}", [PetController::class, "update"]);
Route::get("/pets/{pet}", [PetController::class, "show"]);
Route::delete("/pets/{pet}", [PetController::class, "destroy"]);

Route::post("/appointments/pets", [Appointment::class, "attach"]);

Route::post("/customers/appointments", [CustomerController::class, "attach"]);
Route::post("/customers/appointments/detach", [CustomerController::class, "detach"]);
Route::post("/appointments/custormers", [AppointmentController::class, "customers"]);

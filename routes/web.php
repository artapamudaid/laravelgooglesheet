<?php

use App\Http\Controllers\SheetController;
use App\Services\GoogleSheet;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $values = [
        ['Pamuda', 'Programmer', 'Kediri'],
    ];

    dd($values);
    return view('welcome');
});

Route::get('/sheet/{sheet}/{cell}', [SheetController::class, 'getData'])->name('getData');
Route::get('/sheet/{sheet}', [SheetController::class, 'getForm'])->name('getForm');
Route::post('/sheet/{sheet}', [SheetController::class, 'saveData'])->name('saveData');

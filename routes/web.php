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

Route::get('/', function (GoogleSheet $googleSheet) {
    $sheet = '1';
    $index = '1';
    $values = [
        ['Emy', 'IRT', 'Yogyakarta'],
        ['Pamuda', 'Programmer', 'Kediri'],
    ];

    $googleSheet->saveData($sheet, $values);
    $googleSheet->getData($sheet, $index);
    return view('welcome');
});

Route::get('/sheet', [SheetController::class, 'getData']);

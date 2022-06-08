<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Sheets;

class SheetController extends Controller
{

    public function getData()
    {

        $rows = Sheets::sheet('2020')->get();

        $header = $rows->pull(0);
        $values = Sheets::collection($header, $rows);
        $values->toArray();
    }

    public function postData()
    {
        $append = [
            'Nama' => 'Arta',
            'Pekerjaan' => 'Senoir Software Engineer',
            'Kota' => 'Kediri'
        ];

        $appendSheet = Sheets::spreadsheet(config('google.post_spreadsheet_id'))
            ->sheet(config('google.post_sheet_id'))
            ->append([$append]);
    }
}

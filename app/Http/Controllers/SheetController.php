<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleSheet;


class SheetController extends Controller
{

    public function getData($sheet, $index)
    {
        $googleSheet = new GoogleSheet;
        $datas = $googleSheet->getData($sheet, $index);

        return view('sheet.list', compact(['datas']));
    }

    public function getForm($sheet)
    {
        return view('sheet.form', compact(['sheet']));
    }

    public function saveData($sheet, Request $request)
    {
        $values = [
            [
                $request->nama,
                $request->pekerjaan,
                $request->kota,
            ]
        ];

        // dd($values);

        $googleSheet = new GoogleSheet;
        $googleSheet->saveData($sheet, $values);
    }
}

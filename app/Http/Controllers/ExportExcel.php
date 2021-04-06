<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Excel;

class ExportExcel extends Controller
{
    public function index()
    {
        $data = DB::table('kependudukan')->get();
        return view('export_excel')->with('data', $data);
    }

    function excel()
    {
        $data = DB::table('kependudukan')->get()->toArray();
        $data[] = array('id_keluarga', 'I_1', 'I_2', 'I_2a', 'I_3', 'I_456', 'I_7', 'I_8', 'I_9', 'I_10', 'I_11', 'I_12', 'I_13', 'I_14', 'I_15',)
    }
}

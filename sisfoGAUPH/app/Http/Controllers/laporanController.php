<?php

namespace App\Http\Controllers;

use App\Models\replacementClass;
use Illuminate\Http\Request;
use PDF;

class laporanController extends Controller
{
    public function index(){

        $replacement = replacementClass::all();

        return view ('admin/laporan/replacementIndex', ['replacement'=>$replacement]);
    }

    public function cetak_pdf(){

        $replacement = replacementClass::all();

        $pdf = PDF::loadview('admin/laporan/replacementPrint',['replacement'=>$replacement]);

        return $pdf->download('pengajuan-replacement.pdf');
    }
}

set_time_limit(300);

?>


<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GeneratePDFController extends Controller
{
    public function downloadPDF(){

        $fecha = date('m/d/Y');
        $valores = Data::all();

        $pdf = PDF::loadView('datapdf', compact('fecha','valores'));
        $pdf->setPaper('a4', 'landscape');

        return $pdf->download('cetificado.pdf');
    }

    public function showPDF(){

        $fecha = date('m/d/Y');
        $valores = Data::all();
        $img = asset('img/logo_las_lomas-04.png') ;

        $pdf = PDF::loadView('datapdf', compact('fecha','valores','img'));
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream();
    }

    public function view(){
        // $valores = Data::all();
        $valores = DB::table('data')->get();
        $fecha = date('m/d/Y');
        return view('datapdf', compact('fecha','valores'));
    }
}

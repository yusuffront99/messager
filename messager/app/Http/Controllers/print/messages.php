<?php

namespace App\Http\Controllers\print;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class messages extends Controller
{
    public function print_ijin()
    {
        $path = base_path('public/storage/logo/pln.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $img = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $pdf = PDF::setOptions(
            ['isHtml5ParserEnabled' => true, 
            'isRemoteEnabled' => true,
            ])
            ->setOption(['dpi' => 150, 'defaultFont' => 'Times New Roman'])
            ->setPaper('a4', 'landscape');
        
        $pdf = Pdf::loadView('print.message1', ['img' => $img]);
        return $pdf->stream();

        
    }
}

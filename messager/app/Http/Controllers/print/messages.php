<?php

namespace App\Http\Controllers\print;

use App\Models\Ijin;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CutiTahunan;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class messages extends Controller
{
    public function print_ijin($id)
    {
        
        $path = base_path('public/storage/logo/pln.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $img = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path_ttd = base_path('public/storage/ttd_images/manbag.jpg');
        $type_ttd = pathinfo($path_ttd, PATHINFO_EXTENSION);
        $data_ttd = file_get_contents($path_ttd);
        $ttd = 'data:image/' . $type_ttd . ';base64,' . base64_encode($data_ttd);
        
        $data = Ijin::with('users')->where('id', $id)->first();

        $pdf = PDF::setOptions(
            ['isHtml5ParserEnabled' => true, 
            'isRemoteEnabled' => true,
            ])
            // ->setOption(['dpi' => 150, 'defaultFont' => 'Times New Roman'])
            ->setPaper('a4', 'potrait')
            ->loadView('print.message1', compact('data', 'img', 'ttd'));

        return $pdf->stream();
    }

    public function print_ijin_nottd($id)
    {
        $path = base_path('public/storage/logo/pln.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $img = 'data:image/' . $type . ';base64,' . base64_encode($data);
        
        $data = Ijin::with('users')->where('id', $id)->first();

        $pdf = PDF::setOptions(
            ['isHtml5ParserEnabled' => true, 
            'isRemoteEnabled' => true,
            ])
            // ->setOption(['dpi' => 150, 'defaultFont' => 'Times New Roman'])
            ->setPaper('a4', 'potrait')
            ->loadView('print.message1_nottd', compact('data', 'img'));

        return $pdf->stream();
    }

    public function print_cutiTahunan($id)
    {
        
        $path = base_path('public/storage/logo/pln.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $img = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $path_ttd = base_path('public/storage/ttd_images/manbag.jpg');
        $type_ttd = pathinfo($path_ttd, PATHINFO_EXTENSION);
        $data_ttd = file_get_contents($path_ttd);
        $ttd = 'data:image/' . $type_ttd . ';base64,' . base64_encode($data_ttd);
        
        $data = CutiTahunan::with('users')->where('id', $id)->first();

        $pdf = PDF::setOptions(
            ['isHtml5ParserEnabled' => true, 
            'isRemoteEnabled' => true,
            ])
            ->setOption(['dpi' => 78, 'defaultFont' => 'Times New Roman'])
            ->setPaper('a4', 'potrait')
            ->loadView('print.message2', compact('data', 'img', 'ttd'));

        return $pdf->stream();
    }


    public function print_cutiTahunan_nottd($id)
    {
        
        $path = base_path('public/storage/logo/pln.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $img = 'data:image/' . $type . ';base64,' . base64_encode($data);


        // $path_ttd = base_path('public/storage/ttd_images/manbag.jpg');
        // $type_ttd = pathinfo($path_ttd, PATHINFO_EXTENSION);
        // $data_ttd = file_get_contents($path_ttd);
        // $ttd = 'data:image/' . $type_ttd . ';base64,' . base64_encode($data_ttd);
        
        $data = CutiTahunan::with('users')->where('id', $id)->first();

        $pdf = PDF::setOptions(
            ['isHtml5ParserEnabled' => true, 
            'isRemoteEnabled' => true,
            ])
            ->setOption(['dpi' => 78, 'defaultFont' => 'Times New Roman'])
            ->setPaper('a4', 'potrait')
            ->loadView('print.message2_nottd', compact('data', 'img'));

        return $pdf->stream();
    }
}

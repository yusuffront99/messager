<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $gets = User::get();
        return view('home', compact('gets'));
    }

    public function get_ijin($nip)
    {
        $data = DB::table('users')->where('nip', $nip)->first();

        return response()->json(
            [
                'data' => $data,
                'success' => true,
            ], 200);
    }
}

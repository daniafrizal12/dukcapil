<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FpindahController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Pindah Kependudukan"
        ];
        return view("user.fpindah", $data);
    }
}

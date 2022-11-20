<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlayanankkController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Layanan Kartu Keluarga"
        ];
        return view("user.flayanankk", $data);
    }
}

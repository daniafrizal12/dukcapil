<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FkonsolidasiController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Konsolidasi NIK"
        ];
        return view("user.fkonsolidasi", $data);
    }
}

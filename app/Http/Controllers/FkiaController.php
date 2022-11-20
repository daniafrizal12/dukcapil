<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FkiaController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Kartu Identitas Anak"
        ];
        return view("user.fkia", $data);
    }
}

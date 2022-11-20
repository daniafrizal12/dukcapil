<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatadukungController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Data Dukung"
        ];
        return view("user.datadukung", $data);
    }
}

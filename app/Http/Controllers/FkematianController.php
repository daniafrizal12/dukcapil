<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FkematianController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Akta Kematian"
        ];
        return view("user.fkematian", $data);
    }
}

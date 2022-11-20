<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FkelahiranController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Akta Kelahiran"
        ];
        return view("user.fkelahiran", $data);
    }
}

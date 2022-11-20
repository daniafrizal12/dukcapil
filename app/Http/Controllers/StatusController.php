<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Status"
        ];
        return view("user.status", $data);
    }
}

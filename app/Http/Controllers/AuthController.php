<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return [
            "NIS" => 3103119026,
            "Name" => "Apseli Syifa",
            "Gender" => "Perempuan",
            "Phone" => 081229458085,
            "Class" => "XII RPL1"
        ];
    }
}

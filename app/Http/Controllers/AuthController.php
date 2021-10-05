<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return [
            "NIS" => 3103119032,
            "Name" => "Atina Nora Haya",
            "Gender" => "Perempuan",
            "Phone" => 6281228467337,
            "Class" => "XII RPL1"
        ];
    }
}

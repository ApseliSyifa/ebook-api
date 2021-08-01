<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119026,
        'name' => 'Apseli Syifa Anjani',
        'gender' => 'Female',
        'phone' => '081229458085',
        'class' => 'XII RPL 1'];
  }
}
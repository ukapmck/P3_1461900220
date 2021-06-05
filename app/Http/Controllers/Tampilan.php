<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class Tampilan extends Controller
{
    public function index0220()
    {
       $data = Pasien::get();
       return view('index0220',compact('data'));
    }

}

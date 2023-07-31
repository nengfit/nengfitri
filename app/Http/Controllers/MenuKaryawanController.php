<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuKaryawanController extends Controller
{
    function menu ()
    {
        return view('menukaryawan');
    }
}

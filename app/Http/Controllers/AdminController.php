<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;

class AdminController extends Controller
{
    function index ()
    {
        return view('admin');
    }
    function administrator ()
    {
        return view('admin');
    }
    function karyawan ()
    {
        return view('admin');
    }
        
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectorioController extends Controller
{
    public function index()
    {
       return view ('admin.directorio.index');
    }
}

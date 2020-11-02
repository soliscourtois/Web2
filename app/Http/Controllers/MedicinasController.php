<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicinasController extends Controller
{
    public function index()
    {
       return view ('admin.medicinas.index');
    }
}

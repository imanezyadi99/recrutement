<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecrutementController extends Controller
{
    public function index()
    {
        return view('recrutement');
    }

    public function managementt()
    {
        return view('management');
    }
    
    public function productionn()
    {
        return view('production');
    }

    public function reseauxx()
    {
        return view('reseau');
    }

}

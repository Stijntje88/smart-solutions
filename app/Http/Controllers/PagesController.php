<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home'); // Retourneert de home pagina
    }

    public function about()
    {
        return view('about'); // Retourneert de about pagina
    }

    public function contact()
    {
        return view('contact'); // Retourneert de contact pagina
    }
}

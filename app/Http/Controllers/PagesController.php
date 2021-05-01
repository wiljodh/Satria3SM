<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function home()
    {
        return view('index');
    }

    public function nilainilaiperusahaan()
    {
        return view('nilainilaiperusahaan');
    }

    public function tentang3sm()
    {
        return view('tentang3sm');
    }

    public function visimisi()
    {
        return view('visimisi');
    }
}

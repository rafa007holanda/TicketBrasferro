<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('layouts.printTicket.telaPrintTicket');
    }
    public function telaLogin()
    {
        return view('TelaLogin');
    }
    public function telaAdm()
    {
        return view('TelaAdm');
    }
    public function Teste()
    {
        return view('Teste');
    }
   
}

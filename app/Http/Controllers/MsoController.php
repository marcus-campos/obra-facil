<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MsoController extends Controller
{
    public function show()
    {
        return view('pages.mso')->with(['title' => 'Painel de instrumentos', 'system' => 'Deliveryzi', 'section' => 'Dashboard', 'page' => 'Início']);
    }
}
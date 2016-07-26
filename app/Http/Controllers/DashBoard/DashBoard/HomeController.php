<?php

namespace App\Http\Controllers\DashBoard\DashBoard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function show()
    {
        return view('pages.dashboard.home.home')->with(['title' => 'Painel de instrumentos', 'system' => 'Deliveryzi', 'section' => 'Dashboard', 'page' => 'Início']);
    }

}

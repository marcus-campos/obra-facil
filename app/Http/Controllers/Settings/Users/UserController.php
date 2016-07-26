<?php

namespace App\Http\Controllers\Settings\Users;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show()
    {
        return view('pages.users.users')->with(['title' => 'Usuários', 'system' => 'Deliveryzi', 'section' => 'Usuários']);
    }
}

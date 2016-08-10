<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class PsoController extends Controller
{
    public function show()
    {
        return view('pages.pso')->with(['title' => 'Planejando a sua obra', 'system' => 'Obra Fácil', 'section' => 'Planejando sua obra', 'category' => $this->category()]);
    }

    public function category()
    {
        $category = DB::table('category')
            ->select('id', 'name')
            ->get();
        return $category;
    }

    public function service($id)
    {
        $service = DB::table('service')
            ->select('id', 'name')
            ->where('category_id', '=', $id)
            ->get();
        return view('pages.selectboxes.pso.service')->with(['service' => $service]);
    }
}

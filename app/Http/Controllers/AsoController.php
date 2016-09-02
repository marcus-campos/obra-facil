<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class AsoController extends Controller
{
    public function show()
    {
        return view('pages.aso')->with(['title' => 'Acompanhando a obra', 'system' => 'Obra fácil', 'section' => 'Acompanhando a obra', 'page' => 'Início', 'category' => $this->category()]);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class PsoController extends Controller
{
    public function show()
    {
        return view('pages.pso')->with(['title' => 'Planejando a sua obra', 'system' => 'Obra fácil', 'section' => 'Planejando sua obra', 'category' => $this->category()]);
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

    public function pservice($id)
    {
        $service = DB::table('service')
            ->select('name')
            ->where('id', '=', $id)
            ->get();
        return '<p>'.$service[0]->name.'</p>';
    }

    public function punit($id)
    {
        $service = DB::table('service')
            ->select(DB::raw("CASE measure 
                                WHEN '0' THEN 'M' 
                                WHEN '1' THEN 'M²' 
                                WHEN '2' THEN 'M³' 
                                WHEN '3' THEN 'UN' 
                                WHEN '4' THEN 'PT' 
                                END as measure" ))
            ->where('id', '=', $id)
            ->get();
        return $service[0]->measure;
    }

}

<?php

namespace App\Http\Controllers\Math;

use App\Model\ServiceHasLabor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormulasController extends Controller
{
    public function show()
    {
        $this->pso('1','51','1','8');
    }

    public function pso($serviceid, $m, $dia, $quantHoras)
    {
        $service = \DB::table('service_has_labor')
                        ->select('price_hour')
                        ->rightJoin('service','service_has_labor.service_id', '=', 'service.id')
                        ->rightJoin('labor', 'service_has_labor.labor_id', '=','labor.id')
                        ->where('service_has_labor.service_id', '=', $serviceid)
                        ->first();


        echo number_format(($total = $service->price_hour * $m / ($dia * $quantHoras)), 2, ',', '.');

    }
}

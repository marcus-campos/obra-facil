<?php

namespace App\Http\Controllers\Math;

use App\Model\ServiceHasLabor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormulasController extends Controller
{
    public function pso($serviceid, $metragem, $dia, $quantHoras)
    {
        $services = \DB::table('service_has_labor')
                        ->select('service_has_labor.price_hour as price', 'labor.name as labor', 'service.name as service')
                        ->rightJoin('service','service_has_labor.service_id', '=', 'service.id')
                        ->rightJoin('labor', 'service_has_labor.labor_id', '=','labor.id')
                        ->where('service_has_labor.service_id', '=', $serviceid)
                        ->get();

        $valores = array();

        foreach ($services as $service)
        {
            $total = $service->price * $metragem / ($dia * $quantHoras);
            $valores[] = [
                            "labor"=>$service->labor,
                            "num_labor"=>(int)$total
                         ];
        }

        return view('pages.result.pso.result')->with(['valores' => $valores, "labor"=>$service->service]);

    }
}

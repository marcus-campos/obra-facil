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
            $total = number_format((float)$total, 1, '.', '');
            $roundTotal = round($total,0,PHP_ROUND_HALF_EVEN);
            if($total < 1.0)
            {
                $valores[] = [
                    "labor"=>$service->labor,
                    "num_labor"=>1,
                    'real_labor' => $total
                ];
            }
            else
            {

                $valores[] = [
                    "labor"=>$service->labor,
                    "num_labor"=> $roundTotal,
                    'real_labor' => $total
                ];
            }

        }

        return view('pages.result.pso.result')->with(['valores' => $valores, "labor"=>$service->service]);

    }
}

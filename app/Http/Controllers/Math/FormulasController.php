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

    public function asoWorkers($serviceid)
    {
        $services = \DB::table('service_has_labor')
            ->select('service_has_labor.price_hour as price', 'labor.name as labor', 'service.name as service')
            ->rightJoin('service','service_has_labor.service_id', '=', 'service.id')
            ->rightJoin('labor', 'service_has_labor.labor_id', '=','labor.id')
            ->where('service_has_labor.service_id', '=', $serviceid)
            ->get();

        return view('pages.result.aso.result1', compact('services'));
    }

    public function aso($serviceid, $metragem, $dia, $quantHoras)
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

    public function mso($serviceid, $metragem)
    {
        $services = \DB::table('service_has_material')
            ->select('material.name as material', 'material.price', 'material.units as unidade', 'service_mat.name as service')
            ->rightJoin('service_mat','service_has_material.service_mat_id', '=', 'service_mat.id')
            ->rightJoin('material', 'service_has_material.material_id', '=','material.id')
            ->where('service_has_material.service_mat_id', '=', $serviceid)
            ->get();

        $valores = array();

        foreach ($services as $service)
        {
            $total = $service->price * $metragem;
            $valores[] = [
                "material"=>$service->material,
                "num_material"=> $total,
                "unit"=> $service->unidade
            ];
        }

        return view('pages.result.mso.result')->with(['valores' => $valores]);
    }
}

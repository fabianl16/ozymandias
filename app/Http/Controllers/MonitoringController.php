<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Http\Request;
use App\Monitoring;
use Carbon\Carbon;
 	

class MonitoringController extends Controller
 	


{
    //

    public function show()
    {
    	
    	$testMonitor= Monitoring::whereDate('created_at', '=', Carbon::now()->format('Y-m-d'))->get();
    	return view('monitoring', compact('testMonitor'));
    }


    public function store(Request $request)
    {


    	if($request->isJson()){
		$monitoring = new Monitoring;
        $monitoring->temperature = $request->temperature;
        $monitoring->ph = $request->ph;
        $monitoring->flujo = $request->flujo;
        $monitoring->salinidad = $request->salinidad;
        $monitoring->save();
        return response()->json(['OK'], 200);

    	}
    	return response()->json(['No autorizado'], 401);
       


    }

}

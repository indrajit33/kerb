<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function store(Request $request)
    {
    	if(null != $request->input('numbers'))
    	{
    		$total = array_sum($request->input('numbers'));
    		return response()->json(["total" => $total], 200);
    	}
		else
		{
			return response()->json(["total" => 'NaN'], 404);
		}
    }
}

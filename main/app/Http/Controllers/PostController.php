<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Parameter;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function ParamPost(Request $request)
    {
        $param = new Parameter;
        $param->temp = $request->temp;
        $param->humidity = $request->humidity;
        $param->pressure = $request->pressure;
        // $param->save();

        if ($param->save()) {
            return response()->json([
                "status" => "success",
                "status_code" => "200",
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Parameter;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function ParamGet(Request $request)
    {
        return Parameter::get();
    }
}

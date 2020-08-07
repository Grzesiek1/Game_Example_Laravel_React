<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function action(Request $request)
    {
        return response()->json(['charakterrr' => $request->post('character')]);
    }
}

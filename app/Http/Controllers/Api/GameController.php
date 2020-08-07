<?php

namespace App\Http\Controllers\Api;

use App\Game\Game;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function action(Request $request, Game $game)
    {
        $game->setCharacter((int)$request->post('character'));

        return response()->json($game->getResult());
    }
}

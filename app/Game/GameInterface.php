<?php
namespace App\Game;

interface GameInterface
{
    public function setCharacter(int $playerCharacter);

    public function getResult();
}

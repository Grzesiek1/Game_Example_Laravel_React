<?php

namespace App\Game;

abstract class AbstractGame
{
    /**
     * Defined value for characters
     */
    const ROCK = 1;
    const PAPER = 2;
    const SCISSORS = 3;
    const LIZARD = 4;
    const SPOCK = 5;

    /**
     * Defined descriptions for characters
     */
    const CHARACTERS = [
        self::ROCK => 'Rock',
        self::PAPER => 'Paper',
        self::SCISSORS => 'Scissors',
        self::LIZARD => 'Lizard',
        self::SPOCK => 'Spock',
    ];

    /**
     * Defined which character is resistant to what
     */
    const IMMUNITY_LIST = [
        self::ROCK => [self::SCISSORS, self::LIZARD],
        self::PAPER => [self::ROCK, self::SPOCK],
        self::SCISSORS => [self::PAPER, self::LIZARD],
        self::LIZARD => [self::SPOCK, self::PAPER],
        self::SPOCK => [self::SCISSORS, self::ROCK],
    ];
}

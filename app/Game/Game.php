<?php

namespace App\Game;

class Game extends AbstractGame implements GameInterface
{
    /**
     * @var int Character player
     */
    private $playerCharacter;

    /**
     * @var int Characters computer
     */
    private $computerCharacter;

    /**
     * @var string Result game
     */
    private $whoIsWinner;

    /**
     * Set character player
     * @param int $playerCharacter
     */
    public function setCharacter(int $playerCharacter): void
    {
        $this->playerCharacter = $playerCharacter;
    }

    /**
     * Set character computer
     */
    function computerRandCharacter(): void
    {
        $this->computerCharacter = rand(1, 4);
    }

    /**
     * Run main engine game
     */
    function run(): void
    {
        $this->computerRandCharacter();
        $playerWinner = false;
        $computerWinner = false;

        // player
        if (in_array($this->computerCharacter, self::IMMUNITY_LIST[$this->playerCharacter])) {
            $playerWinner = true;
        }

        // computer
        if (in_array($this->playerCharacter, self::IMMUNITY_LIST[$this->computerCharacter])) {
            $computerWinner = true;
        }

        if ($playerWinner) {
            $this->whoIsWinner = 'Player';
        } else if ($computerWinner) {
            $this->whoIsWinner = 'Computer';
        } else {
            $this->whoIsWinner = 'Draw';
        }
    }

    /**
     * Result game
     * @return array
     */
    public function getResult(): array
    {
        $this->run();

        return [
            'winner' => $this->whoIsWinner,
            'playerCharacter' => self::CHARACTERS[$this->playerCharacter],
            'computerCharacter' => self::CHARACTERS[$this->computerCharacter],
            'status' => 'result'
        ];
    }
}

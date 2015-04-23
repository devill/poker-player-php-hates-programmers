<?php

class Player
{
    const VERSION = "Rand lean";

    public function betRequest($game_state)
    {
        return rand(1,1000);
    }

    public function showdown($game_state)
    {
    }
}

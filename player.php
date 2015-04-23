<?php

class Player
{
    const VERSION = "Rand more";

    public function betRequest($game_state)
    {
        return 500 + rand(501,1000);
    }

    public function showdown($game_state)
    {
    }
}

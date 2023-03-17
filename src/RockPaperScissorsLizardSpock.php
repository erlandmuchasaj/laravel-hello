<?php

namespace ErlandMuchasaj\LaravelHello;

class RockPaperScissorsLizardSpock
{

    public function  rules(): string
    {
        return  'Scissors cuts paper,'. "<br>" .
                'paper covers rock,'. "<br>" .
                'rock crushes lizard,'. "<br>" .
                'lizard poisons Spock,'. "<br>" .
                'Spock smashes scissors,'. "<br>" .
                'scissors decapitates lizard,'. "<br>" .
                'lizard eats paper,'. "<br>" .
                'paper disproves Spock,'. "<br>" .
                'Spock vaporizes rock,'. "<br>" .
                'and as it always has, rock crushes scissors.';
    }

}

<?php

namespace AlexClooze\Phprainfuck\Components;

use AlexClooze\Phprainfuck\Interpreter;

class Console
{
    public function parse($input)
    {
        if ($input === 'exit') {
            return false;
        } else {

        }
    }

    public function prompt()
    {
        return readline(' >');
    }
}

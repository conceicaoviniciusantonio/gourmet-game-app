<?php

namespace App;

use App\interfaces\UIInterface;

class UI implements UIInterface
{
    public function makeQuestion(string $question): bool
    {
        $answer = null;
        while ($answer !== 's' && $answer !== 'n') {
            $this->clear();
            $answer = readline($question . " [s/n]: ");
        }
        return $answer === 's';
    }

    public function makeInputQuestion(string $message): string
    {
        $input = null;
        while (empty($input)) {
            $this->clear();
            echo $message . "\n";
            $input = readline();
        }
       return $input;
    }

    public function doWait(string $message): void
    {
       $answer = readline($message . " [ENTER/q]: ");
       if ($answer === 'q') {
           exit;
       }
    }

    public function clear(): void
    {
        system('clear');
    }
}
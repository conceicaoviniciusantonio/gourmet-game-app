<?php

require __DIR__."/vendor/autoload.php";

use App\Game;
use App\UI;

$ui = new UI();
$game = new Game($ui);

$game->play();

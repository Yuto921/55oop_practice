<?php
require_once('Player.php');

class LeBronJames extends Player
{
    function ChaseDownBlock($enemy)
    {
        echo 'チェイスダウンブロック!!!<br>';
        $enemy->shootResult -= 1;
        echo $enemy . 'のシュートをブロックした！';
    }
}
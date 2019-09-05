<?php
class BradleyStevens
{
    public $benches = [];

    public function getPlayer($player)
    {
        $this->benches[] = $player;
    }

    public function showPlayers()
    {
        echo '------- 選手一覧を見る -------<br>';
        foreach($this->benches as $bench) {
     
            echo $bench->name . '<br>';
            echo $bench->position . '<br>';
            echo $bench->height . '<br>';
            echo '<br>';
        }
        echo '---------------------------';
    }
}
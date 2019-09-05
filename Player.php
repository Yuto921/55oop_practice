<?php
class Player
{
    public $name;
    public $position;
    public $height;
    public $shootResult;
    public $shootCount;

    public function __construct($name, $position, $height)
    {
        $this->name = $name;
        $this->position = $position;
        $this->height = $height;
        $this->shootResult = 0;
        $this->shootCount = 0;
    }


    public function shoot($shooter)
    {
        echo '---------'. $shooter .'が シュートを放つ! ---------<br>';
        $this->shootCount += 1;
        
        $ransu =  rand(1, 7); // これを % 2 = 0で条件かければ、多分3/4の確率
        $ransu3pt = rand(1, 2); // 1だったら2pt, 2だったら3ptの条件分岐

        echo '( シュート結果 )<br>';
        if ($ransu % 2 == 0) {
            echo 'シュート成功!! <br>';

            if($ransu3pt == 2) {
                echo '3pt!! スリー炸裂!! <br>';
            } else {
                echo '2pt! <br>';
            }
            $this->shootResult += 1;
        } else {
            echo 'シュート失敗... <br>';
        }
    }

    public function showShootResult($shooter)
    {
        echo '---------'. $shooter . 'の シュート結果 ---------<br>';
        echo $this->shootCount . '回打って、' . $this->shootResult . '回入りました。<br>';
        echo 'シュート確率' . $this->shootResult/$this->shootCount * 100 . '%<br>';
    }
}


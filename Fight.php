<?php
trait Fight
{
    use Hewan;
    public $attackPower;
    public $defencePower;
    public function serang(Harimau $player1, Elang $player2)
    {
        echo $player1->nama . ' sedang menyerang ' . $player2->nama;
    }
    public function diserang(Elang $player1, Harimau $player2)
    {
        $darahterakhir = $player1->darah - $player2->attackPower / $player1->defencePower;
        echo $player1->nama . ' sedang diserang ';
        echo " dengan sisa darah " . $darahterakhir;
    }
}

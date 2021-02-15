<?php
class Elang
{
    use Hewan, Fight;
    public function getInfoHewan()
    {
        echo 'Nama = ' . $this->nama . ' ';
        echo ' Darah = ' . $this->darah . ' ';
        echo ' Jumlah Kaki = ' . $this->jumlahKaki . ' ';
        echo ' Keahlian = ' . $this->keahlian . ' ';
        echo ' Attack Power = ' . $this->attackPower . ' ';
        echo ' Defence Power = ' . $this->defencePower . ' ';
    }
}

<?php

class Motor
{
    public $merk;
    public $bensin;
    public $topSpeed;
    public $cc;

    public function __construct($merk, $bensin, $topSpeed, $cc)
    {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
    }

    public function jalan($jarak)
    {
        return "Bensin berkurang sebesar : " . ($jarak / 30) . " liter";
    }
}

$motor1 = new Motor('Suzuki', 5, 200, 1000);
echo "Merk Motor: " . $motor1->merk . "<br/>";
echo "Jarak Tempuh: 200km <br/>";
echo $motor1->jalan(600);

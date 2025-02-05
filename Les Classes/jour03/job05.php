<?php
require_once("./job04.php");

class Cercle extends Forme
{
    public int $radius;
    public float $pi =  3.14;
    public function __construct(?int $radius)
    {
        $this->radius = $radius;
    }

    public function aire(): int|float
    {
        $aire = $this->pi * ($this->radius * $this->radius);
        return $aire;
    }
}

$rec = new Rectangle(3, 2);
echo $rec->aire() . "<br>";
$cer = new Cercle(3);
echo $cer->aire() . "<br>";

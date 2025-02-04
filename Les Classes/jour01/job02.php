<?php
class Operation
{
    public int $nombre1;
    public int $nombre2;

    public function __construct(?int $nombre1 = 1, ?int $nombre2 = 2)
    {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    public function addition()
    {
        $add = $this->nombre1 + $this->nombre2;
        $result = "les attributs sont $this->nombre1 et $this->nombre2 et le resultat est $add !";
        return $result;
    }
};


$op1 = new Operation(3, 5);
echo ($op1->addition());

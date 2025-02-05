<?php
class Forme
{
    public function aire(): int|float
    {
        return 0;
    }
}
class Rectangle extends Forme
{
    public int $largeur;
    public int $hauteur;

    public function __construct(?int $largeur, ?int $hauteur)
    {
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function aire(): int|float
    {
        $aire = $this->largeur * $this->hauteur;
        return $aire;
    }
}
$monRectangle = new Rectangle(5, 8);
echo $monRectangle->aire() . "<br>";

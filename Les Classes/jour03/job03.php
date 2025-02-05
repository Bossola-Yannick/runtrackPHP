<?php
class Rectangle
{
    private int $longueur;
    private int $largeur;

    public function __construct(?int $longueur, ?int $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function perimetre(): int|float
    {
        $perimetre = ($this->longueur + $this->largeur) * 2;
        return $perimetre;
    }
    public function surface(): int|float
    {
        $surface = ($this->longueur * $this->largeur);
        return $surface;
    }
    public function getLongueur()
    {
        return $this->longueur;
    }
    public function getLargeur()
    {
        return $this->largeur;
    }
    public function setLongueur($newLongueur)
    {
        $this->longueur = $newLongueur;
    }
    public function setLargeur($newLargeur)
    {
        $this->largeur = $newLargeur;
    }
}

$monRectangle = new Rectangle(5, 8);
echo $monRectangle->perimetre() . "<br>";
echo $monRectangle->surface() . "<br>";

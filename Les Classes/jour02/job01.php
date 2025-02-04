<?php
class Rectangle
{
    private int $longueur;
    private int $largeur;

    public function __construct(?int $longueur = 1, ?int $largeur = 2)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur(): int
    {
        return $this->longueur;
    }
    public function getLargeur(): int
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
    public function monRectangle(): string
    {
        $result = "Mon rectangle mesure $this->largeur de largeur et $this->longueur de longueur !";
        return $result;
    }
}

$rec1 = new Rectangle();
echo ($rec1->monRectangle());
echo "<br>";
echo ($rec1->getLongueur());
echo "<br>";
echo ($rec1->getLargeur());
echo "<br>";
$rec1->setLargeur(5);
$rec1->setLongueur(10);
echo "<br>";
echo $rec1->getLargeur();
echo "<br>";
echo $rec1->getLongueur();
echo "<br>";
echo $rec1->monRectangle();

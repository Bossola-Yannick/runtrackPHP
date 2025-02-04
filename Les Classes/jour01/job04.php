<?php
class Point
{
    public int $x;
    public int $y;

    public function __construct(?int $x = 1, ?int $y = 2)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function afficherLesPoints()
    {
        $result = "les points sont $this->x et $this->y !";
        return $result;
    }
    public function afficherX()
    {
        $result = "X est égale à  $this->x !";
        return $result;
    }
    public function afficherY()
    {
        $result = "Y est égale à $this->y !";
        return $result;
    }
    public function changerX($newX)
    {
        $this->x = $newX;
        $x2 = $this->afficherX($newX);
        return $x2;
    }
    public function changerY($newY)
    {
        $this->y = $newY;
        $y2 = $this->afficherY($newY);
        return $y2;
    }
};

$op1 = new Point(2, 5);
echo ($op1->afficherLesPoints());
echo "<br>";
echo ($op1->afficherX());
echo "<br>";
echo ($op1->afficherY());
echo "<br>";
echo ($op1->changerX(6));
echo "<br>";
echo ($op1->changerY(12));
echo "<br>";
echo ($op1->afficherLesPoints());

<?php
class Personne
{
    protected int|string $age;

    function __construct(?int $age = 14)
    {
        $this->age = $age;
    }

    public function afficherAge(): string|int
    {
        return $this->age;
    }
    public function bonjour(): string
    {
        return "Hello ";
    }
    public function modifierAge($newAge): void
    {
        $this->age = $newAge;
    }
}

class Eleve extends Personne
{
    public function allerEnCours(): string
    {
        return "Je vais en cours";
    }
    public function afficherAge(): string
    {
        return "J'ai $this->age ans";
    }
}
class Professeur extends Personne
{
    private string $matiereEnseignee;

    public function __construct(?string $matiereEnseignee, ?int $age)
    {
        $this->matiereEnseignee = $matiereEnseignee;
        parent::__construct($age);
    }
    public function getMatiereEnseignee()
    {
        return $this->matiereEnseignee;
    }
    public function enseigner(): string
    {
        return "Le cours de $this->matiereEnseignee va commencer";
    }
}


$lucas = new Eleve();
echo $lucas->bonjour() . $lucas->afficherAge() . "<br>";
echo $lucas->bonjour() . $lucas->allerEnCours() . "<br>";
$lucas->modifierAge(15);
echo $lucas->bonjour() . $lucas->afficherAge() . "<br>";
$math = new Professeur("Math", 40);
echo $math->bonjour() . $math->enseigner() . "j'ai " . $math->afficherAge() . "<br>";

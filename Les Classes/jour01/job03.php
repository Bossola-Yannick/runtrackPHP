<?php
class Personne
{
    public string $nom;
    public string $prenom;

    function __construct(?string $myNom = "nom inconu", ?string $myPrenom = "prenom inconu")
    {
        $this->nom = $myNom;
        $this->prenom = $myPrenom;
    }

    function SePresenter()
    {
        $myName = "Je suis $this->nom $this->prenom";
        return $myName;
    }
}

$pers1 = new Personne("john", "doe");
$pers2 = new Personne("Jean", "Dupond");
echo ($pers1->SePresenter());
echo "<br>";
echo ($pers2->SePresenter());

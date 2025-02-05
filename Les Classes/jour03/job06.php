<?php
class Vehicule
{
    protected string $marque;
    protected string $modele;
    protected int $annee;
    protected int $prix;

    public function __construct(?string $marque, ?string $modele, ?int $annee, ?int $prix)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
    }

    public function informationsVehicule()
    {
        return "Marque = " . $this->marque . "<br> Modele = " . $this->modele . "<br> Année = " . $this->annee . "<br> prix = " . $this->prix;
    }
    protected function demarrer()
    {
        return "Attention, je roule";
    }
}

class Voiture extends Vehicule
{
    private int $porte;

    public function __construct(?string $marque, ?string $modele, ?int $annee, ?int $prix, ?int $porte = 4)
    {
        parent::__construct($marque, $modele, $annee, $prix);
        $this->porte = $porte;
    }

    public function informationsVehicule()
    {
        return parent::informationsVehicule() . "<br> Nombre de porte = " . $this->porte;
    }
    public function demarrer()
    {
        return parent::demarrer() . " à 130km/h";
    }
}
class Moto extends Vehicule
{
    private int $roue;

    public function __construct(?string $marque, ?string $modele, ?int $annee, ?int $prix, ?int $roue = 4)
    {
        parent::__construct($marque, $modele, $annee, $prix);
        $this->roue = $roue;
    }
    public function informationsVehicule()
    {
        return parent::informationsVehicule() . "<br> Nombre de roue = " . $this->roue;
    }
    public function demarrer()
    {
        return parent::demarrer() . " à 230km/h";
    }
}

$leon = new Voiture("SEAT", "Leon", 2020, 12500);
echo $leon->informationsVehicule() . "<br>";
echo $leon->demarrer();
echo "<br><br>";
$kawa = new Moto("Kawasaki", "Z750", 2005, 1000);
echo $kawa->informationsVehicule() . "<br>";
echo $kawa->demarrer();

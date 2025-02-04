<?php
class Voiture
{
    private string $marque;
    private string $modele;
    private int $kilometrage;
    private bool $en_marche;
    private int $reservoir;

    public function __construct(?string $marque = "", ?string $modele = "", ?int $kilometrage = 0)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $kilometrage;
        $this->en_marche = false;
        $this->reservoir = 50;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }
    public function getModele(): string
    {
        return $this->modele;
    }
    public function getKilometrage(): int
    {
        return $this->kilometrage;
    }
    public function getEnMarche(): bool
    {
        return $this->en_marche;
    }
    public function setMarque($newMarque)
    {
        $this->marque = $newMarque;
    }
    public function setModele($newModele)
    {
        $this->modele = $newModele;
    }
    public function setKilometrage($newKilometrage)
    {
        $this->kilometrage = $newKilometrage;
    }
    public function setEnMarche($newEnMarche)
    {
        $this->en_marche = $newEnMarche;
    }

    public function demarrer(): string
    {
        if ($this->reservoir > 5) {
            $this->reservoir -=  15;
            $this->en_marche = true;
            return "VROOMMMM";
        } else {
            return "Pas assez d'essence pour démarrer !!!";
        }
    }
    public function arreter()
    {
        $this->en_marche = FALSE;
    }
    public function verifier_plein(): int
    {
        return $this->reservoir;
    }
}

$leon = new Voiture("Seat", "LeonIII", 120000);
echo $leon->demarrer();
echo "<br>";
echo $leon->demarrer();
echo "<br>";
echo $leon->demarrer();
echo "<br>";
echo $leon->demarrer();

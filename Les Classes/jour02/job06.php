<?php
$plats = [
    ["tomate", 5],
    ["pomme", 3],
    ["concombre", 2],
    ["poire", 2],
    ["mangue", 8],
    ["fraise", 4]
];



class Commande
{
    private int $numCommande;
    private array $listePlat;
    private string $statut;

    public function __construct(?int $numCommande = 0, ?string $listePlat, ?string $statut = "")
    {
        $this->numCommande = $numCommande;
        $this->listePlat = $listePlat;
        $this->statut = $statut;
    }
}

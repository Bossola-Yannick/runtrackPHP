<?php

class Livre
{
    private string $titre;
    private string $auteur;
    private int $nbPages;
    private string $disponible;

    function __construct(?string $titre = "null", ?string $auteur = "null", ?int $nbPages = 0, ?bool $disponible = TRUE)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbPages = $nbPages;
        $this->disponible = $disponible;
    }

    public function getTitre()
    {
        return $this->titre;
    }
    public function getAuteur()
    {
        return $this->auteur;
    }
    public function getnbPages()
    {
        return $this->nbPages;
    }
    public function setTitre($newTitre)
    {
        $this->titre = $newTitre;
    }
    public function setAuteur($newAuteur)
    {
        $this->auteur = $newAuteur;
    }
    public function setnbPages($newNbPages)
    {
        if (($newNbPages < 0) || (!is_int($newNbPages))) {
            $this->nbPages = 0;
            return "erreur du nombre de page ";
        } else $this->nbPages = $newNbPages;
    }

    public function verification()
    {
        if ($this->disponible) {
            return TRUE;
        } else return FALSE;
    }
    public function emprunter()
    {
        if ($this->verification()) {
            $this->disponible = FALSE;
        } else return "livre indisponible";
    }
    public function rendre()
    {
        $this->disponible = TRUE;
    }
}

$livre1 = new Livre("les nains", "pas moi", 452);
echo ($livre1->getTitre() . PHP_EOL);
echo ($livre1->getAuteur() . PHP_EOL);
echo ($livre1->getnbPages() . PHP_EOL);
echo ($livre1->verification() . PHP_EOL);
$livre1->emprunter();
echo "emprunté mais livre indispo " . ($livre1->emprunter()) . PHP_EOL;
$livre1->rendre();
echo "le livre à été rendu " . ($livre1->emprunter() . PHP_EOL);
// echo ($livre1->getTitre(). PHP_EOL);
// echo ($livre1->getAuteur(). PHP_EOL); 
// echo ($livre1->getnbPages(). PHP_EOL);
// echo "livre empunter " . ($livre1->verification(). PHP_EOL);
// $livre1->rendre();
// echo ($livre1->getTitre(). PHP_EOL); 
// echo ($livre1->getAuteur(). PHP_EOL);
// echo ($livre1->getnbPages(). PHP_EOL);
// echo "livre rendu " . ($livre1->verification(). PHP_EOL);

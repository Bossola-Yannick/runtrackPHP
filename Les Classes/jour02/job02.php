<?php
class Livre
{
    private string $titre;
    private string $auteur;
    private int $nbPages;

    function __construct(?string $titre = "null", ?string $auteur = "null", ?int $nbPages = 0)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbPages = $nbPages;
    }

    function getTitre()
    {
        return $this->titre;
    }
    function getAuteur()
    {
        return $this->auteur;
    }
    function getnbPages()
    {
        return $this->nbPages;
    }
    function setTitre($newTitre)
    {
        $this->titre = $newTitre;
    }
    function setAuteur($newAuteur)
    {
        $this->auteur = $newAuteur;
    }
    function setnbPages($newNbPages)
    {
        if (($newNbPages < 0) || (!is_int($newNbPages))) {
            $this->nbPages = 0;
            return "erreur du nombre de page ";
        } else $this->nbPages = $newNbPages;
    }
}
$livre1 = new Livre();
echo "mon livre1 non renseigné : " . ($livre1->getTitre());
echo "<br>";
echo "mon livre1 non renseigné : " . ($livre1->getAuteur());
echo "<br>";
echo "mon livre1 non renseigné : " . ($livre1->getnbPages());
echo "<br>";
echo ($livre1->setTitre("naruto"));
echo "mon livre1 renseigné : " . ($livre1->getTitre());
echo "<br>";
echo ($livre1->setAuteur("pas Moi"));
echo "mon livre1 renseigné : " . ($livre1->getAuteur());
echo "<br>";
echo ($livre1->setnbPages(120));
echo "mon livre1 renseigné : " . ($livre1->getnbPages());
echo "<br>";
$livre2 = new Livre("Les Nains", "Toujours pas MOI !", 0);
echo "mon livre2 renseigné : " . ($livre2->getTitre());
echo "<br>";
echo "mon livre2 renseigné : " . ($livre2->getAuteur());
echo "<br>";
echo "mon livre2 renseigné : " . ($livre2->getnbPages());
echo "<br>";
echo ($livre2->setnbPages(-26));
echo $livre2->getnbPages();
echo "<br>";
echo ($livre2->setnbPages(452));
echo "mon livre2 renseigné : " . ($livre2->getnbPages());

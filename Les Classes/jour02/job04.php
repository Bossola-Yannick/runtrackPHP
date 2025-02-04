<?php
class Student
{
    private string $prenom;
    private string $nom;
    private int $nbStudent;
    private int $credit;
    private string $level;

    function __construct(?string $prenom = "inconu", ?string $nom = "inconu", ?int $nbStudent = 0, ?int $credit = 0)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->nbStudent = $nbStudent;
        $this->credit = $credit;
        $this->level = $this->studentEval();
    }

    public function add_credits($plus)
    {
        if ($plus < 0) {
            return "veuillez entré une valeur positive";
        } else $this->credit = $this->credit + $plus;
        $this->level = $this->studentEval();
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getNbStudent()
    {
        return $this->nbStudent;
    }
    public function getCredit()
    {
        return $this->credit;
    }
    public function getLevel()
    {
        return $this->level;
    }

    private function studentEval()
    {
        if ($this->credit >= 90) {
            return "Excellent";
        } elseif ($this->credit >= 80) {
            return "Très Bien";
        } elseif ($this->credit >= 70) {
            return "Bien";
        } elseif ($this->credit >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }

    public function studentInfo()
    {
        return "Non = " . $this->getNom() . "<br> Prenom = " . $this->getPrenom() . " <br> Id = " . $this->getNbStudent() . "<br>Niveau = " . $this->getLevel() . "<br>Credit = " . $this->getCredit();
    }
}
$student = new Student("John", "Doe", 145, 20);
echo $student->studentInfo();
echo "<br><br>";

$student->add_credits(20);
$student->add_credits(20);
$student->add_credits(10);
$student->add_credits(10);

echo ($student->studentInfo());

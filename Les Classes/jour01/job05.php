<?php
class Animal
{
    public int $age;
    public string $prenom;

    public function __construct(?int $age = 1, ?string $prenom = "")
    {
        $this->age = $age;
        $this->prenom = $prenom;
    }
}

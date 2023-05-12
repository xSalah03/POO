<?php

namespace Src\Ecole;

class Etudiant
{
    public string $firstName;
    public string $lastName;

    public function __construct($f, $l)
    {
        $this->firstName = $f;
        $this->lastName = $l;
    }

    public function getFullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}

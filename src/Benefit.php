<?php

namespace App;
class Benefit
{
    public $name;
    public $descriptionShort;
    public $descriptionLong;
    public $link;
    public $imgLogo;
    public $imgBackground;
    public $city;

    public function __construct($name, $descriptionShort, $descriptionLong, $link, $imgLogo, $imgBackground, $city)
    {
        $this->name = $name; 
        $this->descriptionShort = $descriptionShort;
        $this->descriptionLong = $descriptionLong;
        $this->link = $link;
        $this->imgLogo = $imgLogo;
        $this->imgBackground = $imgBackground;
        $this->city = $city;
    }

    public function showBenefit()
    {
        echo "El valor del argumento 1 es: " . $this->name . "<br>";
        echo "El valor del argumento 1 es: " . $this->descriptionShort . "<br>";
        echo "El valor del argumento 1 es: " . $this->descriptionLong . "<br>";
        echo "El valor del argumento 1 es: " . $this->link . "<br>";
        echo "El valor del argumento 1 es: " . $this->imgLogo . "<br>";
        echo "El valor del argumento 1 es: " . $this->imgBackground . "<br>";
        echo "El valor del argumento 1 es: " . $this->city . "<br>";
    }
}

?>
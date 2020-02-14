<?php



class sorcier extends personnage
{
    public function __construct()
    {
        parent::__construct();

        $this->x=125;
        $this->y=125;
    }
}
// - Cette classe va hériter de la classe personnage
// - Vous allez surcharger le constructeur de la classe sorcier pour que le constructeur
// ait exactement le même comportement que le constructeur de la classe personnage
// - A la suite de la surcharge du constructeur, vous définirez les propriétés x et y à 125
<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 12/12/2018
 * Time: 10:58
 */

class princesse extends personnage
{

    private $saved;

    public function __construct()
    {
        // Surcharge de la méthode construct, on exécute celle de la classe parent puis on redéfinit
        // les propriétés qui sont différentes par rapport à la classe mère.
        parent::__construct();

        // Définition des propriétés propres à cette classe
        $this->saved = 0;
        $this->x = 450;
        $this->y = 450;
    }


} 
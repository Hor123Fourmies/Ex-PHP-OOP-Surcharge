<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:35
 */

// J'inclue mes deux classes ici, faites bien attention à l'ordre d'inclusion, comme la classe dragon hérite
// de la classe personnage, je dois inclure la classe personnage avant d'inclure la classe dragon

require"classes/personnage.php";
require"classes/dragon.php";
require"classes/princesse.php";
require"classes/sorcier.php";

// Création d'une instance de la classe personnage
$humain = new personnage();
$humain->setNom("Peter");
echo $humain->getNom();
echo "<br>";

// Création d'une instance de la classe dragon
$dragon = new dragon();
$dragon->setNom("Elliott");
echo $dragon->getNom();
echo "<br>";

// Création d'une instance de la classe princesse
$princesse = new princesse();
$princesse->setNom("Vivianne");
echo $princesse->getNom();
echo "<br>";

// Création d'une instance de la classe sorcier
$sorcier = new sorcier();
$sorcier->setNom("Sorcier");
echo $sorcier->getNom();
echo "<br>";
echo $sorcier->x;
echo "<br>";


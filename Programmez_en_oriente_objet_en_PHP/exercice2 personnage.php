<?php 
////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////// Cours POO  ////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////

/* Je commence par créer une classe.

une classe regroupe des membres, méthodes et propriétés communs à un ensemble d'objets. 

La classe déclare, des "attributs" représentant // l'état des objets // et des // méthodes // représentant leur *comportement*

*/

class Personnage // Je créer une classe que j'appelle personnage
{
    private $_experience = 50; //Ceci est un attribut //privé//, On peut les voirs comme les données des objets.
    private $_force = 2;
    private $_sante = 100;


    public function afficherExperience()
    {
        echo $this->_experience; // $this-> sert à 
    }

    public function gagnerExperience()
    {
        // On ajoute 1 à notre attribut $_experience.
        $this->_experience = $this->_experience + 1;
    }
}

$perso = new Personnage; //Je lance une instance de ma classe Personnage, $perso devient donc un Objet.
$perso->gagnerExperience(); // Ici je dit à mon Objet $perso , utilise la méthode gagnerExperience() sur cet objet.
$perso->afficherExperience(); // Ici je dit à mon Objet $perso , utilise la méthode afficherExperience() sur cet objet.














































































?>
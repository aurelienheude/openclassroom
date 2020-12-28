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
    public function parler()
    {
        echo "Je suis un personnage";
    }
}

$perso = new Personnage; //Je transforme ma variable en un Objet Personnage.
$perso->parler(); // Ici je dit à mon Objet $perso , utilise la méthode parler() sur cet objet.


// IMPORTANT !!! pour utilisé une méthode sur un objet j'utilise donc : -> 

// l'exercice réalisé est donc facile à comprendre, mais un peu trop simpliste. voyon comment on peut rendre une class plus utile.






























?>
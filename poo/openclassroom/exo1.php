<?php
class Personnage // Présence du mot-clé class suivi du nom de la classe.
{
    // Déclaration des attributs et méthodes ici.


    private $_force = 20;            // La force du personnage, par défaut à 50.
    private $_localisation = 'Lyon'; // Sa localisation, par défaut à Lyon.
    private $_experience = 1;        // Son expérience, par défaut à 1.
    private $_degats = 0;            // Ses dégâts, par défaut à 0.


      // Nous déclarons une méthode dont le seul but est d'afficher un texte.
    public function parler()
    {
        echo 'Je suis un personnage !';
    }

    public function deplacer() // Une méthode qui déplacera le personnage (modifiera sa localisation).
    {

    }
        
    public function frapper(Personnage  $persoAFrapper)
    {
        $persoAFrapper->_degats += $this->_force;
    }
        
    public function gagnerExperience() // Une méthode augmentant l'attribut $experience du personnage.
    {
        // On ajoute 1 à notre attribut $_experience.
        $this->_experience++;
    }


    //  les getters
    // Ceci est la méthode degats() : elle se charge de renvoyer le contenu de l'attribut $_degats.
    public function degats()
    {
        return $this->_degats;
    }
            
    // Ceci est la méthode force() : elle se charge de renvoyer le contenu de l'attribut $_force.
    public function force()
    {
        return $this->_force;
    }
            
    // Ceci est la méthode experience() : elle se charge de renvoyer le contenu de l'attribut $_experience.
    public function experience()
    {
        return $this->_experience;
    }


    // les setters  toujours bien valider
    // Mutateur chargé de modifier l'attribut $_force.
    public function setForce($force)
    {
        if (!is_int($force)) // S'il ne s'agit pas d'un nombre entier.
        {
        trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
        return;
        }
        
        if ($force > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
        {
        trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
        return;
        }
        
        $this->_force = $force;
    }
    
    // Mutateur chargé de modifier l'attribut $_experience.
    public function setExperience($experience)
    {
        if (!is_int($experience)) // S'il ne s'agit pas d'un nombre entier.
        {
        trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
        return;
        }
        
        if ($experience > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
        {
        trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
        return;
        }
        
        $this->_experience = $experience;
    }
}


$perso1 = new Personnage; // Un premier personnage
$perso2 = new Personnage; // Un second personnage

$perso1->setForce(10);
$perso1->setExperience(2);

$perso2->setForce(90);
$perso2->setExperience(58);

$perso1->frapper($perso2);  // $perso1 frappe $perso2
$perso1->gagnerExperience(); // $perso1 gagne de l'expérience

$perso2->frapper($perso1);  // $perso2 frappe $perso1
$perso2->gagnerExperience(); // $perso2 gagne de l'expérience

echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.<br />';
echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br />';
echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.<br />';
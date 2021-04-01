<?php
class Personnage
{
    private $_id,
        $_degats,
        $_nom;



    const CEST_MOI = 1; // Constante renvoyée par la méthode `frapper` si on se frappe soi-même.
    const PERSONNAGE_TUE = 2; // Constante renvoyée par la méthode `frapper` si on a tué le personnage en le frappant.
    const PERSONNAGE_FRAPPE = 3; // Constante renvoyée par la méthode `frapper` si on a bien frappé le personnage.



    // On appel l hydatre pour que nos donnees soit hydrater a l instanciation de la classe
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
    /**
     * on hydrate nos donnees, on regarde automatiquement si 
     * la methode set existe pour assigner les propietes avec le set
     *  
     * */
    public function hydrate(array $donnees)
    {

        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // METHOD //

    public function frapper(Personnage $perso)
    {
        if ($perso->id() == $this->_id) {
            return self::CEST_MOI;
        }


        // On indique au personnage frappé qu'il doit recevoir des dégâts.
        return $perso->recevoirDegats();
    }

    public function recevoirDegats()
    {
        $this->_degats += 5;
        // On augmente de 5 les dégâts.


        if ($this->_degats >= 100) {
            return self::PERSONNAGE_TUE;
        }
        // Si on a 100 de dégâts ou plus, la méthode renverra une valeur signifiant que le personnage a été tué.
        return self::PERSONNAGE_FRAPPE;
        // Sinon, elle renverra une valeur signifiant que le personnage a bien été frappé.
    }


    public function nomValide()
    {
        return !empty($this->_nom);
    }

    // GETTERS //

    public function id()
    {
        return $this->_id;
    }
    public function degats()
    {
        return $this->_degats;
    }
    public function nom()
    {
        return $this->_nom;
    }

    // SETTERS //

    public function setDegats($degats)
    {
        $degats = (int) $degats;

        if ($degats >= 0 && $degats <= 100) {
            $this->_degats = $degats;
        }
    }

    public function setId($id)
    {
        $id = (int) $id;

        if ($id > 0) {
            $this->_id = $id;
        }
    }

    public function setNom($nom)
    {
        if (is_string($nom)) {
            $this->_nom = $nom;
        }
    }
}

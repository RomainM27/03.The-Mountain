<?php

class Voiture
{
    protected $ima,
        $img,
        $dateInit,
        $km,
        $modele,
        $marque,
        $couleur,
        $poid,
        $utilitaire,
        $free,
        $usure,
        $dateNow,
        $pays;

    const PAYS_BELGIQUE = "Belgique";
    const PAYS_FRANCE = "France";
    const PAYS_ALLEMAGNE = "Allemagne";


    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    // HYDRATE
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
    public function display()
    {
        echo "<tr>" . $this->td($this->img) . $this->td($this->ima) . $this->td($this->pays) . $this->td($this->modele) . $this->td($this->marque) . $this->td($this->utilitaire) . $this->td($this->couleur) . $this->td($this->poid) . $this->td($this->km) . $this->td($this->usure) . $this->td($this->free) . $this->td($this->dateInit) . $this->td($this->dateNow) . "</tr>";
    }
    public function td($element)
    {
        return "<td> $element</td>";
    }

    public function test()
    {
        echo $this->ima . "<br>";
        echo $this->dateInit . "<br>";
        echo $this->dateNow . " age voiture<br>";
        echo $this->km . "<br>";
        echo $this->modele . "<br>";
        echo $this->couleur . "<br>";
        echo $this->poid . "<br>";
        echo $this->utilitaire . "<br>";
        echo $this->free . "<br>";
        echo $this->usure . "<br>";
        echo $this->pays . "<br>";
    }
    // GETTER //
    /**
     * Get the value of ima
     */
    public function getIma()
    {
        return $this->ima;
    }

    /**
     * Get the value of dateInit
     */
    public function getDateInit()
    {
        return $this->dateInit;
    }

    /**
     * Get the value of km
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * Get the value of modele
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Get the value of marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Get the value of couleur
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Get the value of poid
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * Get the value of utilitaire
     */
    public function getUtilitaire()
    {
        return $this->utilitaire;
    }

    /**
     * Get the value of free
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * Get the value of usure
     */
    public function getUsure()
    {
        return $this->usure;
    }

    /**
     * Get the value of dateNow
     */
    public function getDateNow()
    {
        return $this->dateNow;
    }

    /**
     * Set the value of ima
     *
     * @return  self
     */
    public function setIma($ima)
    {
        $this->ima = $ima;
        $this->setPays($ima);
    }


    // SETTER //
    /**
     * Set the value of dateInit
     *
     * @return  self
     */
    public function setDateInit($dateInit)
    {
        $this->dateInit = $dateInit;
        $this->setDateNow($dateInit);
    }

    /**
     * Set the value of km
     *
     * @return  self
     */
    public function setKm($km)
    {
        $km = (int) $km;
        $this->km = $km;
        $this->setUsure($km);
    }

    /**
     * Set the value of modele
     *
     * @return  self
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
        $this->setFree($marque);
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * Set the value of poid
     *
     * @return  self
     */
    public function setPoid($poid)
    {
        $poid = (float) $poid;
        $this->poid = $poid;
        $this->setUtilitaire($poid);
    }

    /**
     * Set the value of utilitaire
     *
     * @return  self
     */
    public function setUtilitaire($poid)
    {
        if ($poid > 3.5) return $this->utilitaire = "commerciale";
        $this->utilitaire = "utilitaire";
    }


    /**
     * Set the value of free
     *
     * @return  self
     */
    public function setFree($marque)
    {
        ("audi" == strtolower($marque)) ? $this->free = "Reserved" : $this->free = "Free";
    }

    /**
     * Set the value of usure
     *
     * @return  self
     */
    public function setUsure($km)
    {
        if ($km < 100) $this->usure = "Low";
        if ($km > 200) $this->usure = "Hight";
        if ($km <= 200 && $km >= 100) $this->usure = "Middle";
    }

    /**
     * Set the value of dateNow
     *
     * @return  self
     */
    public function setDateNow($dateNow)
    {
        $dateInit = $dateNow;
        $aujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($dateInit), date_create($aujourdhui));
        $this->dateNow = $diff->format('%y');
    }

    /**
     * Get the value of pays
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */
    public function setPays($ima)
    {
        $letters = strtolower(substr($ima, 0, 2));
        if ($letters == "be") $this->pays = self::PAYS_BELGIQUE;
        if ($letters == "fr") $this->pays = self::PAYS_FRANCE;
        if ($letters == "de") $this->pays = self::PAYS_ALLEMAGNE;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return "$this->img";
    }

    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setImg($img)
    {
        (!empty($img)) ? $this->img = "<img scr='.base_url.''img/$img' alt='Une voiture'>" : $this->img = "Not Found";
    }
}

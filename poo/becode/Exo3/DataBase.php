<?php
class DataBase
{
    private $_host,
        $_dbname,
        $_user,
        $_passord;

    const PDO_ATTRIBUT = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];


    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees)
    {

        foreach ($donnees as $key => $value) {
            $method = 'set' . $key;
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function connextion()
    {
        return new PDO("mysql:host=$this->_host;dbname=$this->_dbname;charset=UTF8;", $this->_user, $this->_password, self::PDO_ATTRIBUT);
    }
    /**
     * Set the value of _host
     *
     * @return  self
     */
    public function set_host($_host)
    {
        $this->_host = $_host;
    }

    /**
     * Set the value of _dbname
     *
     * @return  self
     */
    public function set_dbname($_dbname)
    {
        $this->_dbname = $_dbname;
    }

    /**
     * Set the value of _user
     *
     * @return  self
     */
    public function set_user($_user)
    {
        $this->_user = $_user;
    }

    /**
     * Set the value of _passord
     *
     * @return  self
     */
    public function set_passord($_passord)
    {
        $this->_passord = $_passord;
    }
}

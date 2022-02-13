<?php
class DB
{
    private $dsn;
    private $host;
    private $char;
    private $database;
    private $user;
    private $pass;
    private $con;

    public function __construct($host,$database,$char,$user,$pass)
    {
        $this->host=$host;
        $this->char=$char;
        $this->database=$database;
        $this->user=$user;
        $this->pass=$pass;
        $this->dsn='mysql:host='.$this->host.';dbname='.$this->database.';charset='.$this->char;
    }

    public function connect()
    {
        try 
        {
            $this->con= new PDO($this->dsn,$this->user,$this->pass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->con;
        } catch (PDOException $e) {
            return "Erreur de connexion";
        }
    }
}
   
   
<?php 

use PDO;
use PDOException;

class DB
    {
        private $host;
        private $name;
        private $char;
        private $user;
        private $pass;
        private $con;

        public function __construct($host,$name,$char,$user,$pass)
        {
            $this->host=$host;
            $this->name=$name;
            $this->char=$char;
            $this->user=$user;
            $this->pass=$pass;
        }

        public function connexion()
        {
            try {
                $dsn = "mysql:host=".$this->host.";dbname=".$this->name.";charset=".$this->char;
                $this->con = new PDO($dsn, $this->user, $this->pass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->con;
            }
            catch (PDOException $e)
            {
                // die("Connection failed:". $e->getMessage());
                return false;
            }
        }
}
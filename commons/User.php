<?php

class User{
    private $login;
    private $pwd;
    private $con;

    public function __construct($login,$pwd,$con)
    {
        $this->con=$con;
         $this->login=$login;
          $this->pwd=$pwd;
    }

    public function authUser()
    {
        $query= "SELECT * FROM administrateur WHERE login=:login AND pwd=:pwd";
       
        $stn=$this->con->prepare($query);
        $stn->bindParam('login',$this->login);
        $stn->bindParam('pwd',$this->pwd);

        if($stn->execute())
        {
            return true;
        }
        else
        {
            echo "<script>echo'identifiant invalide'</script>";
        }
    }

}
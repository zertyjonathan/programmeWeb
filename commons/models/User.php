<?php 
class User
{
    private $id;
    private $login;
    private $pwd;
    private $name;
    private $username;
    private $gender;
    private $datenaiss;
    private $con;
   
    public function __construct()
    {       
    }

    public function setId($id)
    {
        $this->id=$id;
    }
    public function setcon($con)
    {
        $this->con=$con;
    }

    public function setLogin($login)
    {
        $this->login=$login;
    }

    public function setPwd($pwd)
    {
        $this->pwd=$pwd;
    }
    
    public function setName($name)
    {
        $this->name=$name;
    }

    public function setUsername($username)
    {
        $this->username=$username;
    }

    public function setGenre($genre)
    {
        $this->gender=$genre;
    }

    public function setDatenaiss($datenaiss)
    {
        $this->datenaiss=$datenaiss;
    }

    public function login()
    {
        try {
            $req="SELECT * FROM users where login=:login AND password=:pwd";
            $stn=$this->con->prepare($req);
            $stn->bindParam('login',$this->login);
            $stn->bindParam('pwd',$this->pwd);
        
            if($stn->execute())
            {
                $data= $stn->fetch();
                if($data)
                {
                    session_start();
                    $_SESSION['user']=$data;
                    return true;
                }
                else
                {
                    return false;
                }
            }
        } catch (\Throwable $th) {
                return 'error';
        }
    }

    public function getname()
    {
        return "la monde";
    }

    public  function create()
    {
        try {
            $req= "INSERT INTO users(name,surname,gender,datenaiss) values(:name,:username,:gender,:datenaiss)";
            $stn=$this->con->prepare($req);
            $stn->bindParam(':name',$this->name);
            $stn->bindParam(':username',$this->username);
            $stn->bindParam(':gender',$this->gender);
            $stn->bindParam(':datenaiss',$this->datenaiss);

            if($stn->execute())
            {
                
                header('Location: '._HTTP_PATH_BASE_.'/?app=home');
            }
            else
            {
                return false;
            }
        }
        catch(\PDOException $e)
        {
            return 'error';
        }
    }

    public  function read()
    {
        try {
            $req= "SELECT * FROM users";
            $stn=$this->con->prepare($req);

            if($stn->execute())
            {
                $result=$stn->fetchAll(PDO::FETCH_OBJ);
                return $result;
            }
            else
            {
                return false;
            }
        } catch (\PDOException $th) {
            return 'error';
        }
    }

    public function loggout()
    {
        session_destroy();
        header('Location: '._HTTP_PATH_BASE_);
    } 
    
    private function update(){}

    private function delete(){}

}
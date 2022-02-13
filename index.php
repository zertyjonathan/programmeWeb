<?php
    // *************  Author: Willeme ZEL PAPENDJ (willemepapendj@gmail.com)
    
    include 'init.php';
    include $apps_path['commons'].'/helpers/bdconnect.php';
    include $apps_path['commons'].'/models/User.php';
    require $apps_path['commons'].'/Link.php'; // Require the link class to manage Link in the app

    try{
        $BD= new DB(_DB_HOST_,_DB_NAME_,_DB_CHAR_,_DB_USER_,_DB_PASS_);
        $con=$BD->connect();
    }
    catch(Exception $e)
    {
        print_r($e);
    }

    $user= new User();
    $user->setcon($con);

    $link = new Link();
  
    $content = $apps_path['incs'].'/login.php'; //home page
    
    $app = $_REQUEST['app'];
    $title = "Home";
    
   
    if (isset($app)) {
        //login user
        if($app=="login" && isset($_REQUEST['login']) && isset($_REQUEST['password']))
        {
           $user->setLogin($_REQUEST['login']);
           $user->setPwd($_REQUEST['password']);
           $user->login();
           $app='home';
            header('Location: '._HTTP_PATH_BASE_.'/?app='.$app);
        }
        //logout user
        else if($app=='logout')
        {
            $user->loggout();
        }  
        //if session user exist
        if($_SESSION['user'])
        {
            if($app=="adduser" && isset($_REQUEST['name']) && isset($_REQUEST['surname'])  && isset($_REQUEST['gender'])  && isset($_REQUEST['dateborn']))
            {
                $user->setName($_REQUEST['name']);
                $user->setUsername($_REQUEST['surname']);
                $user->setGenre($_REQUEST['gender']);
                $user->setDatenaiss($_REQUEST['dateborn']);
                $user->create();
            }
             $fn = $apps_path['incs'].'/'.$app.'.php';
            if (file_exists($fn)) {
                $content = $fn;
                $linkActive=$link->getLinkActive();
            }else{
                $content = $apps_path['incs'].'/error.php';
            }
            $title = $app;
        }
        else
        {
            $link->errorLink();
        }
        // to manage the link dynamically in the header// with that logic, title will be the same with the getting app request
        
    }

    include $apps_path['incs'].'/header.php';
    include $apps_path['incs'].'/nav.php';
    include $content;
    include $apps_path['incs'].'/footer.php';

    // print_r($_SESSION['user']);
    
?>
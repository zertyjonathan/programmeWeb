<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?=$http_path['base']?>/css/style.css" />
         <link rel="stylesheet" href="<?=$http_path['base']?>/css/bases.css" />
          <link rel="stylesheet" href="<?=$http_path['base']?>/css/font-awesome/css/font-awesome.min.css" />
        <title>Ebone-<?=ucfirst($title)?></title>
    </head>
    <div id="bloc_page">
        <?php if($app){ ?>
            <header>
                
                    <div id="main_title">
                        <div id="logo">
                            <i class="fa fa-user-circle" style="font-size:70px;margin:7px"></i>
                            <div>
                                <span class="titleUser">User</span>
                                <h1><?=$_SESSION['user']['name']?></h1>
                                <h2><?=$_SESSION['user']['surname']?></h2>  
                            </div> 

                        </div>
                    </div>
                <?php } ?>
    
    <body>
<?php 
        class Link{

                private $home; 
                private $adduser;
                private $logout;
                private $linkActive;

                public function __construct($home="Home", $adduser="AddUser", $logout="logout"){
                        $this->home    = $home;
                        $this->adduser   = $adduser;
                        $this->logout   = $logout;
                        $this->linkActive= $_REQUEST['app']; 
                }
                
                public function isActive($value){
                   return $this->linkActive; 
                }

                public static function linkComposer($link) //Get and Compose the link with the global path and the GET var $app 
                {
                    if($link)
                    {
                        return _HTTP_PATH_BASE_.'/?app='.strtolower(str_replace(' ', '', $link));
                    }
                    else
                    {
                        return _HTTP_PATH_BASE_;
                    }
                }

                //*** Starting Getters Blocks
                public function getHome(){
                   
                    return  $this->home;
                }

                public function getAdduser(){
                    return  $this->adduser;
                }

                public function getLogout(){
                    return  $this->logout;
                }

                 public function getLinkActive(){
                    return  $this->linkActive;
                }

                public function errorLink()
                {
                    header('Location: '._HTTP_PATH_BASE_);
                }  


        }

?>
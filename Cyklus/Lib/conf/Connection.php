<?php

class connection{
    private $server;
    private $user;
    private $pass;
    private $post;
    private $database;
    private $link;
    function __construct() {
        $this->setconnect();
        $this->connect();  
    }
    private function setconnect() {
        require_once 'conf.php';
        $this->server=$server;
        $this->user=$user;
        $this->pass=$pass;
        $this->post=$post;
        $this->database=$database;
    }
    
    private function connect() {
        $this->link=mysqli_connect( $this->server, $this->user, $this->pass, $this->database);
        if(!$this->link){
            die(mysqli_error($this->link));
        }     
    }
    public function getConnect() {
        return $this->link;
    }
    public function close() {
        mysqli_close($this->link);
    }
}

?>
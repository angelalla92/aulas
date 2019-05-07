<?php
Class Cn{
    public $cn;
    private $host;
    private $pass;
    private $user;
    private $db;

    public function Cn(){
        $this->host="localhost";
        $this->db="aulas";
        $this->user="root";
        $this->pass="";
        $this->cn=new mysqli($this->host,$this->user,$this->pass,$this->db);

        $this->cn->set_charset("utf8");
        if($this->cn->{'connect_errno'}>0){
            return NULL;
        }else{
            return $this->cn;
        }
    }
}

?>
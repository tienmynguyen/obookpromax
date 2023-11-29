<?php
class DB{
    private $host = "localhost";
    private $dbname = "obooks";
    private $user = "root";
    private $pass = "";
    public $conn;
    public function connect(){
        $dsn ='mysql:host='.$this->host.';dbname='.$this->dbname;
        $conn =new PDO($dsn, $this->user, $this->pass);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $conn;
    }
}
?>
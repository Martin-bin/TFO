<?php
class Database{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    public function __construct(){
        $this->host = '45.87.80.53';
        $this->db = 'u961479477_tfo_bd_316';
        $this->user = 'u961479477_mtn_tfo_316';
        $this->password = 'Taco.123';
        $this->charset = 'utf8mb4';
    }
    function connect(){
        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;
        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}
?>
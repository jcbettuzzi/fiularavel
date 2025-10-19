<?php
namespace App\Models;
use PDO;

class Connection {
 
    /**
     * Connection
     * @var type 
     */
    
    private static $connBLOGAREA;
    private static $connBLOGAREAPG;
    
    public function getMDP(){
		//return true;
         //return "root";
        //return env("MYSQLMDP");        
        return getenv('MYSQLMDP');
	}
    public function getPrefixeBDD(){		
        return getenv('PREFIXBDD');
	}
    //$pdo = new PDO("mysql:host=$Myhost;dbname=$MyDbname", $MyUser, $MyMdp,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',PDO::ATTR_PERSISTENT => true));
    
    public function connectBLOGAREA() {
        
        //$Myhost = "localhost";
        //$MyUser =  "root";
        //$MyUser =  "area";
        //$MyMdp = $this->getMDP();

        $Myhost = getenv('BLOGAREAHOST');
        $MyUser = getenv('BLOGAREAUSER');
        $MyMdp = getenv('BLOGAREAMDP');
        //$MyMdp = "xtiever";
        //dd($MyMdp);
        $MyDbname = $this->getPrefixeBDD()."blogarea";        
        //$MyDbname = "blogarea";
        //$MyDbname ="rbmgnew";        
        //$pdo = new PDO("mysql:host=$Myhost;dbname=$MyDbname", $MyUser, $MyMdp,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',PDO::ATTR_PERSISTENT => true));
        $pdo = new PDO("mysql:host=$Myhost;dbname=$MyDbname", $MyUser, $MyMdp,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
     
    public static function getBLOGAREA() {
        if (null === static::$connBLOGAREA) {
            static::$connBLOGAREA = new static();
        }
 
        return static::$connBLOGAREA;
    }
    
    public function connectBLOGAREA_PG() {
        //$Myhost = "192.168.1.6";
        $Myhost = "192.168.1.18";
        //$Myhost = "192.168.3.23";
        $MyUser =  "postgres";    
        $MyMdp = "xtiever";    
        $dsn = "pgsql:host=$Myhost;port=5432;dbname=blogarea;";
        $pdo = new PDO($dsn, "postgres", "xtiever", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $pdo;
    }
     
    public static function getBLOGAREA_PG() {
        if (null === static::$connBLOGAREAPG) {
            static::$connBLOGAREAPG = new static();
        }
        return static::$connBLOGAREAPG;
    }
    



/*
    protected function __construct() {
        
    }
 
    private function __clone() {
        
    }
 
    private function __wakeup() {
        
    }
*/

}
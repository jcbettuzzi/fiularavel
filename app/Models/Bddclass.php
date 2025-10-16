<?php
namespace App\Models;
//use Config;
use PDO;
use Log;
use Session;

use App\Models\Connection as Connection;
//use Log;
//include("pagination.php");
/*
Pour utiliser l'objet PDO on est obligé de mettre use PDO. L'utilisation de \ ne fonctionne pas
On pourrait utiliser $pdo = DB::connection()->getPdo(); mais je ne sais pas bien ou se trouve la config de la base de données
pour avoir les accents
pour que laravel nous laisse gérer les exception j'ai du mettre \Exception)
*/
abstract class Bddclass
{

	final public function connectbase($base)
	{
	   //$Myhost = "localhost";
	   //$MyUser =  "root";
	   //$MyMdp = "Ladefense#8";

	   try {
		   
		    switch ($base) {
						
						case "blogarea":
								//$MyDbname = "rbmgnew";
								//$pdo = new PDO("mysql:host=$Myhost;dbname=$MyDbname", $MyUser, $MyMdp,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',PDO::ATTR_PERSISTENT => true));
								$pdo = Connection::getBLOGAREA()->connectBLOGAREA();							
								break;
								

						default:
						$errorMsg = "RBMG:Exception:bddclass mot cle inconnu =".$base;
						throw new \Exception($errorMsg);

			}
			
			return $pdo;
		 }catch (\Exception $e) {
			$ErrLine = $e->getLine();
			$ErrFile = $e->getFile();
			$errorMsg = "RBMG:Exception: Ligne=".$ErrLine. " Fichier=".$ErrFile . " Mess =" .$e->getMessage();
            throw new \Exception($errorMsg);
        }
	}
final public function GetNombreUseur($nomtable) {
		try {
		     $Pdo = $this->connectbase("rbmgnew");
			 $sqlExecSP   = "CALL NombreDeLigneTable(?)";
			 $stmt = $Pdo->prepare($sqlExecSP);
             $stmt->bindParam(1,$nomtable ,  PDO::PARAM_STR,30);
             $stmt->execute();
			 $result=$stmt->fetch();
             $NbrRecord=$result[0];
			 $stmt = null;
			 $Pdo = null;
			 return $NbrRecord;

		 }catch (Exception $e) {
            $ErrLine = $e->getLine();
			$ErrFile = $e->getFile();
			$errorMsg = "RBMG:Exception: Ligne=".$ErrLine. " Fichier=".$ErrFile . " Mess =" .$e->getMessage();
            throw new \Exception($errorMsg);
        }
		return null;
	}

	final public function traiteerreur($e) {
		  if (substr ( $e->getMessage,0,4 ) == "RBMG"		 ) {
				throw new \Exception($e->getMessage);
			}else
			{
			$ErrLine = $e->getLine();
			$ErrFile = $e->getFile();
			$errorMsg = "RBMG:PDO Exception: Ligne=".$ErrLine. " Fichier=".$ErrFile . " Mess =" .$e->getMessage();
			throw new \Exception($errorMsg);
	        }
	}

	public function getIdLog(){
		if (Session::has('idpourlog')){
			return Session::get('idpourlog');
		}else{
			return 0;
		}
		
	}
	/*
	private $Ontrace= false;

	public function SetDebug($Ondebug){
		$this->Ontrace=$Ondebug;
	}
	public function Ondebug(){
		//return true;
		return $this->Ontrace;
	}
	*/
/*
	public function EcrireLog($Proc){
		if($this->Ondebug()){
					$idpourlog = Session::get('idpourlog');
					log::critical("Offre.php idpourlog= ".$idpourlog ." :     ". $Proc);
					}
	}
	public function EcrireLogFin($Proc){
		if($this->Ondebug()){
					$idpourlog = Session::get('idpourlog');
					log::critical("Offre.php idpourlog= ".$idpourlog ." : Fin ". $Proc);
					}
	}
	*/
	public function EcrireLogueSE($Proc,$programme,$fonction,$startfin){
		if($this->getDEBUGPROCEDURE()){					
					$idpourlog = $this->getIdLog();
					//SELECT confrere_offres_diffuse_insert(?,?)
					/*
					if (strlen($Proc)> 0){
						$laproc= preg_replace("# +#", " ",trim($Proc));  // permet de remplacer des espac=es consécutifs par un espace						
						$pieces = explode(" ", $laproc);
						$Pieces =explode("(", $pieces[1]);
						$Proc=$Pieces[0];
					}
					*/
					//$start = microtime(true);					
					$filelogapp = new Filelogapp();					
					$filelogapp->logfonction_insert2($programme, $fonction,"",5,"",$Proc,$startfin);     															      
					//$let=microtime(true)-$start;
					//log::critical("temps= ".$let);
	}
}
	//public function EcrireLogueFinS($Proc,$programme,$fonction){
		/*
	public function EcrireLogueFin($Proc,$programme){
		if($this->Ondebug()){
					$idpourlog = Session::get('idpourlog');
					log::critical($programme. " idpourlog= ".$idpourlog ." : Fin ". $Proc);
					}
	}
	*/

public function getDEBUGON(){		
	if (getenv('DEBUGAPPLICATION')== "TRUE"){
		return true;
	}
	return false;
}

public function getDEBUGPROCEDURE(){		
	if (getenv('DEBUGPROCEDURE')== "TRUE"){
		return true;
	}
	return false;
}





}

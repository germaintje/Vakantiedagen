<?php 
require_once 'DataHandler.php';

class Logic {
    public function __construct() {
        $this->DataHandler = new DataHandler( "localhost", "mysql", "vakantiedagen", "root", "");
    }

    public function __destruct() {
    }

    public function Create() {
        
		// 	$voornaam       = $_POST['voornaam'];
		// 	$achternaam     = $_POST["achternaam"];
		// 	$bijnaam    = $_POST["bijnaam"];
		
		// try {
		// 	$sql    = "INSERT INTO `tabel`(`id`, `voornaam`, `achternaam`, `bijnaam`) VALUES ('id','$voornaam','$achternaam','$bijnaam')";
		// 	$result = $this->DataHandler->create( $sql );
            
        //     return $result;            
        // }catch (Exception $e) {
        //     throw $e;
        // }
    }

    public function Reads() {

        $dienstjaren = $_POST["lengte_dienst"];
        $vakantiedagen = $_POST["personeelsnummer"]; 
        $leeftijd = $_POST["leeftijd"];
        
        $afdelingsnummer = $vakantiedagen[0];
        $basisdagen = 0;
        $extradagen = 0;
        $leeftijddagen = 0;
        $jaartje = 0;
        
        if ($afdelingsnummer == 1){
           $basisdagen = 24;
        }elseif ($afdelingsnummer == 2){
            $basisdagen = 23;
        }elseif($afdelingsnummer == 3){
            $basisdagen = 22;
        }else {
            $basisdagen = 20;
        }
        
         if ($dienstjaren > 9 ){
             $extradagen = 3 ;
         }else{
             $extradagen = 0;
         }
        
         if ($leeftijd > 49){
             if($leeftijd > 54){
                $jaartje = $leeftijd - 55;
             }
             $leeftijddagen = 5;
         }else{
            
         }
        
         $totaal = $basisdagen + $extradagen + $leeftijddagen + $jaartje;

        return $totaal;
    }

}
?>
<?php

// cette fonction est appelée par les programmes batch pour mettre
// dans l'environement les variables présentes dans le fichier .env
// Le prgramme doit donner ou se trouve ce fichier
// le but est d'avoir les mêmes variables d'env entre laravel et les batchs

function mettreenplaceenvironnement($NomfichierEnv){
    $fichierenv = fopen($NomfichierEnv, 'r');
    while(!feof($fichierenv)){
        $ligne = fgets($fichierenv);
        $ligne=str_replace("\n","",$ligne); 
        //echo "ligne=" .$ligne. "\n";
        if (strlen(trim($ligne))>0) {
            $pieces = explode("=", $ligne);
            $MotCle1=trim($pieces[0]);
            $Param=trim($pieces[1]);
            if ($MotCle1 =="BLOGAREAHOST") { putenv("BLOGAREAHOST=$Param"); }            
            if ($MotCle1 =="BLOGAREAUSER") { putenv("BLOGAREAUSER=$Param"); }
            if ($MotCle1 =="BLOGAREAMDP") { putenv("BLOGAREAMDP=$Param"); }
            if ($MotCle1 =="PREFIXBDD") { putenv("PREFIXBDD=$Param");}

            //echo "Mot cle 1 = ".$MotCle1  . "        Param =". $Param ."\n" ; // piece2
        }
        
    }
    
    fclose($fichierenv);

}


<?php



include_once('../Logging.php');



use App\Logging as Logging;




try{


    $logger = new Logging();
    $nomficlog = "./log/logIndexNow.txt";
    $logger->lfile($nomficlog);


    $api_key = "hqD4pQBBZmIb2MbjoPCkx1kvW5fauNDYdgXKmhSdbYq2P5gsAqpWeiXN2VASdmTGXebqZm1OeSW7dhS7e7r4yu1NO7he6Egd3zALwPIWYikY3zVxXYiv8a8J11bR7Zq2";

    $fp = @fopen('../../sitemap01.txt', "r");

    $cpt = 0;
    // Moteurs de recherche supportant IndexNow
    $endpoints = [
        "https://www.bing.com/indexnow"
    ];

    if ($fp) {
        while (($buffer = fgets($fp, 4096)) !== false) {
            $cpt = $cpt + 1;
            //if($cpt < 2){
                //echo $buffer, PHP_EOL;
                $url = $buffer;
                echo $url;
                // Boucle pour envoyer les notifications
                foreach ($endpoints as $endpoint) {

                        $ping_url = $endpoint . "?url=" . urlencode($url) . "&key=" . $api_key;

                        //ini_set('max_execution_time', 15);
                        // Envoi de la requête
                        $response = file_get_contents($ping_url);

                        // Vérification de la réponse
                        if ($response !== false) {
                            echo "Notification envoyée pour $url à $endpoint<br>";
                            $logger->lwrite("Notification envoyée pour $url à $endpoint");
                        } else {
                            echo "Échec de la notification pour $url à $endpoint<br>";
                            $logger->lwrite("Échec de la notification pour $url à $endpoint");
                        }
                    
                }
            //}
            
        }
        if (!feof($fp)) {
            echo "Erreur: fgets() a échoué\n";
        }

        fclose($fp);
    }


}catch (Exception $e) {	                 
    $ErrLine = $e->getLine();
    $ErrFile = $e->getFile();			
    $errorMsg = "Exception: Ligne=".$ErrLine. " Fichier=".$ErrFile . " Mess =" .$e->getMessage(); 				
    $logger->lwrite($errorMsg);
    //Log::critical('Erreur indexNow: '.$errorMsg);
    echo $errorMsg;				
    echo "\n";				
    } 
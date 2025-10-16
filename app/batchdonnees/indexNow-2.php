<?php

//namespace App;
require_once __DIR__ . '/../../vendor/autoload.php';
include_once('../Logging.php');



use App\Logging;
use App\Models\Blogdata;

include("../Http/Controllers/environnementmodule.php");




try{

    // Une page avec statut 404 ou 410. Cela garantit que les moteurs de recherche le retirent rapidement de leur index.

    //var_dump(realpath('../Models/Blogdata.php'));die();
    mettreenplaceenvironnement("../../.env"); 
    $logger = new Logging();
    $nomficlog = "./log/logIndexNow-2.txt";
    $logger->lfile($nomficlog);
    $blogData = new Blogdata();

    $api_key = "hqD4pQBBZmIb2MbjoPCkx1kvW5fauNDYdgXKmhSdbYq2P5gsAqpWeiXN2VASdmTGXebqZm1OeSW7dhS7e7r4yu1NO7he6Egd3zALwPIWYikY3zVxXYiv8a8J11bR7Zq2";


    $allUrl = $blogData->indexnow_select_all();
    foreach($allUrl as $oneUrl){

        /*
        // indexer toutes les url
        if(!empty($oneUrl['url'])){
                    $url = $oneUrl['url'];
                    $endpoint = "https://www.bing.com/indexnow";
                    $ping_url = $endpoint . "?url=" . urlencode($url) . "&key=" . $api_key;
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
        */            

        //indexer image principale
        if(!empty($oneUrl['image_location'])){
            $endpoint = "https://www.bing.com/indexnow";
            // Les URLs à indexer
            $urls = [
                $oneUrl['image_location'], // URL de l'image
                $oneUrl['url'] // (Facultatif) URL de la page contenant l'image
            ];

            // Préparer les données pour la requête POST
            $data = [
                "host" => "flexinuse.fr",
                "key" => $api_key,
                "keyLocation" => "https://flexinuse.fr/key.txt",
                "urlList" => $urls
            ];

            // Convertir les données en JSON
            $jsonData = json_encode($data);

            // Configurer le contexte de la requête HTTP
            $options = [
                'http' => [
                    'header' => "Content-Type: application/json\r\n",
                    'method' => 'POST',
                    'content' => $jsonData,
                ],
            ];

            $context = stream_context_create($options);

            // Envoyer la requête POST
            $response = file_get_contents($endpoint, false, $context);

            if ($response === false) {
                //echo "Erreur lors de l'envoi de la requête à IndexNow.";
                $logger->lwrite("Erreur lors de l'envoi de la requête à IndexNow pour l'image ".$oneUrl['image_location']." et la reponse de l'API: ".$response);
            } else {
                //echo "Réponse de l'API : " . $response;
                $logger->lwrite("ok, Réponse de l'API : ".$response." pour l'image: ".$oneUrl['image_location']);
            }
        }

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
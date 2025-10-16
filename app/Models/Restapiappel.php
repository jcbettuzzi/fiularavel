<?php

namespace App\Models;
use Illuminate\Support\Facades\Http;

//use Log;
/*

use Session;
@if (Session::has("message"))
5
{{ Session::get("message") }}
6@endif
7<hr />
*/
/* ---------------------------------------------  Appel OK
{#299 ▼ // app/Models/Restapiappel.php:20
    +"meta": {#296 ▼
        +"code": 200
        +"status": "success"
        +"message": "Request successful"
      }
      +"data": {#300 ▼
        +"user": {#312 ▼
          +"id": 1
          +"nom": "jean"
          +"prenom": "passebon"
          +"email": "jcpassebon@gmail.com"
          +"email_verified_at": null
          +"created_at": "2024-04-10T07:24:53.000000Z"
          +"updated_at": "2024-04-10T07:24:53.000000Z"
        }
        +"access_token": {#327 ▼
          +"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0L35iZXR0dXp6aS9yYm1nbmV3YXBwL3B1YmxpYy9hcGkvbG9naW4iLCJpYXQiOjE3MTMzMzkzMjAsImV4cCI6MTcxMzM
     ▶
    "
          +"type": "Bearer"
          +"expires_in": 3600
        }
      }
    }
*/    
/*            --------------------------------en cas erreur --------------------------------------------------------------------
{#299 ▼ // app/Models/Restapiappel.php:45
    +"meta": {#296 ▼
        +"code": 400
        +"status": "error"
        +"message": "mauvais mot de passe"
        +"CodeErreur": "1"
      }
    }
*/
/*
json_decode($response,true)                 mettre true permet de récupérer un array et non un objet
On accède aux données :
      $result['meta']['code']
      Si erreur    $result['meta']['message']
      $result['data']['user']['id']
      $result['data']['user']['nom']
      $result['data']['access_token']['token']
      $result['data']['access_token']['expires_in']
*/
//  $urlserveur="http://localhost/~bettuzzi/rbmgnewapp/public/api/";
//  REST_API_URL="http://localhost/~bettuzzi/rbmgnewapp/public/api/"

class Restapiappel 
{
    public function appelrestapilogin($email,$motdepasse) {
        $urlserveur=getenv('REST_API_URL');                
        $url=$urlserveur."login";        
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post($url, [
            'email' => $email,
            'password' => $motdepasse,
        ]);
        return(json_decode($response,true));
        //$result=json_decode($response,true);
        //dd($result);
        //dd($result['meta']['code']);
        //dd($result['data']['access_token']['expires_in']);
        //dd($result[0]);
        //dd($result);
    }
    

    public function appelrestapiCreerVotrecompte($nom,$prenom,$email,$motdepasse,$inputOrganisation,$inputTelephone) {
      $urlserveur=getenv('REST_API_URL');                
      $url=$urlserveur."register";        
      $response = Http::withHeaders([
          'Content-Type' => 'application/json',
          'Accept' => 'application/json',
      ])->post($url, [
          'nom' => $nom,
          'prenom' => $prenom,
          'email' => $email,
          'password' => $motdepasse,
          'organisation' => $inputOrganisation,
          'telephone' => $inputTelephone,
      ]);
      return(json_decode($response,true));      
  }
  public function appelrestapiCreerVotrecompteAvecCode($nom,$prenom,$email,$motdepasse,$organisation,$inputTelephone) {
    $urlbase=url('');
    $urlserveur=getenv('REST_API_URL');                
    $url=$urlserveur."registerAvecCode";        
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ])->post($url, [
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'password' => $motdepasse,
        'urlbase' => $urlbase,
        'organisation' => $organisation,
        'telephone' => $inputTelephone,
    ]);
    return(json_decode($response,true));      
}
  
    //use Illuminate\Support\Facades\URL;
    // echo URL::current();
    
    public function appelrestapimotdepasseoublie($email) {
      //$URLCUR=url()->current();
      $urlbase=url('');
      //urldebase=http://127.0.0.1:8000  
      //urldebase=http://localhost/~bettuzzi/fiularavel/public  
      $urlserveur=getenv('REST_API_URL');         
      $url=$urlserveur."MotdepasseOublie";        
      $response = Http::withHeaders([
          'Content-Type' => 'application/json',
          'Accept' => 'application/json',
      ])->post($url, [
          'email' => $email,          
          'urldebase' => $urlbase,
      ]);
      return(json_decode($response,true));
      //$result=json_decode($response,true);
      //dd($result);
      //dd($result['meta']['code']);
      //dd($result['data']['access_token']['expires_in']);
      //dd($result[0]);
      //dd($result);
  }

//  Motdepasseoublie
  public function appelrestapiUUIDvallable($uuid) {    
    $urlserveur=getenv('REST_API_URL');         
    $url=$urlserveur."UUIDvalable";        
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ])->post($url, [
        'uuid' => $uuid,                  
    ]);
    return(json_decode($response,true));    
}


public function appelrestapiCreeCompteUUID($uuid) {    
  $urlserveur=getenv('REST_API_URL');         
  $url=$urlserveur."CreeCompteUUID";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'uuid' => $uuid,                  
  ]);
  return(json_decode($response,true));    
}


public function appelrestapiSesigneravecunlien($email) {
  $urlbase=url('');  
  $urlserveur=getenv('REST_API_URL');         
  $url=$urlserveur."Sesigneravecunlien";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'email' => $email,          
      'urldebase' => $urlbase,
  ]);
  return(json_decode($response,true));  
}

public function appelrestapiSesigneravecunCode($email) {
  $urlbase=url('');  
  $urlserveur=getenv('REST_API_URL');         
  $url=$urlserveur."SesigneravecunCode";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'email' => $email,                
      'urldebase' => $urlbase,
  ]);
  return(json_decode($response,true));  
}

public function appelrestapiCodeValidationConnexionEmailOnly($email) {
  $urlbase=url('');  
  $urlserveur=getenv('REST_API_URL');         
  $url=$urlserveur."codeValidationConnexionEmailOnly";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'email' => $email,                
      'urldebase' => $urlbase,
  ]);
  return(json_decode($response,true));  
}


public function appelrestapiCodepoursesigner($email,$code) {
  $urlbase=url('');  
  $urlserveur=getenv('REST_API_URL');         
  $url=$urlserveur."Codepoursesigner";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'email' => $email,          
      'code' => $code,          
      'urldebase' => $urlbase,
  ]);
  return(json_decode($response,true));  
}

public function appelrestapiUUIDvalablelienpoursesigner($uuid) {    
  $urlserveur=getenv('REST_API_URL');         
  $url=$urlserveur."UUIDvalablelienpoursesigner";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'uuid' => $uuid,                  
  ]);
  return(json_decode($response,true));    
}

/*
    array('from'    => 'Mailgun Sandbox postmaster@leasefit.fr',

                              'to'      => 'Marc Didier marc.didier@rbmg.com',

                              'subject' => 'Hello Marc Didier',

                              'template'    => 'create_account',

                              'h:X-Mailgun-Variables'    => '{"test": "test"}'));
*/
    public function appelrestapilogout($TokenFIU) {
      //log::critical("token=".$TokenFIU);
      $urlserveur=getenv('REST_API_URL');                
      $url=$urlserveur."logout";        
      $response = Http::withHeaders([
          'Content-Type' => 'application/json',
          'Accept' => 'application/json',
          'Authorization' =>  'Bearer '. $TokenFIU,    
      ])->get($url);            
      return(json_decode($response,true));      
  }
  public function appelrestapigetdemandeMe($TokenFIU) {
    $urlserveur=getenv('REST_API_URL');                
    $url=$urlserveur."me";        
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
        'Authorization' =>  'Bearer '. $TokenFIU,    
    ])->get($url);
    $result=json_decode($response,true);
    //dd($result);

    return(json_decode($response,true));      
  }

  public function appelrestapiSupprimerlecompte($TokenFIU) {
    $urlserveur=getenv('REST_API_URL');                
    $url=$urlserveur."Supprimerlecompte";            
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
        'Authorization' =>  'Bearer '. $TokenFIU,    
    ])->get($url);    
    return(json_decode($response,true));      
  }

  public function appelrestapiMetAjourMDP($uuid,$inputPassword) {    
    $urlserveur=getenv('REST_API_URL');                
    $url=$urlserveur."MetAjourMDP";            
    $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'uuid' => $uuid,                  
      'inputPassword' => $inputPassword,                  
  ]);
  return(json_decode($response,true));    
    
  }
  
  public function appelrestapiregisterSansMDP($nom,$prenom,$email,$organisation,$telephone,$Motdepasse) {
    $urlbase=url('');
    $urlserveur=getenv('REST_API_URL');                
    $url=$urlserveur."registerPasswordless";        
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ])->post($url, [
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'organisation' => $organisation,
        'telephone' => $telephone,
        'urlbase' => $urlbase,
        'Motdepasse' => $Motdepasse,
    ]);
    return(json_decode($response,true));      
}  

public function appelrestapiOffrePourSiteMap() {
  //$urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."OffrePourSiteMap";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url);
  return(json_decode($response,true));      
}  

public function appelrestapiinfosOffre() {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."infosOffre";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->get($url);;
  return(json_decode($response,true));      
}  


/*
public function appelrestapiOffreDetailget($referenceOffre) {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."OffreRecap";       
  $response=Http::withUrlParameters([
    'endpoint' => $url,
    'referenceOffre' => $referenceOffre,
        
  ])->get('{+endpoint}/{referenceOffre}');
  
  //$result=json_decode($response,true);
  return(json_decode($response,true));      
}  
*/
public function appelrestapiOffreDetailpost($OffreID,$FiuID) {  
  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."OffreRecapPost";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'referenceOffre' => $OffreID,
      'FiuID' => $FiuID,      
  ]);
  return(json_decode($response,true));      
  
  //$result=json_decode($response,true);
  
}  
public function appelrestapirecupereimageDocumentID($offreID,$documentID) {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."recupereimageDocumentID";
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'offreID' => $offreID,
      'documentID' => $documentID,      
  ]);

return $response;  
} 


public function appelrestapirecupereimageGrandeDocumentID($offreID,$documentID) {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."recupereimageGrandeDocumentID";
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'offreID' => $offreID,
      'documentID' => $documentID,      
  ]);

return $response;  
} 


public function appelrestapirecupereimageBLOG($blogpostid,$imageUUID,$TypeImage) {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."recupereimageBLOG";
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'blogpostid' => $blogpostid,
      'imageUUID' => $imageUUID,
      'TypeImage' => $TypeImage,
      
  ]);

return $response;  
} 


public function appelrestapirecupereimageTitre($offreID,$documentID) {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."recupereimageTitre";
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'offreID' => $offreID,
      'documentID' => $documentID,
      
  ]);

  return(json_decode($response,true));      
} 
/*
public function appelrestapirecupereimageDocumentID($documentID) {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."recupereimageDocumentID";
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'documentID' => $documentID,
      
  ]);
  log::critical("appel appelrestapirecupereimageDocumentID id=".$documentID);
return $response;  
} 
*/
/*
public function appelrestapirecupereimageprincipaleOFFRE($offreID) {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."recupereimageprincipaleOFFRE";
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'offreID' => $offreID,
      
  ]);
  log::critical("appel appelrestapirecupereimageprincipaleOFFRE id=".$offreID);
return $response;
  
} 
*/


public function appelrestapiContactGestionnaire($nom,$prenom,$email,$telephone,$OffreID) {
  $urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."ContactGestionnaire";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'nom' => $nom,
      'prenom' => $prenom,
      'email' => $email,      
      'telephone' => $telephone,
      'OffreID' => $OffreID,
      'urlbase' => $urlbase,
  ]);
  return(json_decode($response,true));      
}  
public function  appelrestapiContactGestionnaireDuclient($FiuID,$OffreID){
  $urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."ContactGestionnaireDuclient";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'FiuID' => $FiuID,      
      'OffreID' => $OffreID,
      'urlbase' => $urlbase,
  ]);
  return(json_decode($response,true));      

}
public function  appelrestapirechercheSurMesuredemande($Lenom,$LePrenom,$Lemail,$LeTelphone,$Lebesoin) {

  //$urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."rechercheSurMesuredemande";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'Lenom' => $Lenom,      
      'LePrenom' => $LePrenom,
      'Lemail' => $Lemail,
      'LeTelphone' => $LeTelphone,
      'Lebesoin' => $Lebesoin,
  ]);
  return(json_decode($response,true));      
}

public function  appelrestapiprendrecontact($Lenom,$LePrenom,$Lemail,$LeTelphoneE164,$Leprojet,$Lechoixprojet,$choixduprojet){
//$urlbase=url('');
$urlserveur=getenv('REST_API_URL');                
$url=$urlserveur."prendrecontact";        
$response = Http::withHeaders([
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
])->post($url, [
    'Lenom' => $Lenom,      
    'LePrenom' => $LePrenom,
    'Lemail' => $Lemail,
    'LeTelphone' => $LeTelphoneE164,
    'Leprojet' => $Leprojet,
    'Lechoixprojet' => $Lechoixprojet,
    'choixduprojet' => $choixduprojet,
]);
// $Lechoixprojet numérique
return(json_decode($response,true));      

}

public function  appelrestapiAjouterOffrefavori($FiuID,$OffreID){
  $urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."AjouterOffrefavori";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'FiuID' => $FiuID,      
      'OffreID' => $OffreID,
      'urlbase' => $urlbase,
  ]);
  return(json_decode($response,true));      

}
public function  appelrestapiSupprimerOffrefavori($FiuID,$OffreID){
  $urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."SupprimerOffrefavori";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'FiuID' => $FiuID,      
      'OffreID' => $OffreID,
      'urlbase' => $urlbase,
  ]);
  return(json_decode($response,true));      

}
/*
https://stackoverflow.com/questions/73190026/how-to-pass-parameter-in-url-to-external-api-using-http-laravel

$apiURL = 'http://example.com/api/Order/';
$headers = [
    'Content-Type' => 'application/json',
    'Authorization' => 'segseg435324534...',
];
$response = Http::::withHeaders($headers)->get($apiURL, [
  'id' => $id,
  'some_another_parameter' => $param
]);
*/

// recherche google = laravel HTTP withheader get with parameters
/*
Laravel 8 Http client url parameter can't pass like this and it's not adding to the url. My endpoint is like api/user/{id}

$response = Http::::withHeaders($headers)->get($apiURL, [
    'id' => $id
]);
instead of above option I tried like below. maybe someone can help this out.

$apiURL = 'api/user/'.{id}; 
$response = Http::::withHeaders($headers)->get($apiURL);
*/

/*
Http::withUrlParameters([
  'endpoint' => 'https://laravel.com',
  'page' => 'docs',
  'version' => '9.x',
  'topic' => 'validation',
])->get('{+endpoint}/{page}/{version}/{topic}');

$response = Http::get('http://example.com/users', [
  'name' => 'Taylor',
  'page' => 1,
]);

$response = Http::accept('application/json')->get('http://example.com/users');

*/
/*
public function appelrestapiOffreDetail($referenceOffre) {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."OffreDetail";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'referenceOffre' => $referenceOffre,
      
  ]);
  return(json_decode($response,true));      
}  
*/
public function appelrestapiinscrirenewsletter($email,$IDfiu,$Ipadresse) {
  //$URLCUR=url()->current();
  $urlbase=url('');  
  //urldebase=http://127.0.0.1:8000  
  //urldebase=http://localhost/~bettuzzi/fiularavel/public  
  $urlserveur=getenv('REST_API_URL');         
  $url=$urlserveur."inscrirenewsletter";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'email' => $email,          
      'fiuID' => $IDfiu,
      'urldebase' => $urlbase,
      'ipadresse' => $Ipadresse,
  ]);  
  return(json_decode($response,true));  
}


public function inscrirenewsletterconfirmer($uuid) {
  //$URLCUR=url()->current();
  $urlbase=url('');  
  //urldebase=http://127.0.0.1:8000  
  //urldebase=http://localhost/~bettuzzi/fiularavel/public  
  $urlserveur=getenv('REST_API_URL');         
  $url=$urlserveur."inscrirenewsletterconfirmer";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'uuid' => $uuid,                
  ]);  
  return(json_decode($response,true));  
}
public function appelAllTextLocationParis() {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."allLocationParisCategorieTexteFiu";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->get($url);
  return(json_decode($response,true));      
}

public function appelrestapivalidationCreationCompte($uuid) {  
  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."validationCreationCompte";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'uuid' => $uuid,      
  ]);
  return(json_decode($response,true));      
  
  //$result=json_decode($response,true);
  
}  

public function appelOneCategorieTexte($categorieTexte_ID) {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."oneCategorieTexte/".$categorieTexte_ID;        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->get($url);
  return(json_decode($response,true));      
}


public function appelAllTextCoworking() {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."allCoworkingTexteFiu";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->get($url);
  return(json_decode($response,true));      
}


public function appelArea($params) {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur.$params;  
  //log::critical("appel area=".$url)    ;
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->get($url);
  return(json_decode($response,true));      
}


public function randomOffresFiu() {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."randomOffresFiu";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->get($url);
  return(json_decode($response,true));      
}


/*
public function appelrestapiListeLiensPourSiteMap() {
  //$urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."ListeLiensPourSiteMap";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url);
  return(json_decode($response,true));      
} 
*/

public function appelupdateProfileUserFiu($contactID,$nomcontact,$prenomcontact,$contactmail_id,$libelleemail,$contacttelephone_id,$numerotelephonel,$passwordNumber1,$fiuid,$TokenFIU) {    
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."updateProfileUserFiu";            
  $response = Http::withHeaders([
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
    'Authorization' =>  'Bearer '. $TokenFIU,
])->post($url, [
    'contact_id' => $contactID,                  
    'nomcontact' => $nomcontact,
    'prenomcontact' => $prenomcontact,
    'contactmail_id' => $contactmail_id,
    'contacttelephone_id' => $contacttelephone_id,
    'numerotelephone' => $numerotelephonel,
    'password' => $passwordNumber1,
    'email' => $libelleemail,
    'fiuid' => $fiuid               
]);
return(json_decode($response,true));    
  
}

//loginEmailOnly
public function appelofLoginEmailOnly($email) {    
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."loginEmailOnly";            
  $response = Http::withHeaders([
    'Content-Type' => 'application/json',
    'Accept' => 'application/json',
])->post($url, [
    'email' => $email            
]);
return(json_decode($response,true));    
  
}


public function appeloffreFavorisFiuByContact($contactID) {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."offreFavorisFiuByContact/".$contactID;        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->get($url);
  return(json_decode($response,true));      
}


public function  appelrestapiChangeOffrefavori($FiuID,$OffreID,$addordelete){
  $urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."changeOffrefavori";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'FiuID' => $FiuID,      
      'OffreID' => $OffreID,
      'urlbase' => $urlbase,
      'addordelete' => $addordelete,
  ]);
  return(json_decode($response,true));      

}



/*
public function appelrestapigetdemandeMe($TokenFIU) {
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."me";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
      'Authorization' =>  'Bearer '. $TokenFIU,    
  ])->get($url);
  $result=json_decode($response,true);
  //dd($result);

  return(json_decode($response,true));      
}
*/
public function  appelrestapiPostcreateUuidFiu($uuid,$contactFiuStatutId,$TokenFIU){
  $urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."postcreateUuidFiu";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
      'Authorization' =>  'Bearer '. $TokenFIU, 
  ])->post($url, [
      'uuid' => $uuid,      
      'contact_fiu_statut_id' => $contactFiuStatutId,
  ]);
  //dd(json_decode($response,true));
  return(json_decode($response,true));      

}


public function  appelrestapiConnexionFiuTrackDelete($uuID,$TokenFIU){
  $urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."connexionFiuTrackDelete";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
      'Authorization' =>  'Bearer '. $TokenFIU,
  ])->post($url, [
      'uuid' => $uuID,
  ]);
  return(json_decode($response,true));      

}


public function appelrestapiAchatDeBureauDemande($Lenom,$LePrenom,$Lemail,$LeTelphone,$Lebesoin) {

  //$urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."achatDeBureauDemande";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'Lenom' => $Lenom,      
      'LePrenom' => $LePrenom,
      'Lemail' => $Lemail,
      'LeTelphone' => $LeTelphone,
      'Lebesoin' => $Lebesoin,
  ]);
  return(json_decode($response,true));      
}


public function appelrestapiInvestirImmobilierDemande($Lenom,$LePrenom,$Lemail,$LeTelphone,$Lebesoin) {

  //$urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."investirImmobilierDemande";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'Lenom' => $Lenom,      
      'LePrenom' => $LePrenom,
      'Lemail' => $Lemail,
      'LeTelphone' => $LeTelphone,
      'Lebesoin' => $Lebesoin,
  ]);
  return(json_decode($response,true));      
}


public function appelrestapiPublierUneAnnonce($Lenom,$LePrenom,$Lemail,$LeTelphone) {

  //$urlbase=url('');
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."publierUneAnnonce";        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->post($url, [
      'Lenom' => $Lenom,      
      'LePrenom' => $LePrenom,
      'Lemail' => $Lemail,
      'LeTelphone' => $LeTelphone,
  ]);
  return(json_decode($response,true));      
}


public function appeldemandeoffreByUserFiu($fiuID,$uuID) {  
  $urlserveur=getenv('REST_API_URL');                
  $url=$urlserveur."demandeoffreByUserFiu/".$fiuID."/".$uuID;        
  $response = Http::withHeaders([
      'Content-Type' => 'application/json',
      'Accept' => 'application/json',
  ])->get($url);
  return(json_decode($response,true));      
}


}








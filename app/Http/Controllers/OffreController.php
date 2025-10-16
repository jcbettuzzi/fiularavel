<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Log;
use Session;
use App\Models\Restapiappel  as Restapiappel;
use App\Models\Blogdata  as Blogdata;
use Propaganistas\LaravelPhone\PhoneNumber;

class OffreController extends Controller
{
    //
    public function offredetail(Request $request ,$offreID ,$Leclient = null){
        $errorMess[]=null;
		try{
//dd($Leclient);
        $url=$request->route()->uri();
        
        //$referencerbmg=$request['referencerbmg'];
         //$filelogapp = new Filelogapp();
         //$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"",6,$url);  
         if (is_null($Leclient)){
            $Leclient['nom'] = "";
		    $Leclient['prenom'] = "";
            $Leclient['email'] = "";
            $Leclient['Telephone'] = "";
            $Leclient['refRbmg'] = "";
            $Leclient['offreID'] = "";
            $Leclient['errorMess'] = null;
            $Leclient['Message'] = null;
            //log::critical("Le client est null");
         }else{
            //dd($Leclient);
            
         }
         
         $restapiappel=new Restapiappel();
         $infoOffre=$restapiappel->appelrestapiinfosOffre();
         //dd($infoOffre);
         //$result=$restapiappel->appelrestapiOffreDetail("516782");         
         //$result=$restapiappel->appelrestapiOffreDetailget("516782");
         //$result=$restapiappel->appelrestapiOffreDetailget("516630");
         
         //$result=$restapiappel->appelrestapiOffreDetailget("516782");  515296
         $FiuID =Session::get('fiuID');
         if  (is_null($FiuID)){
            $IDfiu=0;
         }else{
            $IDfiu=$FiuID;
         }
         if (!is_numeric($offreID)){
            $Ipadresse=$request->ip();     
            $errorMess="(offrecontroller) offredetail offreid pas numérique =".$offreID. "  adresse ip =".$Ipadresse;           
            log::critical($errorMess);
            return view('pages.errorecran')->withErrors($errorMess);
            //return ResponseAPI::error("Cette référence est inconnue", 1);
        }
         $result=$restapiappel->appelrestapiOffreDetailpost($offreID,$IDfiu); 
         
         if ($result['meta']['code']== '400'){   // erreur
			$errorMess=$result['meta']['message'];
			return view('pages.errorecran')->withErrors($errorMess);
		}
        //dd($result);
        $donnees=$result['data']['data'];
        unset($donnees['allPlanAndPhoto']);
        unset($donnees['allSurface']);
        unset($donnees['allServiceFiu']);
        unset($donnees['LesBaux']);
        unset($donnees['Servicedebase']);
        unset($donnees['ServiceEquipement']);
        unset($donnees['ServiceConfort']);
        unset($donnees['ServiceSecurite']);
        unset($donnees['offresurfaceDispo']);
        unset($donnees['Detailespacedetravail']);
        unset($donnees['ListeDesoffres']);
        
        //dd($donnees);
        
        //dd($donnees['desserte']);
        $donnees['desserte']=nl2br($donnees['desserte']);
        //dd($donnees['desserte']);
        $Images=$result['data']['data'] ['allPlanAndPhoto'];
        //dd($Images);
        $Surfaces=$result['data']['data'] ['allSurface'];        
        //dd($Surfaces);
        $ServiceFiu=$result['data']['data'] ['allServiceFiu'];        
        $LesBaux=$result['data']['data'] ['LesBaux'];        
        //dd($LesBaux);
        $Servicedebase=$result['data']['data'] ['Servicedebase'];
        //dd($Servicedebase);
        $ServiceEquipement=$result['data']['data'] ['ServiceEquipement'];
        //dd($ServiceEquipement);
        $ServiceConfort=$result['data']['data'] ['ServiceConfort'];
        $ServiceSecurite=$result['data']['data'] ['ServiceSecurite'];
        $offresurfaceDispo=$result['data']['data'] ['offresurfaceDispo'];
        //dd($offresurfaceDispo);
        //dd($Surfaces);
        $Detailespacedetravail=$result['data']['data'] ['Detailespacedetravail'];
        $ListeDesoffres=$result['data']['data'] ['ListeDesoffres'];
        //dd($ListeDesoffres);
        //dd($Detailespacedetravail);
        //$FiuID =Session::get('fiuID');
        
        //listedesetages
        //DivisibleSurface
        //DivisiblePoste
        // titreoffre
        // "LoyerMensuel" => 14760
        //"LoyerMensuelParposte" => 508.97
        //"LoyerEuroMparan" => null
        //"datedisponibilite" => "Immédiate"
        //"DureEngagementminimum" => 12
        //"DureEngagementmaximum" => 36
//dd($Leclient);
         //$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"pagelogin",2,null);  
         //return view('pages.register',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
         //                 'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme]);  

         return View('pages.offredetail',['offres' => $donnees,'Images' => $Images,'Surfaces' => $Surfaces,'ServiceFiu'=> $ServiceFiu,
                                          'LesBaux' => $LesBaux,'Servicedebase' => $Servicedebase,'ServiceEquipement' => $ServiceEquipement,
                                          'ServiceConfort' => $ServiceConfort,'ServiceSecurite' => $ServiceSecurite,'offresurfaceDispo' => $offresurfaceDispo,
                                          'Leclient' => $Leclient,'Detailespacedetravail' => $Detailespacedetravail,'FiuID' => $FiuID,'ListeDesoffres' => $ListeDesoffres])->withErrors($errorMess);
        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			}
		
			   return view('pages.errorecran')->withErrors($errorMess);
	
	 }
     
     public function recupereimageTitre(Request $request){
        $errorMess[]=null;
		try{
        $offreID=$request['offreID'];    
        $documentID=$request['documentID'];
        $url=$request->route()->uri();
         //$filelogapp = new Filelogapp();
         //$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"",6,$url);  
         if(Session::has('userID')){    // traiter le cas ou le user est déjà signé
             //return $this->homepage2();
         }
         
         $restapiappel=new Restapiappel();         
         $result=$restapiappel->appelrestapirecupereimageTitre($offreID,$documentID);

         if ($result['meta']['code']== '400'){   // erreur
            $errorMess=$result['meta']['message'];
            return view('pages.errorecran')->withErrors($errorMess);
        }

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			}		
			//   return view('pages.offredetail')->withErrors($errorMess);
	
	 }

     public function recupereimageDocumentID(Request $request){
        $errorMess[]=null;
		try{
        $offreID=$request['offreID'];    
        $documentID=$request['documentID'];
        $url=$request->route()->uri();
         //$filelogapp = new Filelogapp();
         //$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"",6,$url);  
         if(Session::has('userID')){    // traiter le cas ou le user est déjà signé
             //return $this->homepage2();
         }
         
         $restapiappel=new Restapiappel();         
         $result=$restapiappel->appelrestapirecupereimageDocumentID($offreID,$documentID);
         return($result);    
        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			}		
			//   return view('pages.offredetail')->withErrors($errorMess);
	
	 }
     
     public function recupereimageGrandeDocumentID(Request $request){
        $errorMess[]=null;
		try{
        $offreID=$request['offreID'];    
        $documentID=$request['documentID'];
        $url=$request->route()->uri();
         //$filelogapp = new Filelogapp();
         //$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"",6,$url);  
         if(Session::has('userID')){    // traiter le cas ou le user est déjà signé
             //return $this->homepage2();
         }
         
         $restapiappel=new Restapiappel();         
         $result=$restapiappel->appelrestapirecupereimageGrandeDocumentID($offreID,$documentID);
         return($result);    
        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			}		
			//   return view('pages.offredetail')->withErrors($errorMess);
	
	 }
     
     public function recupereimageBLOG(Request $request){
        $errorMess[]=null;
		try{
        $blogpostid=$request['blogpostid'];    
        $imageUUID=$request['imageUUID'];
        $TypeImage=$request['TypeImage'];
        //$url=$request->route()->uri();
                  
         $restapiappel=new Restapiappel();         
         $result=$restapiappel->appelrestapirecupereimageBLOG($blogpostid,$imageUUID,$TypeImage);
         return($result);    
        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			}		
			//   return view('pages.offredetail')->withErrors($errorMess);
	
	 }
     
     /*
     public function recupereimageprincipaleOFFRE(Request $request){
        $errorMess[]=null;
		try{
        $offreID=$request['offreID'];
        $url=$request->route()->uri();
         //$filelogapp = new Filelogapp();
         //$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"",6,$url);  
         if(Session::has('userID')){    // traiter le cas ou le user est déjà signé
             //return $this->homepage2();
         }
         log::critical("DocumentID=".$documentID);         
         $restapiappel=new Restapiappel();         
         $result=$restapiappel->appelrestapirecupereimageprincipaleOFFRE($offreID);
         return($result);    
        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			}		
			//   return view('pages.offredetail')->withErrors($errorMess);	
	 }
     */
     
     public function contacterlegestionnaire(Request $request){
		$errorMess[]=null;
		try{
            log::critical("appel contacterlegestionnaire");
            $restapiappel=new Restapiappel();                     
            $client['errorMess'] = null;
            $client['Message'] = null;
//dd($request);
            $client['refRbmg'] = trim($request->input('refRbmg'));
            $client['offreID'] = trim($request->input('offreID'));
            $client['FiuID'] = intval(trim($request->input('FiuID')));
            if ($client['FiuID'] > 0){    // ------------------- On est sur un client connecté                
                $result=$restapiappel->appelrestapiContactGestionnaireDuclient($client['FiuID'],$client['offreID']);              
            }else{
                $client['nom'] = trim($request->input('nom'));
                $client['prenom'] = trim($request->input('Prenom'));
                $client['email'] = trim($request->input('email'));
                $client['Telephone'] = trim($request->input('Telephone'));            
                if (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {                      
                    //log::critical("email pas valide");
                    $client['errorMess']="L'email n'est pas valide !";                    
                    return($this->offredetail($request,$client['offreID'],$client));
                }            
                
                $thephone = new PhoneNumber($client['Telephone'], "");
                $lepays=$thephone->getCountry();
                if (is_null($lepays)){
                        $thephone = new PhoneNumber($client['Telephone'], "FR");
                }
                if ($thephone->isValid()){
                    //log::critical("le tel est valide = ".$client['Telephone']);
                    $client['Telephone']=$thephone->formatE164();                     
                }else{
                    //log::critical("le tel n est pas valide = ".$client['Telephone']);
                    $client['errorMess']="Le numéro de téléphone n'est pas valide !";                    
                    return($this->offredetail($request,$client['offreID'],$client));
                }

                // 
                $result=$restapiappel->appelrestapiContactGestionnaire($client['nom'],$client['prenom'],$client['email'],$client['Telephone'],$client['offreID']);              
            }
                                                            
                        
            if ($result['meta']['code']== '400'){   // erreur
                $errorMess=$result['meta']['message'];
                return view('pages.errorecran')->withErrors($errorMess);
            }

            $client['Message']="Votre demande de contact est bien prise en compte.";
            return($this->offredetail($request,$client['offreID'],$client));

	 }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			}
            return view('pages.errorecran')->withErrors($errorMess);     
        }     
        //AjouterOffrefavori
        //$uuid=$request['uuid'];
        public function AjouterOffrefavori(Request $request){
            $errorMess[]=null;
            try{
                $restapiappel=new Restapiappel();                     
                $offreid=$request['offreid'];
                $FiuID =Session::get('fiuID');
                if  (is_null($FiuID)){
                    $errorMess="erreur interne fiuid à null";
                    return view('pages.errorecran')->withErrors($errorMess);     
                }
                $result=$restapiappel->appelrestapiAjouterOffrefavori($FiuID,$offreid);
                if ($result['meta']['code']== '400'){   // erreur
                    $errorMess=$result['meta']['message'];
                    return view('pages.errorecran')->withErrors($errorMess);
                }

//dd($request);
                //return $this->offredetail($request,$offreid );
                return redirect()->back();

            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                }
                return view('pages.errorecran')->withErrors($errorMess);     
            }  
            //SupprimerOffrefavori      
        public function SupprimerOffrefavori(Request $request){
            $errorMess[]=null;            
            try{
                $restapiappel=new Restapiappel();                     
                $offreid=$request['offreid'];                
                $FiuID =Session::get('fiuID');
                if  (is_null($FiuID)){
                    $errorMess="erreur interne fiuid à null";
                    return view('pages.errorecran')->withErrors($errorMess);     
                }

                $result=$restapiappel->appelrestapiSupprimerOffrefavori($FiuID,$offreid);
                if ($result['meta']['code']== '400'){   // erreur
                    $errorMess=$result['meta']['message'];
                    return view('pages.errorecran')->withErrors($errorMess);
                }
                //return $this->offredetail($request,$offreid );
                return redirect()->back();
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                }
                return view('pages.errorecran')->withErrors($errorMess);     
            }
            
            // il s'agit d'un appel avec ajax on ne peut pas retourner des écarns       
            public function inscrirenewsletter(Request $request){
                try{

                // Clé secrète de reCAPTCHA
                $secretKey = env('secretKeyCaptcha');
                
                $recaptchaToken = $request->input('recaptchaToken');
                if (!$recaptchaToken) {
                    return "Erreur : le reCAPTCHA n'a pas été validé.";
                }


                // Envoyer la requête à l'API reCAPTCHA
                $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaToken}");
                //$verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
                //$response = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $recaptchaToken);
                $responseData = json_decode($response);
                log::critical("responseData: ");
                log::critical(json_encode($responseData));

                if (!$responseData->success || ($responseData->score ?? 0) <= 0.1){
                    // L'utilisateur peut être un bot
                    log::critical('email:'.$request->input('emailletter').'ip: '.$request->ip().' - reCAPTCHA a échoué, vous êtes peut-être un robot. ');
                    return "Échec de la validation, vous êtes peut-être un robot.";
                }

                //if ($responseData->success && $responseData->score >= 0.5) {
                    $Ipadresse=$request->ip();
                    $errorMess="";
                    $lemail=$request->input('emailletter') ;
                    if(is_null($lemail)){
                        $lemail=$request->input('emaillettermobile') ;
                    }                
                    if(is_null($lemail)){
                        $lemail=$request->input('emailletterAccueil') ;
                    }
                    
                    if(is_null($lemail)){
                        $lemail=$request->input('emailletterQuisommeNous') ;
                    }
                    log::critical("email=".$lemail);
                    //l'erreur des email est traité dans le front (ajax), et le back pour eviter un bot
                    if (!filter_var($lemail, FILTER_VALIDATE_EMAIL)) {                      
                        //log::critical("email pas valide");
                        return "L'email n'est pas valide !";                    						
                    }
                        
                    $FiuID =Session::get('fiuID');
                    if  (is_null($FiuID)){
                    $IDfiu=0;
                    }else{
                    $IDfiu=$FiuID;
                    }
                    $restapiappel=new Restapiappel();                                     
                    $result=$restapiappel->appelrestapiinscrirenewsletter($lemail,$IDfiu,$Ipadresse);
                    //log::critical($result);
                    if ($result['meta']['code']== '400'){   // erreur
                        $errorMess=$result['meta']['message'];
                        return $errorMess;
                    }
                    if ($result['meta']['code']== '200'){   // OK
                        // mettre à jour les données pour la session						
                        $message=$result['data']['message'];
                        return $message;
                        
                    }
                    return "ERR !!!!!";
                //} else {
                    // L'utilisateur peut être un bot
                    //log::critical('email:'.$request->input('emailletter').'ip: '.$request->ip().' - reCAPTCHA a échoué, vous êtes peut-être un robot. ');
                    //return "Échec de la validation, vous êtes peut-être un robot.";
                //}

                }catch ( \Exception $e) {
                    $this->TraiteErreur($errorMess, $e);
                    log::critical("ip newletters: ".$request->ip);
                }
                return $errorMess;     
            }
            //inscrirenewsletterconfirmer
            public function inscrirenewsletterconfirmer(Request $request,$uuid){
                try{
                    $message="";
                $restapiappel=new Restapiappel();                                     
                //log::critical("uuid=".$uuid);
                $result=$restapiappel->inscrirenewsletterconfirmer($uuid);
                
                //return view('pages.inscrirenewsletterconfirmer',['message' =>$message]);
                //return view('pages.registerlecode',['nomprenom' =>$nomprenom])->withErrors($errorMess);
                if ($result['meta']['code']== '400'){   // erreur
                    $message=$result['meta']['message'];
                    return view('pages.inscrirenewsletterconfirmer',['message' =>$message]);
                }
                if ($result['meta']['code']== '200'){   // OK
                    // mettre à jour les données pour la session						
                    $message=$result['data']['message'];
                    return view('pages.inscrirenewsletterconfirmer',['message' =>$message]);
                    
                }
                
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                }
                return view('pages.errorecran')->withErrors($errorMess);      
            }


public function newsearchpage(Request $request){
    
    try{
        $Blogdata = new Blogdata();
        $result=$Blogdata->blog_posts_select(1);
        dd($result);
        $errorMess="";
        $restapiappel=new Restapiappel();                                     
        $concatParams="search?zipCode=92100&offset=0";
        $result= $restapiappel->appelArea($concatParams);
        if ($result['meta']['code']== '400'){   // erreur
            $message=$result['meta']['message'];
            return view('pages.errorecran')->withErrors($message);                  
        }

        $listedesoffres=$result['data']['data'];
        dd($listedesoffres);
        $NbOffres=$result['data']['numberTotalResult'];
        
        return view('pages.newsearch',['NbOffres' =>$NbOffres,'listedesoffres'=>$listedesoffres]);
        
    }catch ( \Exception $e) {
        $this->TraiteErreur($errorMess, $e);
        }
        return view('pages.errorecran')->withErrors($errorMess);      
    }



    public function inscrirenewsletterNumber2(Request $request){
        try{

        // Clé secrète de reCAPTCHA
        $secretKey = env('secretKeyCaptcha');
        
        
        $recaptchaToken = $request->input('recaptchaToken2');log::critical("recaptchaToken2=".$recaptchaToken);
        if (!$recaptchaToken) {
                return "Erreur : le reCAPTCHA n'a pas été validé.";
        }
        //$recaptchaToken = $request->input('recaptchaToken');
        //if (!$recaptchaToken) {
            //return "Erreur : le reCAPTCHA n'a pas été validé.";
        //}


        // Envoyer la requête à l'API reCAPTCHA
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaToken}");
        //$verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
        //$response = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $recaptchaToken);
        $responseData = json_decode($response);
        log::critical("responseData: ");
        log::critical(json_encode($responseData));
        if (!$responseData->success || ($responseData->score ?? 0) <= 0.1) {
            // L'utilisateur peut être un bot
            log::critical('email:'.$request->input('emailletter').'ip: '.$request->ip().' - reCAPTCHA a échoué, vous êtes peut-être un robot. ');
            return "Échec de la validation, vous êtes peut-être un robot.";
        }

        //if ($responseData->success && $responseData->score >= 0.5) {
            $Ipadresse=$request->ip();
            $errorMess="";
            $lemail=$request->input('emailletter') ;
            if(is_null($lemail)){
                $lemail=$request->input('emaillettermobile') ;
            }                
            if(is_null($lemail)){
                $lemail=$request->input('emailletterAccueil') ;
            }
            
            if(is_null($lemail)){
                $lemail=$request->input('emailletterQuisommeNous') ;
            }
            log::critical("email=".$lemail);
            //l'erreur des email est traité dans le front (ajax) et le back pour eviter un bot
            if (!filter_var($lemail, FILTER_VALIDATE_EMAIL)) {                      
                //log::critical("email pas valide");
                return "L'email n'est pas valide !";                    						
            }
                
            $FiuID =Session::get('fiuID');
            if  (is_null($FiuID)){
            $IDfiu=0;
            }else{
            $IDfiu=$FiuID;
            }
            $restapiappel=new Restapiappel();                                     
            $result=$restapiappel->appelrestapiinscrirenewsletter($lemail,$IDfiu,$Ipadresse);
            //log::critical($result);
            if ($result['meta']['code']== '400'){   // erreur
                $errorMess=$result['meta']['message'];
                return $errorMess;
            }
            if ($result['meta']['code']== '200'){   // OK
                // mettre à jour les données pour la session						
                $message=$result['data']['message'];
                return $message;
                
            }
            return "ERR !!!!!";
        //} else {
            // L'utilisateur peut être un bot
            //log::critical('email:'.$request->input('emailletter').'ip: '.$request->ip().' - reCAPTCHA a échoué, vous êtes peut-être un robot. ');
            //return "Échec de la validation, vous êtes peut-être un robot.";
        //}

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            log::critical("ip newletters: ".$request->ip);
        }
        return $errorMess;     
    }


    public function inscrirenewsletterNumber3(Request $request){
        try{

        // Clé secrète de reCAPTCHA
        $secretKey = env('secretKeyCaptcha');
        
        
        $recaptchaToken = $request->input('recaptchaToken3');log::critical("recaptchaToken3=".$recaptchaToken);
        if (!$recaptchaToken) {
                return "Erreur : le reCAPTCHA n'a pas été validé.";
        }


        // Envoyer la requête à l'API reCAPTCHA
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaToken}");
        //$verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
        //$response = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $recaptchaToken);
        $responseData = json_decode($response);
        log::critical("responseData: ");
        log::critical(json_encode($responseData));

        if ($responseData->success && $responseData->score >= 0.5) {
            // L'utilisateur est vérifié
            $Ipadresse=$request->ip();
            $errorMess="";
            $lemail=$request->input('emailletter') ;
            if(is_null($lemail)){
                $lemail=$request->input('emaillettermobile') ;
            }                
            if(is_null($lemail)){
                $lemail=$request->input('emailletterAccueil') ;
            }
            
            if(is_null($lemail)){
                $lemail=$request->input('emailletterQuisommeNous') ;
            }
            log::critical("email=".$lemail);
            //l'erreur des email est traité dans le front (ajax)
            /*
            if (!filter_var($lemail, FILTER_VALIDATE_EMAIL)) {                      
                //log::critical("email pas valide");
                return "L'email n'est pas valide !";                    						
            }
            */     
            $FiuID =Session::get('fiuID');
            if  (is_null($FiuID)){
            $IDfiu=0;
            }else{
            $IDfiu=$FiuID;
            }
            $restapiappel=new Restapiappel();                                     
            $result=$restapiappel->appelrestapiinscrirenewsletter($lemail,$IDfiu,$Ipadresse);
            //log::critical($result);
            if ($result['meta']['code']== '400'){   // erreur
                $errorMess=$result['meta']['message'];
                return $errorMess;
            }
            if ($result['meta']['code']== '200'){   // OK
                // mettre à jour les données pour la session						
                $message=$result['data']['message'];
                return $message;
                
            }
            return "ERR !!!!!";
        } else {
            // L'utilisateur peut être un bot
            log::critical('email:'.$request->input('emailletter').'ip: '.$request->ip().' - reCAPTCHA a échoué, vous êtes peut-être un robot. ');
            return "Échec de la validation, vous êtes peut-être un robot.";
        }

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            log::critical("ip newletters: ".$request->ip);
        }
        return $errorMess;     
    }


    public function modifyFavorisOffre(Request $request,$FiuID,$OffreID,$addordelete){
        try{
            $errorMess = null;
            $restapiappel=new Restapiappel();
            //log::critical("modifyFavorisOffre result".$result);
            $result = $restapiappel->appelrestapiChangeOffrefavori($FiuID,$OffreID,$addordelete);
            log::critical("modifyFavorisOffre result".json_encode($result));
            if($result['meta']['code']==200){
                //return "ok sa fonctionne";
                return response()->json(["success" => true, "message" => "ok sa marche"]);
            }else{
                return response()->json(["error" => "Action non reconnue"], 400);
            }


        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
        }
            return view('pages.errorecran')->withErrors($errorMess);
    }

    public function publierAnnonce(){
        try{
            return view('pages.publierAnnonce');
        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
        }
            return view('pages.errorecran')->withErrors($errorMess);
    }

    public function investisseur(){
        try{
            return view('pages.investisseur');
        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
        }
            return view('pages.errorecran')->withErrors($errorMess);
    }

    public function acheteur(){
        try{
            return view('pages.acheteur');
        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
        }
            return view('pages.errorecran')->withErrors($errorMess);
    }


    public function investirImmo(Request $request){
        try{

            log::critical("Investir dans l'immobilier");

            $restapiappel=new Restapiappel();                     
            $LeTelphone=trim($request->input('Telephone'));            
            $Lemail=trim($request->input('email'));    
            
            
            $Lenom=trim($request->input('nom'));    
            $LePrenom=trim($request->input('Prenom'));   
            $Lebesoin=trim($request->input('besoin'));   
            
                if (!filter_var($Lemail, FILTER_VALIDATE_EMAIL)) {                                  
                    return redirect()->back()->withInput()->with('errorForm', "L'email n'est pas valide")->withFragment('nomDiv');
                }            
                
                $thephone = new PhoneNumber($LeTelphone, "");
                $lepays=$thephone->getCountry();
                if (is_null($lepays)){
                        $thephone = new PhoneNumber($LeTelphone, "FR");
                }
                if ($thephone->isValid()){                    
                    $LeTelphoneE164=$thephone->formatE164();                     
                }else{                    
                    return redirect()->back()->withInput()->with('errorForm', "Le numéro de téléphone n'est pas valide !")->withFragment('nomDiv');
                }
                if (strlen($Lebesoin)==0){
                    return redirect()->back()->withInput()->with('errorForm', "Votre besoin est obligatoire !")->withFragment('nomDiv');
                }
                if (strlen($Lebesoin)>1000){
                    $Lebesoin=substr($Lebesoin, 0, 999);                    
                }                
                $result=$restapiappel->appelrestapiInvestirImmobilierDemande($Lenom,$LePrenom,$Lemail,$LeTelphoneE164,$Lebesoin);                          
                                                            
                        
            if ($result['meta']['code']== '400'){   // erreur
                $errorMess=$result['meta']['message'];
                return view('pages.errorecran')->withErrors($errorMess);
            }
            
            return redirect()->back()->with('errorForm', "Votre demande est bien prise en compte.")->withFragment('nomDiv');

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
        }
            return view('pages.errorecran')->withErrors($errorMess);
    }


    public function postAcheterBureau(Request $request){
        try{

        log::critical("Acherter  des bureaux");
        $restapiappel=new Restapiappel();                     
            $LeTelphone=trim($request->input('Telephone'));            
            $Lemail=trim($request->input('email'));    
            
            
            $Lenom=trim($request->input('nom'));    
            $LePrenom=trim($request->input('Prenom'));   
            $Lebesoin=trim($request->input('besoin'));   
            
                if (!filter_var($Lemail, FILTER_VALIDATE_EMAIL)) {                                  
                    return redirect()->back()->withInput()->with('errorForm', "L'email n'est pas valide")->withFragment('nomDiv');
                }            
                
                $thephone = new PhoneNumber($LeTelphone, "");
                $lepays=$thephone->getCountry();
                if (is_null($lepays)){
                        $thephone = new PhoneNumber($LeTelphone, "FR");
                }
                if ($thephone->isValid()){                    
                    $LeTelphoneE164=$thephone->formatE164();                     
                }else{                    
                    return redirect()->back()->withInput()->with('errorForm', "Le numéro de téléphone n'est pas valide !")->withFragment('nomDiv');
                }
                if (strlen($Lebesoin)==0){
                    return redirect()->back()->withInput()->with('errorForm', "Votre besoin est obligatoire !")->withFragment('nomDiv');
                }
                if (strlen($Lebesoin)>1000){
                    $Lebesoin=substr($Lebesoin, 0, 999);                    
                }                
                $result=$restapiappel->appelrestapiAchatDeBureauDemande($Lenom,$LePrenom,$Lemail,$LeTelphoneE164,$Lebesoin);                          
                                                            
                        
            if ($result['meta']['code']== '400'){   // erreur
                $errorMess=$result['meta']['message'];
                return view('pages.errorecran')->withErrors($errorMess);
            }
            
            return redirect()->back()->with('errorForm', "Votre demande est bien prise en compte.")->withFragment('nomDiv');

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
        }
            return view('pages.errorecran')->withErrors($errorMess);
    }


    public function postPublierUneAnnonce(Request $request){
        try{

            log::critical("Publier une annonce");
        $restapiappel=new Restapiappel();                     
            $LeTelphone=trim($request->input('Telephone'));            
            $Lemail=trim($request->input('email'));    
            
            
            $Lenom=trim($request->input('nom'));    
            $LePrenom=trim($request->input('Prenom')); 
            
                if (!filter_var($Lemail, FILTER_VALIDATE_EMAIL)) {                                  
                    return redirect()->back()->withInput()->with('errorForm', "L'email n'est pas valide")->withFragment('nomDiv');
                }            
                
                $thephone = new PhoneNumber($LeTelphone, "");
                $lepays=$thephone->getCountry();
                if (is_null($lepays)){
                        $thephone = new PhoneNumber($LeTelphone, "FR");
                }
                if ($thephone->isValid()){                    
                    $LeTelphoneE164=$thephone->formatE164();                     
                }else{                    
                    return redirect()->back()->withInput()->with('errorForm', "Le numéro de téléphone n'est pas valide !")->withFragment('nomDiv');
                }
                         
                $result=$restapiappel->appelrestapiPublierUneAnnonce($Lenom,$LePrenom,$Lemail,$LeTelphoneE164);                          
                                                            
                        
            if ($result['meta']['code']== '400'){   // erreur
                $errorMess=$result['meta']['message'];
                return view('pages.errorecran')->withErrors($errorMess);
            }
            
            return redirect()->back()->with('errorForm', "Votre demande est bien prise en compte.")->withFragment('nomDiv');

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
        }
            return view('pages.errorecran')->withErrors($errorMess);
    }

     public function TraiteErreur(&$errorMess, $e){
        $ErrLine = $e->getLine();
        $ErrFile = $e->getFile();
        $errorMess =  " Mess =" .$e->getMessage();
        $errorMess = "Exception: Ligne=".$ErrLine. " Fichier=".$ErrFile . " Message  =" .$e->getMessage();
        Log::critical($errorMess);
        }
       
}

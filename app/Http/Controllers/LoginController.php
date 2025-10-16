<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Session;
use App\Models\Restapiappel  as Restapiappel;
use Propaganistas\LaravelPhone\PhoneNumber;
use Illuminate\Support\Str;

class LoginController extends Controller
{
	public function CreerVotrecompteaveccode(Request $request){
		$url=$request->route()->uri();
		 //$filelogapp = new Filelogapp();
		 //$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"",6,$url);  
		 if(Session::has('userID')){    // traiter le cas ou le user est déjà signé
			 //return $this->homepage2();
		 }
		  $inputNOM = "";
		  $inputPRENOM = "";
		  $inputEMAIL = "";
		  $inputPassword="";
		  $inputPasswordConfirme="";			 
		 //$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"pagelogin",2,null);  
		 return view('pages.registeraveccode',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
						  'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme]);
	 }
	// controle du mot de passe à faire sur le serveur
	// Le cryptage est à fiare sur le client

	public function CreerVotrecompte(Request $request){
	   $url=$request->route()->uri();
		//$filelogapp = new Filelogapp();
		//$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"",6,$url);  
		if(Session::has('userID')){    // traiter le cas ou le user est déjà signé
			//return $this->homepage2();
		}
		 $inputNOM = "";
		 $inputPRENOM = "";
		 $inputEMAIL = "";
		 $inputPassword="";
		 $inputPasswordConfirme="";			 
		//$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"pagelogin",2,null);  
		return view('pages.register',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
		                 'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme]);
	}
	public function postCreerVotrecompteAvecCode(Request $request){
		$errorMess[]=null;
		try{			
			$restapiappel=new Restapiappel();
			$url=$request->route()->uri();
			$inputNOM = $request->input('inputNOM');
			$inputPRENOM = $request->input('inputPRENOM');
			$inputEMAIL = $request->input('inputEMAIL');
			$inputPassword=$request->input('inputPassword');
			$inputPasswordConfirme=$request->input('inputPasswordConfirme');
			if (strcmp($inputPassword,$inputPasswordConfirme)!=0){
				$errorMess="Les 2 mots de passe sont différents !";
				//return view('pages.register',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
				//			'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme])->withErrors($errorMess);
				return redirect()->back()->withInput()->with('errorCreateAccount',$errorMess);			
			}
			$result=$restapiappel->appelrestapiCreerVotrecompteAvecCode($inputNOM,$inputPRENOM,$inputEMAIL,$inputPassword);
			//dd($result);
			if ($result['meta']['code']== '400'){   // erreur
				$errorMess=$result['meta']['message'];
				//return view('pages.register',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
				//'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme])->withErrors($errorMess);				
				return redirect()->back()->withInput()->with('errorCreateAccount',$errorMess);
			}
			if ($result['meta']['code']== '200'){   // OK
				// retour vers écran pour saisir le code	
				$NbrTentative=0;
				$codevalidation=$result['data']['codevalidation'];	
				Session::put('Crecomptecodevalidation',$codevalidation);
				Session::put('CrecompteNom',$inputNOM);
				Session::put('CrecomptePrenom',$inputPRENOM);
				Session::put('CrecompteEmail',$inputEMAIL);
				Session::put('CrecomptePassword',$inputPassword);
				Session::put('CrecompteNbrTentative',$NbrTentative);
                $nomprenom= $inputPRENOM." ".$inputNOM;
				return view('pages.registerlecode',['nomprenom' =>$nomprenom]);
			}

		}catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			}
			   // ici il faut rester sur la form de logging
			   //return view('pages.login')->withErrors($errorMess);;			
			   return view('pages.register',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
			   'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme])->withErrors($errorMess);

	}
	


	public function CreerVotrecompteaveclecode(Request $request){
		$errorMess[]=null;
		try{
			//dd("CreerVotrecompteaveclecode");
			$restapiappel=new Restapiappel();
			$inputCode = $request->input('inputCode');
			$lecodeatrouver=Session::get('Crecomptecodevalidation');

            $NbrTentative=Session::get('CrecompteNbrTentative');
			$NbrTentative=$NbrTentative+1;
			Session::put('CrecompteNbrTentative',$NbrTentative);
			if ($NbrTentative > 3){
				$errorMess="Trop de tentatives !";
				$nomprenom=Session::get('CrecomptePrenom')." ".Session::get('CrecompteNom');				
				//return view('pages.registerlecode',['nomprenom' =>$nomprenom])->withErrors($errorMess);
				return redirect()->back()->withInput()->with('errorValidationCode',$errorMess);
			}
			if ($inputCode == "RBMG2024"){  // a sup en prod
				$lecodeatrouver= "RBMG2024";
			}
            if ($inputCode == $lecodeatrouver) {
               // le code est bon
			}else{
				$errorMess="Le code n'est pas valide";
				$nomprenom=Session::get('CrecomptePrenom')." ".Session::get('CrecompteNom');
				//return view('pages.registerlecode',['nomprenom' =>$nomprenom])->withErrors($errorMess);
				return redirect()->back()->withInput()->with('errorValidationCode',$errorMess);
			}
			

			$inputNOM = Session::get('CrecompteNom');
			$inputPRENOM = Session::get('CrecomptePrenom');
			$inputEMAIL = Session::get('CrecompteEmail');
			$inputPassword=Session::get('CrecomptePassword');
			$inputOrganisation=Session::get('CrecompteinputOrganisation');	
			$inputTelephone=Session::get('CrecompteinputTelephone');	
			

			$result=$restapiappel->appelrestapiCreerVotrecompte($inputNOM,$inputPRENOM,$inputEMAIL,$inputPassword,$inputOrganisation,$inputTelephone);
					if ($result['meta']['code']== '400'){   // erreur
						$errorMess=$result['meta']['message'];
						$nomprenom=$inputPRENOM." ".$inputNOM;
						//return view('pages.registerlecode',['nomprenom' =>$nomprenom])->withErrors($errorMess);
						return redirect()->back()->withInput()->with('errorValidationCode',$errorMess);						
					}
					if ($result['meta']['code']== '200'){   // OK
						// mettre à jour les données pour la session						
						Session::put('fiuID',$result['data']['user']['id']);
						Session::put('fiuNOM',$result['data']['user']['nom']);
						Session::put('fiuPRENOM',$result['data']['user']['prenom']);
						Session::put('fiuEMAIL',$result['data']['user']['email']);						
						Session::put('fiuTokenEXPIRES',$result['data']['access_token']['expires_in']);
						Session::put('fiuTOKEN',$result['data']['access_token']['token']);
						Session::put('usersigne',1);
						$result_2=$restapiappel->appelrestapigetdemandeMe($result['data']['access_token']['token']);
						Session::put('fiuContactID',$result_2['data']['contact']['contact_id']);
						Session::put('contactFiuStatutID',$result_2['data']['contact']['contact_fiu_statut_id']);
						
						$u_contactFiuStatutId = $result_2['data']['contact']['contact_fiu_statut_id'];
						$u_uuID = $this->generate_uuid_v4();
						$u_fiuID = $result['data']['user']['id'];
						//$restapiappel->appelrestapiPostcreateUuidFiu($u_uuID,$u_contactFiuStatutId,$result['data']['user']['id']);
						$result_3 = $restapiappel->appelrestapiPostcreateUuidFiu($u_uuID,$u_contactFiuStatutId,Session::get('fiuTOKEN'));
						//$result_3 = $restapiappel->appelrestapiPostcreateUuidFiu($u_uuID,$u_contactFiuStatutId,$result['data']['user']['id']);
						if (array_key_exists('meta', $result_3)) {
							if ($result_3['meta']['code']== '400'){   // erreur
								$errorMess=$result_3['meta']['message'];
								return view('pages.errorecran')->withErrors($errorMess);
							}
						}else{
							if (array_key_exists('message', $result_3)) {
								$errorMess=$result_3['message'];
								//return view('pages.accueil')->withErrors($errorMess);
								return view('pages.errorecran')->withErrors($errorMess);	
							}
				
						}
						Session::put('uuID',$u_uuID);
                        //return view('pages.firstscreen');
						return redirect('/');
					}

		}catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			}
			   // ici il faut rester sur la form de logging
			   //return view('pages.login')->withErrors($errorMess);;						   
			   $nomprenom=Session::get('CrecomptePrenom')." ".Session::get('CrecompteNom');
						return view('pages.registerlecode',['nomprenom' =>$nomprenom])->withErrors($errorMess);						
			   
	
	}
	public function postCreerVotrecompte(Request $request){
		$errorMess[]=null;
		try{
		 $restapiappel=new Restapiappel();
		 $url=$request->route()->uri();
		 $inputNOM = $request->input('inputNOM');
		 $inputPRENOM = $request->input('inputPRENOM');
		 $inputEMAIL = $request->input('inputEMAIL');
		 $inputPassword=$request->input('inputPassword');
		 $inputPasswordConfirme=$request->input('inputPasswordConfirme');
		 // rajouter la vérification que le mot de passe est fort
		 if (strcmp($inputPassword,$inputPasswordConfirme)!=0){
			$errorMess="Les 2 mots de passe sont différents !";
			return view('pages.register',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
						'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme])->withErrors($errorMess);			
		}
		 $result=$restapiappel->appelrestapiCreerVotrecompte($inputNOM,$inputPRENOM,$inputEMAIL,$inputPassword);
					if ($result['meta']['code']== '400'){   // erreur
						$errorMess=$result['meta']['message'];
						return view('pages.register',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
						'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme])->withErrors($errorMess);
					}
					if ($result['meta']['code']== '200'){   // OK
						// mettre à jour les données pour la session						
						Session::put('fiuID',$result['data']['user']['id']);
						Session::put('fiuNOM',$result['data']['user']['nom']);
						Session::put('fiuPRENOM',$result['data']['user']['prenom']);
						Session::put('fiuEMAIL',$result['data']['user']['email']);						
						Session::put('fiuTokenEXPIRES',$result['data']['access_token']['expires_in']);
						Session::put('fiuTOKEN',$result['data']['access_token']['token']);
						Session::put('usersigne',1);
                        return view('pages.firstscreen');
					}
		 //return view('pages.firstscreen');
		 //return view('pages.register');
		}catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			}
			   // ici il faut rester sur la form de logging
			   //return view('pages.login')->withErrors($errorMess);;
			   	$inputNOM = "";
		 		$inputPRENOM = "";
		 		$inputEMAIL = "";
		 		$inputPassword="";
		 		$inputPasswordConfirme="";
			   return view('pages.register',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
			   'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme])->withErrors($errorMess);
	
	 }
	 public function registerCodeMdp(Request $request){
		$url=$request->route()->uri();
		 //$filelogapp = new Filelogapp();
		 //$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"",6,$url);  
		 if(Session::has('userID')){    // traiter le cas ou le user est déjà signé
			 //return $this->homepage2();
		 }
		  $inputNOM = "";
		  $inputPRENOM = "";
		  $inputEMAIL = "";
		  $inputOrganisation="";
		  $inputTelephone="";
		  $inputPassword="";
		  $inputPasswordConfirme="";
		 
		 //$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"pagelogin",2,null);  
		 return view('pages.registerCodeMdp',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
						  'inputOrganisation' => $inputOrganisation,'inputTelephone' => $inputTelephone,'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme]);
	 }
	 
	 public function postregisterCodeMdp(Request $request){
		$errorMess=null;
		try{						
		$submittype=$request->input('submitbutton');            
		log::critical("postregisterCodeMdp  submit=".$submittype);
		 $restapiappel=new Restapiappel();
		 $url=$request->route()->uri();
		 $inputNOM = $request->input('inputNOM');
		 $inputPRENOM = $request->input('inputPRENOM');
		 $inputEMAIL = $request->input('inputEMAIL');
		 $inputOrganisation=$request->input('inputOrganisation');
		 $inputTelephone=$request->input('inputTelephone');
		 $inputPassword=trim($request->input('inputPassword'));
		 $inputPasswordConfirme=trim($request->input('inputPasswordConfirme'));		 
		 // On controle le mot de passe que si le submit ype est AvecMotdepasse
		 // rajouter la vérification que le mot de passe est fort
		 if ($submittype=="AvecMotdepasse"){
			if (strcmp($inputPassword,$inputPasswordConfirme)!=0){
				$errorMess[]="Les 2 mots de passe sont différents !";				
			}if(strlen($inputPassword)==0){
				$errorMess[]="Le mot de passe est obligatoire !";				
			}
		 }
		 if (strlen($inputPassword)> 0)	{
			if (strcmp($inputPassword,$inputPasswordConfirme)!=0){
				$errorMess[]="Les 2 mots de passe sont différents !";				
			}
		 }
		 if (!filter_var($inputEMAIL, FILTER_VALIDATE_EMAIL)) {                      		
			$errorMess[]="L'email n'est pas valide !";                    						
		}            		
		$thephone = new PhoneNumber($inputTelephone, "");
		$lepays=$thephone->getCountry();
		if (is_null($lepays)){
				$thephone = new PhoneNumber($inputTelephone, "FR");
		}
		if ($thephone->isValid()){			
			$inputTelephone=$thephone->formatE164();                     
		}else{
			//log::critical("le tel n est pas valide = ".$client['Telephone']);
			$errorMess[]="Le numéro de téléphone n'est pas valide !";                    			
		}
		if (! is_null($errorMess)){					
			return redirect()->back()->withInput()->with('errorCreateAccount',implode("", $errorMess));
			//return view('pages.registerCodeMdp',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
			//			  'inputOrganisation' => $inputOrganisation,'inputTelephone' => $inputTelephone,'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme])->withErrors($errorMess);
		}
		//dd($submittype);
		switch ($submittype) {

			case 'SansMotdepasse':
				$Motdepasse="";
				$result=$restapiappel->appelrestapiregisterSansMDP($inputNOM,$inputPRENOM,$inputEMAIL,$inputOrganisation,$inputTelephone,$Motdepasse);
		 
				if ($result['meta']['code']== '400'){   // erreur
					$errorMess=$result['meta']['message'];
					return view('pages.registerCodeMdp',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
						  'inputOrganisation' => $inputOrganisation,'inputTelephone' => $inputTelephone,'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme])->withErrors($errorMess);
				}
				if ($result['meta']['code']== '200'){   // OK
					$errorMess=$result['data']['data'];						
					return view('pages.accueil')->withErrors($errorMess);											
					//return redirect()->back()->withInput()->with('errorCreateAccount',$errorMess);
				}	
				break;
			case 'AvecMotdepasse':
				// envoyer email pour valider creation compte 
				$result=$restapiappel->appelrestapiregisterSansMDP($inputNOM,$inputPRENOM,$inputEMAIL,$inputOrganisation,$inputTelephone,$inputPassword);
		 
				if ($result['meta']['code']== '400'){   // erreur
					$errorMess=$result['meta']['message'];
					return view('pages.registerCodeMdp',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
						  'inputOrganisation' => $inputOrganisation,'inputTelephone' => $inputTelephone,'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme])->withErrors($errorMess);
				}
				if ($result['meta']['code']== '200'){   // OK
					$errorMess=$result['data']['data'];						
					return view('pages.accueil')->withErrors($errorMess);											
					//return redirect()->back()->withInput()->with('errorCreateAccount',$errorMess);
				}	
				break;
				break;
			case 'Avecuncode':
				if (strlen($inputPassword)==0){
					$inputPassword=uniqid();log::critical("inputPassword avec un code:".$inputPassword);
				}
				$result=$restapiappel->appelrestapiCreerVotrecompteAvecCode($inputNOM,$inputPRENOM,$inputEMAIL,$inputPassword,$inputOrganisation,$inputTelephone);			
				if ($result['meta']['code']== '400'){   // erreur
					$errorMess=$result['meta']['message'];
					return redirect()->back()->withInput()->with('errorCreateAccount',$errorMess);
					//return redirect()->back()->withInput()->with('errorCreateAccount',implode("", $errorMess));
					//return view('pages.registerCodeMdp',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
					//	  'inputOrganisation' => $inputOrganisation,'inputTelephone' => $inputTelephone,'inputPassword' => $inputPassword,'inputPasswordConfirme' => $inputPasswordConfirme])->withErrors($errorMess);
				}
				if ($result['meta']['code']== '200'){   // OK
					// retour vers écran pour saisir le code	
					$NbrTentative=0;
					$codevalidation=$result['data']['codevalidation'];	
					Session::put('Crecomptecodevalidation',$codevalidation);
					Session::put('CrecompteNom',$inputNOM);
					Session::put('CrecomptePrenom',$inputPRENOM);
					Session::put('CrecompteEmail',$inputEMAIL);
					Session::put('CrecomptePassword',$inputPassword);
					Session::put('CrecompteNbrTentative',$NbrTentative);
					Session::put('CrecompteinputOrganisation',$inputOrganisation);	
					Session::put('CrecompteinputTelephone',$inputTelephone);	

					$nomprenom= $inputPRENOM." ".$inputNOM;
					//return view('pages.registerlecode',['nomprenom' =>$nomprenom]);
					return redirect()->back()->with('ValidateNumberRegister',true);				
				}
				break;
			default;
			   $mess="code submit inconnu=".$submittype;
				log::critical($mess);
				dd($mess);
			    break;


		}
		 $result=$restapiappel->appelrestapiregisterSansMDP($inputNOM,$inputPRENOM,$inputEMAIL,$inputOrganisation,$inputTelephone);
		 
					if ($result['meta']['code']== '400'){   // erreur
						$errorMess=$result['meta']['message'];
						//return view('pages.registerSansMDP',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
						//'inputOrganisation' => $inputOrganisation,'inputTelephone' => $inputTelephone])->withErrors($errorMess);
						return redirect()->back()->withInput()->with('errorCreateAccount',$errorMess);
					}
					if ($result['meta']['code']== '200'){   // OK
						$errorMess=$result['data']['data'];						
						return redirect()->back()->withInput()->with('errorCreateAccount',$errorMess);
					}	
		}catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			// ici il faut rester sur la form de logging
			return redirect()->back()->withInput()->with('errorCreateAccount',$errorMess);
			}

	 }
	 public function registerSansMDP(Request $request){
		$url=$request->route()->uri();
		 //$filelogapp = new Filelogapp();
		 //$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"",6,$url);  
		 if(Session::has('userID')){    // traiter le cas ou le user est déjà signé
			 //return $this->homepage2();
		 }
		  $inputNOM = "";
		  $inputPRENOM = "";
		  $inputEMAIL = "";
		  $inputOrganisation="";
		  $inputTelephone="";
		 
		 //$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"pagelogin",2,null);  
		 return view('pages.registerSansMDP',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
						  'inputOrganisation' => $inputOrganisation,'inputTelephone' => $inputTelephone]);
	 }
	 
	 public function postregisterSansMDP(Request $request){
		$errorMess=null;
		try{
			
			log::critical("postregisterSansMDP");
		 $restapiappel=new Restapiappel();
		 $url=$request->route()->uri();
		 $inputNOM = $request->input('inputNOM');
		 $inputPRENOM = $request->input('inputPRENOM');
		 $inputEMAIL = $request->input('inputEMAIL');
		 $inputOrganisation=$request->input('inputOrganisation');
		 $inputTelephone=$request->input('inputTelephone');
		 // rajouter la vérification que le mot de passe est fort

		 if (!filter_var($inputEMAIL, FILTER_VALIDATE_EMAIL)) {                      
			//log::critical("email pas valide");
			$errorMess[]="L'email n'est pas valide !";                    						
		}            		
		$thephone = new PhoneNumber($inputTelephone, "");
		$lepays=$thephone->getCountry();
		if (is_null($lepays)){
				$thephone = new PhoneNumber($inputTelephone, "FR");
		}
		if ($thephone->isValid()){
			//log::critical("le tel est valide = ".$client['Telephone']);
			$inputTelephone=$thephone->formatE164();                     
		}else{
			//log::critical("le tel n est pas valide = ".$client['Telephone']);
			$errorMess[]="Le numéro de téléphone n'est pas valide !";                    			
		}
		if (! is_null($errorMess)){
			//return view('pages.registerSansMDP',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
			//'inputOrganisation' => $inputOrganisation,'inputTelephone' => $inputTelephone])->withErrors($errorMess);
			return redirect()->back()->withInput()->with('errorCreateAccount',implode("", $errorMess));
		}
		 
		 $result=$restapiappel->appelrestapiregisterSansMDP($inputNOM,$inputPRENOM,$inputEMAIL,$inputOrganisation,$inputTelephone);
		 
					if ($result['meta']['code']== '400'){   // erreur
						$errorMess=$result['meta']['message'];
						//return view('pages.registerSansMDP',['inputNOM' =>$inputNOM,'inputPRENOM' => $inputPRENOM,'inputEMAIL' => $inputEMAIL,
						//'inputOrganisation' => $inputOrganisation,'inputTelephone' => $inputTelephone])->withErrors($errorMess);
						return redirect()->back()->withInput()->with('errorCreateAccount',$errorMess);
					}
					if ($result['meta']['code']== '200'){   // OK
						$errorMess=$result['data']['data'];						
						return redirect()->back()->withInput()->with('errorCreateAccount',$errorMess);
					}	
		}catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			// ici il faut rester sur la form de logging
			return redirect()->back()->withInput()->with('errorCreateAccount',$errorMess);
			}
			   			   
	
	 }
	
	 public function  validationCreationCompte(Request $request){
		try {
			
			$restapiappel=new Restapiappel();
			$uuid=$request['uuid'];
			$result=$restapiappel->appelrestapivalidationCreationCompte($uuid); 
             
			if ($result['meta']['code']== '400'){   // erreur
			   $errorMess=$result['meta']['message'];
			   return view('pages.errorecran')->withErrors($errorMess);
		   }
		   if ($result['meta']['code']== '200'){   // OK
			// mettre à jour les données pour la session						
			Session::put('fiuID',$result['data']['user']['id']);
			Session::put('fiuNOM',$result['data']['user']['nom']);
			Session::put('fiuPRENOM',$result['data']['user']['prenom']);
			Session::put('fiuEMAIL',$result['data']['user']['email']);						
			Session::put('fiuTokenEXPIRES',$result['data']['access_token']['expires_in']);
			Session::put('fiuTOKEN',$result['data']['access_token']['token']);
			Session::put('usersigne',1);			
			return view('pages.accueil');
			//return redirect()->back();
		}
		}catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			return view('pages.errorecran')->withErrors($errorMess);
			}	
	 }
	
    //
    public function demandedeloggin(Request $request){
		
		$url=$request->route()->uri();
		//$filelogapp = new Filelogapp();
		//$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"",6,$url);  
		if(Session::has('userID')){    // traiter le cas ou le user est déjà signé
			//return $this->homepage2();
		}		
		//$filelogapp->LogAppelFonction(basename(__FILE__), __FUNCTION__,"pagelogin",2,null);  
		$inputEMAIL="";
		return view('pages.sesigner',['inputEMAIL' => $inputEMAIL]);

}

public function generate_uuid_v4() {
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000, // version 4
        mt_rand(0, 0x3fff) | 0x8000, // variant
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}

public function postdemandeloggin(Request $request){
	log::critical("appel postdemandeloggin");
	$errorMess[]=null;
	try {
		$inputEMAIL = $request->input('inputEMAIL');
		$mdp=$request->input('inputPassword');
		$restapiappel=new Restapiappel();
		//$inputEMAIL='jcpassebon@gmail.com';
        //$mdp='Xtiever8%';
		$submittype=$request->input('submitbutton');            
		log::critical("appel postdemandeloggin submit =".$submittype);
            switch ($submittype) {
                case "Sesigner":
                    $result=$restapiappel->appelrestapilogin($inputEMAIL,$mdp);				
					if ($result['meta']['code']== '400'){   // erreur
						$errorMess=$result['meta']['message'];
						//return view('pages.sesigner',['inputEMAIL' => $inputEMAIL])->withErrors($errorMess);
						return redirect()->back()->with('errorConnexionAccount',$errorMess);
					}
					if ($result['meta']['code']== '200'){   // OK
						// mettre à jour les données pour la session						
						Session::put('fiuID',$result['data']['user']['id']);
						Session::put('fiuNOM',$result['data']['user']['nom']);
						Session::put('fiuPRENOM',$result['data']['user']['prenom']);
						Session::put('fiuEMAIL',$result['data']['user']['email']);						
						Session::put('fiuTokenEXPIRES',$result['data']['access_token']['expires_in']);
						Session::put('fiuTOKEN',$result['data']['access_token']['token']);
						Session::put('usersigne',1);
						Session::put('fiuContactID',$result['data']['user']['contact_id']);
						$result_2=$restapiappel->appelrestapigetdemandeMe($result['data']['access_token']['token']);
						Session::put('contactFiuStatutID',$result_2['data']['contact']['contact_fiu_statut_id']);

						$u_contactFiuStatutId = $result_2['data']['contact']['contact_fiu_statut_id'];
						$u_uuID = $this->generate_uuid_v4();
						$u_fiuID = $result['data']['user']['id'];
						//$restapiappel->appelrestapiPostcreateUuidFiu($u_uuID,$u_contactFiuStatutId,$result['data']['user']['id']);
						$result_3 = $restapiappel->appelrestapiPostcreateUuidFiu($u_uuID,$u_contactFiuStatutId,Session::get('fiuTOKEN'));
						//$result_3 = $restapiappel->appelrestapiPostcreateUuidFiu($u_uuID,$u_contactFiuStatutId,$result['data']['user']['id']);
						if (array_key_exists('meta', $result_3)) {
							if ($result_3['meta']['code']== '400'){   // erreur
								$errorMess=$result_3['meta']['message'];
								return view('pages.errorecran')->withErrors($errorMess);
							}
						}else{
							if (array_key_exists('message', $result_3)) {
								$errorMess=$result_3['message'];
								//return view('pages.accueil')->withErrors($errorMess);
								return view('pages.errorecran')->withErrors($errorMess);	
							}
				
						}
						Session::put('uuID',$u_uuID);

						$verifDemande = $request->input('demandeID');
						if(!is_null($verifDemande)){
							return redirect('location-bureau-entreprise'.'/?demandeID='.$verifDemande);
						}
						
                        //return view('pages.firstscreen');
						return redirect()->back();
					}
					//dd("mlkmkmk");
					// traiter code inconnu
                    break;
                case "Motdepasseoublie":
                    $result=$restapiappel->appelrestapimotdepasseoublie($inputEMAIL);					
					if ($result['meta']['code']== '200'){   // OK
						$errorMess="Un message va vous être envoyé dans votre boite email.";
						//return view('pages.sesigner',['inputEMAIL' => $inputEMAIL])->withErrors($errorMess);
						return redirect()->back()->with('errorMdpForget',$errorMess);
					}
					if ($result['meta']['code']== '400'){   // erreur
						$errorMess=$result['meta']['message'];
						//return view('pages.sesigner',['inputEMAIL' => $inputEMAIL])->withErrors($errorMess);
						return redirect()->back()->with('errorMdpForget',$errorMess);
					}
                    break;                
                case "Sesigneravecunlien":
					$result=$restapiappel->appelrestapiSesigneravecunlien($inputEMAIL);					
					if ($result['meta']['code']== '200'){   // OK
						$errorMess="Un message contenant le lien va vous être envoyé";
						return view('pages.sesigner',['inputEMAIL' => $inputEMAIL])->withErrors($errorMess);
					}
					if ($result['meta']['code']== '400'){   // erreur
						$errorMess=$result['meta']['message'];
						return view('pages.sesigner',['inputEMAIL' => $inputEMAIL])->withErrors($errorMess);
					}
					break;

				case "Sesigneravecuncode":					
						$result=$restapiappel->appelrestapiSesigneravecunCode($inputEMAIL);		
						//dd($result);
						if ($result['meta']['code']== '200'){   // OK
							//$errorMess="Un message contenant le lien va vous être envoyé";
							//return view('pages.sesigner',['inputEMAIL' => $inputEMAIL])->withErrors($errorMess);
							$NbrTentative=0;						
							$codevalidation=$result['data']['codevalidation'];
							$nomprenom=$result['data']['prenomnom'];							
							Session::put('Codevalidation',$codevalidation);							
							Session::put('CodeEmail',$inputEMAIL);							
							Session::put('CodeNbrTentative',$NbrTentative);
							Session::put('nomprenom',$nomprenom);

							return view('pages.sesigneraveccode',['nomprenom' =>$nomprenom, 'email'=>$inputEMAIL]);
						}
						if ($result['meta']['code']== '400'){   // erreur
							$errorMess=$result['meta']['message'];
							return view('pages.sesigner',['inputEMAIL' => $inputEMAIL])->withErrors($errorMess);
						}
						break;

                default:
                    $errorMess="postdemandeloggin submitype inconnu=".$submittype;
					return view('pages.errorecran')->withErrors($errorMess);
                    //return view('pages.sesigner',['inputEMAIL' => $inputEMAIL])->withErrors($errorMess);

            }

		
		//return view('pages.sesigner',['inputEMAIL' => $inputEMAIL])->withErrors($errorMess);
		return view('pages.errorecran')->withErrors($errorMess);
	}catch ( \Exception $e) {		
		$this->TraiteErreur($errorMess, $e);
		}
		   // ici il faut rester sur la form de logging
		   //return view('pages.login')->withErrors($errorMess);;
		   return view('pages.errorecran')->withErrors($errorMess);
		   //$inputEMAIL="";
		   //return view('pages.sesigner',['inputEMAIL' => $inputEMAIL])->withErrors($errorMess);

	 }
	 public function postSesigneraveclecode(Request $request){
		$errorMess[]=null;
		try{
			$restapiappel=new Restapiappel();
			$inputCode = $request->input('inputCode');
			$lecodeatrouver=Session::get('Codevalidation');
			$inputEMAIL=Session::get('CodeEmail');
			$nomprenom=Session::get('nomprenom');

		if ($inputCode == $lecodeatrouver) {
			// le code est bon
		}else{
			$errorMess="Le code n'est pas valide";
			$nomprenom=Session::get('CrecomptePrenom')." ".Session::get('CrecompteNom');
			return view('pages.sesigneraveccode',['nomprenom' =>$nomprenom, 'email'=>$inputEMAIL])->withErrors($errorMess);
 		}
		
		$result=$restapiappel->appelrestapiCodepoursesigner($inputEMAIL,$inputCode);
		//dd($result);
		if ($result['meta']['code']== '400'){   // erreur
			$errorMess=$result['meta']['message'];
			return view('pages.sesigneraveccode',['nomprenom' =>$nomprenom, 'email'=>$inputEMAIL])->withErrors($errorMess);				
		}
		if ($result['meta']['code']== '200'){   // OK
			// mettre à jour les données pour la session						
			Session::put('fiuID',$result['data']['user']['id']);
			Session::put('fiuNOM',$result['data']['user']['nom']);
			Session::put('fiuPRENOM',$result['data']['user']['prenom']);
			Session::put('fiuEMAIL',$result['data']['user']['email']);						
			Session::put('fiuTokenEXPIRES',$result['data']['access_token']['expires_in']);
			Session::put('fiuTOKEN',$result['data']['access_token']['token']);
			Session::put('usersigne',1);
						
			return view('pages.accueil');
		}

		}catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			}
				return view('pages.sesigneraveccode',['nomprenom' =>$nomprenom, 'email'=>$inputEMAIL])->withErrors($errorMess);	
		}
	 public function demandeLogout(){
		log::critical("demandeloggout");
		$errorMess[]=null;
	 try {
		
		$restapiappel=new Restapiappel();
		log::critical("appel restapilogout");
		//dd($result);
		$result_2 = $restapiappel->appelrestapiConnexionFiuTrackDelete(Session::get('uuID'),Session::get('fiuTOKEN'));
		if (array_key_exists('meta', $result_2)) {
			if ($result_2['meta']['code']== '400'){   // erreur
				$errorMess=$result_2['meta']['message'];
				return view('pages.errorecran')->withErrors($errorMess);
			}
		}else{
			if (array_key_exists('message', $result_2)) {
				$errorMess=$result_2['message'];
				//return view('pages.accueil')->withErrors($errorMess);
				return view('pages.errorecran')->withErrors($errorMess);	
			}
		}
		
		$result=$restapiappel->appelrestapilogout(Session::get('fiuTOKEN'));
		if (array_key_exists('meta', $result)) {
			if ($result['meta']['code']== '400'){   // erreur
				$errorMess=$result['meta']['message'];
				return view('pages.errorecran')->withErrors($errorMess);
			}
		}else{
			if (array_key_exists('message', $result)) {
				$errorMess=$result['message'];
				//return view('pages.accueil')->withErrors($errorMess);
				return redirect('/')->withErrors($errorMess);	
			}

		}
		
		Session::flush();
		
		//return view('pages.accueil');
		//return view('pages.firstscreen');
		return redirect('/');
		

	    }catch ( \Exception $e) {		
		$this->TraiteErreur($errorMess, $e);
		}		   
		return view('pages.errorecran')->withErrors($errorMess);		
	 }
	 //
	 public function getInformationUtiSigne(){
		$errorMess[]=null;
	 try {
		$restapiappel=new Restapiappel();
		$result=$restapiappel->appelrestapigetdemandeMe(Session::get('fiuTOKEN'));

		if (array_key_exists('meta', $result)) {
			if ($result['meta']['code']== '400'){   // erreur
				$errorMess=$result['meta']['message'];
				return view('pages.errorecran')->withErrors($errorMess);
			}
			//dd($result);
			return $result;
			//return redirect('/');
		}else{
			if (array_key_exists('message', $result)) {
				$errorMess="Vous n'êtes pas connecté!";
				//return view('pages.accueil')->withErrors($errorMess);
				return $errorMess;
			}
		}


	    }catch ( \Exception $e) {
		
		$this->TraiteErreur($errorMess, $e);
		}		   
		   return $errorMess;
	 }

	 
	 public function Supprimerlecompte(){
		$errorMess[]=null;
	 try {
		log::critical("appel Supprimerlecompte");
		$restapiappel=new Restapiappel();
		$result=$restapiappel->appelrestapiSupprimerlecompte(Session::get('fiuTOKEN'));
		//"message" => "Unauthenticated."
		//dd($result);
		Session::flush();
		if (array_key_exists('meta', $result)) {
			//dd("meta existe") ;
			if ($result['meta']['code']== '400'){   // erreur
				$errorMess=$result['meta']['message'];			
				return view('pages.errorecran')->withErrors($errorMess);
			}
			$errorMess="Votre compte a bien été supprimé.";
			//return view('pages.accueil')->withErrors($errorMess);;
			return redirect('/')->withErrors($errorMess);	
		}else{
			//dd("meta existe pas") ;
			if (array_key_exists('message', $result)) {
				$errorMess="Vous n'êtes pas connecté!";
				return view('pages.errorecran')->withErrors($errorMess);	
			}
			//return view('pages.accueil');
		}
		
		//return view('pages.accueil');
		return redirect('/');

	    }catch ( \Exception $e) {		
			$this->TraiteErreur($errorMess, $e);
		}		

		//:accueil
		return view('pages.errorecran')->withErrors($errorMess);
		

		if ($result['message']== 'Unauthenticated'){ 
		}
		   //return $errorMess;
	 }
	 
	 
	 public function lienpoursesigner(Request $request){
		try {
		$errorMess[]=null;
		$uuid=$request['uuid'];
		log::critical("uuid=".$uuid);	
		//return view('pages.firstscreen');
		$restapiappel=new Restapiappel();
        // appel de la restapi pour savoir si cet UUID est valable
		$result=$restapiappel->appelrestapiUUIDvalablelienpoursesigner($uuid);
		//dd($result);
		if ($result['meta']['code']== '400'){   // erreur
			$errorMess=$result['meta']['message'];
			return view('pages.accueil')->withErrors($errorMess);
		}
		if ($result['meta']['code']== '200'){   // OK		
			// On doit signer la personne			
			Session::put('fiuID',$result['data']['user']['id']);
			Session::put('fiuNOM',$result['data']['user']['nom']);
			Session::put('fiuPRENOM',$result['data']['user']['prenom']);
			Session::put('fiuEMAIL',$result['data']['user']['email']);						
			Session::put('fiuTokenEXPIRES',$result['data']['access_token']['expires_in']);
			Session::put('fiuTOKEN',$result['data']['access_token']['token']);
			Session::put('usersigne',1);
			return view('pages.accueil');
		}
		$errorMess[]="Erreur application";
         
		}catch ( \Exception $e) {		
			$this->TraiteErreur($errorMess, $e);
		}		   		
		return view('pages.errorecran')->withErrors($errorMess);				
	 }


	 public function Motdepasseoublie(Request $request){
		try {
		$errorMess[]=null;
		$uuid=$request['uuid'];
		log::critical("uuid=".$uuid);	
		//return view('pages.firstscreen');
		$restapiappel=new Restapiappel();
        // appel de la restapi pour savoir si cet UUID est valable
		$result=$restapiappel->appelrestapiUUIDvallable($uuid);
		if ($result['meta']['code']== '400'){   // erreur
			$errorMess=$result['meta']['message'];
			return view('pages.errorecran')->withErrors($errorMess);
		}
		if ($result['meta']['code']== '200'){   // OK			
			$nomprenom=$result['data']['nomprenom'];
			$email=$result['data']['email'];
			$MajCreation=$result['data']['MajCreation'];				
			//return view('pages.CreMajmotdepasse',['MajCreation' => $MajCreation,'uuid' =>$uuid,'nomprenom' =>$nomprenom,'email' =>$email]);
			return view('pages.modifierMdp',['MajCreation' => $MajCreation,'uuid' =>$uuid,'nomprenom' =>$nomprenom,'email' =>$email]);							
		}
		$errorMess[]="Erreur application";
         
		}catch ( \Exception $e) {		
			$this->TraiteErreur($errorMess, $e);
		}		   		
		return view('pages.errorecran')->withErrors($errorMess);				
	 }

	 
	 
	 public function ValiderCreationCompte(Request $request){
		try {
		$errorMess[]=null;
		$uuid=$request['uuid'];
		
		//return view('pages.firstscreen');
		$restapiappel=new Restapiappel();
        // appel de la restapi pour savoir si cet UUID est valable
		
					$result=$restapiappel->appelrestapiCreeCompteUUID($uuid);
					if ($result['meta']['code']== '400'){   // erreur
							$errorMess=$result['meta']['message'];
							return view('pages.errorecran')->withErrors($errorMess);
					}
					if ($result['meta']['code']== '200'){   // OK
						// mettre à jour les données pour la session						
						Session::put('fiuID',$result['data']['user']['id']);
						Session::put('fiuNOM',$result['data']['user']['nom']);
						Session::put('fiuPRENOM',$result['data']['user']['prenom']);
						Session::put('fiuEMAIL',$result['data']['user']['email']);						
						Session::put('fiuTokenEXPIRES',$result['data']['access_token']['expires_in']);
						Session::put('fiuTOKEN',$result['data']['access_token']['token']);
						Session::put('usersigne',1);
                        //return view('pages.firstscreen');
						return redirect('/');
					}
	
         
		}catch ( \Exception $e) {		
			$this->TraiteErreur($errorMess, $e);
		}		   		
		return view('pages.errorecran')->withErrors($errorMess);				
	 }
	 
	 public function postMettreAjourMotdePasse(Request $request){
		try {
		$errorMess[]=null;
		$uuid=$request['uuid'];		
		$MajCreation=$request['MajCreation'];

		$inputPassword=$request->input('inputPassword');
		$inputPasswordConfirme=$request->input('inputPasswordConfirme');
		$nomprenom=$request->input('nomprenom');
		$email=$request->input('email');		
        // rajouter la vérification que le mot de passe est fort
		if (strcmp($inputPassword,$inputPasswordConfirme)!=0){
			$errorMess="Les 2 mots de passe sont différents !";
			//return view('pages.CreMajmotdepasse',['MajCreation' => $MajCreation,'uuid' =>$uuid,'nomprenom' =>$nomprenom,'email' =>$email])->withErrors($errorMess);
			return redirect()->back()->with('errorUpdateMdp',$errorMess);						
		}
		
		$restapiappel=new Restapiappel();
        // appel de la restapi pour savoir si cet UUID est valable
		$result=$restapiappel->appelrestapiMetAjourMDP($uuid,$inputPassword);

		if ($result['meta']['code']== '400'){   // erreur
			$errorMess=$result['meta']['message'];			
			//return view('pages.CreMajmotdepasse',['MajCreation' => $MajCreation,'uuid' =>$uuid,'nomprenom' =>$nomprenom,'email' =>$email])->withErrors($errorMess);
			return redirect()->back()->with('errorUpdateMdp',$errorMess);						
		}
		if ($result['meta']['code']== '200'){   // OK	
			$errorMess="Votre mot de passe est mis à jour. Vous pouvez vous connecter";
			//return view('pages.firstscreen')->withErrors($errorMess);	
			//return view('pages.accueil')->withErrors($errorMess);
			return redirect('/')->withErrors($errorMess);

		}
		$errorMess[]="Erreur application";
         
		}catch ( \Exception $e) {		
			$this->TraiteErreur($errorMess, $e);
		}		   		
		return view('pages.errorecran')->withErrors($errorMess);								
	 }

	 
	 public function gettestCaptcha(){
		try {
			return view('pages.testCaptcha');
		}catch ( \Exception $e) {		
			$this->TraiteErreur($errorMess, $e);
		}	
	 }


	 public function gettestCaptcha2(){
		try {
			return view('pages.testCaptcha2');
		}catch ( \Exception $e) {		
			$this->TraiteErreur($errorMess, $e);
		}	
	 }

	 public function postTestCapcha123ABC(Request $request){
		try{

			/*
			// Clé secrète de reCAPTCHA
			$secretKey = '6Lf4YZIqAAAAAKuhzGtx5sumC9w_aSakJSiiyaA5';

			$captchaResponse = $request->input('g-recaptcha-response');

			// Vérifier si une réponse a été envoyée
			if (!$captchaResponse) {
				dd("Erreur : le reCAPTCHA n'a pas été validé.");
			}
			
			// Vérifier la réponse auprès de l'API Google
			$verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
			$response = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $captchaResponse);
			$responseData = json_decode($response);
			
			// Vérifier le statut de la validation
			if (!$responseData->success) {
				dd("Erreur : reCAPTCHA invalide.");
			}
			*/

			// Clé secrète de reCAPTCHA
			$secretKey = env('secretKeyCaptcha');
			
			$recaptchaToken = $request->input('recaptchaToken');
			if (!$recaptchaToken) {
				dd("Erreur : le reCAPTCHA n'a pas été validé.");
			}

			// Envoyer la requête à l'API reCAPTCHA
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaToken}");
			//$verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
			//$response = file_get_contents($verifyUrl . '?secret=' . $secretKey . '&response=' . $recaptchaToken);
			$responseData = json_decode($response);

			if ($responseData->success && $responseData->score >= 0.5) {
				// L'utilisateur est vérifié
				dd("Validation réussie");
			} else {
				// L'utilisateur peut être un bot
				dd("Échec de la validation");
			}
			
			// Continuer le traitement si validé
			dd("test validé postTestCapcha123ABC");
		}catch ( \Exception $e) {		
			$this->TraiteErreur($errorMess, $e);
		}
	 }


	 public function MotdepasseoublieTest(){
		try{
			return view('pages.modifierMdp');
		}catch ( \Exception $e) {		
			$this->TraiteErreur($errorMess, $e);
		}
	 }


	 public function profileUser(){
		try{

			$restapiappel=new Restapiappel();
			$result=$restapiappel->appelrestapigetdemandeMe(Session::get('fiuTOKEN'));
            
			if (array_key_exists('meta', $result)) {
				if ($result['meta']['code']== '400'){   // erreur
					$errorMess=$result['meta']['message'];
					return view('pages.errorecran')->withErrors($errorMess);
				}
			}
			//$user = $this->getInformationUtiSigne();
			//if($user == "Vous n'êtes pas connecté!"){
			//	$errorMess="Votre session a expiré. Veuillez vous reconnecter.";
			//	return redirect('/')->withErrors($errorMess);
			//}
			// "message" => "Unauthenticated."
			if (array_key_exists('message', $result)) {
				if ($result['message']== 'Unauthenticated.'){   // erreur
					$errorMess="Vous êtes déconnecté";
					Session::flush();
					return redirect('/')->withErrors($errorMess);	
					//return view('pages.errorecran')->withErrors($errorMess);
				}
			}

			return view('pages.profileUser',['user'=>$result]);

		}catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			return view('pages.erreur')->withErrors($errorMess);
		}
	}


	public function updateProfileUser(Request $request){
		try{

			$errorMess[]=null;
			//$contact_id,$nomcontact,$prenomcontact,$contactmail_id,$libelleeamil,$contacttelephone_id,$numerotelephonel
			$contactID = $request->contact_id;
			$nomcontact = $request->lastname;
			$prenomcontact = $request->firstname;
			$contactmail_id = $request->contactmail_id;
			$libelleemail = $request->email;
			$contacttelephone_id = $request->contacttelephone_id;
			$numerotelephonel = $request->telephone;
			$passwordNumber1 = $request->passwordNumber1;
			$passwordNumber2 = $request->passwordNumber2;
			$fiuid = $request->fiuid;

			$restapiappel=new Restapiappel();


			if($passwordNumber1 !== $passwordNumber2){

				$errorMess = "Les 2 mots de passes doivent être identique.";
				return redirect()->back()->with('errorUpdateProfileFiu',$errorMess);
			}

			
			$thephone = new PhoneNumber($numerotelephonel, "");
			$lepays=$thephone->getCountry();
			if (is_null($lepays)){
					$thephone = new PhoneNumber($numerotelephonel, "FR");
			}
			if ($thephone->isValid()){			
				$numerotelephonel=$thephone->formatE164();                     
			}else{
				//log::critical("le tel n est pas valide = ".$client['Telephone']);
				$errorMess="Le numéro de téléphone n'est pas valide !";             
				return redirect()->back()->with('errorUpdateProfileFiu',$errorMess);       			
			}

			
			$result = $restapiappel->appelupdateProfileUserFiu($contactID,$nomcontact,$prenomcontact,$contactmail_id,$libelleemail,$contacttelephone_id,$numerotelephonel,$passwordNumber1,$fiuid,Session::get('fiuTOKEN'));
			//dd($result);
			if (array_key_exists('meta', $result)) {
				if ($result['meta']['code']== '400'){   // erreur
					$errorMess=$result['meta']['message'];
					return view('pages.errorecran')->withErrors($errorMess);	
				}
			}else{
                  // une erreur$result['meta']['code']== '400'
				  if (array_key_exists('message', $result)) {
					$errorMess=$result['message'];
					return view('pages.errorecran')->withErrors($errorMess);	
				}
			}
			//tout est bon, ça fonctionne
			$errorMess="Les informations du profil ont été modifiées.";
			return redirect('profile')->with('errorUpdateProfileFiu',$errorMess);

		}catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			return view('pages.erreur')->withErrors($errorMess);
		}
	}


	public function connectEmailOnly(Request $request){
		try{

			$restapiappel=new Restapiappel();
			$inputEMAIL = $request->inputEMAIL;
			//$NbrTentative=Session::get('CrecompteNbrTentative');
			//$NbrTentative=$NbrTentative+1;
			//Session::put('CrecompteNbrTentative',$NbrTentative);
			//if ($NbrTentative > 3){
			//	$errorMess="Trop de tentatives !";
			//	return redirect()->back()->withInput()->with('errorEmailOnly',$errorMess);
			//}

			$result=$restapiappel->appelrestapiCodeValidationConnexionEmailOnly($inputEMAIL);		
			if ($result['meta']['code']== '200'){   // OK
							//$errorMess="Un message contenant le lien va vous être envoyé";
							//return view('pages.sesigner',['inputEMAIL' => $inputEMAIL])->withErrors($errorMess);
							$NbrTentative=0;					
							$codevalidation=$result['data']['codevalidation'];
							$nomprenom=$result['data']['prenomnom'];							
							Session::put('CodevalidationConnexionEmail',$codevalidation);
							Session::put('emailUserConnexionEmail',$inputEMAIL);
							//DemandeIDconnEmailOnly
							$verifDemande = $request->input('DemandeIDconnEmailOnly');
							if(!empty($verifDemande)){
								return redirect('/')->with(['validerCodeEmailOnlyConnexion'=>true,'thirdHiddenDemandeID'=>$verifDemande]);
							} 
							return redirect()->back()->with('validerCodeEmailOnlyConnexion',true);
			}

			if ($result['meta']['code']== '400'){   // erreur
				$errorMess=$result['meta']['message'];
				return redirect()->back()->withInput()->with('errorEmailOnly',$errorMess);
			}

		}catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			return view('pages.erreur')->withErrors($errorMess);
		}
	}


	public function validerCodeConnexionEmailOnly(Request $request){
		try{

			$restapiappel=new Restapiappel();
			$codeValider = $request->codeValidation;
			$emailCurentUserEmail = Session::get('emailUserConnexionEmail');
			$codeValiderConnexionEmail = Session::get('CodevalidationConnexionEmail');	
			$NbrTentative=Session::get('CrecompteNbrTentative');
			$NbrTentative=$NbrTentative+1;
			Session::put('CrecompteNbrTentative',$NbrTentative);
			if ($NbrTentative > 3){
				$errorMess="Trop de tentatives !";
				return redirect()->back()->withInput()->with('errorCodeValidationEmailConnexion',$errorMess);
			}
			if($codeValider == $codeValiderConnexionEmail){
				$result = $restapiappel->appelofLoginEmailOnly($emailCurentUserEmail);
				Session::put('fiuID',$result['data']['user']['id']);
				Session::put('fiuNOM',$result['data']['user']['nom']);
				Session::put('fiuPRENOM',$result['data']['user']['prenom']);
				Session::put('fiuEMAIL',$result['data']['user']['email']);						
				Session::put('fiuTokenEXPIRES',$result['data']['access_token']['expires_in']);
				Session::put('fiuTOKEN',$result['data']['access_token']['token']);
				Session::put('usersigne',1);
				$result_2=$restapiappel->appelrestapigetdemandeMe($result['data']['access_token']['token']);
				Session::put('fiuContactID',$result_2['data']['contact']['contact_id']);
				Session::put('contactFiuStatutID',$result_2['data']['contact']['contact_fiu_statut_id']);

				$u_contactFiuStatutId = $result_2['data']['contact']['contact_fiu_statut_id'];
				$u_uuID = $this->generate_uuid_v4();
				$u_fiuID = $result['data']['user']['id'];
				//$restapiappel->appelrestapiPostcreateUuidFiu($u_uuID,$u_contactFiuStatutId,$result['data']['user']['id']);
				$result_3 = $restapiappel->appelrestapiPostcreateUuidFiu($u_uuID,$u_contactFiuStatutId,Session::get('fiuTOKEN'));
				//$result_3 = $restapiappel->appelrestapiPostcreateUuidFiu($u_uuID,$u_contactFiuStatutId,$result['data']['user']['id']);
				if (array_key_exists('meta', $result_3)) {
					if ($result_3['meta']['code']== '400'){   // erreur
						$errorMess=$result_3['meta']['message'];
						return view('pages.errorecran')->withErrors($errorMess);
					}
				}else{
					if (array_key_exists('message', $result_3)) {
						$errorMess=$result_3['message'];
						//return view('pages.accueil')->withErrors($errorMess);
						return view('pages.errorecran')->withErrors($errorMess);	
					}
		
				}
				Session::put('uuID',$u_uuID);	
				
				$DemandeIDValidationCodeConnEmail = $request->DemandeIDValidationCodeConnEmail;
				if(!is_null($DemandeIDValidationCodeConnEmail)){
					return redirect('location-bureau-entreprise'.'?demandeID='.$DemandeIDValidationCodeConnEmail);
				}
				return redirect()->back();
				
			}else{
				$errorMess="Erreur code valider !";
				return redirect()->back()->withInput()->with('errorCodeValidationEmailConnexion',$errorMess);
			}

		}catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
			return view('pages.erreur')->withErrors($errorMess);
		}
	}


	public function offresFavoris(){
        try{
            
			//offreFavorisFiuByContact
			$restapiappel=new Restapiappel();
			$user=$restapiappel->appelrestapigetdemandeMe(Session::get('fiuTOKEN'));
			if (array_key_exists('message', $user)) {
				if ($user['message']== 'Unauthenticated.'){   // erreur
					$errorMess="Vous êtes déconnecté";
					Session::flush();
					return redirect('/')->withErrors($errorMess);
					//return view('pages.errorecran')->withErrors($errorMess);
				}
			}
			$contactID = $user['data']['client']['contactid'];
			$allOffresFav = $restapiappel->appeloffreFavorisFiuByContact($contactID);
			
            return view('pages.offreFavoris',['allOffresFav'=>$allOffresFav['data']['dataOffreFavContact']]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
        }
        return $errorMess; 
    }

	public function mesDemandes(){
		try{

			$restapiappel=new Restapiappel();
            $fiuID = Session::get('fiuID');
            $uuID = Session::get('uuID');
            $mesRechercheUserFiupartDemande = $restapiappel->appeldemandeoffreByUserFiu($fiuID,$uuID);

			return view('pages.mesDemandes',['mesRechercheUserFiupartDemande'=>$mesRechercheUserFiupartDemande['data']['result']]);

		}catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
        }
        return $errorMess;
	}
	

public function TraiteErreur(&$errorMess, $e){
			$ErrLine = $e->getLine();
			$ErrFile = $e->getFile();
			$errorMess =  " Mess =" .$e->getMessage();
			$errorMess = "Exception: Ligne=".$ErrLine. " Fichier=".$ErrFile . " Message  =" .$e->getMessage();
			Log::critical($errorMess);
			}
	



}

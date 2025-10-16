<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Log;
use Session;
use App\Models\Restapiappel  as Restapiappel;
use Propaganistas\LaravelPhone\PhoneNumber;

//comentaire pour commit
//test comentaire pour commit

class TestController extends Controller
{
    //
    public function testFrontFiu(Request $request){
        
		try{
            //dd('test');
            return view('pages.fiuTest');

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function searchEngineFiu(Request $request){
        
		try{
            //dd($request);
            $restapiappel=new Restapiappel();
            $fiuID = Session::get('fiuID');
            $uuID = Session::get('uuID');
            $mesRechercheUserFiu = $restapiappel->appeldemandeoffreByUserFiu($fiuID,$uuID);
            $textLocation = '';
            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocation,'mesRechercheUserFiu' => $mesRechercheUserFiu]);

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
	 }

     
     public function searchEngineTest(Request $request){
        
		try{
            //dd('test');
            $textLocation = '';
            return view('pages.searchEngineFiu-Test-3',['textLocation' => $textLocation]);

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function locationParis1(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(28);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function locationParis2(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(29);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function locationParis3(){
        
		try{
            //dd('test');
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(30);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function locationParis4(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(31);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis5(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(32);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis6(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(33);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function locationParis7(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(34);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis8(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(35);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis9(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(36);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis10(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(37);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis11(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(38);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis12(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(39);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis13(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(40);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis14(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(41);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis15(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(42);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis16(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(43);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis17(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(44);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis18(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(45);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis19(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(46);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationParis20(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(47);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationBoulogneBilancourt(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(48);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function locationGareDuNord(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(49);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function locationGareDeLyon(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(50);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function locationlocationLevalloisPerret(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(51);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function locationMontparnasse(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(52);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function locationRepublique(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(53);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function locationSaintLazare(Request $request){
        
		try{
            $restapiappel=new Restapiappel();
            $textLocationOrCoworking = $this->viewLocationAndCoworking(54);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


    public function viewLocationAndCoworking($id){
        $restapiappel=new Restapiappel();
        $textLocationCoworking = $restapiappel->appelOneCategorieTexte($id);
        return $textLocationCoworking['data']['data'];
    }

    
    public function allUrlCoworkingAndLocation(){
            $restapiappel=new Restapiappel();
            $allUrl = [];
            $allCoworking = $restapiappel->appelAllTextCoworking();
            foreach($allCoworking['data']['data'] as $key => $valueCow){
                    array_push($allUrl,$valueCow['url']);
            }
            $allLocation = $restapiappel->appelAllTextLocationParis();
            foreach($allLocation['data']['data'] as $key => $valueLoc){
                array_push($allUrl,$valueLoc['url']);
            }
            return $allUrl;
    }

 
    public function coworkingParis1(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(1);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis2(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(2);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis3(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(3);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis4(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(4);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis5(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(5);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis6(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(6);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis7(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(7);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis8(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(8);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis9(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(9);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis10(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(10);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis11(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(11);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis12(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(12);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis13(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(13);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis14(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(14);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis15(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(15);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis16(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(16);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis17(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(17);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis18(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(18);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis19(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(19);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingParis20(Request $request){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(20);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
        
    }


    public function coworkingSaintLazareParis(){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(21);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
    }


    public function coworkingGareLyonParis(){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(22);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
    }

    public function coworkingMontparnasseParis(){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(23);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
    }


    public function coworkingBoulogneBillancourtParis(){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(24);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
    }


    public function coworkingLevalloisPerret(){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(25);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
    }


    public function coworkingRepubliqueParis(){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(26);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
    }


    public function coworkingGareDuNordParis(){
        try{

            $textLocationOrCoworking = $this->viewLocationAndCoworking(27);
            $textLocationOrCoworking['allUrl'] = $this->allUrlCoworkingAndLocation();

            return view('pages.searchEngineFiu',['textLocationOrCoworking' => $textLocationOrCoworking]);

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
    }

     

    /*
     public function onlyOneOffreFiu(Request $request,$Leclient = null,$offreID){
        
		try{
            $errorMess[]=null;
            if($Leclient == "undefined"){ $Leclient = null; } //en test, à enlever
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
                log::critical("Le client est null");
             }else{
                
                
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
    
             return View('pages.oneOffreFiu',['offres' => $donnees,'Images' => $Images,'Surfaces' => $Surfaces,'ServiceFiu'=> $ServiceFiu,
                                              'LesBaux' => $LesBaux,'Servicedebase' => $Servicedebase,'ServiceEquipement' => $ServiceEquipement,
                                              'ServiceConfort' => $ServiceConfort,'ServiceSecurite' => $ServiceSecurite,'offresurfaceDispo' => $offresurfaceDispo,
                                              'Leclient' => $Leclient,'Detailespacedetravail' => $Detailespacedetravail,'FiuID' => $FiuID,'ListeDesoffres' => $ListeDesoffres])->withErrors($errorMess);
            //return view('pages.oneOffreFiu');

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }
    */
     
    
     public function onlyOneOffreFiu(Request $request,$contentUrl,$offreID,$Leclient = null){
        
		try{
            $errorMess[]=null;

            if (!is_numeric($offreID)){
                $Ipadresse=$request->ip();     
                $errorMess="(TestController) onlyOneOffreFiu offreid pas numérique =".$offreID. "  adresse ip =".$Ipadresse;           
                log::critical($errorMess);
                return response([$errorMess], 410);
                return view('pages.errorecran')->withErrors($errorMess);
                //return ResponseAPI::error("Cette référence est inconnue", 1);
            }


            if($Leclient == "undefined"){ $Leclient = null; } //en test, à enlever
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
    
             return View('pages.oneOffreFiu',['offres' => $donnees,'Images' => $Images,'Surfaces' => $Surfaces,'ServiceFiu'=> $ServiceFiu,
                                              'LesBaux' => $LesBaux,'Servicedebase' => $Servicedebase,'ServiceEquipement' => $ServiceEquipement,
                                              'ServiceConfort' => $ServiceConfort,'ServiceSecurite' => $ServiceSecurite,'offresurfaceDispo' => $offresurfaceDispo,
                                              'Leclient' => $Leclient,'Detailespacedetravail' => $Detailespacedetravail,'FiuID' => $FiuID,'ListeDesoffres' => $ListeDesoffres])->withErrors($errorMess);
            //return view('pages.oneOffreFiu');

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }
    

     public function oneOffreFiu(Request $request){
        
		try{
            //dd('test');
            return view('pages.oneOffreFiu');

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function contacterlegestionnaire2(Request $request){
        try{

            log::critical("appel contacterlegestionnaire 2");
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
                    return($this->onlyOneOffreFiu($request,$client,$client['offreID']));
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
                    return($this->onlyOneOffreFiu($request,$client,$client['offreID']));
                }

                // 
                $result=$restapiappel->appelrestapiContactGestionnaire($client['nom'],$client['prenom'],$client['email'],$client['Telephone'],$client['offreID']);              
            }
                                                            
                        
            if ($result['meta']['code']== '400'){   // erreur
                $errorMess=$result['meta']['message'];
                return view('pages.errorecran')->withErrors($errorMess);
            }

            $client['Message']="Votre demande de contact est bien prise en compte.";
            return($this->onlyOneOffreFiu($request,$client,$client['offreID']));

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
     }



     public function contacterlegestionnaire3(Request $request){
        try{

            log::critical("appel contacterlegestionnaire 3");

            // Clé secrète de reCAPTCHA
			$secretKey = env('secretKeyCaptcha');
			$recaptchaToken_Mobile = $request->input('recaptchaToken6'); //mobile
			$recaptchaToken_Bureau = $request->input('recaptchaToken5');
            
			if (!$recaptchaToken_Mobile && !$recaptchaToken_Bureau) {
                return redirect()->back()->withInput()->with('errorForm', "Le reCAPTCHA n'a pas été validé.");
			}

            if(is_null($recaptchaToken_Mobile)){
                if (!$recaptchaToken_Bureau) {
                    return redirect()->back()->withInput()->with('errorForm', "Le reCAPTCHA n'a pas été validé.");
                }
                $recaptchaToken = $recaptchaToken_Bureau;
            }
            if(is_null($recaptchaToken_Bureau)){
                if (!$recaptchaToken_Mobile) {
                    return redirect()->back()->withInput()->with('errorForm', "Le reCAPTCHA n'a pas été validé.");
                }
                $recaptchaToken = $recaptchaToken_Mobile;
            }

			// Envoyer la requête à l'API reCAPTCHA
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaToken}");
            $responseData = json_decode($response);
            if (!$responseData->success || ($responseData->score ?? 0) <= 0.1) {
                log::critical('Requête bloquée : score reCAPTCHA nul ou validation échouée.');
                // L'utilisateur peut être un bot
                return redirect()->back()->withInput()->with('errorForm', "Échec de la validation, vous êtes peut-être un robot.Essayez de nouveau.Vous pouvez aussi nous contacter par téléphone.");
            }
            
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
                    log::critical("email pas valide");
                    //$client['errorMess']="L'email n'est pas valide !";                
                    //return($this->onlyOneOffreFiu($request,$client,$client['offreID']));
                    return redirect()->back()->withInput()->with('errorForm', "L'email n'est pas valide");
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
                    //$client['errorMess']="Le numéro de téléphone n'est pas valide !";                    
                    //return($this->onlyOneOffreFiu($request,$client,$client['offreID']));
                    return redirect()->back()->withInput()->with('errorForm', "Le numéro de téléphone n'est pas valide !");
                }

                // 
                $result=$restapiappel->appelrestapiContactGestionnaire($client['nom'],$client['prenom'],$client['email'],$client['Telephone'],$client['offreID']);              
            }
                                                            
                        
            if ($result['meta']['code']== '400'){   // erreur
                $errorMess=$result['meta']['message'];
                return view('pages.errorecran')->withErrors($errorMess);
            }

            $client['Message']="Votre demande de contact est bien prise en compte.";
            $arrayUrl = explode("/",url()->previous());
            //return($this->onlyOneOffreFiu($request,$arrayUrl[6],$client['offreID'],$client));// peut-être penser à changer avec un redirect pour url plus propre
            return redirect()->back()->with('errorForm', "Votre demande de contact est bien prise en compte.");
            

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
     }

     public function contacterlegestionnaire3mobile(Request $request){
        try{

            log::critical("appel contacterlegestionnaire 3 mobile");
            
            // Clé secrète de reCAPTCHA
			$secretKey = env('secretKeyCaptcha');
			
			$recaptchaToken = $request->input('recaptchaToken5');
			if (!$recaptchaToken) {
                return redirect()->back()->withInput()->with('errorForm', "Le reCAPTCHA n'a pas été validé.");
			}

			// Envoyer la requête à l'API reCAPTCHA
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaToken}");
			$responseData = json_decode($response);

			if ($responseData->success && $responseData->score >= 0.5) {
				// L'utilisateur est vérifié
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
                            log::critical("email pas valide");
                            //$client['errorMess']="L'email n'est pas valide !";                
                            //return($this->onlyOneOffreFiu($request,$client,$client['offreID']));
                            return redirect()->back()->withInput()->with('errorForm', "L'email n'est pas valide");
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
                            //$client['errorMess']="Le numéro de téléphone n'est pas valide !";                    
                            //return($this->onlyOneOffreFiu($request,$client,$client['offreID']));
                            return redirect()->back()->withInput()->with('errorForm', "Le numéro de téléphone n'est pas valide !");
                        }

                        // 
                        $result=$restapiappel->appelrestapiContactGestionnaire($client['nom'],$client['prenom'],$client['email'],$client['Telephone'],$client['offreID']);              
                    }
                                                                    
                                
                    if ($result['meta']['code']== '400'){   // erreur
                        $errorMess=$result['meta']['message'];
                        return view('pages.errorecran')->withErrors($errorMess);
                    }

                    $client['Message']="Votre demande de contact est bien prise en compte.";
                    $arrayUrl = explode("/",url()->previous());
                    //return($this->onlyOneOffreFiu($request,$arrayUrl[6],$client['offreID'],$client));// peut-être penser à changer avec un redirect pour url plus propre
                    return redirect()->back()->with('errorForm', "Votre demande de contact est bien prise en compte.");
			} else {
				// L'utilisateur peut être un bot
                return redirect()->back()->withInput()->with('errorForm', "Échec de la validation, vous êtes peut-être un robot.Essayez de nouveau.Vous pouvez aussi nous contacter par téléphone.");
			}


        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
     }
     
     public function rechercheSurMesuredemande(Request $request){
        try{

            
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
                $result=$restapiappel->appelrestapirechercheSurMesuredemande($Lenom,$LePrenom,$Lemail,$LeTelphoneE164,$Lebesoin);                          
                                                            
                        
            if ($result['meta']['code']== '400'){   // erreur
                $errorMess=$result['meta']['message'];
                return view('pages.errorecran')->withErrors($errorMess);
            }
            
            return redirect()->back()->with('errorForm', "Votre demande est bien prise en compte.")->withFragment('nomDiv');;

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.errorecran')->withErrors($errorMess);
		}
     }

     
     public function prendrecontact(Request $request){
        try{
                        
            $restapiappel=new Restapiappel();                     
            $LePrenom=trim($request->input('Prenom'));   
            $Lenom=trim($request->input('nom'));    
            $LeTelphone=trim($request->input('Telephone'));            
            $Lemail=trim($request->input('email'));                                                    
            $Lechoixprojet=intval(trim($request->input('choixprojet')));   
            $Leprojet=trim($request->input('projet'));   
            
                if (!filter_var($Lemail, FILTER_VALIDATE_EMAIL)) {                                  
                    return redirect()->back()->withInput()->with('errorForm', "L'email n'est pas valide")->withFragment('ContactDiv');
                }            
                
                $thephone = new PhoneNumber($LeTelphone, "");
                $lepays=$thephone->getCountry();
                if (is_null($lepays)){
                        $thephone = new PhoneNumber($LeTelphone, "FR");
                }
                if ($thephone->isValid()){                    
                    $LeTelphoneE164=$thephone->formatE164();                     
                }else{                    
                    return redirect()->back()->withInput()->with('errorForm', "Le numéro de téléphone n'est pas valide !")->withFragment('ContactDiv');
                }
                if (strlen($Leprojet)==0){
                    return redirect()->back()->withInput()->with('errorForm', "La description du est obligatoire !")->withFragment('ContactDiv');
                }
                if (strlen($Leprojet)>1000){
                    $Lebesoin=substr($Lebesoin, 0, 999);                    
                }         

                switch ($Lechoixprojet) {
                    case 1:
                        $choixduprojet="Trouver un bureau";
                      break;
                    case 2:
                        $choixduprojet="Publier une annonce";
                      break;
                    case 3:
                        $choixduprojet="Recherche sur mesure";
                      break;
                    case 4:
                        $choixduprojet="Mon compte";
                        break;
                    case 5:
                        $choixduprojet="Autres";
                      break;
                    default:                    
                      $choixduprojet="Erreur programme";
                  }

                $result=$restapiappel->appelrestapiprendrecontact($Lenom,$LePrenom,$Lemail,$LeTelphoneE164,$Leprojet,$Lechoixprojet,$choixduprojet);                          
                                                            
                        
            if ($result['meta']['code']== '400'){   // erreur
                $errorMess=$result['meta']['message'];
                return view('pages.errorecran')->withErrors($errorMess);
            }
            
            return redirect()->back()->with('errorForm', "Votre demande est prise en compte.")->withFragment('ContactDiv');;

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.errorecran')->withErrors($errorMess);
		}
     }

    public function accueil(Request $request){
        
		try{
            //dd('test');
            return view('pages.accueil');
            

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }


     public function accueil2(Request $request){
        
		try{
            //dd('test');
            return view('pages.accueil-2');

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function rse(Request $request){
        
		try{
            //dd('test');
            return view('pages.rse');

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }

     public function getpodcast(){
        try{

            return view('pages.podcast');
            
        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
     }
/*
     public function allLocationBureau(Request $request){
        
		try{
            
            return view('pages.allLocationBureau');

        }catch ( \Exception $e) {
			$this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
		}
		
	 }
     */

     public function TraiteErreur(&$errorMess, $e){
        $ErrLine = $e->getLine();
        $ErrFile = $e->getFile();
        $errorMess =  " Mess =" .$e->getMessage();
        $errorMess = "Exception: Ligne=".$ErrLine. " Fichier=".$ErrFile . " Message  =" .$e->getMessage();
        Log::critical($errorMess);
        }
        public function quiSommeNous(Request $request){
            try{
                return view('pages.quiSommeNous');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function leConcept(Request $request){
            try{
                return view('pages.leConcept');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function EngagementRSE(Request $request){
            try{
                return view('pages.engagementRSE');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function nousRejoindre(Request $request){
            try{
                return view('pages.nousRejoindre');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function locationBureaux(Request $request){
            try{
                $restapiappel=new Restapiappel();
                $allTexteLocationParis = $restapiappel->appelAllTextLocationParis();//$allTexteLocationParis['data']['data'] pour recuperer le tableau
                //dd($allTexteLocationParis);
                return view('pages.locationBureaux',['allTexteLocationParis' => $allTexteLocationParis['data']['data']]);
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function coworking(Request $request){
            try{
                
                $restapiappel=new Restapiappel();
                $allTexteCoworking = $restapiappel->appelAllTextCoworking();
                //dd($allTexteCoworking);
                return view('pages.coworking',['allTexteCoworking' => $allTexteCoworking['data']['data']]);

            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function rechercheSurMesure(Request $request){
            try{
                $restapiappel=new Restapiappel();
                $allOffres = $restapiappel->randomOffresFiu();
                return view('pages.rechercheSurMesure',['allOffres' => $allOffres['data']['data']]);
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function locationBureauParis(Request $request){
            try{
                return view('pages.locationBureauParis');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function contact(Request $request){
            try{
                return view('pages.contact');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function mentionsLegales(Request $request){
            try{
                return view('pages.mentionsLegales');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function cgu(Request $request){
            try{
                return view('pages.cgu');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function confidentialite(Request $request){
            try{
                return view('pages.confidentialite');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function deposerUneAnnonce(Request $request){
            try{
                return view('pages.deposerUneAnnonce');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function guideDuCoworking(Request $request){
            try{
                return view('pages.guideDuCoworking');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }
        public function acceuil(Request $request){
            try{
                return view('pages.guideDuCoworking');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }

        
        public function area(Request $request,$params){
            try{
                $Ipadresse=$request->ip();     
                $allParams = $request->query();
                $newParamsFormat = http_build_query($allParams);
                $concatParams = $params."?".$newParamsFormat;
                $restapiappel=new Restapiappel();
                Log::info("param pour area=".$concatParams."  adresse ip=".$Ipadresse);
                $urlArea = $restapiappel->appelArea($concatParams);
                //Log::info(print_r($urlArea, true));                
                return $urlArea;
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }

        public function testBlog(){
            try{
                return view('pages.blogtest');
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }

        public function oneBlog(){
            try{
                return view('pages.blogOne');
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
        }

        
        public function testImage(){
        
            try{
                //dd('test');
                return view('pages.testImage');
    
            }catch ( \Exception $e) {
                $this->TraiteErreur($errorMess, $e);
                return view('pages.erreur')->withErrors($errorMess);
            }
            
         }


}
<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Restapiappel  as Restapiappel;
use App\Models\Blogdata  as Blogdata;

class indexnowsitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:indexnowsitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Création du sitemap xml et indexnow pour fiu';

    /**
     * Execute the console command.
     * php artisan make:command indexnowsitemap    // pour faire la création de la commande
     * php artisan app:indexnowsitemap
     * 
     */
    public function handle()
    {
        $blogdata = new Blogdata();
        $restapiappel=new Restapiappel();
        
        
        
        
        // on commence par mettre a sup toutes les urls
        $blogdata->indexnow_update_Allsupprime(1);
        $nomserveur="https://flexinuse.fr/";
        $fpXML = fopen('sitemap01.xml', 'w');
        $fpTXT = fopen('sitemap01.txt', 'w');
        $this->ecrirepremiereligne($fpXML);
        $this->ecrireuneligneloc($fpTXT,$fpXML,$nomserveur,null);
        $dateformat=new \DateTime("now");        
        $lastmod=$dateformat->format('Y-m-d H:i:s');
        $this->ecrireunelocDate($nomserveur,$lastmod);

  /*      
        $result=$restapiappel->appelrestapiListeLiensPourSiteMap();
        if ($result['meta']['code']== '400'){   // erreur
			$errorMess=$result['meta']['message'];
		    echo "$errorMess"	."\n";
            die();
		}        
        $listedesliens=$result['data'] ['listedesliens'];    
*/
        $listeecran=$this->chargedonneesEcrans();
        foreach($listeecran as $Unecran){                        
            $this->ecrireunelocDate($nomserveur.$Unecran['url'],$Unecran['dateMysql']);
            $this->ecrireuneligneloc($fpTXT,$fpXML,$nomserveur.$Unecran['url'],$Unecran['dateSitemap']);
        }
        
        $listedesLocaCoworking= $this->chargedonneesLocationCoworking();
        foreach($listedesLocaCoworking as $UnCoworking){                        
            $this->ecrireunelocDate($nomserveur.$UnCoworking['url'],$UnCoworking['dateMysql']);
            $this->ecrireuneligneloc($fpTXT,$fpXML,$nomserveur.$UnCoworking['url'],$UnCoworking['dateSitemap']);
        }

/*
        $listedesliens=$this->chargedonnees();
        foreach($listedesliens as $Unlien){
            $this->ecrireuneligneloc($fpTXT,$fpXML,$nomserveur.$Unlien);
            $this->ecrireunelocDate($nomserveur.$Unlien,null);    // attention on met la date du jour je ne connais pas la date
        }
        */
        
        $result=$restapiappel->appelrestapiOffrePourSiteMap();  //offres_select_AllOffresPubliques
        if ($result['meta']['code']== '400'){   // erreur
			$errorMess=$result['meta']['message'];
		    echo "$errorMess"	."\n";
            die();
		}        
        $listedesoffres=$result['data'] ['listedesoffres'];    
        //var_dump($listedesoffres);
        //die();
        $listeDesVillesEtCP=null;
        $listeDesVillesEtCPUnelement=null;
        /*
            ["offres_id"]  
            ["FIU_Rec__Titre_Annonce"]=>  
            ["nomville"]=>
            ["codepostal"]=>  
            ["offreDocDate"]=>   string(19) "2024-10-18 14:12:16"
        */
        foreach($listedesoffres as $Uneoffre){
            // -----------------------------   Liste des villes et code postaux
            $onajoute=true;
            if (!is_null($listeDesVillesEtCP)){
                foreach($listeDesVillesEtCP as $UneVilleCP){
                    if (($UneVilleCP['codepostal']==$Uneoffre['codepostal']) AND ($UneVilleCP['nomville']==$Uneoffre['nomville'])){
                        $onajoute=false;
                    }
                }
            }
            
            if($onajoute){
                $listeDesVillesEtCPUnelement['nomville']=$Uneoffre['nomville'];
                $listeDesVillesEtCPUnelement['codepostal']=$Uneoffre['codepostal'];
                $listeDesVillesEtCPUnelement['offreDocDate']=$Uneoffre['offreDocDate'];
                $listeDesVillesEtCP[]=$listeDesVillesEtCPUnelement;
            }

            //var_dump($Uneoffre);
            //---------------------- la date
            $dateformat=new \DateTime($Uneoffre['offreDocDate']);
            $lastmod=$dateformat->format('c');
            // ---------------   la location
            $titreannonce=str_replace('/', '', $Uneoffre['FIU_Rec__Titre_Annonce']);
            $titreannonce=str_replace(' ', '', $titreannonce);
            $lelien=$titreannonce."/".$Uneoffre['offres_id'];
            $location=$nomserveur."location-bureau-entreprise/".$lelien;
            // ----------------- Image
            $lelienImage="recupereimageDocumentID/".$Uneoffre['offres_id']."/0";
            $imageloc=$nomserveur.$lelienImage;
            // ---------------- Image titre
            $result=$restapiappel->appelrestapirecupereimageTitre($Uneoffre['offres_id'],0);
            $imagecaption=$result['data'] ['titredocument'];    
            if (strlen($imagecaption)==0){
                $imagecaption="Fiu principale";
            }
            $this->ecrireuneligneoffre($fpTXT,$fpXML,$location,$lastmod,$imageloc,$imagecaption,$Uneoffre['offres_id'],$Uneoffre['offreDocDate']);                        
        }
        //die();
        foreach($listeDesVillesEtCP as $UnevilleCP){            
            //echo $UnevilleCP['codepostal']." ". $UnevilleCP['nomville']."\n";
           // https://flexinuse.fr/location-bureau-entreprise?city=COLOMBES
           // https://flexinuse.fr/location-bureau-entreprise?city=ALFORTVILLE
           // https://flexinuse.fr/location-bureau-entreprise?city=NEUILLY SUR SEINE
           switch ($UnevilleCP['codepostal']) {
            case "75001":              
                case "75001":              
                case "75002":              
                case "75003":              
                case "75004":              
                case "75005":              
                case "75006":                              
                case "75007":              
                case "75008":              
                case "75009":              
                case "75010":              
                case "75011":              
                case "75012":              
                case "75013":              
                case "75014":              
                case "75015":              
                case "75016":              
                case "75017":              
                case "75018":              
                case "75019":              
                case "75020":              
              break;        
            default:
            //$location=$nomserveur."location-bureau-entreprise?city=".$UnevilleCP['nomville'];
            $location=$nomserveur."location-bureau-entreprise?city=".urlencode($UnevilleCP['nomville']);
            
            $dateformat=new \DateTime($UnevilleCP['offreDocDate']);
            $lastmod=$dateformat->format('c');
            $this->ecrireuneligneloc($fpTXT,$fpXML,$location,$lastmod);    
            $this->ecrireunelignelocDateVille($location,$UnevilleCP['offreDocDate'],$UnevilleCP['nomville']);

            
          }
        }
        //die();
        // -------------- traitement des blogs
        $blogdata = new Blogdata();
        $ListedesPosts=$blogdata->blog_posts_select_pourunblog(1);
        foreach ($ListedesPosts as $Unpost){            
            $slug=$Unpost['slug'];
            $dateformat=new \DateTime($Unpost['updated_at']);
            $lastmod=$dateformat->format('c');
            $location=$nomserveur."blog/".$slug;
            $this->ecrirelignePostBlog($fpTXT,$fpXML,$location,$lastmod,$Unpost['updated_at']);

        }
        $ListedesPosts=$blogdata->blog_posts_select_pourunblog(2);
        foreach ($ListedesPosts as $Unpost){            
            $slug=$Unpost['slug'];
            $dateformat=new \DateTime($Unpost['updated_at']);
            $lastmod=$dateformat->format('c');
            $location=$nomserveur."guide/".$slug;
            $this->ecrirelignePostBlog($fpTXT,$fpXML,$location,$lastmod,$Unpost['updated_at']);

        }
        $this->ecrirederniereligne($fpXML);
        fclose($fpXML);
        fclose($fpTXT);
}

    public function ecrireuneligneloc($fptxt,$fp,$location,$Ladate){
        /*
        <url>
        <loc>https://flexinuse.fr/</loc>
            <changefreq>daily</changefreq>
        <priority>0.8</priority>
            </url>        
        */
        $ligne="<url>";
        fwrite($fp,$ligne."\n");
        $ligne="<loc>".$location."</loc>";
        fwrite($fp,$ligne."\n");
        if (is_null($Ladate)){
            $ligne="<changefreq>daily</changefreq>";
            fwrite($fp,$ligne."\n");
        }else{
            $ligne="<lastmod>".$Ladate."</lastmod>";
            fwrite($fp,$ligne."\n");
        }
        
        $ligne="<priority>0.8</priority>";
        fwrite($fp,$ligne."\n");
        $ligne="</url>";
        fwrite($fp,$ligne."\n");

        fwrite($fptxt,$location."\n");        
        
        //$Blogdata = new Blogdata();

        //indexnow_insert($offres_id ,$datemaj,$Ville1,$url1)
        //$Blogdata->indexnow_insert(0 ,$Datemaj,"",$location);        
    }
    public function ecrireunelocDate($location,$Datemaj){
        $Blogdata = new Blogdata();
        //$dateformat=new \DateTime("now");        
        //$lastmod=$dateformat->format('Y-m-d H:i:s');
        $result=$Blogdata->indexnow_select_one_url($location);
        if (is_null($result)){
            $Blogdata->indexnow_insert(0 ,$Datemaj,"",$location,null,null);        
        }else{
            $Blogdata->indexnow_update_unsupprime(0,$result['indexnow_id']);
            $Blogdata->indexnow_update_datemaj($result['indexnow_id'],$Datemaj);
        }
        
        
    }
    public function ecrireunelignelocDateVille($location,$Datemaj,$Laville){
        $Blogdata = new Blogdata();
        //indexnow_insert($offres_id ,$datemaj,$Ville1,$url1)
        
            $result=$Blogdata->indexnow_select_one_url($location);
            if (is_null($result)){
                $Blogdata->indexnow_insert(0 ,$Datemaj,$Laville,$location,null,null);    
            }else{
                $Blogdata->indexnow_update_unsupprime(0,$result['indexnow_id']);
                $Blogdata->indexnow_update_datemaj($result['indexnow_id'],$Datemaj);
            }    
    }
    public function ecrireuneligneoffre($fptxt,$fp,$location,$lastmod,$imageloc,$imagecaption,$UneOffreID,$OffreDocDate){
        /*
        <url>
        <loc>
        https://flexinuse.fr/location-bureau-entreprise/Bureaux-ArchiveCave - puteaux - 92800/2555
        </loc>
        <lastmod>2024-08-04T00:01:10.806Z</lastmod>
        $ligne="<changefreq>daily</changefreq>";        
        <priority>0.5</priority>
        <image:image>
        <image:loc>
        https://flexinuse.fr/recupereimageDocumentID/2555/0
        </image:loc>
        <image:caption>Façade</image:caption>
        </image:image>
        </url>
        */
        $ligne="<url>";
        fwrite($fp,$ligne."\n");
        $ligne="<loc>".$location."</loc>";        
        fwrite($fp,$ligne."\n");
        $ligne="<lastmod>".$lastmod."</lastmod>";
        fwrite($fp,$ligne."\n");
        $ligne="<changefreq>daily</changefreq>";        
        fwrite($fp,$ligne."\n");
        $ligne="<priority>0.5</priority>";
        fwrite($fp,$ligne."\n");
        $ligne="<image:image>";
        fwrite($fp,$ligne."\n");
        $ligne="<image:loc>".$imageloc."</image:loc>";
        fwrite($fp,$ligne."\n");
        $ligne="<image:caption>".$imagecaption."</image:caption>";
        fwrite($fp,$ligne."\n");
        $ligne="</image:image>";
        fwrite($fp,$ligne."\n");
        $ligne="</url>";
        fwrite($fp,$ligne."\n");

        fwrite($fptxt,$location."\n");

        $Blogdata = new Blogdata();     
        $result=$Blogdata->indexnow_select_one_url($location);
        if (is_null($result)){
            $Blogdata->indexnow_insert($UneOffreID ,$OffreDocDate,"",$location,$imageloc,$imagecaption);        
        }else{
            $Blogdata->indexnow_update_unsupprime(0,$result['indexnow_id']);
            $Blogdata->indexnow_update_datemaj($result['indexnow_id'],$OffreDocDate);
        }   
        
    }
    public function ecrirelignePostBlog($fptxt,$fp,$location,$lastmod,$DateModif){
        /*
        <url>
        <loc>https://flexinuse.fr/blog/bail-precaire</loc>
        <lastmod>2024-03-22</lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
        </url>  
        */
        $ligne="<url>";
        fwrite($fp,$ligne."\n");
        $ligne="<loc>".$location."</loc>";        
        fwrite($fp,$ligne."\n");
        $ligne="<lastmod>".$lastmod."</lastmod>";
        fwrite($fp,$ligne."\n");
        $ligne="<changefreq>monthly</changefreq>";        
        fwrite($fp,$ligne."\n");
        $ligne="<priority>0.5</priority>";
        fwrite($fp,$ligne."\n");
        $ligne="</url>";
        fwrite($fp,$ligne."\n");

        fwrite($fptxt,$location."\n");
        $Blogdata = new Blogdata();        
        

        $result=$Blogdata->indexnow_select_one_url($location);
        if (is_null($result)){
            $Blogdata->indexnow_insert(0 ,$DateModif,"",$location,null,null);        
        }else{
            $Blogdata->indexnow_update_unsupprime(0,$result['indexnow_id']);
            $Blogdata->indexnow_update_datemaj($result['indexnow_id'],$DateModif);
        }   
    }
    
    public function chargedonneesLocationCoworking(){  
        $restapiappel=new Restapiappel();
        $allTexteLocationParis = $restapiappel->appelAllTextLocationParis();//$allTexteLocationParis['data']['data'] pour recuperer le tableau      
        $listelocation=$allTexteLocationParis['data']['data'];
        $Lesdonnees=null;
        $LesdonneesUnElement=null;
        $dateformatMax=null;
        foreach($listelocation as $Unelocation){
            //var_dump($Unelocation);            
            $LesdonneesUnElement['url']=$Unelocation['url'];                       
            $dateMysql=$Unelocation['updatedAt'];            
            $dateformat=new \DateTime($dateMysql);
            if(is_null($dateformatMax)){
                $dateformatMax=$dateformat;
            }else{
                if ($dateformatMax < $dateformat){
                    $dateformatMax=$dateformat;
                }
            }
            $dateSitemap=$dateformat->format('c');            
            $LesdonneesUnElement['dateMysql']=$dateMysql;
            $LesdonneesUnElement['dateSitemap']=$dateSitemap;
            $Lesdonnees[]=$LesdonneesUnElement;      
            //die();
        }        
        $LesdonneesUnElement['url']="location-bureaux";                       
        $LesdonneesUnElement['dateMysql']=$dateformatMax->format('Y-m-d H:i:s');
        $LesdonneesUnElement['dateSitemap']=$dateformatMax->format('c');
        $Lesdonnees[]=$LesdonneesUnElement;      
        
        $dateformatMax=null;
        $allTexteCoworking = $restapiappel->appelAllTextCoworking();
        $listeCoworking=$allTexteCoworking['data']['data'];
        //var_dump($listeCoworking);
        
        foreach($listeCoworking as $UnCoworking){            
            $LesdonneesUnElement['url']=$UnCoworking['url'];                       
            $dateMysql=$UnCoworking['updatedAt'];            
            $dateformat=new \DateTime($dateMysql);
            if(is_null($dateformatMax)){
                $dateformatMax=$dateformat;
            }else{
                if ($dateformatMax < $dateformat){
                    $dateformatMax=$dateformat;
                }
            }
            $dateSitemap=$dateformat->format('c');            
            $LesdonneesUnElement['dateMysql']=$dateMysql;
            $LesdonneesUnElement['dateSitemap']=$dateSitemap;
            $Lesdonnees[]=$LesdonneesUnElement;            
        }
        $LesdonneesUnElement['url']="coworking";                       
        $LesdonneesUnElement['dateMysql']=$dateformatMax->format('Y-m-d H:i:s');
        $LesdonneesUnElement['dateSitemap']=$dateformatMax->format('c');
        $Lesdonnees[]=$LesdonneesUnElement;      
        return $Lesdonnees;
    }
    public function chargedonnees(){        
        $Lesdonnees=null;

        $Lesdonnees[]="location-bureau-entreprise"; // searchEngineFiu.blade.php  ???????????????            

        // local écrans
        $Lesdonnees[]="contact";                    // contact.blade.php
        $Lesdonnees[]="cgu";                        // cgu.blade.php   
        $Lesdonnees[]="qui-sommes-nous";            // quiSommeNous.blade.php        
        $Lesdonnees[]="platefome-location-bureau";  // leConcept.blade.php          
        $Lesdonnees[]="location-bureau-paris";      // locationBureauParis.blade.php      
        $Lesdonnees[]="guideducoworking";           // guideDuCoworking.blade.php 
        $Lesdonnees[]="engagements-rse";            // engagementRSE.blade.php		
        $Lesdonnees[]="recherche-sur-mesure";       // rechercheSurMesure.blade.php      

        // appel restapi
        // $allTexteLocationParis = $restapiappel->appelAllTextLocationParis();
        $Lesdonnees[]="location-bureaux";           // locationBureaux.blade.php        appelAllTextLocationParis     
        // $allTexteCoworking = $restapiappel->appelAllTextCoworking();    
        $Lesdonnees[]="coworking";                  // coworking.blade.php             	appelAllTextCoworking                      
                
        $Lesdonnees[]="location-bureau-paris-1";    // getcategorieTexteFiu_by_id_api        
        $Lesdonnees[]="location-bureau-paris-2";                    
        $Lesdonnees[]="location-bureau-paris-3";            
        $Lesdonnees[]="location-bureau-paris-4";            
        $Lesdonnees[]="location-bureau-paris-5";            
        $Lesdonnees[]="location-bureau-paris-6";            
        $Lesdonnees[]="location-bureau-paris-7";            
        $Lesdonnees[]="location-bureau-paris-8";            
        $Lesdonnees[]="location-bureau-paris-9";                    
        $Lesdonnees[]="location-bureau-paris-10";                            
        $Lesdonnees[]="location-bureau-paris-11";            
        $Lesdonnees[]="location-bureau-paris-12";            
        $Lesdonnees[]="location-bureau-paris-13";            
        $Lesdonnees[]="location-bureau-paris-14";            
        $Lesdonnees[]="location-bureau-paris-15";            
        $Lesdonnees[]="location-bureau-paris-16";            
        $Lesdonnees[]="location-bureau-paris-17";            
        $Lesdonnees[]="location-bureau-paris-18";            
        $Lesdonnees[]="location-bureau-paris-19";                        
        $Lesdonnees[]="location-bureau-paris-20";        
        $Lesdonnees[]="coworking-paris-1";                                
        $Lesdonnees[]="coworking-paris-2";                                
        $Lesdonnees[]="coworking-paris-3";
        $Lesdonnees[]="coworking-paris-4";
        $Lesdonnees[]="coworking-paris-5";
        $Lesdonnees[]="coworking-paris-6";        
        $Lesdonnees[]="coworking-paris-7";
        $Lesdonnees[]="coworking-paris-8";
        $Lesdonnees[]="coworking-paris-9";
        $Lesdonnees[]="coworking-paris-10";
        $Lesdonnees[]="coworking-paris-11";
        $Lesdonnees[]="coworking-paris-12";                        
        $Lesdonnees[]="coworking-paris-13";
        $Lesdonnees[]="coworking-paris-14";
        $Lesdonnees[]="coworking-paris-15";
        $Lesdonnees[]="coworking-paris-16";
        $Lesdonnees[]="coworking-paris-17";
        $Lesdonnees[]="coworking-paris-18";        
        $Lesdonnees[]="coworking-paris-19";
        $Lesdonnees[]="coworking-paris-20";
        $Lesdonnees[]="coworking-saint-lazare-paris";
        $Lesdonnees[]="coworking-gare-du-nord-paris";
        $Lesdonnees[]="coworking-gare-lyon-paris";
        $Lesdonnees[]="coworking-montparnasse-paris";
        $Lesdonnees[]="coworking-boulogne-billancourt-paris";
        $Lesdonnees[]="coworking-republique-paris";
        $Lesdonnees[]="coworking-levallois-perret";

        return $Lesdonnees;

    }
    public function ecrirederniereligne($fp){
        $ligne="</urlset>";
        fwrite($fp,$ligne."\n");
    }
    public function ecrirepremiereligne($fp){
        $ligne='<?xml version="1.0" encoding="UTF-8"?>';
        fwrite($fp,$ligne."\n");
        $ligne='<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">';
        fwrite($fp,$ligne."\n");
    }
    /*                         chargedonneesEcrans
   // local écrans
   $Lesdonnees[]="contact";                    // contact.blade.php
   $Lesdonnees[]="cgu";                        // cgu.blade.php   
   $Lesdonnees[]="qui-sommes-nous";            // quiSommeNous.blade.php        
   $Lesdonnees[]="platefome-location-bureau";  // leConcept.blade.php          
   $Lesdonnees[]="location-bureau-paris";      // locationBureauParis.blade.php      
   $Lesdonnees[]="guideducoworking";           // guideDuCoworking.blade.php 
   $Lesdonnees[]="engagements-rse";            // engagementRSE.blade.php		
   $Lesdonnees[]="recherche-sur-mesure";       // rechercheSurMesure.blade.php      
*/
    public function chargedonneesEcrans(){    
        $listeDesEcrans=null;
        $listeDesEcransUnlement=null;
        $chemin="./resources/views/pages/";
        $finecran=".blade.php";

        $Lesdonnees=null;
        $LesdonneesUnElement=null;
        $LesdonneesUnElement['url']="contact";                    // contact.blade.php
        $LesdonneesUnElement['ecran']="contact";
        $Lesdonnees[]=$LesdonneesUnElement;
        $LesdonneesUnElement['url']="cgu";                        // cgu.blade.php   
        $LesdonneesUnElement['ecran']="cgu";
        $Lesdonnees[]=$LesdonneesUnElement;
        $LesdonneesUnElement['url']="qui-sommes-nous";            // quiSommeNous.blade.php        
        $LesdonneesUnElement['ecran']="quiSommeNous";
        $Lesdonnees[]=$LesdonneesUnElement;
        $LesdonneesUnElement['url']="platefome-location-bureau";  // leConcept.blade.php          
        $LesdonneesUnElement['ecran']="leConcept";
        $Lesdonnees[]=$LesdonneesUnElement;
        $LesdonneesUnElement['url']="location-bureau-paris";      // locationBureauParis.blade.php      
        $LesdonneesUnElement['ecran']="locationBureauParis";
        $Lesdonnees[]=$LesdonneesUnElement;
        $LesdonneesUnElement['url']="guideducoworking";           // guideDuCoworking.blade.php 
        $LesdonneesUnElement['ecran']="guideDuCoworking";
        $Lesdonnees[]=$LesdonneesUnElement;
        $LesdonneesUnElement['url']="engagements-rse";            // engagementRSE.blade.php		
        $LesdonneesUnElement['ecran']="engagementRSE";
        $Lesdonnees[]=$LesdonneesUnElement;
        $LesdonneesUnElement['url']="recherche-sur-mesure";       // rechercheSurMesure.blade.php      
        $LesdonneesUnElement['ecran']="rechercheSurMesure";
        $Lesdonnees[]=$LesdonneesUnElement;
        
        
        foreach ($Lesdonnees as $Unecran){
            $filename=$chemin.$Unecran['ecran'].$finecran;
            $listeDesEcransUnlement['url']=$Unecran['url'];
            if (file_exists($filename)) {            
                $dateMysql=date ("Y-m-d H:i:s", filemtime($filename))."\n";            
                $dateformat=new \DateTime($dateMysql);
                $dateSitemap=$dateformat->format('c');            
                $listeDesEcransUnlement['dateMysql']=$dateMysql;
                $listeDesEcransUnlement['dateSitemap']=$dateSitemap;
                $listeDesEcrans[]=$listeDesEcransUnlement;            
            }else{
                echo $filename . "  existe pas "."\n";
                die();
            }  
        }
        /*
        $filename=$chemin."contact".$finecran;
        $listeDesEcransUnlement['ecran']="contact";
        if (file_exists($filename)) {            
            $dateMysql=date ("Y-m-d H:i:s", filemtime($filename))."\n";            
            $dateformat=new \DateTime($dateMysql);
            $dateSitemap=$dateformat->format('c');            
            $listeDesEcransUnlement['dateMysql']=$dateMysql;
            $listeDesEcransUnlement['dateSitemap']=$dateSitemap;
            $listeDesEcrans[]=$listeDesEcransUnlement;            
        }else{
            echo $filename . "  existe pas "."\n";
            die();
        }  
        */
       return $listeDesEcrans;   
    }

}



<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Restapiappel  as Restapiappel;
use App\Models\Blogdata  as Blogdata;

class creationSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:creation-site-map';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Création du sitemap xml pour fiu';

    /**
     * Execute the console command.
     *  php artisan app:creation-site-map
     */
    public function handle()
    {
        //
        $nomserveur="https://flexinuse.fr/";
        $fpXML = fopen('sitemap01.xml', 'w');
        $fpTXT = fopen('sitemap01.txt', 'w');
        $this->ecrirepremiereligne($fpXML);
        $this->ecrireuneligneloc($fpTXT,$fpXML,$nomserveur);
        $listedesliens=$this->chargedonnees();
        foreach($listedesliens as $Unlien){
            $this->ecrireuneligneloc($fpTXT,$fpXML,$nomserveur.$Unlien);
        }

        $restapiappel=new Restapiappel();
        $result=$restapiappel->appelrestapiOffrePourSiteMap();
        if ($result['meta']['code']== '400'){   // erreur
			$errorMess=$result['meta']['message'];
		    echo "$errorMess"	."\n";
            die();
		}        
        $listedesoffres=$result['data'] ['listedesoffres'];    

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
                $listeDesVillesEtCP[]=$listeDesVillesEtCPUnelement;
            }

            //var_dump($Uneoffre);
            //---------------------- la date
            $dateformat=new \DateTime($Uneoffre['offreDocDate']);
            $lastmod=$dateformat->format('c');
            // ---------------   la location
            $titreannonce=str_replace('/', '', $Uneoffre['FIU_Rec__Titre_Annonce']);
            $titreannonce=str_replace(' ', '', $Uneoffre['FIU_Rec__Titre_Annonce']);
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
            //echo "location =" .$location."\n";
            
            $findme   = '&';
            $pos = strpos($location, $findme);
            if ($pos === false) {
                // pas de &
            } else {
                //echo "location =" .$location."\n";  
                $location = str_replace("&", "&amp;", $location);              
                //echo "new location =" .$newlocation."\n";  
            }
            $this->ecrireuneligneoffre($fpTXT,$fpXML,$location,$lastmod,$imageloc,$imagecaption);                        
        }
        foreach($listeDesVillesEtCP as $UnevilleCP){
            echo $UnevilleCP['codepostal']." ". $UnevilleCP['nomville']."\n";
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
            $Laville=urlencode($UnevilleCP['nomville']);
            //echo "ville =".$Laville."\n";
            $location=$nomserveur."location-bureau-entreprise?city=".$Laville;            
            $this->ecrireuneligneloc($fpTXT,$fpXML,$location);              
          }
        }
        // -------------- traitement des blogs
        $blogdata = new Blogdata();
        $ListedesPosts=$blogdata->blog_posts_select_pourunblog(1);
        foreach ($ListedesPosts as $Unpost){            
            $slug=$Unpost['slug'];
            $dateformat=new \DateTime($Unpost['updated_at']);
            $lastmod=$dateformat->format('c');
            $location=$nomserveur."blog/".$slug;
            $this->ecrirelignePostBlog($fpTXT,$fpXML,$location,$lastmod);

        }
        $ListedesPosts=$blogdata->blog_posts_select_pourunblog(2);
        foreach ($ListedesPosts as $Unpost){            
            $slug=$Unpost['slug'];
            $dateformat=new \DateTime($Unpost['updated_at']);
            $lastmod=$dateformat->format('c');
            $location=$nomserveur."guide/".$slug;
            $this->ecrirelignePostBlog($fpTXT,$fpXML,$location,$lastmod);

        }
        $this->ecrirederniereligne($fpXML);
        fclose($fpXML);
        fclose($fpTXT);
}

    public function ecrireuneligneloc($fptxt,$fp,$location){
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
        $ligne="<changefreq>daily</changefreq>";
        fwrite($fp,$ligne."\n");
        $ligne="<priority>0.8</priority>";
        fwrite($fp,$ligne."\n");
        $ligne="</url>";
        fwrite($fp,$ligne."\n");

        fwrite($fptxt,$location."\n");
    }
    public function ecrireuneligneoffre($fptxt,$fp,$location,$lastmod,$imageloc,$imagecaption){
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
    }
    public function ecrirelignePostBlog($fptxt,$fp,$location,$lastmod){
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
    }
    public function chargedonnees(){        
        $Lesdonnees=null;
        $Lesdonnees[]="contact"; 
        $Lesdonnees[]="cgu";           
        $Lesdonnees[]="qui-sommes-nous";            
        $Lesdonnees[]="platefome-location-bureau";            
        $Lesdonnees[]="location-bureau-paris";            
        $Lesdonnees[]="guideducoworking";            
        $Lesdonnees[]="engagements-rse";            
        //$Lesdonnees[]="sitemap.xml";            
        $Lesdonnees[]="recherche-sur-mesure";            
        $Lesdonnees[]="location-bureau-entreprise";            
        $Lesdonnees[]="location-bureaux";                    
        $Lesdonnees[]="location-bureau-paris-1";            
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
        $Lesdonnees[]="coworking";                                        
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

}

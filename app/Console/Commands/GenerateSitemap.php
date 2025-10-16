<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

use App\Models\Restapiappel  as Restapiappel;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
/*
Problem  avec spatie sitemap que j'ai supprimé de composer.json
    - spatie/laravel-sitemap[7.2.0, ..., 7.2.1] require php ^8.2 -> your php version (8.1.2) does not satisfy that requirement.
    - spatie/laravel-sitemap[7.3.0, ..., 7.3.7] require php ^8.2||^8.3||^8.4 -> your php version (8.1.2) does not satisfy that requirement.
    - Root composer.json requires spatie/laravel-sitemap ^7.2 -> satisfiable by spatie/laravel-sitemap[7.2.0, ..., 7.3.7].
*/

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    
    protected $signature = 'generate:sitemap';
    protected $description = 'Generate sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    

    /**
     * Execute the console command.
     */
    // https://github.com/spatie/laravel-sitemap
    public function handle()
    {
        // php artisan generate:sitemap
        $sitemap = SitemapGenerator::create('https://flexinuse.fr')->getSitemap();        
        //$sitemap = SitemapGenerator::create('https://flexspaces.fr')->getSitemap();        
        // Dynamic pages
        /*
        $users = User::all();
        foreach ($users as $user) {
            $sitemap->add("/users/{$user->id}");
        }
        */
        // https://www.seloger.com/immobilier/locations/immo-paris-75/bien-appartement/

        //http://localhost/~bettuzzi/fiularavel/public/coworking-Levallois-Perret
        //http://localhost/~bettuzzi/fiularavel/public/coworking-montparnasse-paris
        //$racinesite="/~bettuzzi/fiularavel/public/location-bureau-entreprise/";
        //$racinesiteimage="/~bettuzzi/fiularavel/public/";
        //$host="http://localhost";
        //$host="https://flexspaces.fr/";

        $host="http://localhost/~bettuzzi/fiularavel/public";
        //$host="https://flexspaces.fr";
        //$host="https://flexinuse.fr";

        $racinesite=$host."/location-bureau-entreprise/";
        $restapiappel=new Restapiappel();
        $result=$restapiappel->appelrestapiOffrePourSiteMap();
        //var_dump($result);
        //die();
        if ($result['meta']['code']== '400'){   // erreur
			$errorMess=$result['meta']['message'];
			// erreur on logue ?
		}
        $donnees=$result['data'];
        $listedesoffres=$result['data'] ['listedesoffres'];    
        
        //$sitemap = SitemapGenerator::create($host)->getSitemap();        
        $host=$host."/";

        $listeDesVillesEtCP=null;
        $listeDesVillesEtCPUnelement=null;
        
        foreach($listedesoffres as $uneoffre){            
            $onajoute=true;
            if (!is_null($listeDesVillesEtCP)){
                foreach($listeDesVillesEtCP as $UneVilleCP){
                    if (($UneVilleCP['codepostal']==$uneoffre['codepostal']) AND ($UneVilleCP['nomville']==$uneoffre['nomville'])){
                        $onajoute=false;
                    }
                }
            }
            
            if($onajoute){
                $listeDesVillesEtCPUnelement['nomville']=$uneoffre['nomville'];
                $listeDesVillesEtCPUnelement['codepostal']=$uneoffre['codepostal'];
                $listeDesVillesEtCP[]=$listeDesVillesEtCPUnelement;
            }
            
            // https://flexspaces.fr/location-bureau-entreprise/Bureaux-Archive/Cave - puteaux - 92800/2555
            // ne fonctionne pa à cause du / dans Bureaux-Archive/Cave - puteaux - 92800
            
            $titreannonce=str_replace('/', '', $uneoffre['FIU_Rec__Titre_Annonce']);
            $lelien=$titreannonce."/".$uneoffre['offres_id'];
            $lurl=$racinesite.$lelien;
            echo $lurl ."\n";
            
            $lelienImage="recupereimageDocumentID/".$uneoffre['offres_id']."/0";
            $lurlimage=$host.$lelienImage;
           

            //$sitemap->add("{$lurl}")->addImage("{$lurlimage}", 'Home page image');
            // les titres 
            $result=$restapiappel->appelrestapirecupereimageTitre($uneoffre['offres_id'],0);
            $titredocument=$result['data'] ['titredocument'];    
           /// var_dump($result['data']);
            echo $lurlimage ."\n";
            echo "titre image=".$titredocument ."\n";
            echo "-----------"."\n";
            if (strlen($titredocument)==0){
                $titredocument="Fiu principale";
            }
            // here we add an image to a URL
            $sitemap->add(Url::create($lurl)->addImage($lurlimage, $titredocument));
            //->writeToFile($sitemapPath);
        }
        
        $sitemap->writeToFile(public_path('sitemap2.xml'));
        
        var_dump($listeDesVillesEtCP);
        //<img class="img-thumbnail "   id="img" src="{{ asset('recupereimageDocumentID/13744/0')}}">
        //http://localhost/~jcbettuzzi/fiularavel/public/location-bureau-entreprise?zipCode=75015
        //http://localhost/~jcbettuzzi/fiularavel/public/location-bureau-entreprise?city=Puteaux
die();
        $sitemap = SitemapGenerator::create('http://localhost/~bettuzzi/fiularavel/public/')->getSitemap();
        
        //dd($result);
        
        //$sitemap->add("/~bettuzzi/fiularavel/public/location-bureau-entreprise/Activites-vanves-92170/3685");
        $sitemap->add("{$racinesite}location-bureau-entreprise/Activites-vanves-92170/3685");
        //FIU_Rec__Titre_Annonce/ offres_id
// ->addImage('https://example.com/images/home.jpg', 'Home page image')

        $sitemap->writeToFile(public_path('sitemap.xml'));

        echo "ok"."\n";
    }
}

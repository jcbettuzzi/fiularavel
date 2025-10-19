<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\Blogdata_PG;
use App\Models\Blogdata;
include("../Http/Controllers/environnementmodule.php");




try{
    
    mettreenplaceenvironnement("../../.env"); 
    $Blogdata_PG=new Blogdata_PG(); 
    $Blogdata=new Blogdata(); 
    $id=$Blogdata_PG->a_blog_insert_fct("Fiu Blog", "description",1);
    echo "id=".$id."\n";
    $id=$Blogdata_PG->a_blog_insert_fct("Guide", "description guide",1);
    echo "id=".$id."\n";
    // recherche des catégories
    $listecategories=$Blogdata->blog_categories_select_all_asc();
    foreach($listecategories as $unecategorie){
        $Blogdata_PG->a_blog_categories_insert_fct($unecategorie['blog_id'],$unecategorie['category_name'],$unecategorie['slug'],$unecategorie['category_description'],1) ;       
    }
    
    $ListeDesposts = $Blogdata->blog_posts_select_all_order_byblog_categorie_id();
    foreach($ListeDesposts as $unblogpost){
        //var_dump($unblogpost);
        //die();        
        if (is_null($unblogpost['image_origine'])){$unblogpost['image_origine']=""; }
        if (is_null($unblogpost['titreimage'])){$unblogpost['titreimage']=""; }
        $blogpostid=$Blogdata_PG->a_blog_posts_insert_fct($unblogpost['blog_id'] ,$unblogpost['utilisateur_id'],
            $unblogpost['slug'],$unblogpost['title'],$unblogpost['subtitle'] ,$unblogpost['meta_desc'],
            $unblogpost['post_body']  ,substr($unblogpost['posted_at'],0,10) ,
            $unblogpost['image_large'] ,$unblogpost['short_description'],$unblogpost['seo_title'],$unblogpost['areaproduction'] ,
            $unblogpost['areatest'], $unblogpost['image_origine'],$unblogpost['titreimage']  );
        echo "blogpostid=".$blogpostid."\n";
    }
    $ListeDespostsblogcategories= $Blogdata->blog_post_categories_select_all();
    foreach($ListeDespostsblogcategories as $unpostblogcategorie){
        $Blogdata_PG->a_blog_post_categories_insert_fct($unpostblogcategorie['blog_post_id'] ,$unpostblogcategorie['blog_categorie_id'] );
    }
    
    
}catch (Exception $e) {	                 
    $ErrLine = $e->getLine();
    $ErrFile = $e->getFile();			
    $errorMsg = "Exception: Ligne=".$ErrLine. " Fichier=".$ErrFile . " Mess =" .$e->getMessage(); 				    
    //Log::critical('Erreur indexNow: '.$errorMsg);
    echo $errorMsg;				
    echo "\n";				
    } 



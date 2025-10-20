<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Log;
use Session;
//use App\Models\Restapiappel  as Restapiappel;
//use App\Models\Blogdata  as Blogdata;

use App\Models\Blogdata_PG;
//firt commit branche

class BlogControllerPG extends Controller
{

    public function testBlog(){
        try{            
            $Blogdata_PG=new Blogdata_PG(); 
            $allCategoryBlog = $Blogdata_PG->a_blog_categories_select_all();
            $blogID = "";
            $url = url()->current();
            $lastSegment = collect(explode('/', $url))->last();
            if($lastSegment == "blog"){
                $blogID = 1;
            }
            if($lastSegment == "guide"){
                $blogID = 2;
            }
            //$allBlog = $this->allBlog($blogID);
            //$firstBlog = $allBlog[0];

            return view('pages.blogAccueil',['allCategoryBlog'=>$allCategoryBlog,'blogID'=>$blogID]);
        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
    }
    public function allBlog($blogID){
        try{

            $Blogdata_PG=new Blogdata_PG(); 
    
            $sql = "SELECT blog_posts.*, 
                    GROUP_CONCAT(blog_categories.category_name) AS categoryName,
                    GROUP_CONCAT(blog_categories.slug) AS blogCategoriesSlug
                    FROM blog_posts
                    LEFT OUTER JOIN blog_post_categories ON blog_post_categories.blog_post_id = blog_posts.blog_posts_id
                    LEFT OUTER JOIN blog_categories ON blog_post_categories.blog_categorie_id = blog_categories.blog_categorie_id
                    WHERE blog_posts.areaproduction = 1
                    AND blog_categories.blog_id = ".$blogID."
                    GROUP BY blog_posts.blog_posts_id
                    ORDER BY blog_posts.posted_at DESC;";                     
                    $queryRecords=$Blogdata_PG->a_executerequetesql($sql);
                    return $queryRecords;
        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
    }

    public function alldataBlogByCategory($slug){
        try{
            $Blogdata_PG=new Blogdata_PG(); 
            $sql = "SELECT blog_posts.*, 
                    GROUP_CONCAT(blog_categories.category_name) AS categoryName,
                    GROUP_CONCAT(blog_categories.slug) AS blogCategoriesSlug
                    FROM blog_posts
                    LEFT OUTER JOIN blog_post_categories ON blog_post_categories.blog_post_id = blog_posts.blog_posts_id
                    LEFT OUTER JOIN blog_categories ON blog_post_categories.blog_categorie_id = blog_categories.blog_categorie_id
                    WHERE blog_posts.areaproduction = 1 and blog_categories.slug = '".$slug."'
                    GROUP BY blog_posts.blog_posts_id
                    ORDER BY blog_posts.posted_at DESC;";
            $queryRecords=$Blogdata_PG->a_executerequetesql($sql);
            return $queryRecords;
        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
    }

    public function oneBlog($slug){
        try{

            $errorMess = "";
            $Blogdata_PG=new Blogdata_PG(); 
            
            $url = url()->current();
            $allSegment = explode('/', $url);
            foreach($allSegment as $oneSegment){
                if($oneSegment == "blog"){
                    $blogID = 1;
                }
                if($oneSegment == "guide"){
                    $blogID = 2;
                }
            } 
            $oneBlog = $Blogdata_PG->a_blog_posts_select_slug_and_blog_id($slug,$blogID);
            if (is_null($oneBlog) || empty($oneBlog)){
                $errorMess="slug introuvable=".$slug;
                log::critical($errorMess) ;                
                if ($slug=="robots.txt"){
                    return redirect('/robots.txt');
                }                
                if ($slug=="sitemap.xml"){
                    return redirect('/sitemap.xml');        
                }                             
                return response([$errorMess], 410);
                $errorMess2 = 'Ce lien est indisponible.';
                return view('pages.erreur2')->withErrors($errorMess2);
            }
            
            $oneBlog['imageLargeChemin'] = asset('recupereimageBLOG')."/".$oneBlog['blog_posts_id']."/".$oneBlog['image_large']."/3";
            //$categoryBlog = $blogdata->blog_post_categories_select($oneBlog['blog_posts_id']);
            $categoryBlog = $Blogdata_PG->a_blog_post_categories_select($oneBlog['blog_posts_id']);
            $allCategoryName = array_column($categoryBlog,'category_name');            
            $oneBlog['categoryOfBlog'] = $allCategoryName;
            $oneBlog['catogory_id_blog'] = array_column($categoryBlog,'blog_categorie_id');
            $oneBlog['catogory_blog_slug'] = array_column($categoryBlog,'slug');
            $oneBlog['suggestionOneBlog'] = $blogdata->blog_posts_select_pourunblog_et_unecategorie($oneBlog['blog_id'],$categoryBlog[0]['blog_categorie_id']);
            foreach($oneBlog['suggestionOneBlog'] as $key => $oneSuggestion){
                $folderImageByBlog = asset("recupereimageBLOG/".$oneSuggestion['blog_posts_id']."/");
                $oneBlog['suggestionOneBlog'][$key]['imageLargePathOneSuggestion'] = $folderImageByBlog."/".$oneSuggestion['image_large']."/3";
            }            
            return view('pages.blogOne',['oneBlog'=>$oneBlog]);
        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
    }
    public function recapBlogCategory($slug){
        try{
            $formatedSlug = str_replace("-"," ",$slug);
            $uppercaseSlug = strtoupper($formatedSlug);
            $allSlug['slug'] = $slug;
            $allSlug['uppercaseSlug'] = $uppercaseSlug;
            //$blogdata = new Blogdata();
            //$allCategoryBlog = $blogdata->blog_categories_select_all();
            $Blogdata_PG=new Blogdata_PG(); 
            $allCategoryBlog = $Blogdata_PG->a_blog_categories_select_all();

            return view('pages.recapAllBlogCategory',['slug'=>$allSlug,'allCategoryBlog'=>$allCategoryBlog]);
        }catch ( \Exception $e) {
            $this->TraiteErreur($errorMess, $e);
            return view('pages.erreur')->withErrors($errorMess);
        }
    }

    public function TraiteErreur(&$errorMess, $e){
        $ErrLine = $e->getLine();
        $ErrFile = $e->getFile();
        $errorMess =  " Mess =" .$e->getMessage();
        $errorMess = "Exception: Ligne=".$ErrLine. " Fichier=".$ErrFile . " Message  =" .$e->getMessage();
        Log::critical($errorMess);
    }
    
}
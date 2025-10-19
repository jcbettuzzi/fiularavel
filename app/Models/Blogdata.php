<?php

namespace App\Models;
use PDO;

// https://www.yellowduck.be/posts/using-a-mysql-full-text-index-with-laravel
// https://grafikart.fr/tutoriels/mysql-fulltext-2009
//https://dev.mysql.com/doc/refman/8.4/en/fulltext-search.html
// https://dev.mysql.com/doc/refman/8.4/en/fulltext-natural-language.html
// https://ckeditor.com/docs/ckeditor5/latest/examples/builds/document-editor.html

// A FAIRE
// blog_uuid_insert_fct
// blog_uuid_selectuuid_fct


//first commit branch dev

class Blogdata extends Bddclass
{
    
    

    public function blog_posts_insert_fct($Blog_id ,$Utilisateur_id,
                            $Slug,$Title,$Subtitle ,$Meta_desc,
                            $Post_body,$use_view_file,$Posted_at,$Is_published,
                            $Image_large ,$Image_medium,$Image_thumbnail,$Short_description,$Seo_title,$Areaproduction,
                            $Areatest,$Titreimage ) {
        try { $start = microtime(true);	
               $Pdo = $this->connectbase("blogarea");
               $sqlExecSP   = "SELECT blog_posts_insert_fct(?, ?, ?, ?,
                                                            ?, ?, ?, ?, 
                                                            ?, ?, ?, ?,
                                                            ?, ?, ?,?,?,?)";
               $stmt = $Pdo->prepare($sqlExecSP);
               $stmt->bindParam(1,$Blog_id , PDO::PARAM_INT);
               $stmt->bindParam(2,$Utilisateur_id, PDO::PARAM_INT);
               $stmt->bindParam(3,$Slug,PDO::PARAM_STR);
               $stmt->bindParam(4,$Title,PDO::PARAM_STR);
               $stmt->bindParam(5,$Subtitle ,PDO::PARAM_STR);
               $stmt->bindParam(6,$Meta_desc,PDO::PARAM_STR);
               $stmt->bindParam(7,$Post_body,PDO::PARAM_STR);
               $stmt->bindParam(8,$use_view_file,PDO::PARAM_STR);
               $stmt->bindParam(9,$Posted_at,PDO::PARAM_STR);
               $stmt->bindParam(10,$Is_published, PDO::PARAM_INT);
               $stmt->bindParam(11,$Image_large ,PDO::PARAM_STR);
               $stmt->bindParam(12,$Image_medium,PDO::PARAM_STR);
               $stmt->bindParam(13,$Image_thumbnail,PDO::PARAM_STR);
               $stmt->bindParam(14,$Short_description,PDO::PARAM_STR);
               $stmt->bindParam(15,$Seo_title,PDO::PARAM_STR);     
               
               $stmt->bindParam(16,$Areaproduction, PDO::PARAM_INT);
               $stmt->bindParam(17,$Areatest, PDO::PARAM_INT);
               $stmt->bindParam(18,$Titreimage,PDO::PARAM_STR);     
               $stmt->execute();
               $pRecID=$stmt->fetchcolumn();
               $stmt = null;
               $Pdo = null;
			   $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
               return $pRecID;
       }catch (Exception $e) {
             $this->traiteerreur($e);
       }
       return 0;
   }

   
   public function blog_post_categories_deletepost($BlogPostID) {
    try { $start = microtime(true);	
    
            $Pdo = $this->connectbase("blogarea");
            $sqlExecSP   = "CALL blog_post_categories_deletepost(?)";
            
            $stmt = $Pdo->prepare($sqlExecSP);
            $stmt->bindParam(1,$BlogPostID,   PDO::PARAM_INT);
            $stmt->execute();
            $NbrRecord=$stmt->rowCount();
            $stmt = null;
            $Pdo = null;
            $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
            return $NbrRecord;
    }catch (Exception $e) {
                    $this->traiteerreur($e);
        }
    return 0;
    }
    
    public function blog_post_categories_select_all() {
        try { $start = microtime(true);	
        
                $Pdo = $this->connectbase("blogarea");
                $sqlExecSP   = "CALL blog_post_categories_select_all()";
                
                $stmt = $Pdo->prepare($sqlExecSP);                
                $stmt->execute();
                $result=$stmt->FetchAll();
                $stmt = null;
                $Pdo = null;
                $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                return $result;
        }catch (Exception $e) {
                        $this->traiteerreur($e);
            }
        return 0;
        }

    public function blog_post_categories_insert($blogpostid ,$blogcategorieid) {
                try { $start = microtime(true);	
                $Pdo = $this->connectbase("blogarea");
                $sqlExecSP   = "SELECT blog_post_categories_insert(?, ?)";
                $stmt = $Pdo->prepare($sqlExecSP);
                $stmt->bindParam(1,$blogpostid , PDO::PARAM_INT);
                $stmt->bindParam(2,$blogcategorieid, PDO::PARAM_INT);                
                $stmt->execute();
                $pRecID=$stmt->fetchcolumn();
                $stmt = null;
                $Pdo = null;
                $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                return $pRecID;
                }catch (Exception $e) {
                $this->traiteerreur($e);
                }
                return 0;
                }

    public function blog_post_categories_select($blogpostid) {
                    try { $start = microtime(true);	
            
                                    $Pdo = $this->connectbase("blogarea");
                                    $sqlExecSP   = "CALL blog_post_categories_select(?)";
                                    
                                    $stmt = $Pdo->prepare($sqlExecSP);
                                    $stmt->bindParam(1, $blogpostid,   PDO::PARAM_INT);
                                    $stmt->execute();
                                    $result=$stmt->FetchAll();
                                    $NbrRecord=$stmt->rowCount();
                                    $stmt = null;
                                    $Pdo = null;
                                    $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                                    return $result;
            
                     }catch (Exception $e) {
                        $this->traiteerreur($e);
                    }
                    return null;
                }
                                
                public function blog_posts_select_slug($Slug) {
                    try { $start = microtime(true);	
            
                                    $Pdo = $this->connectbase("blogarea");
                                    $sqlExecSP   = "CALL blog_posts_select_slug(?)";
                                    
                                    $stmt = $Pdo->prepare($sqlExecSP);                                    
                                    $stmt->bindParam(1,$Slug,PDO::PARAM_STR);
                                    $stmt->execute();
                                    if ($stmt->rowCount() > 0) {
                                        $result=$stmt->fetch();
                                    }else {
                                        $result=null;
                                    }
                                    $stmt = null;
                                    $Pdo = null;
                                    $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                                    return $result;
            
                     }catch (Exception $e) {
                        $this->traiteerreur($e);
                    }
                    return null;
                }                            

                public function blog_posts_select($blogpostid) {
                    try { $start = microtime(true);	
                        $Pdo = $this->connectbase("blogarea");
                        $sqlExecSP   = "CALL blog_posts_select(?)";
                        
                        $stmt = $Pdo->prepare($sqlExecSP);
                        $stmt->bindParam(1, $blogpostid,   PDO::PARAM_INT);
                        $stmt->execute();
                        if ($stmt->rowCount() > 0) {
                            $result=$stmt->fetch();
                        }else {
                            $result=null;
                        }
                        $stmt = null;
                        $Pdo = null;			
                        $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                        return $result;
                    }catch (Exception $e) {
                        $this->traiteerreur($e);
                    }
                    return null;
                }

                
                public function blog_posts_select_pourunblog($blogid) {
                    try { $start = microtime(true);	
                        $Pdo = $this->connectbase("blogarea");
                        $sqlExecSP   = "CALL blog_posts_select_pourunblog(?)";
                        
                        $stmt = $Pdo->prepare($sqlExecSP);
                        $stmt->bindParam(1, $blogid,   PDO::PARAM_INT);
                        $stmt->execute();
                        $result=$stmt->FetchAll();
                        
                        $stmt = null;
                        $Pdo = null;			
                        $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                        return $result;
                    }catch (Exception $e) {
                        $this->traiteerreur($e);
                    }
                    return null;
                }
                
                public function blog_posts_select_pourunblog_diffuse($blogid) {
                    try { $start = microtime(true);	
                        $Pdo = $this->connectbase("blogarea");
                        $sqlExecSP   = "CALL blog_posts_select_pourunblog_diffuse(?)";
                        
                        $stmt = $Pdo->prepare($sqlExecSP);
                        $stmt->bindParam(1, $blogid,   PDO::PARAM_INT);
                        $stmt->execute();
                        $result=$stmt->FetchAll();                        
                        $stmt = null;
                        $Pdo = null;			
                        $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                        return $result;
                    }catch (Exception $e) {
                        $this->traiteerreur($e);
                    }
                    return null;
                }
                
                public function blog_posts_select_pourunblog_et_unecategorie($blogid,$categorieid) {
                    try { $start = microtime(true);	
                        $Pdo = $this->connectbase("blogarea");
                        $sqlExecSP   = "CALL blog_posts_select_pourunblog_et_unecategorie(?,?)";
                        
                        $stmt = $Pdo->prepare($sqlExecSP);
                        $stmt->bindParam(1, $blogid,   PDO::PARAM_INT);
                        $stmt->bindParam(2, $categorieid,   PDO::PARAM_INT);
                        $stmt->execute();
                        $result=$stmt->FetchAll();                        
                        $stmt = null;
                        $Pdo = null;			
                        $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                        return $result;
                    }catch (Exception $e) {
                        $this->traiteerreur($e);
                    }
                    return null;
                }
                
                public function blog_posts_select_pourunblog_et_unecategorie_diffuse($blogid,$categorieid) {
                    try { $start = microtime(true);	
                        $Pdo = $this->connectbase("blogarea");
                        $sqlExecSP   = "CALL blog_posts_select_pourunblog_et_unecategorie_diffuse(?,?)";
                        
                        $stmt = $Pdo->prepare($sqlExecSP);
                        $stmt->bindParam(1, $blogid,   PDO::PARAM_INT);
                        $stmt->bindParam(2, $categorieid,   PDO::PARAM_INT);
                        $stmt->execute();
                        $result=$stmt->FetchAll();                        
                        $stmt = null;
                        $Pdo = null;			
                        $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                        return $result;
                    }catch (Exception $e) {
                        $this->traiteerreur($e);
                    }
                    return null;
                }

                public function blog_posts_update($blogpostsid,$Utilisateur_id,$Slug,$Title,
                                                    $Subtitle,$Meta_desc,$Post_body,
                                                    $Short_description,$Seo_title,$Areaproduction,$Areatest,
                                                    $Datedepublication,$TitreImage) {
                    try { $start = microtime(true);	            
                            $Pdo = $this->connectbase("blogarea");
                            $sqlExecSP   = "CALL blog_posts_update(?,?,?,?,
                                                                    ?,?,?,?,
                                                                    ?,?,?,?,?)";
                            
                            $stmt = $Pdo->prepare($sqlExecSP);                        
                            $stmt->bindParam(1,$blogpostsid , PDO::PARAM_INT);
                            $stmt->bindParam(2,$Utilisateur_id, PDO::PARAM_INT);                    
                            $stmt->bindParam(3,$Slug,PDO::PARAM_STR);
                            $stmt->bindParam(4,$Title,PDO::PARAM_STR);
                            $stmt->bindParam(5,$Subtitle ,PDO::PARAM_STR);
                            $stmt->bindParam(6,$Meta_desc,PDO::PARAM_STR);
                            $stmt->bindParam(7,$Post_body,PDO::PARAM_STR);                            
                            //$stmt->bindParam(8,$Image_large ,PDO::PARAM_STR);                            
                            $stmt->bindParam(8,$Short_description,PDO::PARAM_STR);
                            $stmt->bindParam(9,$Seo_title,PDO::PARAM_STR);                                 
                            $stmt->bindParam(10,$Areaproduction, PDO::PARAM_INT);
                            $stmt->bindParam(11,$Areatest, PDO::PARAM_INT);
                            $stmt->bindParam(12,$Datedepublication,PDO::PARAM_STR);   
                            $stmt->bindParam(13,$TitreImage,PDO::PARAM_STR);                                                               
                            $stmt->execute();
                
                            $NbrRecord=$stmt->rowCount();
                            $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                            $stmt = null;
                            $Pdo = null;
                            return $NbrRecord;
                    }catch (Exception $e) {
                          $this->traiteerreur($e);
                    }
                    return 0;
                }                

                public function blog_posts_update_fichier($blogpostsid,$Utilisateur_id,$Image_large,$Image_origine) {
                    try { $start = microtime(true);	            
                            $Pdo = $this->connectbase("blogarea");
                            $sqlExecSP   = "CALL blog_posts_update_fichier(?,?,?,?)";
                            
                            $stmt = $Pdo->prepare($sqlExecSP);                        
                            $stmt->bindParam(1,$blogpostsid , PDO::PARAM_INT);
                            $stmt->bindParam(2,$Utilisateur_id, PDO::PARAM_INT);                    
                            $stmt->bindParam(3,$Image_large,PDO::PARAM_STR);
                            $stmt->bindParam(4,$Image_origine,PDO::PARAM_STR);                            
                            $stmt->execute();
                
                            $NbrRecord=$stmt->rowCount();
                            $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                            $stmt = null;
                            $Pdo = null;
                            return $NbrRecord;
                    }catch (Exception $e) {
                          $this->traiteerreur($e);
                    }
                    return 0;
                }
                            

                public function blog1_fulltext_insert($BlogPostId ,$Title,$Postbody) {
                    try { $start = microtime(true);	
                    $Pdo = $this->connectbase("blogarea");
                    $sqlExecSP   = "SELECT blog1_fulltext_insert(?, ?, ?)";
                    $stmt = $Pdo->prepare($sqlExecSP);
                    $stmt->bindParam(1,$BlogPostId , PDO::PARAM_INT);
                    $stmt->bindParam(2,$Title, PDO::PARAM_STR);
                    $stmt->bindParam(3,$Postbody,PDO::PARAM_STR);                    
                    $stmt->execute();
                    $pRecID=$stmt->fetchcolumn();
                    $stmt = null;
                    $Pdo = null;
                    $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                    return $pRecID;
                    }catch (Exception $e) {
                    $this->traiteerreur($e);
                    }
                    return 0;
                    }
                    

                    public function blog1_fulltext_update($blogpostsid,$Title,$Postbody) {
                        try { $start = microtime(true);	            
                                $Pdo = $this->connectbase("blogarea");
                                $sqlExecSP   = "CALL blog1_fulltext_update(?,?,?)";
                                
                                $stmt = $Pdo->prepare($sqlExecSP);                        
                                $stmt->bindParam(1,$blogpostsid , PDO::PARAM_INT);                                
                                $stmt->bindParam(2,$Title,PDO::PARAM_STR);
                                $stmt->bindParam(3,$Postbody,PDO::PARAM_STR);                            
                                $stmt->execute();
                    
                                $NbrRecord=$stmt->rowCount();
                                $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                                $stmt = null;
                                $Pdo = null;
                                return $NbrRecord;
                        }catch (Exception $e) {
                              $this->traiteerreur($e);
                        }
                        return 0;
                    }


                    public function ExecuteRequeteDepuisResponse($requete) {
                        try { $start = microtime(true);	
                
                
                             $Pdo = $this->connectbase("blogarea");
                             $sqlExecSP   = "CALL execute_requete(?)";
                             
                             $stmt = $Pdo->prepare($sqlExecSP);
                             $stmt->bindParam(1,$requete,   PDO::PARAM_STR,10000);
                             $stmt->execute();
                             $result=$stmt->FetchAll();
                             $stmt = null;
                             $Pdo = null;
                             $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                             return $result;
                
                         }catch (Exception $e) {
                            $this->traiteerreur($e);
                        }
                        return null;
                    }


                    public function blog_categories_select_all() {
                        try { $start = microtime(true);	
                            $Pdo = $this->connectbase("blogarea");
                            $sqlExecSP   = "CALL blog_categories_select_all()";
                            
                            $stmt = $Pdo->prepare($sqlExecSP);
                            //$stmt->bindParam(1, $blogid,   PDO::PARAM_INT);
                            $stmt->execute();
                            $result=$stmt->FetchAll();                        
                            $stmt = null;
                            $Pdo = null;			
                            $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                            return $result;
                        }catch (Exception $e) {
                            $this->traiteerreur($e);
                        }
                        return null;
                    }
                    
                    public function blog_categories_select_all_asc() {
                        try { $start = microtime(true);	
                            $Pdo = $this->connectbase("blogarea");
                            $sqlExecSP   = "CALL blog_categories_select_all_asc()";
                            
                            $stmt = $Pdo->prepare($sqlExecSP);
                            //$stmt->bindParam(1, $blogid,   PDO::PARAM_INT);
                            $stmt->execute();
                            $result=$stmt->FetchAll();                        
                            $stmt = null;
                            $Pdo = null;			
                            $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                            return $result;
                        }catch (Exception $e) {
                            $this->traiteerreur($e);
                        }
                        return null;
                    }
                    
                    public function blog_posts_select_all_order_byblog_categorie_id() {
                        try { $start = microtime(true);	
                            $Pdo = $this->connectbase("blogarea");
                            $sqlExecSP   = "CALL blog_posts_select_all_order_byblog_categorie_id()";
                            
                            $stmt = $Pdo->prepare($sqlExecSP);
                            //$stmt->bindParam(1, $blogid,   PDO::PARAM_INT);
                            $stmt->execute();
                            $result=$stmt->FetchAll();                        
                            $stmt = null;
                            $Pdo = null;			
                            $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                            return $result;
                        }catch (Exception $e) {
                            $this->traiteerreur($e);
                        }
                        return null;
                    }


                    public function blog_posts_select_slug_and_blog_id($slugue,$blogid) {
                        try { $start = microtime(true);	
                            $Pdo = $this->connectbase("blogarea");
                            $sqlExecSP   = "CALL blog_posts_select_slug_and_blog_id(?,?)";
                            
                            $stmt = $Pdo->prepare($sqlExecSP);
                            $stmt->bindParam(1, $slugue,   PDO::PARAM_STR,255);
                            $stmt->bindParam(2, $blogid,   PDO::PARAM_INT);
                            $stmt->execute();
                            $result=$stmt->Fetch();                        
                            $stmt = null;
                            $Pdo = null;			
                            $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                            return $result;
                        }catch (Exception $e) {
                            $this->traiteerreur($e);
                        }
                        return null;
                    }
                    
                    public function indexnow_insert($offres_id ,$datemaj,$Ville1,$url1,$image_location,$image_titre) {
                        try { $start = microtime(true);	
                        $Pdo = $this->connectbase("blogarea");
                        $sqlExecSP   = "SELECT indexnow_insert(?,?,?,?,?,?)";
                        $stmt = $Pdo->prepare($sqlExecSP);
                        $stmt->bindParam(1,$offres_id , PDO::PARAM_INT);
                        $stmt->bindParam(2,$datemaj,   PDO::PARAM_STR,19);
                        $stmt->bindParam(3,$Ville1,   PDO::PARAM_STR,155);
                        $stmt->bindParam(4,$url1,   PDO::PARAM_STR,255);
                        $stmt->bindParam(5,$image_location,   PDO::PARAM_STR,255);
                        $stmt->bindParam(6,$image_titre,   PDO::PARAM_STR,255);

                        $stmt->execute();
                        $pRecID=$stmt->fetchcolumn();
                        $stmt = null;
                        $Pdo = null;
                        $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                        return $pRecID;
                        }catch (Exception $e) {
                        $this->traiteerreur($e);
                        }
                        return 0;
                        }

                        
                    	public function indexnow_select_one_url($UneUrl){
                            try { $start = microtime(true);	
                                $Pdo = $this->connectbase("blogarea");
                                $sqlExecSP   = "CALL indexnow_select_one_url(?)";
                                
                                $stmt = $Pdo->prepare($sqlExecSP);
                                $stmt->bindParam(1, $UneUrl,   PDO::PARAM_STR,255);
                                $stmt->execute();
                    
                                if ($stmt->rowCount() > 0) {
                                    $result=$stmt->fetch();
                                }else {
                                    $result=null;
                                }			
                                    $stmt = null;
                                    $Pdo = null;
                                    $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                            return $result;
                            }catch (Exception $e) {
                                    $this->traiteerreur($e);
                            }
                               return null;
                    
                        }


                        
                        public function indexnow_update_Allsupprime($supprime) {
                            try { $start = microtime(true);	
                        
                                    $Pdo = $this->connectbase("blogarea");
                                    $sqlExecSP   = "CALL indexnow_update_Allsupprime(?)";
                                    
                                    $stmt = $Pdo->prepare($sqlExecSP);
                                    $stmt->bindParam(1,$supprime,   PDO::PARAM_INT);                                    
                                    $stmt->execute();
                        
                                    $NbrRecord=$stmt->rowCount();
                                    $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                                    $stmt = null;
                                    $Pdo = null;
                                    return $NbrRecord;
                            }catch (Exception $e) {
                                  $this->traiteerreur($e);
                            }
                            return 0;
                        }

                        
                        public function indexnow_update_unsupprime($supprime,$indexnowid) {
                            try { $start = microtime(true);	
                        
                                    $Pdo = $this->connectbase("blogarea");
                                    $sqlExecSP   = "CALL indexnow_update_unsupprime(?,?)";
                                    
                                    $stmt = $Pdo->prepare($sqlExecSP);
                                    $stmt->bindParam(1,$supprime,   PDO::PARAM_INT);                                    
                                    $stmt->bindParam(2,$indexnowid,   PDO::PARAM_INT);                                    
                                    $stmt->execute();
                        
                                    $NbrRecord=$stmt->rowCount();
                                    $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                                    $stmt = null;
                                    $Pdo = null;
                                    return $NbrRecord;
                            }catch (Exception $e) {
                                  $this->traiteerreur($e);
                            }
                            return 0;
                        }
                        
                        public function indexnow_update_datemaj($indexnowid,$datemaj) {
                            try { $start = microtime(true);	
                        
                                    $Pdo = $this->connectbase("blogarea");
                                    $sqlExecSP   = "CALL indexnow_update_datemaj(?,?)";
                                    
                                    $stmt = $Pdo->prepare($sqlExecSP);
                                    $stmt->bindParam(1,$indexnowid,   PDO::PARAM_INT);                                    
                                    $stmt->bindParam(2,$datemaj,   PDO::PARAM_STR,19);
                                    $stmt->execute();
                        
                                    $NbrRecord=$stmt->rowCount();
                                    $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                                    $stmt = null;
                                    $Pdo = null;
                                    return $NbrRecord;
                            }catch (Exception $e) {
                                  $this->traiteerreur($e);
                            }
                            return 0;
                        }


                        public function indexnow_select_all(){
                            try { $start = microtime(true);	
                                $Pdo = $this->connectbase("blogarea");
                                $sqlExecSP   = "CALL indexnow_select_all()";
                                
                                $stmt = $Pdo->prepare($sqlExecSP);
                                //$stmt->bindParam(1, $UneUrl,   PDO::PARAM_STR,255);
                                $stmt->execute();
                    
                                if ($stmt->rowCount() > 0) {
                                    $result=$stmt->fetchAll();
                                }else {
                                    $result=null;
                                }			
                                    $stmt = null;
                                    $Pdo = null;
                                    $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                            return $result;
                            }catch (Exception $e) {
                                    $this->traiteerreur($e);
                            }
                               return null;
                    
                        }


                        public function indexnow_update_indexation($indexation_u,$indexnowid) {
                            try { $start = microtime(true);	
                        
                                    $Pdo = $this->connectbase("blogarea");
                                    $sqlExecSP   = "CALL indexnow_update_indexation(?,?)";
                                    
                                    $stmt = $Pdo->prepare($sqlExecSP);
                                    $stmt->bindParam(1,$indexation_u,   PDO::PARAM_INT);                                    
                                    $stmt->bindParam(2,$indexnowid,   PDO::PARAM_INT);
                                    $stmt->execute();
                        
                                    $NbrRecord=$stmt->rowCount();
                                    $this->EcrireLogueSE($sqlExecSP,basename(__FILE__), __FUNCTION__,microtime(true)-$start);
                                    $stmt = null;
                                    $Pdo = null;
                                    return $NbrRecord;
                            }catch (Exception $e) {
                                  $this->traiteerreur($e);
                            }
                            return 0;
                        }
                

}

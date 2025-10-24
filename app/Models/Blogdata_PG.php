<?php

namespace App\Models;
use PDO;


// A FAIRE
// blog_uuid_insert_fct
// blog_uuid_selectuuid_fct

class Blogdata_PG extends Bddclass
{

    public function a_blog_insert_fct($blog_name ,$blog_description,$utilisateur_id) {        
        $Pdo = $this->connectbase("blogareaPG");
        $sqlExecSP   = "SELECT  a_blog_insert_fct(?, ?, ?)";
        $stmt = $Pdo->prepare($sqlExecSP);        
        $stmt->bindParam(1,$blog_name, PDO::PARAM_STR);
        $stmt->bindParam(2,$blog_description,PDO::PARAM_STR);                    
        $stmt->bindParam(3,$utilisateur_id , PDO::PARAM_INT);
        $stmt->execute();
        echo "id insere=".$Pdo->lastInsertId()."\n";
        $pRecID=$stmt->fetchcolumn();
        $stmt = null;
        $Pdo = null;        
        return $pRecID;
        }
        
        public function a_blog_categories_insert_fct($blog_id ,$category_name,$slug,$category_description,$utilisateur_id) {        
            $Pdo = $this->connectbase("blogareaPG");
            $sqlExecSP   = "SELECT  a_blog_categories_insert_fct(?, ?, ?,?,?)";
            $stmt = $Pdo->prepare($sqlExecSP);        
            $stmt->bindParam(1,$blog_id , PDO::PARAM_INT);
            $stmt->bindParam(2,$category_name, PDO::PARAM_STR);
            $stmt->bindParam(3,$slug,PDO::PARAM_STR);                    
            $stmt->bindParam(4,$category_description,PDO::PARAM_STR);                    
            $stmt->bindParam(5,$utilisateur_id , PDO::PARAM_INT);
            $stmt->execute();
            echo "id insere=".$Pdo->lastInsertId()."\n";
            $pRecID=$stmt->fetchcolumn();
            $stmt = null;
            $Pdo = null;        
            return $pRecID;
            }


            public function a_blog_posts_insert_fct($Blog_id ,$Utilisateur_id,
            $Slug,$Title,$Subtitle ,$Meta_desc,
            $Post_body,$Posted_at,
            $Image_large ,$Short_description,$Seo_title,$Areaproduction,
            $Areatest,$imageorigine,$Titreimage ) {                   
            $Pdo = $this->connectbase("blogareaPG");
            $sqlExecSP   = "SELECT  a_blog_posts_insert_fct(?, ?, ?, ?,
                                                        ?, ?, ?, ?, 
                                                        ?, ?, ?, ?,
                                                        ?, ?,?)";
            $stmt = $Pdo->prepare($sqlExecSP);
            $stmt->bindParam(1,$Blog_id , PDO::PARAM_INT);
            $stmt->bindParam(2,$Utilisateur_id, PDO::PARAM_INT);
            $stmt->bindParam(3,$Slug,PDO::PARAM_STR);
            $stmt->bindParam(4,$Title,PDO::PARAM_STR);
            $stmt->bindParam(5,$Subtitle ,PDO::PARAM_STR);
            $stmt->bindParam(6,$Meta_desc,PDO::PARAM_STR);
            $stmt->bindParam(7,$Post_body,PDO::PARAM_STR);        
            $stmt->bindParam(8,$Posted_at,PDO::PARAM_STR);            
            $stmt->bindParam(9,$Image_large ,PDO::PARAM_STR);                        
            $stmt->bindParam(10,$Short_description,PDO::PARAM_STR);
            $stmt->bindParam(11,$Seo_title,PDO::PARAM_STR);     
            $stmt->bindParam(12,$Areaproduction, PDO::PARAM_INT);
            $stmt->bindParam(13,$Areatest, PDO::PARAM_INT);
            $stmt->bindParam(14,$imageorigine,PDO::PARAM_STR);                 
            $stmt->bindParam(15,$Titreimage,PDO::PARAM_STR);     
            $stmt->execute();
            $Idinsert=$Pdo->lastInsertId(); // pas utilisé
            $pRecID=$stmt->fetchcolumn();
            $stmt = null;
            $Pdo = null;            
            return $pRecID;
            
            }

            
            public function a_blog_post_categories_insert_fct($blog_posts_id ,$blog_categories_id) {        
                $Pdo = $this->connectbase("blogareaPG");
                $sqlExecSP   = "SELECT  a_blog_post_categories_insert_fct(?, ?)";
                $stmt = $Pdo->prepare($sqlExecSP);        
                $stmt->bindParam(1,$blog_posts_id , PDO::PARAM_INT);
                $stmt->bindParam(2,$blog_categories_id , PDO::PARAM_INT);                
                $stmt->execute();                
                $pRecID=$stmt->fetchcolumn();
                $stmt = null;
                $Pdo = null;        
                return $pRecID;
                }

            public function a_blog_categories_select_all() {                    
                        $Pdo = $this->connectbase("blogareaPG");
                        $sqlExecSP   = "SELECT * from  a_blog_categories_select_all()";                        
                        $stmt = $Pdo->prepare($sqlExecSP);                        
                        $stmt->execute();                        
                        if ($stmt->rowCount() > 0) {
                            $result=$stmt->FetchAll(PDO::FETCH_ASSOC);}
                            else {$result=null;}		
                        $stmt = null;
                        $Pdo = null;			                        
                        return $result;                                        
                }
                
            public function a_executerequetesql(&$requetesql) {                                          
                    $Pdo = $this->connectbase("blogareaPG");
                    $stmt  = $Pdo->prepare($requetesql);
                    $stmt->execute();
                    if ($stmt->rowCount() > 0) {
                        $result=$stmt->FetchAll(PDO::FETCH_ASSOC);
                    }else {$result=null;}
                    $Pdo = null;
                    $stmt = null;    
                    return $result;                
                }
            
            public function a_blog_posts_select_slug_and_blog_id($slug,$blogID) {                    
                        $Pdo = $this->connectbase("blogareaPG");
                        $sqlExecSP   = "SELECT * from  a_blog_posts_select_slug_and_blog_id(?,?)";                        
                        $stmt = $Pdo->prepare($sqlExecSP);
                        $stmt->bindParam(1, $blogID,   PDO::PARAM_INT);
                        $stmt->bindParam(2, $slug,   PDO::PARAM_STR,255);                        
                        $stmt->execute();
                        $result=$stmt->Fetch();                        
                        $stmt = null;
                        $Pdo = null;			                    
                        return $result;                    
                }
            
            public function a_blog_post_categories_select($blogpostid) {                                
                                    $Pdo = $this->connectbase("blogareaPG");
                                    $sqlExecSP   = "SELECT * from  a_blog_post_categories_select(?)";                                    
                                    $stmt = $Pdo->prepare($sqlExecSP);
                                    $stmt->bindParam(1, $blogpostid,   PDO::PARAM_INT);
                                    $stmt->execute();
                                    $result=$stmt->FetchAll(PDO::FETCH_ASSOC);
                                    $NbrRecord=$stmt->rowCount();
                                    $stmt = null;
                                    $Pdo = null;                    
                                    return $result;                                
                }
                
            public function a_blog_posts_select_pourunblog_et_unecategorie($blogid,$categorieid) {
                $sql="SELECT * FROM blog_posts  left outer join  blog_post_categories  on blog_post_categories.blog_posts_id =blog_posts.blog_posts_id  
                WHERE blog_id=".$blogid." AND blog_post_categories.blog_categories_id =".$categorieid."  order by posted_at DESC;";
                $Pdo = $this->connectbase("blogareaPG");
                $stmt  = $Pdo->prepare($sql);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $result=$stmt->FetchAll(PDO::FETCH_ASSOC);
                }else {$result=null;}
                $Pdo = null;
                $stmt = null;    
                return $result;                
            }

            public function a_blog_post_categories_deletepost($BlogPostID) {                                
                        $Pdo = $this->connectbase("blogareaPG");
                        $sqlExecSP   = "SELECT a_blog_post_categories_deletepost(?)";                        
                        $stmt = $Pdo->prepare($sqlExecSP);
                        $stmt->bindParam(1,$BlogPostID,   PDO::PARAM_INT);
                        $stmt->execute();
                        $NbrRecord=$stmt->rowCount();
                        // ou on peut recuperer $pRecID=$stmt->fetchcolumn();                                
                        $stmt = null;
                        $Pdo = null;                        
                        return $NbrRecord;                
                }  
                
            public function a_blog_post_categories_select_all() {                                        
                            $Pdo = $this->connectbase("blogareaPG");
                            $sqlExecSP   = "SELECT * FROM a_blog_post_categories_select_all()";                            
                            $stmt = $Pdo->prepare($sqlExecSP);                
                            $stmt->execute();
                            $result=$stmt->FetchAll(PDO::FETCH_ASSOC);
                            $stmt = null;
                            $Pdo = null;                            
                            return $result;                    
                    }  
            public function a_blog_posts_select_slug($Slug) {                                        
                                        $Pdo = $this->connectbase("blogareaPG");
                                        $sqlExecSP   = "SELECT * FROM a_blog_posts_select_slug(?)";                                        
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
                                        return $result;                                         
                    }                                                                                            
            public function a_blog_posts_select($blogpostid) {                        
                            $Pdo = $this->connectbase("blogareaPG");
                            $sqlExecSP   = "SELECT * FROM a_blog_posts_select(?)";                            
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
                            return $result;                        
                    }
            public function a_blog_posts_select_pourunblog($blogid) {                        
                            $Pdo = $this->connectbase("blogareaPG");
                            $sqlExecSP   = "SELECT * FROM a_blog_posts_select_pourunblog(?)";                            
                            $stmt = $Pdo->prepare($sqlExecSP);
                            $stmt->bindParam(1, $blogid,   PDO::PARAM_INT);
                            $stmt->execute();
                            if ($stmt->rowCount() > 0) {
                                $result=$stmt->FetchAll(PDO::FETCH_ASSOC);
                            }else {
                                $result=null;
                            }                            
                            $stmt = null;
                            $Pdo = null;			                            
                            return $result;                        
                    }

            public function a_blog_posts_select_pourunblog_diffuse($blogid) {
            
                            $Pdo = $this->connectbase("blogareaPG");
                            $sqlExecSP   = "SELECT * FROM a_blog_posts_select_pourunblog_diffuse(?)";                            
                            $stmt = $Pdo->prepare($sqlExecSP);
                            $stmt->bindParam(1, $blogid,   PDO::PARAM_INT);
                            $stmt->execute();                            
                            if ($stmt->rowCount() > 0) {
                                $result=$stmt->FetchAll(PDO::FETCH_ASSOC);
                            }else {
                                $result=null;
                            }                                                 
                            $stmt = null;
                            $Pdo = null;			            
                            return $result;            
                    }
                    
            public function a_blog_posts_select_pourunblog_et_unecategorie_diffuse($blogid,$categorieid) {
                        $sql="SELECT * FROM blog_posts  left outer join  blog_post_categories  on blog_post_categories.blog_posts_id =blog_posts.blog_posts_id  
                        WHERE blog_id=".$blogid." AND  areaproduction=1 AND blog_post_categories.blog_categories_id =".$categorieid."  order by posted_at DESC;";
                        $Pdo = $this->connectbase("blogareaPG");
                        $stmt  = $Pdo->prepare($sql);
                        $stmt->execute();
                        if ($stmt->rowCount() > 0) {
                            $result=$stmt->FetchAll(PDO::FETCH_ASSOC);
                        }else {$result=null;}
                        $Pdo = null;
                        $stmt = null;    
                        return $result;                
                    }
        
        public function a_blog_posts_update($blogpostsid,$Utilisateur_id,$Slug,$Title,
                                                    $Subtitle,$Meta_desc,$Post_body,
                                                    $Short_description,$Seo_title,$Areaproduction,$Areatest,
                                                    $Datedepublication,$TitreImage) {                    
                            $Pdo = $this->connectbase("blogareaPG");
                            $sqlExecSP   = "SELECT a_blog_posts_update(?,?,?,?,
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
                            $stmt->bindParam(8,$Short_description,PDO::PARAM_STR);
                            $stmt->bindParam(9,$Seo_title,PDO::PARAM_STR);                                 
                            $stmt->bindParam(10,$Areaproduction, PDO::PARAM_INT);
                            $stmt->bindParam(11,$Areatest, PDO::PARAM_INT);
                            $stmt->bindParam(12,$Datedepublication,PDO::PARAM_STR);   
                            $stmt->bindParam(13,$TitreImage,PDO::PARAM_STR);                                                               
                            $stmt->execute();                
                            $NbrRecord=$stmt->rowCount();                            
                            $stmt = null;
                            $Pdo = null;
                            return $NbrRecord;                    
                }
        public function a_blog_posts_update_fichier($blogpostsid,$Utilisateur_id,$Image_large,$Image_origine) {                    
                            $Pdo = $this->connectbase("blogareaPG");
                            $sqlExecSP   = "SELECT a_blog_posts_update_fichier(?,?,?,?)";                            
                            $stmt = $Pdo->prepare($sqlExecSP);                        
                            $stmt->bindParam(1,$blogpostsid , PDO::PARAM_INT);
                            $stmt->bindParam(2,$Utilisateur_id, PDO::PARAM_INT);                    
                            $stmt->bindParam(3,$Image_large,PDO::PARAM_STR);
                            $stmt->bindParam(4,$Image_origine,PDO::PARAM_STR);                            
                            $stmt->execute();                
                            $NbrRecord=$stmt->rowCount();                            
                            $stmt = null;
                            $Pdo = null;
                            return $NbrRecord;                    
                }  
        public function a_blog_categories_select_all_asc() {
                    
                        $Pdo = $this->connectbase("blogareaPG");
                        $sqlExecSP   = "SELECT * FROM a_blog_categories_select_all_asc()";                        
                        $stmt = $Pdo->prepare($sqlExecSP);                        
                        $stmt->execute();
                        if ($stmt->rowCount() > 0) {
                            $result=$stmt->FetchAll(PDO::FETCH_ASSOC);
                        }else {$result=null;}
                        $stmt = null;
                        $Pdo = null;			                    
                        return $result;
                    
                }   
        public function a_blog_posts_select_all_order_byblog_categorie_id() {                    
                        $Pdo = $this->connectbase("blogarea");
                        $sqlExecSP   = "SELECT * FROM  a_blog_posts_select_all_order_byblog_categorie_id()";                        
                        $stmt = $Pdo->prepare($sqlExecSP);                        
                        $stmt->execute();
                        if ($stmt->rowCount() > 0) {
                            $result=$stmt->FetchAll(PDO::FETCH_ASSOC);
                        }else {$result=null;}
                        $stmt = null;
                        $Pdo = null;			                        
                        return $result;
                    
                }           
                    
}




DROP FUNCTION IF EXISTS public.a_blog_post_categories_deletepost;
CREATE FUNCTION public.a_blog_post_categories_deletepost( IN p_blog_posts_id integer)                                                  
RETURNS integer                                                 
AS $$
 declare v_rowtouch integer;
begin
v_rowtouch := 0;
DELETE FROM blog_post_categories WHERE blog_posts_id=blog_posts_id;
GET DIAGNOSTICS v_rowtouch = ROW_COUNT;
return v_rowtouch;
end;
$$
LANGUAGE plpgsql;


DROP FUNCTION IF EXISTS public.a_blog_post_categories_select_all;

CREATE FUNCTION public.a_blog_post_categories_select_all() RETURNS SETOF public.blog_post_categories
    LANGUAGE plpgsql
    AS $$
begin
RETURN QUERY SELECT * FROM blog_post_categories order by blog_posts_id ASC;
end;
$$;

DROP FUNCTION IF EXISTS public.a_blog_posts_select_slug;

CREATE FUNCTION public.a_blog_posts_select_slug(IN p_slug character varying) RETURNS SETOF public.blog_posts
    LANGUAGE plpgsql
    AS $$
begin
RETURN QUERY SELECT * FROM blog_posts WHERE slug=p_slug;
end;
$$;


DROP FUNCTION IF EXISTS public.a_blog_posts_select;

CREATE FUNCTION public.a_blog_posts_select(IN p_blog_posts_id integer) RETURNS SETOF public.blog_posts
    LANGUAGE plpgsql
    AS $$
begin
RETURN QUERY SELECT * FROM blog_posts WHERE blog_posts_id=p_blog_posts_id;
end;
$$;

DROP FUNCTION IF EXISTS public.a_blog_posts_select_pourunblog;
CREATE FUNCTION public.a_blog_posts_select_pourunblog(IN p_blog_id integer) RETURNS SETOF public.blog_posts
    LANGUAGE plpgsql
    AS $$
begin
RETURN QUERY SELECT * FROM blog_posts WHERE blog_id=p_blog_id order by posted_at DESC;
end;
$$;


DROP FUNCTION IF EXISTS public.a_blog_posts_select_pourunblog_diffuse;
CREATE FUNCTION public.a_blog_posts_select_pourunblog_diffuse(IN p_blog_id integer) RETURNS SETOF public.blog_posts
    LANGUAGE plpgsql
    AS $$
begin
RETURN QUERY SELECT * FROM blog_posts WHERE blog_id=p_blog_id and areaproduction=1 order by posted_at DESC;
end;
$$;


DROP FUNCTION IF EXISTS public.a_blog_posts_update;
CREATE FUNCTION public.a_blog_posts_update(         
    IN p_blog_posts_id integer,
    IN p_utilisateur_id integer,
    IN p_slug character varying,    
    IN p_title character varying,    
    IN p_subtitle character varying,    
    IN p_meta_desc character varying,    
    IN p_post_body character varying,    
     IN p_short_description character varying,    
    IN p_seo_title character varying,    
    IN p_areaproduction integer,
    IN p_areatest integer,
    IN p_posted_at DATE,    
    IN p_titreimage character varying          
)
RETURNS integer                                                 
AS $$
declare v_rowtouch integer; 
 begin
 v_rowtouch := 0;
UPDATE blog_posts SET  utilisateur_id =p_utilisateur_id ,slug =p_slug,title= p_title ,subtitle=p_subtitle,
                          meta_desc =p_meta_desc ,post_body=p_post_body ,posted_at=p_posted_at ,short_description =p_short_description ,seo_title=p_seo_title,
                          areaproduction=p_areaproduction,areatest=p_areatest,titreimage=p_titreimage 
                    WHERE blog_posts_id=p_blog_posts_id;
GET DIAGNOSTICS v_rowtouch = ROW_COUNT;
return v_rowtouch;
end;
$$
LANGUAGE plpgsql;

UPDATE versionbdd SET versionnum=3, libelle='Revision 3';

DROP FUNCTION IF EXISTS public.a_blog_posts_update_fichier;
CREATE FUNCTION public.a_blog_posts_update_fichier(         
    IN p_blog_posts_id integer,
    IN p_utilisateur_id integer,    
    IN p_image_large character varying,          
    IN p_image_origine character varying          
)
RETURNS integer                                                 
AS $$
declare v_rowtouch integer; 
 begin
 v_rowtouch := 0;
UPDATE blog_posts SET  utilisateur_id =p_utilisateur_id , image_large=p_image_large,image_origine=p_image_origine
                    WHERE blog_posts_id=p_blog_posts_id;
GET DIAGNOSTICS v_rowtouch = ROW_COUNT;
return v_rowtouch;
end;
$$
LANGUAGE plpgsql;


DROP FUNCTION IF EXISTS public.a_blog_categories_select_all_asc;

CREATE FUNCTION public.a_blog_categories_select_all_asc() RETURNS SETOF public.blog_categories
    LANGUAGE plpgsql
    AS $$
begin
RETURN QUERY SELECT * FROM blog_categories  order by blog_categories_id ASC;
end;
$$;


DROP FUNCTION IF EXISTS public.a_blog_posts_select_all_order_byblog_categorie_id;
CREATE FUNCTION public.a_blog_posts_select_all_order_byblog_categorie_id() RETURNS SETOF public.blog_posts
    LANGUAGE plpgsql
    AS $$
begin
RETURN QUERY SELECT * FROM blog_posts order by blog_posts_id ASC;
end;
$$;    


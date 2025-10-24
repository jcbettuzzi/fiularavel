

DROP FUNCTION IF EXISTS public.a_blog_categories_select_all;

CREATE FUNCTION public.a_blog_categories_select_all() RETURNS SETOF public.blog_categories
    LANGUAGE plpgsql
    AS $$
begin
RETURN QUERY SELECT * FROM blog_categories ;
end;
$$;

DROP FUNCTION IF EXISTS public.a_blog_posts_select_slug_and_blog_id;
CREATE FUNCTION public.a_blog_posts_select_slug_and_blog_id(         
    IN p_blog_id integer,    
    IN p_slug character varying
) RETURNS SETOF public.blog_posts
    LANGUAGE plpgsql
    AS $$
begin
RETURN QUERY SELECT * FROM blog_posts WHERE blog_id = p_blog_id AND slug= p_slug;
end;
$$;

UPDATE versionbdd SET versionnum=2, libelle='Revision 2';



DROP FUNCTION IF EXISTS public.a_blog_post_categories_select;
CREATE FUNCTION public.a_blog_post_categories_select(         
    IN p_blog_posts_id integer        
) RETURNS TABLE (blog_posts_id integer,blog_categories_id integer,blog_id integer,category_name character varying,slug character varying, category_description text )
    LANGUAGE plpgsql
    AS $$
begin
RETURN QUERY SELECT blog_post_categories.blog_posts_id,blog_categories.blog_categories_id,blog_categories.blog_id,blog_categories.category_name,blog_categories.slug,blog_categories.category_description FROM blog_post_categories 
                left outer join blog_categories  on blog_post_categories.blog_categories_id= blog_categories.blog_categories_id   WHERE blog_post_categories.blog_posts_id=p_blog_posts_id; 
end;
$$;








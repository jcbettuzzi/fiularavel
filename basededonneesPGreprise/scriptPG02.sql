

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

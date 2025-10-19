-- psql -h 192.168.1.6 -p 5432 -U postgres -d cadastreNew          (GROS DELL)
-- psql -h 192.168.1.18 -p 5432 -U postgres -d blogarea          (petit DELL)

DROP TABLE IF EXISTS public.versionbdd CASCADE;
CREATE TABLE public.versionbdd (
    versionnum integer ,
    libelle character varying(255) NOT NULL    
);
ALTER TABLE public.versionbdd OWNER TO postgres;
INSERT INTO versionbdd (versionnum, libelle) VALUES (0,'revision 0');

DROP TABLE IF EXISTS public.blog CASCADE;
DROP SEQUENCE IF EXISTS public.blog_incre;

CREATE TABLE public.blog (
    blog_id integer ,
    blog_name character varying(255) NOT NULL,
    blog_description TEXT NOT NULL,
    utilisateur_id integer ,
    created_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP        
);
ALTER TABLE public.blog OWNER TO postgres;


CREATE SEQUENCE public.blog_incre
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

ALTER TABLE public.blog ALTER COLUMN blog_id  SET DEFAULT nextval('blog_incre'::regclass) ;
ALTER TABLE public.blog ALTER COLUMN blog_id  SET NOT NULL;

ALTER TABLE ONLY public.blog ADD CONSTRAINT blog_pkey PRIMARY KEY (blog_id);



DROP FUNCTION IF EXISTS public.a_blog_insert_fct;
CREATE FUNCTION public.a_blog_insert_fct(         
    IN p_blog_name character varying,    
    IN p_blog_description character varying,
    IN p_utilisateur_id integer)
RETURNS integer                                                 
AS $$
declare v_blogid integer; 
 begin
INSERT INTO blog (blog_name,blog_description,utilisateur_id) VALUES (p_blog_name, p_blog_description,p_utilisateur_id);
v_blogid= currval('blog_incre');
return v_blogid;
end;
$$
LANGUAGE plpgsql;



DROP TABLE IF EXISTS public.blog_categories CASCADE;


CREATE TABLE public.blog_categories (
    blog_categories_id integer ,
    blog_id integer ,
    category_name character varying(255) NOT NULL,
    slug character varying(255) NOT NULL,    
    category_description TEXT NOT NULL,    
    utilisateur_id integer ,
    created_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,        
    updated_at TIMESTAMP NOT NULL DEFAULT current_timestamp
);
ALTER TABLE public.blog_categories OWNER TO postgres;


DROP SEQUENCE IF EXISTS public.blog_categories_incre;
CREATE SEQUENCE public.blog_categories_incre
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

ALTER TABLE public.blog_categories ALTER COLUMN blog_categories_id  SET DEFAULT nextval('blog_categories_incre'::regclass) ;
ALTER TABLE public.blog_categories ALTER COLUMN blog_categories_id  SET NOT NULL;

ALTER TABLE ONLY public.blog_categories ADD CONSTRAINT blog_categories_id_pkey PRIMARY KEY (blog_categories_id);

DROP FUNCTION IF EXISTS public.a_blog_categories_insert_fct;
CREATE FUNCTION public.a_blog_categories_insert_fct(         
    IN p_blog_id integer,
    IN p_category_name character varying,    
    IN p_slug character varying,    
    IN p_category_description character varying,    
    IN p_utilisateur_id integer
)
RETURNS integer                                                 
AS $$
declare v_blogcategoriesid integer; 
 begin
INSERT INTO blog_categories (blog_id,category_name,slug,category_description,utilisateur_id) VALUES (p_blog_id, p_category_name,p_slug,p_category_description,p_utilisateur_id);
v_blogcategoriesid= currval('blog_categories_incre');
return v_blogcategoriesid;
end;
$$
LANGUAGE plpgsql;

-- a supp
-- use_view_file
-- is_published
-- image_medium
-- image_thumbnail


DROP TABLE IF EXISTS public.blog_posts CASCADE;

CREATE TABLE public.blog_posts (    
    blog_id integer ,
    blog_posts_id integer ,
    utilisateur_id integer ,
    slug character varying(255) NOT NULL,    
    title character varying(255) NOT NULL,    
    subtitle character varying(255) NOT NULL,    
    meta_desc TEXT NOT NULL,    
    post_body TEXT NOT NULL,    
    posted_at DATE NOT NULL,
    image_large character varying(255) NOT NULL,        
    created_at TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,        
    updated_at TIMESTAMP NOT NULL DEFAULT current_timestamp,
    short_description TEXT NOT NULL,        
    seo_title character varying(255) NOT NULL,    
    areaproduction integer NOT NULL DEFAULT 0,
    areatest integer NOT NULL DEFAULT 0,
    image_origine character varying(255) NOT NULL,    
    titreimage character varying(255) NOT NULL
);
ALTER TABLE public.blog_posts OWNER TO postgres;


DROP SEQUENCE IF EXISTS public.blog_posts_incre;
CREATE SEQUENCE public.blog_posts_incre
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;

ALTER TABLE public.blog_posts ALTER COLUMN blog_posts_id  SET DEFAULT nextval('blog_posts_incre'::regclass) ;
ALTER TABLE public.blog_posts ALTER COLUMN blog_posts_id  SET NOT NULL;

ALTER TABLE ONLY public.blog_posts ADD CONSTRAINT blog_posts_id_pkey PRIMARY KEY (blog_posts_id);


DROP FUNCTION IF EXISTS public.a_blog_posts_insert_fct;
CREATE FUNCTION public.a_blog_posts_insert_fct(         
    IN p_blog_id integer,
    IN p_utilisateur_id integer,
    IN p_slug character varying,    
    IN p_title character varying,    
    IN p_subtitle character varying,    
    IN p_meta_desc character varying,    
    IN p_post_body character varying,    
    IN p_posted_at DATE,    
    IN p_image_large character varying,    
    IN p_short_description character varying,    
    IN p_seo_title character varying,    
    IN p_areaproduction integer,
    IN p_areatest integer,
    IN p_image_origine character varying,    
    IN p_titreimage character varying
)
RETURNS integer                                                 
AS $$
declare v_blogpostid integer; 
 begin
INSERT INTO blog_posts (blog_id,utilisateur_id,slug,title,subtitle,meta_desc,post_body,posted_at,image_large,short_description,seo_title,areaproduction,areatest,image_origine,titreimage) 
                           VALUES (p_blog_id,p_utilisateur_id,p_slug,p_title,p_subtitle,p_meta_desc,p_post_body,p_posted_at,p_image_large,p_short_description,p_seo_title,p_areaproduction,p_areatest,p_image_origine,p_titreimage);
v_blogpostid= currval('blog_posts_incre');
return v_blogpostid;
end;
$$
LANGUAGE plpgsql;


CREATE INDEX idx_blog_post_blogid ON public.blog_posts USING btree (blog_id) WITH (deduplicate_items='true');
CREATE INDEX idx_blogcategorie_blogid ON public.blog_categories USING btree (blog_id) WITH (deduplicate_items='true');
ALTER TABLE ONLY public.blog_posts
    ADD CONSTRAINT idx_blogid_ref FOREIGN KEY (blog_id) REFERENCES public.blog(blog_id);

ALTER TABLE ONLY public.blog_categories
    ADD CONSTRAINT idx_blogcategorie_blogid_ref FOREIGN KEY (blog_id) REFERENCES public.blog(blog_id);

DROP TABLE IF EXISTS public.blog_post_categories CASCADE;

CREATE TABLE public.blog_post_categories (
    blog_posts_id integer ,
    blog_categories_id integer 
);
ALTER TABLE public.blog_post_categories OWNER TO postgres;


DROP FUNCTION IF EXISTS public.a_blog_post_categories_insert_fct;
CREATE FUNCTION public.a_blog_post_categories_insert_fct(         
    IN p_blog_posts_id integer,    
    IN p_blog_categories_id integer
)
RETURNS integer                                                 
AS $$
declare v_rowtouch integer; 
 begin
INSERT INTO blog_post_categories (blog_posts_id,blog_categories_id) VALUES (p_blog_posts_id,p_blog_categories_id );
GET DIAGNOSTICS v_rowtouch = ROW_COUNT;
return v_rowtouch;
end;
$$
LANGUAGE plpgsql;

CREATE INDEX idx_blogpostcategorie_blogpostid ON public.blog_post_categories USING btree (blog_posts_id) WITH (deduplicate_items='true');
CREATE INDEX idx_blogpostcategorie_categorieid ON public.blog_post_categories USING btree (blog_categories_id) WITH (deduplicate_items='true');
CREATE UNIQUE INDEX idx_blogpostcategorie_unique ON public.blog_post_categories USING btree (blog_posts_id, blog_categories_id) WITH (deduplicate_items='true');

ALTER TABLE ONLY public.blog_post_categories
    ADD CONSTRAINT idx_blogpostcategorie_blogpost_ref FOREIGN KEY (blog_posts_id) REFERENCES public.blog_posts(blog_posts_id);
ALTER TABLE ONLY public.blog_post_categories
    ADD CONSTRAINT idx_blogpostcategorie_blogcategorie_ref FOREIGN KEY (blog_categories_id) REFERENCES public.blog_categories(blog_categories_id);


UPDATE versionbdd SET versionnum=1, libelle='Revision 1';


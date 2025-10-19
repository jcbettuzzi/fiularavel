

DROP PROCEDURE IF EXISTS `blog_categories_select_all_asc`;
DROP PROCEDURE IF EXISTS `blog_posts_select_all_order_byblog_categorie_id`;
DROP PROCEDURE IF EXISTS `blog_post_categories_select_all`;

DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `blog_categories_select_all_asc` ()  READS SQL DATA
BEGIN
    SELECT *
    FROM blog_categories order by blog_categorie_id ASC;	
END$$


CREATE DEFINER=`root`@`localhost` PROCEDURE `blog_posts_select_all_order_byblog_categorie_id` ()  READS SQL DATA
BEGIN
    SELECT *
    FROM blog_posts order by blog_posts_id ASC;	
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `blog_post_categories_select_all` ()  READS SQL DATA
BEGIN
    SELECT *
    FROM  `blog_post_categories` order by blog_post_id ASC;
    
END$$

DELIMITER ;
UPDATE versionbdd SET versionNUM=12, libelle="Revision 12";

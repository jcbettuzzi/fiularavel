DROP PROCEDURE IF EXISTS blog_posts_select_slug_and_blog_id;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `blog_posts_select_slug_and_blog_id` (IN  Slugue VARCHAR(255),IN `BlogdID` INT)  READS SQL DATA
BEGIN
    SELECT * FROM blog_posts WHERE slug=Slugue AND blog_id=BlogdID;
END$$

DELIMITER ;



UPDATE versionbdd SET versionNUM=7, libelle="Revision 7";
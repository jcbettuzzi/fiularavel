
INSERT INTO blog (blog_id,blog_name,blog_description,utilisateur_id,created_at,updated_at) VALUES (2, 'Guide', 'description guide',1,'2024-11-07 11:03:45','2024-11-07 11:03:45');




INSERT INTO `blog_categories` VALUES (2,3,'Juridique','juridique','juridique',NULL,'2024-11-07 12:03:45','2024-11-07 13:03:45',NULL,NULL,NULL,NULL);
INSERT INTO `blog_categories` VALUES (2,4,'Administratif','administratif','administratif',NULL,'2024-11-07 12:03:45','2024-11-07 13:03:45',NULL,NULL,NULL,NULL);
INSERT INTO `blog_categories` VALUES (2,5,'Financier','financier','financier',NULL,'2024-11-07 12:03:45','2024-11-07 13:03:45',NULL,NULL,NULL,NULL);

DROP TABLE IF EXISTS `guide_fulltext`;

CREATE TABLE `guide_fulltext` (
  `laravel_fulltext_id` int unsigned NOT NULL AUTO_INCREMENT,
  `blog_posts_id` int unsigned NOT NULL,
  `indexed_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `indexed_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`laravel_fulltext_id`),
  UNIQUE KEY `blogpostid` (`blog_posts_id`) USING BTREE,
  FULLTEXT KEY `fulltext_title` (`indexed_title`),
  FULLTEXT KEY `fulltext_title_content` (`indexed_title`,`indexed_content`),
  CONSTRAINT `blogpostguide` FOREIGN KEY (`blog_posts_id`) REFERENCES `blog_posts` (`blog_posts_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



DROP PROCEDURE IF EXISTS blog_categories_select_by_blog_id;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `blog_categories_select_by_blog_id` (IN `BlogdID` INT)  READS SQL DATA
BEGIN
    SELECT *
    FROM blog_categories 
    WHERE blog_id=BlogdID;
END$$

DELIMITER ;


UPDATE versionbdd SET versionNUM=6, libelle="Revision 6";
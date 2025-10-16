SET GLOBAL log_bin_trust_function_creators = 1;

DROP PROCEDURE IF EXISTS `execute_requete`;

DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `execute_requete` (IN `requete` LONGBLOB)  READS SQL DATA
BEGIN
set @select = requete;
PREPARE qurt FROM  @select; 
EXECUTE qurt;
END$$


DELIMITER ;


DROP PROCEDURE IF EXISTS blog_categories_select_all;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `blog_categories_select_all` ()  READS SQL DATA
BEGIN
    SELECT *
    FROM blog_categories;	
END$$

DELIMITER ;


UPDATE versionbdd SET versionNUM=6, libelle="Revision 6";
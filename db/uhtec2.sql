-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           10.2.3-MariaDB-log - mariadb.org binary distribution
-- SE du serveur:                Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Export de la structure de la base pour uhtec2
CREATE DATABASE IF NOT EXISTS `uhtec2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `uhtec2`;

-- Export de la structure de la table uhtec2. adresses
CREATE TABLE IF NOT EXISTS `adresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avenue` varchar(50) DEFAULT NULL,
  `quartier` varchar(50) DEFAULT NULL,
  `commnune` varchar(50) DEFAULT NULL,
  `numero_parcelle` varchar(50) DEFAULT NULL,
  `ville_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Stocke toutes les adresses';

-- Export de données de la table uhtec2.adresses : ~0 rows (environ)
/*!40000 ALTER TABLE `adresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `adresses` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_media` int(11) NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.categories : ~0 rows (environ)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. categories_formations
CREATE TABLE IF NOT EXISTS `categories_formations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_media` int(11) DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.categories_formations : ~2 rows (environ)
/*!40000 ALTER TABLE `categories_formations` DISABLE KEYS */;
INSERT INTO `categories_formations` (`id`, `nom`, `description`, `id_media`, `icon`, `etat`, `created`) VALUES
	(1, 'Base de données', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum impedit similique nesciunt, quo, atque magnam aliquid porro aspernatur? Commodi eum, doloribus illo quae perspiciatis dolor esse enim, deserunt delectus praesentium!', 1, NULL, '1', '2019-03-30 09:19:21'),
	(2, 'Programmation', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum impedit similique nesciunt, quo, atque magnam aliquid porro aspernatur? Commodi eum, doloribus illo quae perspiciatis dolor esse enim, deserunt delectus praesentium!', 2, NULL, '1', '2019-03-30 09:19:52');
/*!40000 ALTER TABLE `categories_formations` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. categorie_offres
CREATE TABLE IF NOT EXISTS `categorie_offres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.categorie_offres : ~0 rows (environ)
/*!40000 ALTER TABLE `categorie_offres` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorie_offres` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. compagnie
CREATE TABLE IF NOT EXISTS `compagnie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `statut` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Cette table contient toutes les informations sur les compagnie';

-- Export de données de la table uhtec2.compagnie : ~5 rows (environ)
/*!40000 ALTER TABLE `compagnie` DISABLE KEYS */;
INSERT INTO `compagnie` (`id`, `nom`, `statut`) VALUES
	(1, 'ISIPA', 'SARL'),
	(2, 'Vodacom', 'SARL'),
	(3, 'Airtel', 'SARL'),
	(4, 'Uhtec', 'SARL'),
	(5, 'Zaya Africa', 'SARL');
/*!40000 ALTER TABLE `compagnie` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. compagnie_adresse
CREATE TABLE IF NOT EXISTS `compagnie_adresse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compagnie_id` int(11) DEFAULT NULL,
  `adresse_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Provient de la relation entre la compagnie et les adresse';

-- Export de données de la table uhtec2.compagnie_adresse : ~0 rows (environ)
/*!40000 ALTER TABLE `compagnie_adresse` DISABLE KEYS */;
/*!40000 ALTER TABLE `compagnie_adresse` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. competences
CREATE TABLE IF NOT EXISTS `competences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Repertories toutes les competences que le candidat doit avoir afin de postuler';

-- Export de données de la table uhtec2.competences : ~0 rows (environ)
/*!40000 ALTER TABLE `competences` DISABLE KEYS */;
/*!40000 ALTER TABLE `competences` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. conditions
CREATE TABLE IF NOT EXISTS `conditions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL,
  `offre_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Repertorie toutes les conditions aux quelles le candidat doit repondre pour postuler à l''offre';

-- Export de données de la table uhtec2.conditions : ~0 rows (environ)
/*!40000 ALTER TABLE `conditions` DISABLE KEYS */;
/*!40000 ALTER TABLE `conditions` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. domaines
CREATE TABLE IF NOT EXISTS `domaines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL,
  `titre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Les domaines concernées par les offres d''emplois';

-- Export de données de la table uhtec2.domaines : ~0 rows (environ)
/*!40000 ALTER TABLE `domaines` DISABLE KEYS */;
/*!40000 ALTER TABLE `domaines` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. exploitation
CREATE TABLE IF NOT EXISTS `exploitation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) DEFAULT NULL,
  `offre_id` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Concerne le job';

-- Export de données de la table uhtec2.exploitation : ~0 rows (environ)
/*!40000 ALTER TABLE `exploitation` DISABLE KEYS */;
/*!40000 ALTER TABLE `exploitation` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. formations
CREATE TABLE IF NOT EXISTS `formations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sous_cat` int(11) NOT NULL,
  `titre` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `prerequis` text DEFAULT NULL,
  `objectif` text NOT NULL,
  `public_concerne` text DEFAULT NULL,
  `poster` text NOT NULL,
  `id_media` int(11) DEFAULT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `lieu` text DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='Contients toutes les formations qu''organise UHTEC';

-- Export de données de la table uhtec2.formations : ~7 rows (environ)
/*!40000 ALTER TABLE `formations` DISABLE KEYS */;
INSERT INTO `formations` (`id`, `id_sous_cat`, `titre`, `description`, `prerequis`, `objectif`, `public_concerne`, `poster`, `id_media`, `etat`, `lieu`, `created`) VALUES
	(1, 2, 'Formation de NodeJS avec MongoDB', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum impedit similique nesciunt, quo, atque magnam aliquid porro aspernatur? Commodi eum, doloribus illo quae perspiciatis dolor esse enim, deserunt delectus praesentium!', 'Avoir de connaissances en HTML et CSS / Avoir de base en JavaScript ', 'Etre capable de développer des applications Web avec l\'Outil JavaScript (NodeJS)', 'Tous', 'medias/images/formations/formation/31-03-2019-05-15-31-31.PNG', 5, '1', 'Kinshasa, Gombe - Av Roi Bodoin 456', '2019-03-31 18:15:31'),
	(2, 2, 'Formation de JavaScript Pour les débutants', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum impedit similique nesciunt, quo, atque magnam aliquid porro aspernatur? Commodi eum, doloribus illo quae perspiciatis dolor esse enim, deserunt delectus praesentium!', 'Avoir de connaissances en HTML et CSS', 'Tout paticipant à cette formation sera capable de dynamiser son site avec JavaScript', 'Tous', 'medias/images/formations/formation/31-03-2019-05-18-35-31.png', NULL, '1', 'Kinshasa, Gombe - Av Roi Bodoin 456', '2019-03-31 18:18:35'),
	(3, 2, 'Formation de JavaScript Pour les débutants', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum impedit similique nesciunt, quo, atque magnam aliquid porro aspernatur? Commodi eum, doloribus illo quae perspiciatis dolor esse enim, deserunt delectus praesentium!', 'Avoir de connaissances en HTML et CSS', 'Tout paticipant à cette formation sera capable de dynamiser son site avec JavaScript', 'Tous', 'medias/images/formations/formation/31-03-2019-05-19-26-31.png', 6, '1', 'Kinshasa, Gombe - Av Roi Bodoin 456', '2019-03-31 18:19:26'),
	(4, 1, 'Développer une application mobile multiplate-forme avec IONIC', 'Développer une application mobile multiplate-forme avec IONIC', 'Avoir des base en HTML  et CSS, Une bonne maitrise en JavaScript avec l\'utilisation des objets', 'A la fin de cette formation vous serez capable de développer les applications mobiles supportées sur l\'Android et l\'IOS', 'Tout le monde', 'medias/images/formations/formation/04-04-2019-12-20-04-30.PNG', 7, '1', 'Gombé, Shaumba 322 - ISIPA', '2019-04-04 13:20:04'),
	(5, 1, 'Développer une application Windows  phone avec XAMARIN et C#', 'Développer une application Windows  phone avec XAMARIN et C#', 'Avoir des base en HTML  et CSS, Une bonne maitrise en JavaScript avec l\'utilisation des objets', 'A la fin de cette formation vous serez capable de développer les applications mobiles supportées sur Windows phone', 'Tout le monde', 'medias/images/formations/formation/04-04-2019-12-27-35-30.PNG', 8, '1', 'Gombé, Shaumba 322 - ISIPA', '2019-04-04 13:27:36'),
	(6, 1, 'Développer une application Mobile android avec C++', 'Développer une application Windows  phone avec XAMARIN et C#', 'Avoir des base en HTML  et CSS, Une bonne maitrise en JavaScript avec l\'utilisation des objets', 'A la fin de cette formation vous serez capable de développer les applications mobiles supportées sur Windows phone', 'Tout le monde', 'medias/images/formations/formation/04-04-2019-12-27-35-30.PNG', 8, '1', 'Gombé, Shaumba 322 - ISIPA', '2019-04-04 13:27:36'),
	(7, 1, 'Développer un jeu vidéo 3D avec Unit', 'Développer une application Windows  phone avec XAMARIN et C#', 'Avoir des base en HTML  et CSS, Une bonne maitrise en JavaScript avec l\'utilisation des objets', 'A la fin de cette formation vous serez capable de développer les applications mobiles supportées sur Windows phone', 'Tout le monde', 'medias/images/formations/formation/04-04-2019-12-27-35-30.PNG', 8, '1', 'Gombé, Shaumba 322 - ISIPA', '2019-04-04 13:27:36');
/*!40000 ALTER TABLE `formations` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. formation_type
CREATE TABLE IF NOT EXISTS `formation_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_formation` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Détermine quel type de formation que l''utilisateur veut suivre : online, physique ou par rendez-vous';

-- Export de données de la table uhtec2.formation_type : ~0 rows (environ)
/*!40000 ALTER TABLE `formation_type` DISABLE KEYS */;
INSERT INTO `formation_type` (`id`, `id_formation`, `id_type`) VALUES
	(1, 5, 1);
/*!40000 ALTER TABLE `formation_type` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. frais
CREATE TABLE IF NOT EXISTS `frais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_frais` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.frais : ~2 rows (environ)
/*!40000 ALTER TABLE `frais` DISABLE KEYS */;
INSERT INTO `frais` (`id`, `type_frais`, `description`, `created`) VALUES
	(1, 'Inscription', 'Frais d\'inscription pour participer à une formation', '2019-04-04 15:50:43'),
	(2, 'Inscription', 'Frais d\'inscription pour participer à une formation', '2019-04-04 15:53:15');
/*!40000 ALTER TABLE `frais` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. frais_session
CREATE TABLE IF NOT EXISTS `frais_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_session` int(11) NOT NULL,
  `id_frais` int(11) NOT NULL,
  `montant` double NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.frais_session : ~0 rows (environ)
/*!40000 ALTER TABLE `frais_session` DISABLE KEYS */;
/*!40000 ALTER TABLE `frais_session` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. media
CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `extension` varchar(50) DEFAULT NULL,
  `chemin` varchar(50) DEFAULT NULL,
  `size` bigint(20) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Contient tous les medias du site web';

-- Export de données de la table uhtec2.media : ~0 rows (environ)
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. medias
CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(30) DEFAULT NULL,
  `path` text DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  `etat` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.medias : ~8 rows (environ)
/*!40000 ALTER TABLE `medias` DISABLE KEYS */;
INSERT INTO `medias` (`id`, `type`, `path`, `created`, `etat`) VALUES
	(1, 'image', 'img/formations/categories/30-03-2019-08-19-21-31.PNG', '2019-03-30 09:19:21', '1'),
	(2, 'image', 'img/formations/categories/30-03-2019-08-19-52-31.PNG', '2019-03-30 09:19:53', '1'),
	(3, 'image', 'img/formations/souscategories/31-03-2019-05-12-25-31.png', '2019-03-31 18:12:25', '1'),
	(4, 'image', 'img/formations/souscategories/31-03-2019-05-13-32-31.PNG', '2019-03-31 18:13:32', '1'),
	(5, 'video', 'medias/videos/formations/formation/31-03-2019-05-15-31-31.wmv', '2019-03-31 18:15:31', '1'),
	(6, 'video', 'medias/videos/formations/formation/31-03-2019-05-19-26-31.wmv', '2019-03-31 18:19:26', '1'),
	(7, 'video', 'medias/videos/formations/formation/04-04-2019-12-20-04-30.wmv', '2019-04-04 13:20:04', '1'),
	(8, 'video', 'medias/videos/formations/formation/04-04-2019-12-27-35-30.wmv', '2019-04-04 13:27:35', '1');
/*!40000 ALTER TABLE `medias` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. missions
CREATE TABLE IF NOT EXISTS `missions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL,
  `offre_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Specifie les missions que le candidat sera en mesure d''accomplir';

-- Export de données de la table uhtec2.missions : ~0 rows (environ)
/*!40000 ALTER TABLE `missions` DISABLE KEYS */;
/*!40000 ALTER TABLE `missions` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. mode_paiement
CREATE TABLE IF NOT EXISTS `mode_paiement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mode` varchar(255) NOT NULL,
  `logo` text NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.mode_paiement : ~0 rows (environ)
/*!40000 ALTER TABLE `mode_paiement` DISABLE KEYS */;
/*!40000 ALTER TABLE `mode_paiement` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. modules
CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_formation` int(11) NOT NULL,
  `nom` varchar(1000) NOT NULL,
  `id_media` int(11) NOT NULL,
  `poster` text NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `ordre` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.modules : ~0 rows (environ)
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. niveau_etude
CREATE TABLE IF NOT EXISTS `niveau_etude` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL DEFAULT '0',
  `code` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.niveau_etude : ~0 rows (environ)
/*!40000 ALTER TABLE `niveau_etude` DISABLE KEYS */;
/*!40000 ALTER TABLE `niveau_etude` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. niveau_experience
CREATE TABLE IF NOT EXISTS `niveau_experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `begin` int(11) NOT NULL,
  `unite` varchar(50) NOT NULL,
  `end` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.niveau_experience : ~3 rows (environ)
/*!40000 ALTER TABLE `niveau_experience` DISABLE KEYS */;
INSERT INTO `niveau_experience` (`id`, `begin`, `unite`, `end`) VALUES
	(1, 1, 'ans', 3),
	(2, 3, 'ans ', 5),
	(3, 5, 'ans', 10);
/*!40000 ALTER TABLE `niveau_experience` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. offres_demplois
CREATE TABLE IF NOT EXISTS `offres_demplois` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` longtext NOT NULL,
  `description` longtext DEFAULT NULL,
  `type_contrat_id` int(11) DEFAULT NULL,
  `ville_id` int(11) DEFAULT NULL,
  `poste` varchar(50) DEFAULT NULL,
  `compagnie_id` int(11) DEFAULT NULL,
  `lien_postulation` varchar(50) DEFAULT NULL,
  `niveau_experience_id` int(11) DEFAULT NULL,
  `date_limite` datetime DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='La table concernant les offres d''emplois';

-- Export de données de la table uhtec2.offres_demplois : ~2 rows (environ)
/*!40000 ALTER TABLE `offres_demplois` DISABLE KEYS */;
INSERT INTO `offres_demplois` (`id`, `titre`, `description`, `type_contrat_id`, `ville_id`, `poste`, `compagnie_id`, `lien_postulation`, `niveau_experience_id`, `date_limite`, `created_at`) VALUES
	(1, 'Administrateur de base de donnes mongoDb, mysql et sql Server', ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt cupiditate magni ducimus quod voluptatibus assumenda aut deserunt ab consequatur quis, quae, in aspernatur sed officiis unde cum adipisci. Aspernatur, ut?', 1, 1, 'programmeur', 1, 'www.uhtec.com', 1, '2019-04-28 14:50:48', '2019-04-28 14:50:54'),
	(2, 'Une offre concernant tous les chauffeurs de taxi', ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt cupiditate magni ducimus quod voluptatibus assumenda aut deserunt ab consequatur quis, quae, in aspernatur sed officiis unde cum adipisci. Aspernatur, ut?', 2, 3, 'Livreur', 5, 'www.uhtec.com', 1, '2019-04-28 14:50:48', '2019-04-28 14:50:54');
/*!40000 ALTER TABLE `offres_demplois` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. offre_competence
CREATE TABLE IF NOT EXISTS `offre_competence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `offre_id` int(11) DEFAULT NULL,
  `competence_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Provient de la relation entre la table offre ainsi que la table competences';

-- Export de données de la table uhtec2.offre_competence : ~0 rows (environ)
/*!40000 ALTER TABLE `offre_competence` DISABLE KEYS */;
/*!40000 ALTER TABLE `offre_competence` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. offre_langue
CREATE TABLE IF NOT EXISTS `offre_langue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `langue_id` int(11) DEFAULT NULL,
  `offre_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Provient de la relation entre la table offre ainsi que la table langue';

-- Export de données de la table uhtec2.offre_langue : ~0 rows (environ)
/*!40000 ALTER TABLE `offre_langue` DISABLE KEYS */;
/*!40000 ALTER TABLE `offre_langue` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. offre_niveau_etude
CREATE TABLE IF NOT EXISTS `offre_niveau_etude` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `offre_id` int(11) DEFAULT NULL,
  `niveau_etude_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Cette table provient de la relation entre la table offres d''emplois ainsi que la table niveau d''etudes';

-- Export de données de la table uhtec2.offre_niveau_etude : ~0 rows (environ)
/*!40000 ALTER TABLE `offre_niveau_etude` DISABLE KEYS */;
/*!40000 ALTER TABLE `offre_niveau_etude` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. offre_profession
CREATE TABLE IF NOT EXISTS `offre_profession` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_profession` int(11) NOT NULL,
  `id_offre` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Cette table est etablit a partir de la relation entre la table offre et profession';

-- Export de données de la table uhtec2.offre_profession : ~0 rows (environ)
/*!40000 ALTER TABLE `offre_profession` DISABLE KEYS */;
/*!40000 ALTER TABLE `offre_profession` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. offre_type_etude
CREATE TABLE IF NOT EXISTS `offre_type_etude` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_etude_id` int(11) DEFAULT NULL,
  `offre_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Cette table provient de la relation entre la table offre et la table type d''etude';

-- Export de données de la table uhtec2.offre_type_etude : ~0 rows (environ)
/*!40000 ALTER TABLE `offre_type_etude` DISABLE KEYS */;
/*!40000 ALTER TABLE `offre_type_etude` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. paiements
CREATE TABLE IF NOT EXISTS `paiements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_frais_form` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.paiements : ~0 rows (environ)
/*!40000 ALTER TABLE `paiements` DISABLE KEYS */;
/*!40000 ALTER TABLE `paiements` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. partenaires
CREATE TABLE IF NOT EXISTS `partenaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL DEFAULT '0',
  `logo` text NOT NULL DEFAULT '0',
  `website` text NOT NULL DEFAULT '0',
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.partenaires : ~4 rows (environ)
/*!40000 ALTER TABLE `partenaires` DISABLE KEYS */;
INSERT INTO `partenaires` (`id`, `nom`, `logo`, `website`, `etat`, `created`) VALUES
	(1, 'Café royal', 'medias/partenaires/30-03-2019-08-01-52-31.png', 'caferoyal.com', '1', '2019-03-30 09:01:52'),
	(2, 'Delicious', 'medias/partenaires/31-03-2019-04-50-47-31.png', 'delicious.com', '1', '2019-03-31 17:50:47'),
	(3, 'Barber', 'medias/partenaires/31-03-2019-04-51-41-31.png', 'barber.com', '1', '2019-03-31 17:51:41'),
	(4, 'Designers', 'medias/partenaires/31-03-2019-04-53-02-31.png', 'designers.com', '1', '2019-03-31 17:53:02');
/*!40000 ALTER TABLE `partenaires` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. pays
CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='Repertorie tous les pays';

-- Export de données de la table uhtec2.pays : ~2 rows (environ)
/*!40000 ALTER TABLE `pays` DISABLE KEYS */;
INSERT INTO `pays` (`id`, `slug`) VALUES
	(1, 'Congo-Kinshasa'),
	(2, 'Congo-Brazaville');
/*!40000 ALTER TABLE `pays` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. professions
CREATE TABLE IF NOT EXISTS `professions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL,
  `domaine_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='professions concernés par les offres';

-- Export de données de la table uhtec2.professions : ~0 rows (environ)
/*!40000 ALTER TABLE `professions` DISABLE KEYS */;
/*!40000 ALTER TABLE `professions` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. sessios_formations
CREATE TABLE IF NOT EXISTS `sessios_formations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_form_type` int(11) DEFAULT NULL,
  `id_frais` int(11) DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `etat` enum('0','1') DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Les sessions qu''à lancer UHTEC';

-- Export de données de la table uhtec2.sessios_formations : ~0 rows (environ)
/*!40000 ALTER TABLE `sessios_formations` DISABLE KEYS */;
INSERT INTO `sessios_formations` (`id`, `id_form_type`, `id_frais`, `montant`, `date_debut`, `date_fin`, `created`, `etat`) VALUES
	(1, 1, 1, 10, '2019-04-09', '2019-04-20', '2019-04-04 15:56:11', '1');
/*!40000 ALTER TABLE `sessios_formations` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. sous-missions
CREATE TABLE IF NOT EXISTS `sous-missions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL,
  `mission_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Cette table permet de lister toutes les taches d''une mission';

-- Export de données de la table uhtec2.sous-missions : ~0 rows (environ)
/*!40000 ALTER TABLE `sous-missions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sous-missions` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. sous_categories
CREATE TABLE IF NOT EXISTS `sous_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cat` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `id_media` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.sous_categories : ~0 rows (environ)
/*!40000 ALTER TABLE `sous_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `sous_categories` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. sous_categories_formation
CREATE TABLE IF NOT EXISTS `sous_categories_formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cat` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `id_media` int(11) DEFAULT NULL,
  `created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.sous_categories_formation : ~5 rows (environ)
/*!40000 ALTER TABLE `sous_categories_formation` DISABLE KEYS */;
INSERT INTO `sous_categories_formation` (`id`, `id_cat`, `nom`, `description`, `etat`, `id_media`, `created`) VALUES
	(1, 2, 'Développement Mobile', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum impedit similique nesciunt, quo, atque magnam aliquid porro aspernatur? Commodi eum, doloribus illo quae perspiciatis dolor esse enim, deserunt delectus praesentium!', '1', 3, '2019-03-31 18:12:25'),
	(2, 2, 'Programmation Web', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum impedit similique nesciunt, quo, atque magnam aliquid porro aspernatur? Commodi eum, doloribus illo quae perspiciatis dolor esse enim, deserunt delectus praesentium!', '1', 4, '2019-03-31 18:13:32'),
	(3, 1, 'MongoDb', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '1', 4, '2019-04-05 13:28:56'),
	(4, 1, 'Sql server', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '1', 4, '2019-04-05 13:28:56'),
	(5, 1, 'Cassandra', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', '1', 4, '2019-04-05 13:28:56');
/*!40000 ALTER TABLE `sous_categories_formation` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. support
CREATE TABLE IF NOT EXISTS `support` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL,
  `offre_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Specifie toutes les responsabilités que le candidat sera en mesure d''effectuer au job';

-- Export de données de la table uhtec2.support : ~0 rows (environ)
/*!40000 ALTER TABLE `support` DISABLE KEYS */;
/*!40000 ALTER TABLE `support` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. types
CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `etat` enum('0','1') NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Contient les types de formations que UHTEC organise (Par salle, online, ou par rendez-vous avec la video conférence)';

-- Export de données de la table uhtec2.types : ~0 rows (environ)
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` (`id`, `nom`, `description`, `etat`, `created`) VALUES
	(1, 'Formation locale', 'Les formations qui sont données localement', '1', '2019-04-04 13:48:13');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. type_contrat
CREATE TABLE IF NOT EXISTS `type_contrat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) DEFAULT NULL,
  `duree` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Contient tous les types de contrat (CDI, Contrat, etc..)';

-- Export de données de la table uhtec2.type_contrat : ~3 rows (environ)
/*!40000 ALTER TABLE `type_contrat` DISABLE KEYS */;
INSERT INTO `type_contrat` (`id`, `slug`, `duree`) VALUES
	(1, 'CDI', NULL),
	(2, 'CDD', '1 ans'),
	(3, 'Contrat', '1 ans');
/*!40000 ALTER TABLE `type_contrat` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. type_etude
CREATE TABLE IF NOT EXISTS `type_etude` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table uhtec2.type_etude : ~0 rows (environ)
/*!40000 ALTER TABLE `type_etude` DISABLE KEYS */;
/*!40000 ALTER TABLE `type_etude` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. utilisateurs
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `etat` enum('1','0') NOT NULL DEFAULT '0',
  `postnom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Cette table contient les informations de base sur les utilisateurs';

-- Export de données de la table uhtec2.utilisateurs : ~0 rows (environ)
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;

-- Export de la structure de la table uhtec2. villes
CREATE TABLE IF NOT EXISTS `villes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pays` int(11) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='Repertorie toutes les villes';

-- Export de données de la table uhtec2.villes : ~3 rows (environ)
/*!40000 ALTER TABLE `villes` DISABLE KEYS */;
INSERT INTO `villes` (`id`, `id_pays`, `slug`) VALUES
	(1, 1, 'Kinshasa'),
	(2, 1, 'Lubumbashi'),
	(3, 1, 'Matadi');
/*!40000 ALTER TABLE `villes` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

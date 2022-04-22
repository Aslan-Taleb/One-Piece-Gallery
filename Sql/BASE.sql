-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 22 avr. 2022 à 21:15
-- Version du serveur :  10.3.9-MariaDB-log
-- Version de PHP :  7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `zfl2-ztalebas0`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire_com`
--

CREATE TABLE `t_commentaire_com` (
  `com_num` int(11) NOT NULL,
  `com_date_heure_publication` datetime NOT NULL,
  `com_texte` varchar(200) NOT NULL,
  `t_com_etat` char(1) NOT NULL,
  `vis_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_commentaire_com`
--

INSERT INTO `t_commentaire_com` (`com_num`, `com_date_heure_publication`, `com_texte`, `t_com_etat`, `vis_num`) VALUES
(1, '2022-04-25 09:30:00', ' Même les non-fans trouveraient cet endroit amusant.', 'p', 1),
(2, '2022-04-25 09:35:00', 'One piece est une très bonne série si l\'on apprécie les shōnen, distrayante et amusante, avec des personnages attachants malgré la bêtise régulière', 'p', 2),
(3, '2022-04-25 09:40:00', 'One piece est une bonne œuvre que je suis depuis très tres longtemps maintenant. L\'univers de One piece est vaste et diversifié, les personnages sont loufoques, drôle, attachants.', 'p', 3),
(4, '2022-04-25 09:45:00', 'l\'un des meilleurs mangas de tout les temps des combat extraordinaire\r\nune histoire qui parait basique mais qui cache énormément de mystère\r\nun auteur qui est un génie et qui semble avoir tout prévus.', 'p', 4),
(5, '2022-04-25 09:50:00', 'Une véritable merveille!', 'p', 5),
(6, '2022-04-25 09:55:00', 'Excellent', 'p', 6),
(7, '2022-04-25 10:00:00', 'J ai été transporté...', 'p', 7),
(8, '2022-04-25 10:05:00', 'Insolite...', 'p', 8),
(9, '2022-04-25 10:10:00', 'Inimaginable...', 'p', 9),
(10, '2022-04-25 10:15:00', 'J ai envie de revenir...', 'p', 10);

-- --------------------------------------------------------

--
-- Structure de la table `t_compte_cpt`
--

CREATE TABLE `t_compte_cpt` (
  `cpt_pseudo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cpt_mot_de_passe` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_compte_cpt`
--

INSERT INTO `t_compte_cpt` (`cpt_pseudo`, `cpt_mot_de_passe`) VALUES
('Apu_Nahasapeemapetilon', '0f38b041f2743e82cb1ac495c623b6e1'),
('Eiichiro Oda', 'b2a5abfeef9e36964281a31e17b57c97'),
('Jeff_Albertson', '4a7d1ed414474e4033ac29ccb8653d9b'),
('Moe_Szyslak', 'a10c9f4be1bdbf732bfd640338b4503d'),
('Ned_Flanders', '4a7d1ed414474e4033ac29ccb8653d9b'),
('Nelson_Muntz', 'b59c67bf196a4758191e42f76670ceba'),
('Seymour_Skinner', '53cfe39d296d66452693788f4574a370'),
('TL_AslaN', 'e10adc3949ba59abbe56e057f20f883e'),
('Tahiti_Bob', 'f54146a3fc82ab17e5265695b23f646b'),
('gEstionnaire', '98abb15e560057e55e4e99187702ed4e');

-- --------------------------------------------------------

--
-- Structure de la table `t_configuration_config`
--

CREATE TABLE `t_configuration_config` (
  `config_intitule` varchar(80) NOT NULL,
  `config_date_debut` date NOT NULL,
  `config_date_fin` date NOT NULL,
  `config_presentation` varchar(300) NOT NULL,
  `config_lieu` varchar(80) NOT NULL,
  `config_date_vernissage` date NOT NULL,
  `config_texte_bienvenue` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_configuration_config`
--

INSERT INTO `t_configuration_config` (`config_intitule`, `config_date_debut`, `config_date_fin`, `config_presentation`, `config_lieu`, `config_date_vernissage`, `config_texte_bienvenue`) VALUES
('One Piece Gallery', '2022-04-25', '2022-04-30', 'One Piece Gallery revient  cette année plus miteuse que jamais!\r\ndécouvrez notre expositions de figurnes De One Piece tous aussi aberrante les unes que les autres mais pas que !', 'East Blue', '2022-04-24', 'Bienvenue a cette exposition folle !');

-- --------------------------------------------------------

--
-- Structure de la table `t_exposant_exp`
--

CREATE TABLE `t_exposant_exp` (
  `exp_id` int(11) NOT NULL,
  `exp_nom` varchar(20) NOT NULL,
  `exp_prenom` varchar(20) NOT NULL,
  `exp_email` varchar(50) NOT NULL,
  `exp_text` varchar(400) NOT NULL,
  `exp_url` varchar(200) NOT NULL,
  `exp_image` varchar(100) NOT NULL,
  `cpt_pseudo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_exposant_exp`
--

INSERT INTO `t_exposant_exp` (`exp_id`, `exp_nom`, `exp_prenom`, `exp_email`, `exp_text`, `exp_url`, `exp_image`, `cpt_pseudo`) VALUES
(1, 'Tsuume', 'Art', 'tsumeart@gmail.com', 'Tsume S.A. est une société luxembourgeoise éditrice de figurines fondée en 2010 et spécialisée dans la création de statuettes en Résine, figurines en PVC, principalement issues des univers mangas, anime et jeux vidéo.', 'https://www.tsume-art.com/fr/', 'tsumelogo.png', 'TL_AslaN'),
(2, 'Oniri', 'Creation', 'oniricreation@gmail.com', 'Oniri Créations est une société française spécialisée dans la conception et la fabrication de statues de collection.', 'https://oniri-creations.com/fr/', 'oniricreation.png', 'TL_AslaN'),
(3, 'kami', 'arts', 'kamiarts@gmail.com', 'Kami-Arts est un studio français qui conçoit et fabrique des statues, bustes et figurines de collection sous licences officielles.', 'https://kami-arts.com/news/lancement-officiel-du-studio-kami-arts/', 'kami.jpg', 'Eiichiro Oda'),
(4, 'ABYSTYLE ', 'STUDIO', 'abystylestudio@gmail.com', 'Abysse Corp est une entreprise basée à Grand-Couronne, près de Rouen. C’est aujourd’hui plus de 180 personnes réparties à travers le monde de Miami à Cologne en passant par Hong Kong. Nous sommes commerciaux, designers, graphistes, acheteurs, analystes, lecteurs, binge-watchers, parents, voyageurs, gamers, parfois sportifs mais nous sommes avant tout passionnés.', 'https://www.abystyle-studio.com/fr/', 'style.jpg', 'TL_AslaN'),
(5, 'Kitsune', 'Statue', 'kitsunestatue@gmail.com', 'Kitsune est une entreprise française spécialisée dans la conception et la réalisation de statues haut de gamme.\r\n\r\nNotre équipe est entièrement composée de collectionneurs et d’artistes de talent qui concrétisent enfin leur passion pour les mangas et l’animation japonaise.', 'https://kitsunestatue.com/', 'kitsune.jpg', 'Eiichiro Oda');

-- --------------------------------------------------------

--
-- Structure de la table `t_news_new`
--

CREATE TABLE `t_news_new` (
  `new_id` int(11) NOT NULL,
  `new_titre` varchar(50) NOT NULL,
  `new_texte` varchar(300) NOT NULL,
  `new_date` date NOT NULL,
  `cpt_pseudo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_news_new`
--

INSERT INTO `t_news_new` (`new_id`, `new_titre`, `new_texte`, `new_date`, `cpt_pseudo`) VALUES
(1, 'Glénat fait les point', 'Les éditions Glénat ont précisé les dates de sortie de plusieurs nouveautés qui avaient été précédemment annoncées ...', '2022-04-25', 'TL_AslaN'),
(2, 'Le casting de la série live One Piece s\'élargit !', 'Petit à petit, le projet de série live One Piece par Netflix prend forme. Après avoir annoncé les acteur principaux il y a quelques mois, la plateforme dévoile le casting de personnages plus secondaires, mais néanmoins importants. ...', '2022-03-17', 'Tahiti_Bob'),
(3, ' le Thousand Sunny de One Piece', 'Cette semaine, les éditions Glénat ont lancé une opération promotionnelle autour de One Piece ...', '2021-10-13', 'TL_AslaN'),
(4, 'Zorojûrô dans la gamme Variable Action Heroes', 'La collection de figurines articulées Variable Action Heroes de Megahouse accueillera bientôt Zorojûrô, l\'identité de Roronoa Zoro lors de l\'arc Wano de One Piece.', '2022-04-27', 'TL_AslaN'),
(5, 'Glénat dévoile son calendrier One Piece 2023', 'L\'année 2022 est à peine commencée depuis un peu plus de trois mois, que les éditions Glénat présentent déjà leur calendrier One Piece de l\'année prochaine !\r\nAprès le succès de l\'édition précédente, le calendrier One Piece va donc revenir dans une édition augmentée.', '2022-03-09', 'TL_AslaN'),
(6, 'découvrez les personnages de One Piece Red', 'Le film One Piece Red n’est plus très loin de sortir, comme on peut le voir avec les très nombreuses informations qui ne cessent de tomber ces derniers temps sur internet. On a ainsi pu voir les outfits des Mugiwara apparaître,', '2022-04-12', 'TL_AslaN'),
(7, 'Zorojûrô dans la gamme Variable Action Heroes', 'La collection de figurines articulées Variable Action Heroes de Megahouse accueillera bientôt Zorojûrô, l\'identité de Roronoa Zoro lors de l\'arc Wano de One Piece ...', '2022-04-07', 'TL_AslaN'),
(8, 'Trafalgar Law, un personnage important ?', 'Mais si 5 des personnes ont été présentés, seul Trafalgar Law a eu droit à une post similaire à celui des Mugiwara et d’Uta présentant son design.', '2022-04-16', 'TL_AslaN'),
(9, 'Vers la destruction d’Onigashima ?', 'Le prochain chapitre de One Piece pourrait bien être particulièrement brutal, avec un Luffy devenu tellement démesurément puissant qu’il pourrait détruire l’île.', '2022-04-09', 'Eiichiro Oda'),
(10, 'Luffy va-t-il revêtir le chapeau géant d’Ym-sama ?', 'uffy nous a révélé de nouvelle formes ces dernières semaines avec l’éveil du Hito Hito no mi, modèle Nika. Parmi celles-ci, on a vu l’homme élastique devenir… géant.', '2022-04-17', 'Eiichiro Oda');

-- --------------------------------------------------------

--
-- Structure de la table `t_oeuvre_oeuv`
--

CREATE TABLE `t_oeuvre_oeuv` (
  `oeuv_code` int(11) NOT NULL,
  `oeuv_intitule` varchar(50) DEFAULT NULL,
  `oeuv_date_creation` date NOT NULL,
  `oeuv_description` varchar(1000) NOT NULL,
  `oeuv_fichier_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_oeuvre_oeuv`
--

INSERT INTO `t_oeuvre_oeuv` (`oeuv_code`, `oeuv_intitule`, `oeuv_date_creation`, `oeuv_description`, `oeuv_fichier_image`) VALUES
(1, 'Zoro Roronoa', '2014-01-18', 'Dans la boîte, deux versions de Zoro sont disponibles : la première le représente en pleine attaque tandis que la seconde reprend la pose où il annonce à ses adversaires que la tornade les poursuivra jusqu’en enfer.', 'zoro.png'),
(2, 'Zoro (Wano)', '2019-04-12', 'On retrouve ici le sabreur aux cheveux verts dans une pose ultra dynamique alors qu’il prend appui sur un Tori japonais pour assaillir de coups mortels Basil Hawkins dans le Pays de Wa ! Prenant de l’élan, il s’apprête à le tailler en pièces grâce à son Nitôryû, maintenant fermement en arrière ses deux katanas Kitetsu the Third et Shusui, dont les lames tranchantes blanches, bleues et noires, seront bientôt empourprées.. ', 'zoro(wano).png'),
(3, 'Portgas D. Ace', '2014-01-18', 'Laccent a été mis sur les détails du décor en bois et la texture de sa peau sur laquelle se reflètent les flammes qui lentourent. La statue est surplombée par une impressionnante sphère de feu qui vient compléter notre mise en scène. Pour finir, un système de LED programmable permet de donner vie au brasier et de vous immerger dans l’affrontement qui s’est déroulé au QG de la Marine.', 'ace.png'),
(4, 'White Beard', '2014-06-06', ' statue en résine de plus de 40 cm de haut. Edward Newgate domine les autres personnages avec sa carrure gigantesque. Il est figé en pleine action, la lance dans une main, déployant le pouvoir du fruit de la secousse de l\'autre. Soulevé par le vent de son attaque, son manteau flotte sur ses épaules, ajoutant à l\'ensemble une touche de dynamisme.', 'white_beard.png\r\n'),
(5, 'Shanks', '2021-01-18', '« Pardonne-moi, à bord d’un navire ennemi, je voulais mettre les choses au point avec gentillesse... » - Shanks à Barbe Blanche Figurine de shanks de la série figuarts de Bandai. Dimensions du produit: 20,8cm longueur x 17,3cm largeur x 10,2cm hauteur. Recommandation d\'âge du fabricant: 3 ans et plus.', 'shanks.png'),
(6, 'Mugiwara No Luffy', '2021-03-09', 'Monkey D. Luffy, ici représenté à l’échelle ¼, et ce pour la première fois en Europe. Le Capitaine de l’équipage du Chapeau de Paille reprend ici sa pose charismatique tirée du poster du long-métrage Stampede.', 'luffy.png'),
(7, 'Trafalgar D. Water Law', '2008-12-08', 'Trafalgar Law, de son vrai nom Trafalgar D. Water Law, est le Capitaine et Docteur de L\'Équipage du Heart, un équipage pirate constitué surtout de docteurs. Il vient de la Ville Blanche, une île de North Blue . Il fait partie d\'un groupe de onze pirates qu\'on surnomme les Onze Supernova sur L\'Archipel Sabaody, des pirates de renom dont la prime dépasse les 100 000 000 Berry. Avant l’ellipse, il avait la cinquième plus haute prime parmi les Onze Supernovae, avec une prime de 200 000 000 Berry. Law, comme plusieurs autres pirates, rêve aussi de trouver le One Piece. Durant l\'ellipse de deux ans, il est devenu un Grand Corsaire, agissant directement sous les ordres du Gouvernement Mondial et se retrouve avec une ancienne prime de 440 000 000 Berry. Cependant, son titre a été révoqué par L\'Amiral Fujitora, lorsque ce dernier a appris qu\'il s\'était allié à L\'Équipage du Chapeau de Paille. Après les événements survenus à Dressrosa, sa prime est désormais de 500 000 000 Berry.', 'law.jpg'),
(8, 'Kaido', '2012-11-10', 'Kaido (カイドウ, Kaidō), surnommé \"Kaido aux Cent Bêtes\" est le capitaine de l\'équipage aux Cent Bêtes. ainsi que l\'un des Quatre Empereurs, le troisième à être mentionné par son nom, et le dernier à faire ses débuts; il est également connu comme étant \"La Créature la Plus Puissante du Monde\" (en parallèle avec Edward Newgate \"L\'Homme le Plus Puissant du Monde\"). Lui et son équipage occupent actuellement le Pays des Wa. Il était également allié avec Kurozumi Orochi avant qu\'il ne décide de le trahir pour son plan pour une nouvelle Onigashima. Il est un ancien apprenti de l\'Équipage de Rocks.', 'kaido.png'),
(9, 'Nico Robin', '2014-01-06', 'Nico Robin (ニコ・ロビン, Niko Robin?) est un personnage du manga One Piece. Elle apparaît pour la première fois dans le tome 13 et dans l\'épisode 67 de l\'anime. Et rejoint l\'équipage de Luffy dans le tome 24.\r\nc\'est est une archéologue qui apparaît pour la première fois dans la série sous les traits du bras droit de Crocodile, l\'un des puissants grands corsaires,Elle est l\'antagoniste secondaire de la saga Alabasta.', 'nicorobin.png'),
(10, 'Tony Tony Chopper', '2020-02-07', 'Tony Tony Chopper rejoint ses camarades dans notre collection HQS by Tsume. Toujours à l’échelle 1/7e, cette statue ambitieuse et généreuse réunit dans une création 100% originale les sept formes que le médecin de l’équipage du Chapeau de Paille peut prendre !\r\nRetrouvez sur une unique statue les formes Brain Point, Heavy Point, Walk Point, Guard Point, Kung Fu Point, Horn Point et même le titanesque Monster Point. Le tout dans une mise en scène dynamique et colorée, soulignée par un socle basé sur l’arc de Whole Cake Island.\r\nTrès technique, la pièce propose un ensemble harmonieux de personnages aux tailles très différentes, alliant dynamisme et lisibilité sans qu’un personnage n’en cache un autre. Second défi relevé : la fourrure des Chopper. Complètement différente d’un “point” à l’autre, les rendus restent malgré tout cohérents. La peinture révèle le même souci de livrer une statue à la fois fidèle à chaque personnage, mais équilibrée et contrastée.', 'chopper.png'),
(11, 'Black Beard', '2021-10-19', 'A travers cette statue, nous avons voulu mettre en avant la personnalité arrogante et tyrannique de ce charismatique antagoniste, en pleine démonstration de ses pouvoirs, fruits de sa convoitise pour les fruits du Démon ! Représenté ici tel dans l’arc Wano Kuni, on voit Marshall D. Teach avec sa veste noire, rouge et orange laissant apparaitre son torse velu et son pantalon noir à motifs bleu ceinturé à la taille maintenant ses 3 pistolets à disposition, prêt à infliger quelques bonnes leçons ! Sa barbe tentaculaire légendaire', 'blackbeard.png'),
(12, 'Kuzan', '2019-05-05', 'Cette statue Ikigai du puissant Kuzan, alias Aokiji, le met en scène en pleine démonstration de ses pouvoirs ! On retrouve ici l’ancien Amiral après l’ellipse, alors qu’il a quitté la Marine, portant à présent ses lunettes rondes, son bonnet et long manteau vert, son pantalon et ses bottes noirs. Ayant mangé le Hie Hie no Mi ou Givro-Fruit, un Fruit du Démon de type Logia, le Faisan Bleu a la capacité de transformer son corps en glace, comme le prouvent la partie droite de son visage et son bras gelés, ou encore la prothèse de glace remplaçant sa jambe gauche perdue lors de son combat face à Akainu.', 'kuzan.png'),
(13, 'Oden', '2020-08-11', 'Inspiré par les illustrations d’Eiichiro Oda, Oden Ikigai By Tsume est ici représenté alors qu’il s’apprête à attaquer Kaido au Pays de Wa !\r\nEn véritable adepte du combat à deux sabres, le colossal Daimyo a développé son propre Nitôryû. Il fonce droit sur son ennemi en croisant ses deux sabres Meito,Ame no Habakiri \" l\'épée qui peut couper le Ciel \" et Enma \" l\'épée qui peut couper l\'Enfer \" qu’il est le seul à pouvoir dompter, drainant son Haki de l’Armement jusqu’à épuisement.', 'oden.jpg'),
(14, 'Boa Hanckok', '2014-09-16', 'Je pourrais faire les pires atrocités du monde, on me pardonnera toujours et tu sais pourquoi ? Parce que je suis la plus belle !\r\n– Boa Hancock, Impératrice d’Amazon Lily, capitaine de l’équipage des pirates Kuja.\r\n\r\nAvec la “princesse serpent” Boa Hancock, seconde parmi les Sept Grands Corsaires, après Trafalgar D. Law, à rejoindre notre collection HQS+ by Tsume consacrée à One Piece, Tsume propose une pièce majestueuse.', 'boa.jpg'),
(15, 'Ussop', '2018-05-04', '« Qu’est-ce qu’il m’arrive tout à coup ?! J’arrive à distinguer leur aura ! J’aperçois Luffy ! Je me lance, je suis prêt à combattre ! Great Black Kabuto ! Technique Spéciale Bille Longue Distance ! Etoile Psyché !!! » - Usopp\r\n\r\nCette statue Ikigai de Usopp le met en scène lors d’un instant crucial, à Dressrosa. Il ne peut s’imaginer écumer les mers sans Luffy et c’est pourtant de la précision de son seul tir que dépend la survie de son ami !', 'ussop.jpg'),
(16, 'Marco', '2015-02-05', 'Pour rappel, Le Tori Tori no Mi, modèle Phoenix, est un Fruit du Démon de type Zoan Mythique mangé par Marco. Apparaissant pour la première fois lors de la bataille de Marineford, il lui permet de se transformer en Phénix ou en une forme hybride. Pour en revenir à Marco, voici ce que tu dois savoir à son sujet ; Marco, était le commandant de la Première Division de L\'Équipage de Barbe Blanche.', 'marco.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `t_presente_pres`
--

CREATE TABLE `t_presente_pres` (
  `exp_id` int(11) NOT NULL,
  `oeuv_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_presente_pres`
--

INSERT INTO `t_presente_pres` (`exp_id`, `oeuv_code`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 8),
(1, 11),
(1, 13),
(1, 14),
(2, 2),
(2, 4),
(2, 7),
(2, 8),
(2, 9),
(2, 11),
(2, 12),
(2, 16),
(3, 3),
(3, 5),
(3, 10),
(3, 15),
(4, 1),
(4, 10),
(5, 4),
(5, 9),
(5, 12);

-- --------------------------------------------------------

--
-- Structure de la table `t_profil_pfl`
--

CREATE TABLE `t_profil_pfl` (
  `pfl_nom` varchar(20) NOT NULL,
  `pfl_prenom` varchar(20) NOT NULL,
  `pfl_mail` varchar(50) NOT NULL,
  `pfl_role` char(1) NOT NULL,
  `pfl_validite` char(1) NOT NULL,
  `pfl_date` date DEFAULT NULL,
  `cpt_pseudo` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_profil_pfl`
--

INSERT INTO `t_profil_pfl` (`pfl_nom`, `pfl_prenom`, `pfl_mail`, `pfl_role`, `pfl_validite`, `pfl_date`, `cpt_pseudo`) VALUES
('Nahasapeemapetilon', 'Apu', 'Apunahasapeemapetilon@gmail.com', 'O', 'D', '2022-02-14', 'Apu_Nahasapeemapetilon'),
('eiichiro', 'oda', 'eiichirooda@gmail.com', 'A', 'D', '2022-01-26', 'Eiichiro Oda'),
('Albertson', 'Jeff', 'Jeffalberston@gmail.com', 'O', 'D', '2022-02-14', 'Jeff_Albertson'),
('Szyslak', 'Moe', 'moeszyslak@gmail.com', 'O', 'D', '2022-02-14', 'Moe_Szyslak'),
('Flanders', 'Ned', 'nedflanders@gmail.com', 'O', 'D', '2022-02-14', 'Ned_Flanders'),
('Muntz', 'Nelson', 'nelsonmuntz@gmail.com', 'O', 'D', '2022-02-14', 'Nelson_Muntz'),
('Skinner', 'Seymour', 'seymourskinner', 'O', 'D', '2022-02-14', 'Seymour_Skinner'),
('Taleb', 'Aslan', 'aslantalebselim@gmail.com', 'A', 'D', '2022-01-26', 'TL_AslaN'),
('Tahiti', 'Bob', 'tahitibob@gmail.com', 'O', 'D', '2022-02-14', 'Tahiti_Bob'),
('White', 'Walter', 'lemaildugestionnaire@gmail.com', 'A', 'A', '2022-01-26', 'gEstionnaire');

-- --------------------------------------------------------

--
-- Structure de la table `t_visiteur_vis`
--

CREATE TABLE `t_visiteur_vis` (
  `vis_num` int(11) NOT NULL,
  `vis_intitule` varchar(100) DEFAULT NULL,
  `vis_mot_de_passe` char(32) NOT NULL,
  `vis_date_heure_publication` datetime NOT NULL,
  `vis_nom` varchar(20) DEFAULT NULL,
  `vis_prenom` varchar(20) DEFAULT NULL,
  `vis_mail` varchar(50) DEFAULT NULL,
  `cpt_pseudo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t_visiteur_vis`
--

INSERT INTO `t_visiteur_vis` (`vis_num`, `vis_intitule`, `vis_mot_de_passe`, `vis_date_heure_publication`, `vis_nom`, `vis_prenom`, `vis_mail`, `cpt_pseudo`) VALUES
(1, 'l\'inaugurateur', '123456789101112', '2022-04-25 08:05:00', 'Taleb', 'Aslan', 'aslantalebselim@gmail.com', 'TL_AslaN'),
(2, NULL, '667418274699547', '2022-04-25 08:10:00', 'lucas', 'hochard', NULL, 'gEstionnaire'),
(3, NULL, '311724053801960', '2022-04-25 08:15:00', 'Cyprien', 'Iov', NULL, 'gEstionnaire'),
(4, NULL, '442751142627254', '2022-04-25 08:20:00', 'antoine', 'danielle', NULL, 'gEstionnaire'),
(5, NULL, '312497867046705', '2022-04-25 08:25:00', 'andreas', NULL, NULL, 'Eiichiro Oda'),
(6, NULL, '345504857143408', '2022-04-22 08:30:00', 'Ken', 'Samaras', NULL, 'Eiichiro Oda'),
(7, NULL, '671886453418413', '2022-04-22 08:35:00', 'Valentin', 'Le Du', NULL, 'Eiichiro Oda'),
(8, NULL, '519665865649932', '2022-04-25 08:40:00', 'Claire', 'Pommet', NULL, 'TL_AslaN'),
(9, NULL, '557831343130493', '2022-04-25 08:45:00', 'Billal', 'Hakkar', NULL, 'TL_AslaN'),
(10, NULL, '830217841992895', '2022-04-25 08:50:00', 'Amine', 'Matue', NULL, 'TL_AslaN');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  ADD PRIMARY KEY (`com_num`),
  ADD UNIQUE KEY `vis_num` (`vis_num`);

--
-- Index pour la table `t_compte_cpt`
--
ALTER TABLE `t_compte_cpt`
  ADD PRIMARY KEY (`cpt_pseudo`);

--
-- Index pour la table `t_exposant_exp`
--
ALTER TABLE `t_exposant_exp`
  ADD PRIMARY KEY (`exp_id`),
  ADD KEY `cpt_pseudo` (`cpt_pseudo`);

--
-- Index pour la table `t_news_new`
--
ALTER TABLE `t_news_new`
  ADD PRIMARY KEY (`new_id`),
  ADD KEY `cpt_pseudo` (`cpt_pseudo`);

--
-- Index pour la table `t_oeuvre_oeuv`
--
ALTER TABLE `t_oeuvre_oeuv`
  ADD PRIMARY KEY (`oeuv_code`);

--
-- Index pour la table `t_presente_pres`
--
ALTER TABLE `t_presente_pres`
  ADD PRIMARY KEY (`exp_id`,`oeuv_code`),
  ADD KEY `oeuv_code` (`oeuv_code`);

--
-- Index pour la table `t_profil_pfl`
--
ALTER TABLE `t_profil_pfl`
  ADD PRIMARY KEY (`cpt_pseudo`);

--
-- Index pour la table `t_visiteur_vis`
--
ALTER TABLE `t_visiteur_vis`
  ADD PRIMARY KEY (`vis_num`),
  ADD KEY `cpt_pseudo` (`cpt_pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  MODIFY `com_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `t_exposant_exp`
--
ALTER TABLE `t_exposant_exp`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `t_news_new`
--
ALTER TABLE `t_news_new`
  MODIFY `new_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `t_oeuvre_oeuv`
--
ALTER TABLE `t_oeuvre_oeuv`
  MODIFY `oeuv_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `t_visiteur_vis`
--
ALTER TABLE `t_visiteur_vis`
  MODIFY `vis_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_commentaire_com`
--
ALTER TABLE `t_commentaire_com`
  ADD CONSTRAINT `t_commentaire_com_ibfk_1` FOREIGN KEY (`vis_num`) REFERENCES `t_visiteur_vis` (`vis_num`);

--
-- Contraintes pour la table `t_exposant_exp`
--
ALTER TABLE `t_exposant_exp`
  ADD CONSTRAINT `t_exposant_exp_ibfk_1` FOREIGN KEY (`cpt_pseudo`) REFERENCES `t_compte_cpt` (`cpt_pseudo`);

--
-- Contraintes pour la table `t_news_new`
--
ALTER TABLE `t_news_new`
  ADD CONSTRAINT `t_news_new_ibfk_1` FOREIGN KEY (`cpt_pseudo`) REFERENCES `t_compte_cpt` (`cpt_pseudo`);

--
-- Contraintes pour la table `t_presente_pres`
--
ALTER TABLE `t_presente_pres`
  ADD CONSTRAINT `t_presente_pres_ibfk_1` FOREIGN KEY (`exp_id`) REFERENCES `t_exposant_exp` (`exp_id`),
  ADD CONSTRAINT `t_presente_pres_ibfk_2` FOREIGN KEY (`oeuv_code`) REFERENCES `t_oeuvre_oeuv` (`oeuv_code`);

--
-- Contraintes pour la table `t_profil_pfl`
--
ALTER TABLE `t_profil_pfl`
  ADD CONSTRAINT `t_profil_pfl_ibfk_1` FOREIGN KEY (`cpt_pseudo`) REFERENCES `t_compte_cpt` (`cpt_pseudo`);

--
-- Contraintes pour la table `t_visiteur_vis`
--
ALTER TABLE `t_visiteur_vis`
  ADD CONSTRAINT `t_visiteur_vis_ibfk_1` FOREIGN KEY (`cpt_pseudo`) REFERENCES `t_compte_cpt` (`cpt_pseudo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

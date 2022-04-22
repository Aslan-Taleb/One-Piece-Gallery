
#compte

INSERT INTO `t_compte_cpt` (`cpt_pseudo`, `cpt_mot_de_passe`) VALUES ('gEstionnaire', MD5(' gest22!_OPXE'));
INSERT INTO `t_compte_cpt` (`cpt_pseudo`, `cpt_mot_de_passe`) VALUES ('TL_AslaN', MD5('password')), ('Eiichiro Oda', MD5('123456'));
INSERT INTO `t_compte_cpt` (`cpt_pseudo`, `cpt_mot_de_passe`) VALUES ('Jeff_Albertson', MD5('geek')), ('Tahiti_Bob', MD5('bart')), ('Apu_Nahasapeemapetilon', MD5('Nahasapeemapetilon')), ('Moe_Szyslak', MD5('Marge')), ('Nelson_Muntz', MD5('haha')), ('Seymour_Skinner', MD5('Agnes')), ('Ned_Flanders', MD5(' okilydokily'));

#profile

INSERT INTO `t_profil_pfl` (`pfl_nom`, `pfl_prenom`, `pfl_mail`, `pfl_role`, `pfl_validite`, `pfl_date`, `cpt_pseudo`) VALUES ('White', 'Walter', 'lemaildugestionnaire@gmail.com', 'A', 'A', '2022-01-26', 'gEstionnaire'), ('Taleb', 'Aslan', 'aslantalebselim@gmail.com', 'A', 'D', '2022-01-26', 'TL_AslaN');
INSERT INTO `t_profil_pfl` (`pfl_nom`, `pfl_prenom`, `pfl_mail`, `pfl_role`, `pfl_validite`, `pfl_date`, `cpt_pseudo`) VALUES ('eiichiro', 'oda', 'eiichirooda@gmail.com', 'A', 'D', '2022-01-26', 'Eiichiro Oda');
INSERT INTO `t_profil_pfl` (`pfl_nom`, `pfl_prenom`, `pfl_mail`, `pfl_role`, `pfl_validite`, `pfl_date`, `cpt_pseudo`) VALUES ('Nahasapeemapetilon', 'Apu', 'Apunahasapeemapetilon@gmail.com', 'O', 'D', '2022-02-14', 'Apu_Nahasapeemapetilon'), ('Albertson', 'Jeff', 'Jeffalberston@gmail.com', 'O', 'D', '2022-02-14', 'Jeff_Albertson');
INSERT INTO `t_profil_pfl` (`pfl_nom`, `pfl_prenom`, `pfl_mail`, `pfl_role`, `pfl_validite`, `pfl_date`, `cpt_pseudo`) VALUES ('Szyslak', 'Moe', 'moeszyslak@gmail.com', 'O', 'D', '2022-02-14', 'Moe_Szyslak'), ('Flanders', 'Ned', 'nedflanders@gmail.com', 'O', 'D', '2022-02-14', 'Ned_Flanders'), ('Skinner', 'Seymour', 'seymourskinner', 'O', 'D', '2022-02-14', 'Seymour_Skinner'), ('Tahiti', 'Bob', 'tahitibob@gmail.com', 'O', 'D', '2022-02-14', 'Tahiti_Bob'), ('Muntz', 'Nelson', 'nelsonmuntz@gmail.com', 'O', 'D', '2022-02-14', 'Nelson_Muntz');
#oeuvre
INSERT INTO `t_oeuvre_oeuv` (`oeuv_code`, `oeuv_intitule`, `oeuv_date_creation`, `oeuv_description`, `oeuv_fichier_image`) VALUES (NULL, 'Zoro Roronoa', '2014-01-18', 'Dans la boîte, deux versions de Zoro sont disponibles : la première le représente en pleine attaque tandis que la seconde reprend la pose où il annonce à ses adversaires que la tornade les poursuivra jusqu’en enfer.', 'zoro.png'), (NULL, 'Zoro (Wano)', '2019-04-12', 'On retrouve ici le sabreur aux cheveux verts dans une pose ultra dynamique alors qu’il prend appui sur un Tori japonais pour assaillir de coups mortels Basil Hawkins dans le Pays de Wa ! Prenant de l’élan, il s’apprête à le tailler en pièces grâce à son Nitôryû, maintenant fermement en arrière ses deux katanas Kitetsu the Third et Shusui, dont les lames tranchantes blanches, bleues et noires, seront bientôt empourprées.. ', 'zoro(wano).png'),
(NULL, 'Portgas D. Ace', '2014-01-18', 'Laccent a été mis sur les détails du décor en bois et la texture de sa peau sur laquelle se reflètent les flammes qui lentourent. La statue est surplombée par une impressionnante sphère de feu qui vient compléter notre mise en scène. Pour finir, un système de LED programmable permet de donner vie au brasier et de vous immerger dans l’affrontement qui s’est déroulé au QG de la Marine.', 'ace.png');

INSERT INTO `t_oeuvre_oeuv` (`oeuv_code`, `oeuv_intitule`, `oeuv_date_creation`, `oeuv_description`, `oeuv_fichier_image`) VALUES (NULL, 'White Beard', '2014-06-06', ' statue en résine de plus de 40 cm de haut. Edward Newgate domine les autres personnages avec sa carrure gigantesque. Il est figé en pleine action, la lance dans une main, déployant le pouvoir du fruit de la secousse de l\'autre. Soulevé par le vent de son attaque, son manteau flotte sur ses épaules, ajoutant à l\'ensemble une touche de dynamisme.', 'white_beard.png\r\n'), (NULL, 'Shanks', '2021-01-18', '« Pardonne-moi, à bord d’un navire ennemi, je voulais mettre les choses au point avec gentillesse... » - Shanks à Barbe Blanche', 'shanks.png');

INSERT INTO `t_oeuvre_oeuv` (`oeuv_code`, `oeuv_intitule`, `oeuv_date_creation`, `oeuv_description`, `oeuv_fichier_image`) VALUES (NULL, 'Mugiwara No Luffy', '2021-03-09', 'Monkey D. Luffy, ici représenté à l’échelle ¼, et ce pour la première fois en Europe. Le Capitaine de l’équipage du Chapeau de Paille reprend ici sa pose charismatique tirée du poster du long-métrage Stampede.', 'luffy.png');

#exposant
INSERT INTO `t_exposant_exp` (`exp_id`, `exp_nom`, `exp_prenom`, `exp_email`, `exp_text`, `exp_url`, `exp_image`, `cpt_pseudo`) VALUES (NULL, 'Tsume ', 'Art', 'tsumeart@gmail.com', 'Tsume S.A. est une société luxembourgeoise éditrice de figurines fondée en 2010 et spécialisée dans la création de statuettes en Résine, figurines en PVC, principalement issues des univers mangas, anime et jeux vidéo.', 'https://www.tsume-art.com/fr/', 'tsume_logo.png', 'TL_AslaN');
INSERT INTO `t_exposant_exp` (`exp_id`, `exp_nom`, `exp_prenom`, `exp_email`, `exp_text`, `exp_url`, `exp_image`, `cpt_pseudo`) VALUES (NULL, 'Oniri', 'Creation', 'oniricreation@gmail.com', 'Oniri Créations est une société française spécialisée dans la conception et la fabrication de statues de collection.', 'https://oniri-creations.com/fr/', 'oniricreation.png', 'TL_AslaN');
#t_visiteur_vis

INSERT INTO `t_visiteur_vis` (`vis_num`, `vis_intitule`, `vis_mot_de_passe`, `vis_date_heure_publication`, `vis_nom`, `vis_prenom`, `vis_mail`, `cpt_pseudo`) VALUES (NULL, 'l\'inaugurateur', MD5('123456'), '2022-01-27 20:29:23', 'Taleb', 'Aslan', 'aslantalebselim@gmail.com', 'TL_AslaN');
#commentaire

INSERT INTO `t_commentaire_com` (`com_num`, `com_date_heure_publication`, `com_texte`,`t_com_etat`, `vis_num`) VALUES (NULL, '2022-01-27 20:31:45', 'parfait! \r\nje recommande vivement.','c', '1');

#oeuvre/exposant
INSERT INTO `t_presente_pres` (`exp_id`, `oeuv_code`) VALUES ('1', '1'), ('1', '2'), ('1', '3'), ('1', '4'), ('1', '5'), ('1', '6'),('1','8'),('2','8');


#news

#Configuration
INSERT INTO `t_configuration_config` (`config_intitule`, `config_date_debut`, `config_date_fin`, `config_presentation`, `config_lieu`, `config_date_vernissage`, `config_texte_bienvenue`) VALUES ('One Piece Gallery', '2022-04-01', '2022-04-04', 'One Piece Gallery revient  cette année plus miteuse que jamais!
découvrez notre expositions de figurnes De One Piece tous aussi aberrante les unes que les autres mais pas que !', 'Springfield', '2022-03-31', 'Bienvenue a cette exposition folle !');







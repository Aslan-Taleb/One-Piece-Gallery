
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



#exposant

#t_visiteur_vis

INSERT INTO `t_visiteur_vis` (`vis_num`, `vis_intitule`, `vis_mot_de_passe`, `vis_date_heure_publication`, `vis_nom`, `vis_prenom`, `vis_mail`, `cpt_pseudo`) VALUES (NULL, 'l\'inaugurateur', MD5('123456'), '2022-01-27 20:29:23', 'Taleb', 'Aslan', 'aslantalebselim@gmail.com', 'TL_AslaN');
#commentaire

INSERT INTO `t_commentaire_com` (`com_num`, `com_date_heure_publication`, `com_texte`,`t_com_etat`, `vis_num`) VALUES (NULL, '2022-01-27 20:31:45', 'parfait! \r\nje recommande vivement.','c', '1');

#oeuvre/exposant


#news

#Configuration
INSERT INTO `t_configuration_config` (`config_intitule`, `config_date_debut`, `config_date_fin`, `config_presentation`, `config_lieu`, `config_date_vernissage`, `config_texte_bienvenue`) VALUES ('One Piece Gallery', '2022-04-01', '2022-04-04', 'One Piece Gallery revient  cette année plus miteuse que jamais!
découvrez notre expositions de figurnes De One Piece tous aussi aberrante les unes que les autres mais pas que !', 'Springfield', '2022-03-31', 'Bienvenue a cette exposition folle !');







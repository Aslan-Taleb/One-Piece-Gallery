                                                            /*Creation des Tables*/
CREATE TABLE t_compte_cpt
 (
 cpt_pseudo VARCHAR (45)  character set utf8 collate utf8_bin NOT NULL primary key ,
 cpt_mot_de_passe CHAR (32) NOT NULL
 ) engine=InnoDB ;


CREATE TABLE t_profil_pfl
 (
 pfl_nom VARCHAR (20) NOT NULL ,
 pfl_prenom VARCHAR (20) NOT NULL ,
 pfl_mail VARCHAR (50) NOT NULL ,
 pfl_role CHAR (1) NOT NULL,
 pfl_validite CHAR(1) NOT NULL,
 pfl_date DATE,
 cpt_pseudo VARCHAR (45)  character set utf8 collate utf8_bin NOT NULL primary key ,
 foreign key(cpt_pseudo) references t_compte_cpt(cpt_pseudo)  
 ) engine=InnoDB ;


CREATE TABLE t_news_new
 (
 new_id INTEGER AUTO_INCREMENT not null primary key ,
 new_titre VARCHAR (50) NOT NULL ,
 new_texte VARCHAR (300) NOT NULL ,
 new_date DATE NOT NULL ,
 cpt_pseudo VARCHAR (60) character set utf8 collate utf8_bin NOT NULL ,
 foreign key(cpt_pseudo) references t_compte_cpt(cpt_pseudo)  
 ) engine=InnoDB ;


create table t_visiteur_vis 
 (
 vis_num integer  AUTO_INCREMENT not null primary key,
 vis_intitule varchar (100) not null,
 vis_mot_de_passe char(32) not null,
 vis_date_heure_publication datetime not null,
 vis_nom varchar(20) not null,
 vis_prenom varchar(20) not null,
 vis_mail varchar(50) not null,
 cpt_pseudo VARCHAR (60) character set utf8 collate utf8_bin  NOT NULL ,
 foreign key(cpt_pseudo) references t_compte_cpt(cpt_pseudo)  
 )engine=InnoDB ;


create Table t_commentaire_com
 (
 com_num INTEGER AUTO_INCREMENT not null primary key ,
 com_date_heure_publication datetime not null, 
 com_texte VARCHAR (200) NOT NULL ,
 t_com_etat char(1) not null,
 vis_num integer  not null unique,
 foreign key (vis_num) references t_visiteur_vis(vis_num)
  )engine=InnoDB ;


create Table t_exposant_exp
 (
 exp_id INTEGER AUTO_INCREMENT not null primary key ,
 exp_nom VARCHAR (20) NOT NULL ,
 exp_prenom VARCHAR (20) NOT NULL ,
 exp_email VARCHAR (50) NOT NULL ,
 exp_text VARCHAR (400) NOT NULL,
 exp_url VARCHAR(200) NOT NULL,  /* */
 exp_image VARCHAR (100) NOT NULL ,
 cpt_pseudo VARCHAR (60) character set utf8 collate utf8_bin  NOT NULL ,
 foreign key(cpt_pseudo) references t_compte_cpt(cpt_pseudo)  
 )engine=InnoDB ;


create table t_oeuvre_oeuv 
 (
 oeuv_code integer  AUTO_INCREMENT not null primary key,
 oeuv_intitule varchar(50),
 oeuv_date_creation date not null,
 oeuv_description varchar(400) not null,
 oeuv_fichier_image varchar (100) not null
 )engine=InnoDB ;


create table t_presente_pres
 (
  exp_id INTEGER  not null,
  oeuv_code integer   not null,
  primary key (exp_id,oeuv_code),
  foreign key(exp_id) references t_exposant_exp(exp_id)  ,
  foreign key(oeuv_code) references t_oeuvre_oeuv(oeuv_code)  
 )engine=InnoDB ;


create table t_configuration_config
 (
 config_intitule VARCHAR (80) NOT NULL ,
 config_date_debut date not null,
 config_date_fin date not null,
 config_presentation VARCHAR (300) NOT NULL ,
 config_lieu VARCHAR (80) NOT NULL ,
 config_date_vernissage date not null,
 config_texte_bienvenue VARCHAR (200) NOT NULL 
  )engine=InnoDB ;


  

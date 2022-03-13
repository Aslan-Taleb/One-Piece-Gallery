                                --42 Requêtes SQL pour l'application « Net’Gallery » 42

'Actualités :'

--1. Requête d'ajout d'une actualité:

INSERT INTO `t_news_new` (`new_id`, `new_titre`, `new_texte`, `new_date`, `cpt_pseudo`) VALUES (NULL, 'LE SEUL EXEMPLAIRE DE NINTENDO PLAYSTATION', 'Le prototype est une d’une collaboration entre Sony et Nintendo datant du début des années 90, avant que le premier n’opte pour le développement de sa propre console,il s’agit du seul prototype existant issu d’un travail commun entre Sony et Nintendo.\r\n\r\n', '2022-01-27', 'TL_AslaN');

--2. Requête donnant la dernière actualité ajoutée:

select * from t_news_new where new_id = (select max(new_id) from t_news_new);


--3. Requête listant toutes les actualités et leur auteur :

select new_titre,new_texte,pfl_nom,pfl_prenom,cpt_pseudo from t_news_new join t_profil_pfl using (cpt_pseudo)


--4. Requête listant les 5 dernières actualités ajoutées et leur auteur :

select new_titre,new_texte,pfl_nom,pfl_prenom,cpt_pseudo from t_news_new join t_profil_pfl using (cpt_pseudo) limit 5 ;


--5. Requête de modification d'une actualité:

UPDATE `t_news_new` SET `new_titre` = 'News 10' WHERE `t_news_new`.`new_id` = 2;

--6. Requête de suppression d'une actualité à partir de son ID (n°) :

DELETE FROM `t_news_new` WHERE `t_news_new`.`new_id` = 2

--7. Requête de suppression de toutes les actualités publiées avant une certaine date (suppression des actualités trop anciennes):

DELETE FROM t_news_new 
WHERE new_date < CURDATE() -  interval 60 DAY

'Profils et comptes :'

--8. Requêtes d'ajout des données d'un profil + compte associé :


INSERT INTO `t_compte_cpt` (`cpt_pseudo`, `cpt_mot_de_passe`) VALUES ('TL_AslaN', MD5('password')), ('Eiichiro Oda', MD5('123456'));

INSERT INTO `t_profil_pfl` (`pfl_nom`, `pfl_prenom`, `pfl_mail`, `pfl_role`, `pfl_validite`, `pfl_date`, `cpt_pseudo`) VALUES ('Taleb', 'Aslan', 'aslantalebselim@gmail.com', 'A', 'D', '2022-01-26', 'TL_AslaN');

--9. Requête de vérification des données de connexion (pseudo et mot de passe), c’est à dire requête qui vérifie l’existence (ou non) du couple pseudo / mot de passe (profil activé):

select * from t_compte_cpt join t_profil_pfl using(cpt_pseudo) 
where 
cpt_pseudo='TL_AslaN' and cpt_mot_de_passe= 'a30165f4fb3c140cfae0e51326c94170' and pfl_validite='A'


--10. Requête de récupération de toutes les données d'un profil (dont on connaît le pseudo):

select * from t_profil_pfl where cpt_pseudo = "TL_AslaN"



--11. Requête permettant de connaître le rôle d’un utilisateur dont on connaît le nom et le prénom:

select pfl_role from t_profil_pfl where pfl_nom = 'Taleb' and pfl_prenom = 'Aslan'


--12. Requête de modification de plusieurs données d'un profil (pseudo connu):

UPDATE `t_profil_pfl` SET `pfl_nom` = 'Taleb' WHERE `t_profil_pfl`.`cpt_pseudo` = 'TL_AslaN';


--13. Requête de mise à jour du mot de passe d'un compte (pseudo connu):

UPDATE `t_compte_cpt` SET `cpt_mot_de_passe` = MD5('battlepass')
WHERE `t_compte_cpt`.`cpt_pseudo` = 'TL_AslaN';

--14. Requête listant toutes les données des profils + comptes associés:

select * from t_profil_pfl join t_compte_cpt using (cpt_pseudo)


--15. Requête de désactivation (/activation) d'un profil (pseudo connu):

UPDATE `t_profil_pfl` SET `pfl_validite` = 'A' WHERE `t_profil_pfl`.`cpt_pseudo` = 'TL_AslaN'

'Configuration de l’exposition :'
--16. Requête d’ajout des informations de l’exposition:

INSERT INTO `t_configuration_config` (`config_intitule`, `config_date_debut`, `config_date_fin`, `config_presentation`, `config_lieu`, `config_date_vernissage`, `config_texte_bienvenue`) VALUES ('ConsolesExpo2022', '2022-04-01', '2022-04-04', 'ConsolesExposition2022 revient  cette année plus miteuse que jamais!
découvrez notre expositions de consoles de jeux vidéos et de son histoires avec des anecdotes tous aussi aberrante les unes que les autres', 'Springfield', '2022-03-31', 'Bienvenue a cette exposition folle !');

--17. Requête vérifiant qu’il n’y a qu’une seule ligne dans la table de gestion de la configuration:

select count(*) as nb_lignes from t_configuration_config

--18. Requête donnant les informations sur l’expo. (dont nombre de jours jusqu’au vernissage):

select DATEDIFF(config_date_vernissage, CURRENT_DATE) AS nb_jour from t_configuration_config;


--19. Requête de modification de l’intitulé, de la date de vernissage et du lieu de l’exposition:

UPDATE `t_configuration_config` SET `config_intitule` = 'ConsolesExpo2022', `config_date_vernissage` = '2022-03-31' , `config_lieu` = 'Springfield'

--20. Requête de suppression de toutes les informations de l’exposition:

delete from `t_configuration_config`;
'Visiteurs :'

--21. Requête de génération d’un nouveau ticket visiteur:

INSERT INTO `t_visiteur_vis` (`vis_num`, `vis_intitule`, `vis_mot_de_passe`, `vis_date_heure_publication`, `vis_nom`, `vis_prenom`, `vis_mail`, `cpt_pseudo`) VALUES (NULL, '', '', '2022-02-24 10:20:00', '', '', '', 'TL_AslaN');

--22. Requête donnant tous les visiteurs (ID + e-mail) et les commentaires associés, s’il y en a : 

select vis_num,vis_mail,com_texte from t_visiteur_vis join t_commentaire_com using (vis_num)

--23. Requête(s) de suppression d’un ticket visiteur (+ donnée associée) sachant l’ID du ticket : 

delete from t_commentaire_com where vis_num = ' '
delete from t_visiteur_vis where vis_num = ' '

--24. Requête(s) donnant le pourcentage des visiteurs n’ayant pas laissé de commentaire Livre d’or :
set @tout_les_visiteur = (select count(distinct vis_num) from t_visiteur_vis);

set @visiteur_sans_commentaire = (select count(distinct vis_num) from t_visiteur_vis join t_commentaire_com using (vis_num));
select (@visiteur_sans_commentaire * 100 / @tout_les_visiteur) as  Pourcentage_visiteur_sans_commentaire;


--25.Requête(s) d’ajout d’un commentaire et de mise à jour du ticket associé connaissant l’ID et le mot de passe du ticket visiteur : 

select * from t_visiteur_vis 
where 
vis_num='1' and vis_mot_de_passe= 'e10adc3949ba59abbe56e057f20f883e'

INSERT INTO `t_commentaire_com` (`com_num`, `com_date_heure_publication`, `com_texte`,`t_com_etat`, `vis_num`) 
VALUES (NULL, '2022-01-27 20:31:45', 'parfait! \r\nje recommande vivement.','c', '1');

--26. Requête cachant un commentaire dont on connaît l’identifiant (ID) : 
update t_commentaire_com 
set t_com_etat = 'c' 
where com_num = 1
--27. Requête récupérant tous les commentaires (publiés) du livre d’or : 
select com_texte from t_commentaire_com where t_com_etat = 'p'

--28. Requête listant tous les commentaires (+e-mail visiteurs), y compris ceux qui sont cachés : 
select com_texte,vis_mail from t_commentaire_com join t_visiteur_vis using (vis_num)
--29. Requête de suppression / modification d’un commentaire connaissant l’ID + mot de passe du ticket : 
UPDATE t_commentaire_com 
set com_texte = 'ceci est une modification'
where vis_num = (select vis_num from t_visiteur_vis 
where 
vis_num='1' and vis_mot_de_passe= 'e10adc3949ba59abbe56e057f20f883e'; ) 

'Œuvres / exposants :'

--30. Requête d’ajout d’une œuvre : 
INSERT INTO `t_oeuvre_oeuv` (`oeuv_code`, `oeuv_intitule`, `oeuv_date_creation`, `oeuv_description`, `oeuv_fichier_image`) 
VALUES
 (NULL, 'Jaguar', '1994-06-27', 'La Jaguar est une console de jeux vidéo de salon à cartouches datant de 1993, disposant d"une ludothèque limitée, et qui n"a pas connu un grand succès malgré sa technologie innovante.','https://images.unsplash.com/photo-1509198397868-475647b2a1e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2147&q=80');

--31. Requête listant toutes les œuvres (intitulé, description et nom de l’image) : 

select oeuv_intitule,oeuv_description,oeuv_fichier_image from t_oeuvre_oeuv

--32.(faut il rajouter l'exposant ?) Requête donnant toutes les données d’une œuvre particulière dont on connaît l’ID : 

select * from t_oeuvre_oeuv where oeuv_code = '1'

--33. Requête listant tous les exposants (nom, biographie, URL du site Web et nom de l’image) : 

select exp_nom,exp_text,exp_url,exp_image from t_exposant_exp

--34. Requête donnant toutes les données d’un exposant particulier dont on connaît l’ID : 
select * from t_exposant_exp where exp_id = 1

--35.Requête donnant les intitulés et images des œuvres collectives : 
select oeuv_intitule,oeuv_fichier_image 
from t_oeuvre_oeuv join t_presente_pres using (oeuv_code) 
where
oeuv_code = (
    select oeuv_code from t_presente_pres
    group by oeuv_code
    having count(exp_id) > 1)

--36.(faut il rajouter l'exposant(passer par t_presente_pres) ?)Requêtes donnant toutes les données de toutes les œuvres de la base de données : 
select * from t_oeuvre_oeuv

--37.Requête donnant les ID des exposants ayant participé à une œuvre collective : 
select oeuv_code,count(exp_id) as nmbr_exposant 
from t_presente_pres 
group by oeuv_code
 having nmbr_exposant > 1

--38.Requête(s) supprimant les données d’un exposant s’il n’a que des œuvres individuelles (mais conservation de l’exposant et de sa participation à des œuvres collectives) + Cf 42 :

delete from t_presente_pres
where 
exp_id = 8 and oeuv_code not in 
(select oeuv_code from t_presente_pres 
group by oeuv_code
having count(exp_id) > 1 )

--requete 42 : 
--verification avant de faire un DELETE
select oeuv_code,exp_id from t_presente_pres
where exp_id = 8 and oeuv_code not in (
    select oeuv_code from t_presente_pres
    group by oeuv_code
    having count(exp_id) > 1)

--39. Requête(s) supprimant toutes les données d’une œuvre (NE PAS supprimer les exposants, surtout s’ils sont liés à d’autres œuvres !) 
--( Rappel : un exposant expose au moins une œuvre minimum) + Cf 42 :
delete from t_presente_pres where oeuv_code = 6

delete from t_oeuvre_oeuv where oeuv_code = 6

--QUESTION----40.(c'est quoi caracteristique )Requête de modification des caractéristiques d’une œuvre / d’un exposant:
update T_OEUVRE_OEU set oeuv_code = '', oeuv_intitule = '', oeuv_date_creation = '',oeuv_fichier_image = '',oeuv_description = '';
update T_EXPOSANT_EXP set exp_id = '', exp_nom = '', exp_prenom = '', exp_email = '', exp_text = '', exp_url = '', exp_image = '';
--41. Requête associant une œuvre à un exposant / dissociant une œuvre d’un exposant (ID connus):

INSERT INTO `t_presente_pres` (`exp_id`, `oeuv_code`) VALUES ('1', '1')

delete from t_presente_pres where oeuv_code = ''

--42. Requête supprimant toutes les œuvres liées à aucun exposant (idem pour les exposants):

--oeuvre aucun exposant

delete from t_oeuvre_oeuv
where oeuv_code = (
select oeuv_code from t_oeuvre_oeuv 
    except
select oeuv_code from t_oeuvre_oeuv join t_presente_pres using (oeuv_code)
	  )
-- exposant sans oeuvre
delete from t_exposant_exp
where exp_id = (
select exp_id from t_exposant_exp 
    except
select exp_id from t_exposant_exp join t_presente_pres using (exp_id)
	  )










--Aslan Taleb Groupe 1 
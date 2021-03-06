insert into `theme` (`id_theme`, `libelle`, `code`) values (0,'Informatique','INFO');
insert into `sous_theme` (`id_sous_theme`, `id_theme`, `libelle`, `code`, `description`) values (0,0,'D�veloppement Web','DEV-WEB','Introduction aux principes de d�veloppement d''application web. Utilisation des languages HTML,PHP,CSS,JAVASCRIPT.');
insert into `sous_theme` (`id_sous_theme`, `id_theme`, `libelle`, `code`, `description`) values (1,0,'D�veloppement Java','DEV-JAVA','Introduction aux principes de d�veloppement clients/serveur en Java. Utilisation des technologies RMI et J2E.');

insert into `succursale` (`id_succursale`, `adresse`, `telephone`, `mail`) values (0, '4 rue du ch�ne Reims', '030405060708', 'succursale@succursale.fr');
insert into `salle` (`id_salle`, `id_succursale`, `numero`, `capacite`) values (0,0,'1',350);
insert into `salle` (`id_salle`, `id_succursale`, `numero`, `capacite`) values (1,0,'2',15);
insert into `salle_theme` (`id_salle`, `id_sous_theme`) values (0,0);
insert into `salle_theme` (`id_salle`, `id_sous_theme`) values (0,1);
insert into `salle_theme` (`id_salle`, `id_sous_theme`) values (1,1);

insert into `client` (`id_client`, `nom`, `adresse`, `telephone`, `mail`) values (0, 'client-entreprise', '8 rue du ch�ne Reims', '0123456789', 'client@entreprise.com');
insert into `personne` (`id_personne`, `nom`, `prenom`, `mail`) values (0, 'Paul', 'Pierre', 'paul.pierre@succursale.fr');
insert into `virtuel` (`id_personne`, `login`, `mdp`, `nom`, `prenom`, `mail`) values (0, 'pp', 'pp', 'Paul', 'Pierre', 'paul.pierre@succursale.fr');
insert into `gestionnaire` (`id_personne`, `id_succursale`, `login`, `mdp`, `nom`, `prenom`, `mail`) values (0, 0, 'pp', 'pp', 'Paul', 'Pierre', 'paul.pierre@succursale.fr');
insert into `personne` (`id_personne`, `nom`, `prenom`, `mail`) values (1, 'Jean', 'Jacques', 'jean.jacques@succursale.fr');
insert into `virtuel` (`id_personne`, `login`, `mdp`, `nom`, `prenom`, `mail`) values (1, 'jj', 'jj', 'Jean', 'Jacques', 'jean.jacques@succursale.fr');
insert into `formateur` (`id_personne`, `login`, `mdp`, `nom`, `prenom`, `mail`) values (1, 'jj', 'jj', 'Jean', 'Jacques', 'jean.jacques@succursale.fr');
insert into `personne` (`id_personne`, `nom`, `prenom`, `mail`) values (2, 'Robert', 'Marcel', 'robert.marcel@entreprise.com');
insert into `apprenant` (`id_personne`, `nom`, `prenom`, `mail`) values (2, 'Robert', 'Marcel', 'robert.marcel@entreprise.com');

insert into `formateur_theme` (`id_sous_theme`, `id_personne`) values (0,1);
insert into `formateur_theme` (`id_sous_theme`, `id_personne`) values (1,1);

insert into `formation` (`id_formation`, `id_personne`) values (0, 1);
insert into `formation_salle` (`id_salle`, `id_formation`) values (0, 0);
insert into `formation_salle` (`id_salle`, `id_formation`) values (1, 0);
insert into `formation_theme` (`id_sous_theme`, `id_formation`) values (0, 0);
insert into `formation_theme` (`id_sous_theme`, `id_formation`) values (1, 0);

insert into `presence` (`id_personne`, `id_formation`, `date_heure`, `duree`, `est_present`) values (2, 0, TIMESTAMP '2015-12-03 10:00:00', '02:00:00', false);
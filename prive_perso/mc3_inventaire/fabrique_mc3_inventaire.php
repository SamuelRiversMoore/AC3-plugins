<?php

/**
 *  Fichier généré par la Fabrique de plugin v5
 *   le 2015-10-23 17:57:41
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined("_ECRIRE_INC_VERSION")) return;

$data = array (
  'fabrique' => 
  array (
    'version' => 5,
  ),
  'paquet' => 
  array (
    'nom' => 'MC3 inventaires',
    'slogan' => 'un inventaires pour MC3',
    'description' => 'Objet pays / ville / projet / thematique / chapitre',
    'prefixe' => 'mc3_inventaire',
    'version' => '1.0.0',
    'auteur' => 'emmanuel kormann',
    'auteur_lien' => '',
    'licence' => 'GNU/GPL',
    'categorie' => 'divers',
    'etat' => 'dev',
    'compatibilite' => '[3.0.20;3.0.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => '',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'options',
      3 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => '',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Pays',
      'nom_singulier' => 'Pays',
      'genre' => 'masculin',
      'logo_variantes' => 'on',
      'table' => 'spip_pays',
      'cle_primaire' => 'id_pay',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'pay',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Nom (français)',
          'champ' => 'nom_fr',
          'sql' => 'mediumtext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Name (english)',
          'champ' => 'nom_en',
          'sql' => 'mediumtext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'nom_fr',
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Pays',
        'titre_objet' => 'Pays',
        'info_aucun_objet' => 'Aucun pays',
        'info_1_objet' => 'Un pays',
        'info_nb_objets' => '@nb@ pays',
        'icone_creer_objet' => 'Créer un pays',
        'icone_modifier_objet' => 'Modifier ce pays',
        'titre_logo_objet' => 'Logo de ce pays',
        'titre_langue_objet' => 'Langue de ce pays',
        'texte_definir_comme_traduction_objet' => 'Ce pays est une traduction du pays numéro :',
        'titre_objets_rubrique' => 'Pays de la rubrique',
        'info_objets_auteur' => 'Les pays de cet auteur',
        'retirer_lien_objet' => 'Retirer ce pays',
        'retirer_tous_liens_objets' => 'Retirer tous les pays',
        'ajouter_lien_objet' => 'Ajouter ce pays',
        'texte_ajouter_objet' => 'Ajouter un pays',
        'texte_creer_associer_objet' => 'Créer et associer un pays',
        'texte_changer_statut_objet' => 'Ce pays est :',
      ),
      'table_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'echafaudages' => 
      array (
        0 => 'prive/squelettes/contenu/objets.html',
        1 => 'prive/objets/infos/objet.html',
        2 => 'prive/squelettes/contenu/objet.html',
      ),
      'autorisations' => 
      array (
        'objet_creer' => 'administrateur_restreint',
        'objet_voir' => 'toujours',
        'objet_modifier' => 'administrateur_restreint',
        'objet_supprimer' => 'administrateur_restreint',
        'associerobjet' => 'administrateur_restreint',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    1 => 
    array (
      'nom' => 'Villes',
      'nom_singulier' => 'Ville',
      'genre' => 'feminin',
      'logo_variantes' => 'on',
      'table' => 'spip_villes',
      'cle_primaire' => 'id_ville',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'ville',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Nom (français)',
          'champ' => 'nom_fr',
          'sql' => 'mediumtext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Name (english)',
          'champ' => 'nom_en',
          'sql' => 'mediumtext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Latitude décimales',
          'champ' => 'latitude',
          'sql' => 'mediumtext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Longitude décimales',
          'champ' => 'longitude',
          'sql' => 'mediumtext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'nom_fr',
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Villes',
        'titre_objet' => 'Ville',
        'info_aucun_objet' => 'Aucune ville',
        'info_1_objet' => 'Une ville',
        'info_nb_objets' => '@nb@ villes',
        'icone_creer_objet' => 'Créer une ville',
        'icone_modifier_objet' => 'Modifier cette ville',
        'titre_logo_objet' => 'Logo de cette ville',
        'titre_langue_objet' => 'Langue de cette ville',
        'texte_definir_comme_traduction_objet' => 'Cette ville est une traduction de la ville numéro :',
        'titre_objets_rubrique' => 'Villes de la rubrique',
        'info_objets_auteur' => 'Les villes de cet auteur',
        'retirer_lien_objet' => 'Retirer cette ville',
        'retirer_tous_liens_objets' => 'Retirer toutes les villes',
        'ajouter_lien_objet' => 'Ajouter cette ville',
        'texte_ajouter_objet' => 'Ajouter une ville',
        'texte_creer_associer_objet' => 'Créer et associer une ville',
        'texte_changer_statut_objet' => 'Cette ville est :',
      ),
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_pays',
      ),
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'echafaudages' => 
      array (
        0 => 'prive/squelettes/contenu/objets.html',
        1 => 'prive/objets/infos/objet.html',
        2 => 'prive/squelettes/contenu/objet.html',
      ),
      'autorisations' => 
      array (
        'objet_creer' => 'administrateur_restreint',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => 'administrateur_restreint',
        'associerobjet' => 'administrateur_restreint',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    2 => 
    array (
      'nom' => 'Projets',
      'nom_singulier' => 'Projet',
      'genre' => 'masculin',
      'logo_variantes' => 'on',
      'table' => 'spip_projets',
      'cle_primaire' => 'id_projet',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'projet',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre (français)',
          'champ' => 'titre_fr',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Description (français)',
          'champ' => 'description_fr',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '6',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Title (english)',
          'champ' => 'titre_en',
          'sql' => 'mediumtext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Description (english)',
          'champ' => 'description_en',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '6',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Latitude décimales',
          'champ' => 'latitude',
          'sql' => 'mediumtext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        5 => 
        array (
          'nom' => 'Longitude décimales',
          'champ' => 'longitude',
          'sql' => 'mediumtext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        6 => 
        array (
          'nom' => 'MapBox',
          'champ' => 'mapbox',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre_fr',
      'langues' => 
      array (
        0 => 'lang',
        1 => 'id_trad',
      ),
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Projets',
        'titre_objet' => 'Projet',
        'info_aucun_objet' => 'Aucun projet',
        'info_1_objet' => 'Un projet',
        'info_nb_objets' => '@nb@ projets',
        'icone_creer_objet' => 'Créer un projet',
        'icone_modifier_objet' => 'Modifier ce projet',
        'titre_logo_objet' => 'Logo de ce projet',
        'titre_langue_objet' => 'Langue de ce projet',
        'texte_definir_comme_traduction_objet' => 'Ce projet est une traduction du projet numéro :',
        'titre_objets_rubrique' => 'Projets de la rubrique',
        'info_objets_auteur' => 'Les projets de cet auteur',
        'retirer_lien_objet' => 'Retirer ce projet',
        'retirer_tous_liens_objets' => 'Retirer tous les projets',
        'ajouter_lien_objet' => 'Ajouter ce projet',
        'texte_ajouter_objet' => 'Ajouter un projet',
        'texte_creer_associer_objet' => 'Créer et associer un projet',
        'texte_changer_statut_objet' => 'Ce projet est :',
      ),
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_villes',
      ),
      'roles' => '',
      'auteurs_liens' => 'on',
      'vue_auteurs_liens' => 'on',
      'echafaudages' => 
      array (
        0 => 'prive/squelettes/contenu/objets.html',
        1 => 'prive/objets/infos/objet.html',
        2 => 'prive/squelettes/contenu/objet.html',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => 'administrateur_restreint',
        'associerobjet' => 'redacteur',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    3 => 
    array (
      'nom' => 'Thématiques',
      'nom_singulier' => 'Thématique',
      'genre' => 'feminin',
      'logo_variantes' => 'on',
      'table' => 'spip_thematiques',
      'cle_primaire' => 'id_thematique',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'thematique',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre (français)',
          'champ' => 'titre_fr',
          'sql' => 'mediumtext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Texte (français)',
          'champ' => 'texte_fr',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '6',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Title (anglais)',
          'champ' => 'titre_en',
          'sql' => 'mediumtext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Text (english)',
          'champ' => 'texte_en',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '6',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre_fr',
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Thématiques',
        'titre_objet' => 'Thématique',
        'info_aucun_objet' => 'Aucune thématique',
        'info_1_objet' => 'Une thématique',
        'info_nb_objets' => '@nb@ thématiques',
        'icone_creer_objet' => 'Créer une thématique',
        'icone_modifier_objet' => 'Modifier cette thématique',
        'titre_logo_objet' => 'Logo de cette thématique',
        'titre_langue_objet' => 'Langue de cette thématique',
        'texte_definir_comme_traduction_objet' => 'Cette thématique est une traduction de la thématique numéro :',
        'titre_objets_rubrique' => 'Thématiques de la rubrique',
        'info_objets_auteur' => 'Les thématiques de cet auteur',
        'retirer_lien_objet' => 'Retirer cette thématique',
        'retirer_tous_liens_objets' => 'Retirer toutes les thématiques',
        'ajouter_lien_objet' => 'Ajouter cette thématique',
        'texte_ajouter_objet' => 'Ajouter une thématique',
        'texte_creer_associer_objet' => 'Créer et associer une thématique',
        'texte_changer_statut_objet' => 'Cette thématique est :',
      ),
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_pays',
        1 => 'spip_projets',
        2 => 'spip_villes',
      ),
      'roles' => '',
      'auteurs_liens' => 'on',
      'vue_auteurs_liens' => 'on',
      'echafaudages' => 
      array (
        0 => 'prive/squelettes/contenu/objets.html',
        1 => 'prive/objets/infos/objet.html',
        2 => 'prive/squelettes/contenu/objet.html',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => 'administrateur_restreint',
        'associerobjet' => 'redacteur',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    4 => 
    array (
      'nom' => 'Chapitres',
      'nom_singulier' => 'Chapitre',
      'genre' => 'masculin',
      'logo_variantes' => 'on',
      'table' => 'spip_chapitres',
      'cle_primaire' => 'id_chapitre',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'chapitre',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre (français)',
          'champ' => 'titre_fr',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Texte (français)',
          'champ' => 'texte_fr',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '6',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Title (english)',
          'champ' => 'titre_en',
          'sql' => 'mediumtext NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '8',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Text (english)',
          'champ' => 'texte_en',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '6',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre_fr',
      'champ_date' => '',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Chapitres',
        'titre_objet' => 'Chapitre',
        'info_aucun_objet' => 'Aucun chapitre',
        'info_1_objet' => 'Un chapitre',
        'info_nb_objets' => '@nb@ chapitres',
        'icone_creer_objet' => 'Créer un chapitre',
        'icone_modifier_objet' => 'Modifier ce chapitre',
        'titre_logo_objet' => 'Logo de ce chapitre',
        'titre_langue_objet' => 'Langue de ce chapitre',
        'texte_definir_comme_traduction_objet' => 'Ce chapitre est une traduction du chapitre numéro :',
        'titre_objets_rubrique' => 'Chapitres de la rubrique',
        'info_objets_auteur' => 'Les chapitres de cet auteur',
        'retirer_lien_objet' => 'Retirer ce chapitre',
        'retirer_tous_liens_objets' => 'Retirer tous les chapitres',
        'ajouter_lien_objet' => 'Ajouter ce chapitre',
        'texte_ajouter_objet' => 'Ajouter un chapitre',
        'texte_creer_associer_objet' => 'Créer et associer un chapitre',
        'texte_changer_statut_objet' => 'Ce chapitre est :',
      ),
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_thematiques',
      ),
      'roles' => '',
      'auteurs_liens' => 'on',
      'vue_auteurs_liens' => 'on',
      'echafaudages' => 
      array (
        0 => 'prive/squelettes/contenu/objets.html',
        1 => 'prive/objets/infos/objet.html',
        2 => 'prive/squelettes/contenu/objet.html',
      ),
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => 'redacteur',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAG1JREFUeNpiYBgFo2CAASOF+hOAWAGIHwDxgoHwwH4g/g+lyQJMAx0Fow4YdcCoA1jwyClAMT4ggEQ7EFD7AIqJBg3QQoZauGFQRsFoUTzqgFEHjDpgwB1AaaPUAFoPfADiC6Nt/FEwJAFAgAEAme4fbva3SiYAAAAASUVORK5CYII=',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAaJJREFUeNrsll1Kw0AQxzdS4kuDG+JrJdIcYD2B3sDeQKEeoL2BnqA9gAU9QdsT2J4gewCL8dG+NJCSh7zoDEyghnzHpCod+JPAZnd+87GbZexgf9zeQJ+gDWgKugXxppyb5DwqhBk0ATBIAAhlg0SdANMMgFD3aWVRKgBsCtTbBT2BlvSO8y5Bw7LOr3JGnybMIDuqAFDVlqVnWpZlt9ttu2IGRKkemEweOdVf7/fvXFropuAZ4IDOy5agB5LkHE1SM+GC45xrLMKXMgDYvfOETkeQC4JKs3kVAGzAWcq4JIghQaVmQClYf6z3C6RfL1gyEQGcJQJIKU2K8pommuHYev3BPM9j3a7l0EKYyoUQwim7o5SI4xERx9pq9co415lhGHFpf8bIsmDADycfHL4dtyJ/t17qeeq6rNM5ixsSpBE4kFTj951mxIye0FPs9ME3AJblXFWPQWrWp6LIXzD3LsDac/7zd43cANutxzRN2w9AEATM9/39ZQDTX0f0uQGw8QzjtBaAXLugruirXEgOAP8HoBW5Jj006Nthv8G+BBgA4H2dv3R52g4AAAAASUVORK5CYII=',
          ),
          32 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAaJJREFUeNrsll1Kw0AQxzdS4kuDG+JrJdIcYD2B3sDeQKEeoL2BnqA9gAU9QdsT2J4gewCL8dG+NJCSh7zoDEyghnzHpCod+JPAZnd+87GbZexgf9zeQJ+gDWgKugXxppyb5DwqhBk0ATBIAAhlg0SdANMMgFD3aWVRKgBsCtTbBT2BlvSO8y5Bw7LOr3JGnybMIDuqAFDVlqVnWpZlt9ttu2IGRKkemEweOdVf7/fvXFropuAZ4IDOy5agB5LkHE1SM+GC45xrLMKXMgDYvfOETkeQC4JKs3kVAGzAWcq4JIghQaVmQClYf6z3C6RfL1gyEQGcJQJIKU2K8pommuHYev3BPM9j3a7l0EKYyoUQwim7o5SI4xERx9pq9co415lhGHFpf8bIsmDADycfHL4dtyJ/t17qeeq6rNM5ixsSpBE4kFTj951mxIye0FPs9ME3AJblXFWPQWrWp6LIXzD3LsDac/7zd43cANutxzRN2w9AEATM9/39ZQDTX0f0uQGw8QzjtBaAXLugruirXEgOAP8HoBW5Jj006Nthv8G+BBgA4H2dv3R52g4AAAAASUVORK5CYII=',
          ),
          24 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAUVJREFUeNpiYBjqgJlE9QZArAHEH4D4By0c9B6I/0PxfiB2oKbhBkiGI+P1QCxADQsacFjwH+qzBjSLSLb0PB4LkDFMXQIphgsQaTgyFiA6FcXFxXmwsrJKPHv2bCFUowQBLReAeCLRzp87d858IA5AEnKApiJcru8nKfCBht/HIVWAlnRhGJ58WYgwXAFIPcAhPQGIF0Aj1B8qBlJ7AKaAESXgLlwIgCoEuQBkMMOrVy/BcmJi4hegGg8aGBhsINb3jEiGY82Zd+/eYZCUlGLg4uJCFgYVFSBLNoJcDLQQqP2CAzQB2AMxyKELgeINBIPo27fv6IbDkm0CLK0DDcepnwmf4Z8/f2bg5eWlKPvjteDDhw+0teDLl88MAgICtLNAXl6BgZmZmXYWYIlc6lpADUBzC5DzAaikPEhFsw/QpVUBEGAApOt5YSFYfwAAAAAASUVORK5CYII=',
          ),
          16 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAANpJREFUeNpiYKAxUABiByhNFpgPxP+heD85Bt1HMgCGG6AGgbAAIef/J4Bxu6igIL9AXl4e5IXzODTfx+v2uXPnrEfiOmDxTj9IggVd44ULFwxAfjt79gyy8AEgNgTiBCD2h4ptBBGMUE0KUBMDQPzPnz8zfP/+jUFMTPwDkLsBqviAgYHBB6h6AajaAzADHKDRBAaPHz9mEBYWZuDi4sJwIDTkYYHnyILN/79+/cSmGQQM0AWY0AX+/v3LwMzMQnRCwTCAmZmZQUpKinwDQICNjY0yA+gKAAIMABKzSdKgKY5bAAAAAElFTkSuQmCC',
          ),
          12 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAK9JREFUeNpiYKASUIBiosF6IP4PxOeB2AFZghGHhvdALIDEXwDED4F4A4ZKdXV1Bx4envNQG5Dxe6xGz507px+IBaB+2I+kYT3cSRcuXDAAUgEg9s2bN/zV1TUWgqw3MDB4APWDA9Q5F2AaQCYw/P37l+HZs2cMsrKyMAsvAPEBIDaA4kAWZOd8+PCBQUAA2a9whXDAhO4HXl5evOGNokFYWJhgBMGcdIDICP0AEGAAFXIwxzdZaAEAAAAASUVORK5CYII=',
          ),
        ),
      ),
      1 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAATRJREFUeNpiYBjpgJEWhl64cEEASBmgCX8wMDC4gK6WhUYeA1m+H03sABA7oitkGugoIBQC/2kdbSwUxLMCOKwNDB5A+aBg74dKC9DcAUBQD7UoEMlSB1INIScNNIiLi/fPmDEjAcgOAPocbOm1a9cEaJEN/xOIBhD1ABgNiqBUP2fOHAcTExNcyg8A1TnidQDQQBQLgRoYiHAAQ3Nz84K1a9cmgCwHOoL4vGpgwEhxNvz8+TPD8ePHQdHBcObMGYZNmzaRnQsUgPFKsgNAFj579gzO7+7uZvDz88NQh262lJQUdRwACgF8fFwOgKWVAS8JRx3AQkvDb968CU6UA+YAUIIEZc3hmwZAvkMuA+ieBlJSUkZzAa5KZrQgGnUAQfDq1asHA+qAR48ePRgUUTAKAAIMAFWpaG1gPHnRAAAAAElFTkSuQmCC',
          ),
          32 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAATRJREFUeNpiYBjpgJEWhl64cEEASBmgCX8wMDC4gK6WhUYeA1m+H03sABA7oitkGugoIBQC/2kdbSwUxLMCOKwNDB5A+aBg74dKC9DcAUBQD7UoEMlSB1INIScNNIiLi/fPmDEjAcgOAPocbOm1a9cEaJEN/xOIBhD1ABgNiqBUP2fOHAcTExNcyg8A1TnidQDQQBQLgRoYiHAAQ3Nz84K1a9cmgCwHOoL4vGpgwEhxNvz8+TPD8ePHQdHBcObMGYZNmzaRnQsUgPFKsgNAFj579gzO7+7uZvDz88NQh262lJQUdRwACgF8fFwOgKWVAS8JRx3AQkvDb968CU6UA+YAUIIEZc3hmwZAvkMuA+ieBlJSUkZzAa5KZrQgGnUAQfDq1asHA+qAR48ePRgUUTAKAAIMAFWpaG1gPHnRAAAAAElFTkSuQmCC',
          ),
          24 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAARRJREFUeNpiYKAxYKTUgAsXLjggcT8YGBhcQJZnoYIj9yOxDwCxIzEWJACxAhK/gVzbcVkQD8TIXm8ABoUAyFJQEACBAZDdT4kF2EABENtDg0AAzQE4ARORhv8Hurz+zJkzDkDXJwQHBys8e/aMtCACaoRHVlRUlMG1a9ewavjw4UP+3bt3Fbq7uxn6+zFCyQDZHKCjHJGDCO5lLi4unC6aPXu2ATjp7N/PAPQRg4mJCbI0RtCxINlGlJdv3rwJZ6NbkJKSAhYDAZg4E61zMs0toEZOZgClqE2bNjFgS1lUs2DGjBlDIIhAqYSukQwKGlCyRE66eIsDamJgPvg/PPIBzYJIQEDgPE19ACx1PzAMCwAQYAA2oYZelox06gAAAABJRU5ErkJggg==',
          ),
          16 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQFJREFUeNpiYKAQMJKi+MKFCw5Q5gMDA4MHIAYTmhoBIHaAYgEsZuyH4gSYAAuaAgOoAhBwBNrIALTpANRmB2yuYsLj4vjly5fPB2ouuHTpkj+QX48zDICKQDb3HzhwQKCgoMAAJmliYsLQ29v7wN7eXmDlypUC6urqMKkHUHyBGSqgcebMmQagTRI3b96Emy4lJcXw+/dvgWPHjnG8ffuWwcPDAyw+Y8YMAaB6hffv3/9ggQrg9Mfnz59RaGT1rq6ueMMAKwDaTHQgYgUpKSnEG/Ds2TMMG9EBCyEDQBgWBvgMAyWS/6RiYCDuZ2KgEiDLBUDcwIiUiQzIsPgBQIABAOIcfQ3kGBW4AAAAAElFTkSuQmCC',
          ),
          12 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJxJREFUeNpiYKA2uHDhwn4QhvGZkOQcgPg/EIMUKEAVN0DFHbBpgAGD5ubm81OnTi24efNmPbokI4iYM2fOf6AkQ3d3N1jQxMSEQUpKiuHZs2cgOYbPnz8zgOSB4ABM439kDNQAxiA20Fn/QQbCnMtEjMc3bdoEZ7NgUwByAkkaoO4FgzNnzmB6Guo+YsABJlIjEuakRiLVPwAIMAB6qkgMptJlhAAAAABJRU5ErkJggg==',
          ),
        ),
      ),
      2 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAehJREFUeNrsVrFugkAYPhsfgKTGRKbr5MrgxlB4AewbSDc32yeoXe1AOrjV0DfAN0AHUzdcHJw0NXFwgQcwofcTMHBFOPRI08Qv+WJ+D/n+++67OxG64op/BIXQJFwT+uGnRaiXLSwQ2qHoKTqEUlniTo54RJcQ827AYhSPaPMUx7QAxtg3TdO3bdu3LMuXJCmtCYVXA31a3HVdPw6oU5owi4jcZIzdxwtd15EgCMmAkLrX66U5x6UBtnXCl+Uuq4FNothsUh+aTqel7f8nOmCO4yQyADVZBjoDRhGRSs4ZsA4/E1kA28GR8XiMPM+jf3dHu8dtJzDQKCpQYXhmzZhsL5x9YMlisfCp8QnZsuo5u+CRcTLPkXgRVLMGR6MPsFQaDN7QarVCOTvm85w1ruaMww2ntNsagiYy8BrarvBuIECz2Qx4woX47G2eB1EC4EIaZFl+L+sk/OUCEUt812q10HA47IR5ebg4A2QN+/F6v9/j7fb7WGuahmaz2bHudrtBTubzL325XL7kXRv0+2Hp6AwkXlKv11G8gVrtNnABmoDZAwG73a7DcFZg+v1wNhS+DcGF2OwDHA4HpfQMxF0wDOM4+0tx1v8BVVW5Xbm5DYiiGLAs0CGc0A80GmIUtDL0PfTX+BFgAIS+6hCcx/3UAAAAAElFTkSuQmCC',
          ),
          32 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAehJREFUeNrsVrFugkAYPhsfgKTGRKbr5MrgxlB4AewbSDc32yeoXe1AOrjV0DfAN0AHUzdcHJw0NXFwgQcwofcTMHBFOPRI08Qv+WJ+D/n+++67OxG64op/BIXQJFwT+uGnRaiXLSwQ2qHoKTqEUlniTo54RJcQ827AYhSPaPMUx7QAxtg3TdO3bdu3LMuXJCmtCYVXA31a3HVdPw6oU5owi4jcZIzdxwtd15EgCMmAkLrX66U5x6UBtnXCl+Uuq4FNothsUh+aTqel7f8nOmCO4yQyADVZBjoDRhGRSs4ZsA4/E1kA28GR8XiMPM+jf3dHu8dtJzDQKCpQYXhmzZhsL5x9YMlisfCp8QnZsuo5u+CRcTLPkXgRVLMGR6MPsFQaDN7QarVCOTvm85w1ruaMww2ntNsagiYy8BrarvBuIECz2Qx4woX47G2eB1EC4EIaZFl+L+sk/OUCEUt812q10HA47IR5ebg4A2QN+/F6v9/j7fb7WGuahmaz2bHudrtBTubzL325XL7kXRv0+2Hp6AwkXlKv11G8gVrtNnABmoDZAwG73a7DcFZg+v1wNhS+DcGF2OwDHA4HpfQMxF0wDOM4+0tx1v8BVVW5Xbm5DYiiGLAs0CGc0A80GmIUtDL0PfTX+BFgAIS+6hCcx/3UAAAAAElFTkSuQmCC',
          ),
          24 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAW5JREFUeNpiYBgFBAAjEWoUoBgEHkAxVQDI0P1A/B8Ng8QMKDUcZMB7LIbD8HtKLTmPbKCCggIYo1lynxLXww2aP3/+fxhYv349uiUB5FjQADPAwcHhPzpISEhAtqCBkGFMeL1igBnMAgICFKeeBOSwf//+Pdz1IDZaXBSQY4EAcgoC+uJ/f38/OC5AbLQ4UCA3o4HCtp6A3kaQugsXLhhAHQUL1gPE5uT7eFwIys2KIAbQAlDGc0CygJFgJM+dOyfB39/vAQHXEwVYcIjH+/n5ORw9eozhzZs32Fy/AOjyBqQihbxkmpSUiM/19VBMvgXq6upgDANSUlKgMBcABqECyUGE5GWGx48fKbx69QrMBsYFQ1dXN5jd1NQEc7k9LgORzQEFJXIc1CNyqyADzAKYL3h5eRlMTExg+QRfGYScvA+wEOPNmJhoBklJKbKKBaIsALmcXAuwRjIoOIyNTcCRSilA9oEjDer8CwABBgB7A65kYQ5iMQAAAABJRU5ErkJggg==',
          ),
          16 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAS9JREFUeNpiYBhowIhDPAGIFaDsA1BMFBAA4vNA/B8NzyfWgAaQBgEBgf8FBQX/ExISkA1JIMYAsO3z58//DwMgg6AGrMemgQmND/a3goICwk8CAsjeIwhAtvw3MDD4v3///v/r16//DzQM5oICYmLBAOoNdPAAiA0vXLgQAHXlA6AlCzC8MHfunA9SUlLYoqwRiD8AcTwQ10NprGGQkJ+f74BuO9BmEG5AShs4A5FBRESYwd/fD853dXXdAKQcoDYrYA0DoOmgOI7/+fOnwpUrlxW+ffvGUF5eAY6Bbdu2fXj16tUHMTExZM0g71wAMViQos+BnZ0dzOHi4mLw8HBn8PLyBkff379/BLCkWAdkAzBAamoqg6SkFMF4Z0GKJnDoGxubMNy6dZPo3AgQYABLpWsS2XBlQAAAAABJRU5ErkJggg==',
          ),
          12 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMRJREFUeNpiYKA1YETjOwBxPBB/AOKNQHwAn2aQ4v9oOACfhvUKCgr/379/D8YgNlBsP7oiFiS2AJgQEGBApvGBBJAzDAwMwBjqpIYLFy44gDCG6rlz5yjIy8u/R3L/fZA4UPF/EIapY0LSoxAeHobsjkZkhSh+AEo0fPv2TR7EVldXZ/j8+TPDvHnz8pEVgtSAghnm6XouLi4wIygokEFZWYXh//9/BmiG16OHEoOsrCwDLy8vg5qaOsPz58+whgxAgAEAKbVJ1fC+wCsAAAAASUVORK5CYII=',
          ),
        ),
      ),
      3 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAqBJREFUeNrkVTFv2lAQvhbEQINkCZYweWiClKqRB36AWRkICxMSSRUGtpaBGfgFVTeCkAr9A6mYyoIdpEQMSGUsdGGpxRYkFlKpad89veca18Y24KpSP+nEe/h89727754B/nc8cemXJSaZ/hsT++g3wRqxe2I/beye+ewdArHPpmS4V5hZPRP8Sn5NTLTwE9mznUhYaeCa9RyyZ2cgSeutr9Xr5ncuiL1n6zaxV+PxGNtSNfmlSCzVnOypaS/z5AR1c3IbYNK6gYzkpQJmAufsd+ZRXDX2DuK1FwJBi3FDvLPNVK3KhnYYS4oj+YZVUd22AoJhxu3AJ0EhvdbFmcvlJIM4L7Yl4BVveVWehcPyNgF2JZAlVZANU+AZugYwUDqdBk3T4MXJSZWU1NWJvk6nOLbCl8mE7uPxuJ3rOSPLMSNT1jaKUE4mk9DtduGbpslMTI748fgorFYrPADdYwwbmHWBQm2vtSCTydDfxWIB6s2N6zKiL5JAlEql7TWA7DkJVVVhOBw6Buj3+7pfPp/f1AJ3IqxUKpBIJOj6U68H7U4H5vP5Hy/OZjMoFovQbDb13ns9vdVFBJFIBFqtFpTLZRiNRjRR4+oKBEGgxluExhGLxah4FUWhFVwulzSOp4+R1QcEBdloNGhwK+CpC4UCHB09h07nAwwGA9pGJICHcCChkilIbSTA0SOtuLu7peuDgwgNnEqlaKsw2XQ6oWQuL4s6WXzmQIISCLop0+npS1LmqH7qw8PfQgsEAjTJw8P3tWQTci+gRpwqsetNCOFwGI6PEyCKIk3GBWwkgVXyjYCVgL2QcEUgGo3RU6Lhep8kXBEIhUI0MBqu91mJvbZgGxK+EbAj4asInUhY3Q1B+AvgJPh647fATxL/JH4JMADfGBtUiYr6NAAAAABJRU5ErkJggg==',
          ),
          32 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAqBJREFUeNrkVTFv2lAQvhbEQINkCZYweWiClKqRB36AWRkICxMSSRUGtpaBGfgFVTeCkAr9A6mYyoIdpEQMSGUsdGGpxRYkFlKpad89veca18Y24KpSP+nEe/h89727754B/nc8cemXJSaZ/hsT++g3wRqxe2I/beye+ewdArHPpmS4V5hZPRP8Sn5NTLTwE9mznUhYaeCa9RyyZ2cgSeutr9Xr5ncuiL1n6zaxV+PxGNtSNfmlSCzVnOypaS/z5AR1c3IbYNK6gYzkpQJmAufsd+ZRXDX2DuK1FwJBi3FDvLPNVK3KhnYYS4oj+YZVUd22AoJhxu3AJ0EhvdbFmcvlJIM4L7Yl4BVveVWehcPyNgF2JZAlVZANU+AZugYwUDqdBk3T4MXJSZWU1NWJvk6nOLbCl8mE7uPxuJ3rOSPLMSNT1jaKUE4mk9DtduGbpslMTI748fgorFYrPADdYwwbmHWBQm2vtSCTydDfxWIB6s2N6zKiL5JAlEql7TWA7DkJVVVhOBw6Buj3+7pfPp/f1AJ3IqxUKpBIJOj6U68H7U4H5vP5Hy/OZjMoFovQbDb13ns9vdVFBJFIBFqtFpTLZRiNRjRR4+oKBEGgxluExhGLxah4FUWhFVwulzSOp4+R1QcEBdloNGhwK+CpC4UCHB09h07nAwwGA9pGJICHcCChkilIbSTA0SOtuLu7peuDgwgNnEqlaKsw2XQ6oWQuL4s6WXzmQIISCLop0+npS1LmqH7qw8PfQgsEAjTJw8P3tWQTci+gRpwqsetNCOFwGI6PEyCKIk3GBWwkgVXyjYCVgL2QcEUgGo3RU6Lhep8kXBEIhUI0MBqu91mJvbZgGxK+EbAj4asInUhY3Q1B+AvgJPh647fATxL/JH4JMADfGBtUiYr6NAAAAABJRU5ErkJggg==',
          ),
          24 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAh5JREFUeNrEVrFqAkEQnUi4NBEWkkJtTKWVcKCgJEXiDwjB0saAkJRpLNXT1uKCtcQ2AYXoD/gDSq403aURi4QIWtglO5ubY9XzziRCBh63dzs7b97bXRHgn0LlaHF8cHxa+LC+Xfy1uC4VRTxbkL/pfy2O3WocTJrD8a2kqrVNwT1pjNL7HNOb62sWCATsCa1a3Vuxr28RXhqGge8Vab6qqqpGLz5pgpKqcnGHMDiuJMWusS/JRwUmx93qQq1SoY01uRrMebJyTwaDwXkikdhI4JNkU3dOgZb0GWMVi5DF43EmWetJQGG6JQeCwTx57vf72TabLCzKZrOs0+mIbiQ7HGM+n+PpUSeTyaaUMG/iYklBqVRSeUfCqul02ncjWCwWKgeMRiPx7uB/nixF2BblcjnxfOp2PWVTTiaT8cxdIgiFQmCaJjw8PmKna8mz2QwajYboHhUXi0XY9piKBbquQ6FQEAXuOBG/MHASDn/v/usrcG9tYrTGstX7JvOFGl007LJer0Ov13NcgIVTqSTc37cgmUwK1W5K1ggoxuMxtNtteH9/g8NDvyiUTqfFczgccJUvohHai1qt5m7RamChs7NTexwMhpbmFOVAWISKSa0Tie83P7lIFovFoNls2vuAJOVy+WcEkUhU4Ojo2HE+Go16krgS4EKEoigbc7xIfmXRNiR0AHZCsEqCoFu+v8t/CkRC450TyIUpvgQYAJlj0DBSj8xuAAAAAElFTkSuQmCC',
          ),
          16 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAbVJREFUeNqkU79rwlAQ/owOIghRu5ilTlpSDIIF66bg7Cw4tIODawexm+IkKEg3B4cu/gNxrmYSNwVBdHNyEwUXI6K9l0YbU8WWHnxJ3t27u+9+BPinWExnnlAghPTzkvBGUC4FsBq+mVOf4NMdJoQ7QlFPpFxj03e5XIvXfH5fLBQYYrr+mbDPZrPFwWCw11E8OHGG7KFEIvFit9uPjCgI07/zPD8YDodP57JyhtpxL4pTg61Gjh3Kxgf8fl5VVd+5ADb2EEWRH41GMDTvy2iz8ePxuG/hOB92O6PplgLHFovFUmNQrVZDTqcTvV6vZs6wXq99dBnxeNyoZn3pMJYaA0EQkE6nUa/XsVZVPEYiYL1grD7abbjdbiSTSVwsgQl1WXs3m00oyvfEJEnCZrNBpVJBLpcDY/pjkfSxsAXCarVCqyXD47lBMBgENRKyLKNcLiMQCKDRaByDUA8UzkyJGdlFSQpqpTkcDqRSKa2EyWSCTCajJTGP8UTC4Qd4vcKJrlQqnQ1i1etnWxe7tqpsErPZDN1uF/P5HNFodGr769/HmBymtt1uj038FQOzUBOnnwIMAE1LodgmQps0AAAAAElFTkSuQmCC',
          ),
          12 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAASpJREFUeNqkULtOhFAQHYkdzW3BLSBZGyqSJaFYEyGhJvoDWNHiH8CGlh+gIiGu227kC+4fiFvQSkmxiVTYiTMEFLNaeZKT+5hz7py5AP+Ajtwj35DPyM1vorNxVUh0tV6Dqqr8YbvN8Rwh67Isn8Y613Wdn4+G+8vlsnUchwo3yFsSIF+rqrI0TWOjjgtTnIvFIp/abqKo55xbsiRB13VsHmnoYJqm/t51yrzQNM3+o+/nV3cY73ro4Ps+ezkclLquv6p5noMgCGAYBszmtIah0dkXRQFJkoAoitC2LUgYhzEGnueBbds/f4kM08Vu9wirlUG/BWmaQpZlEMcxuK77PcMc9JokycM+CAI4Ho8QhuFwJtOJYRJPoNcJZJJl+TTSX6AZqcOnAAMA1TZip6YagNwAAAAASUVORK5CYII=',
          ),
        ),
      ),
      4 => 
      array (
        'logo' => 
        array (
          0 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAadJREFUeNpiYBgFAwwYSdVw4cIFASAVAMT2QKwAxAZALICk5ABImYGBQSEx5rGQaHkBkKpHsxAdOJBiJgsJls8HUgkw/v79+xnOnDnDcPPmTYZnz56BMQzIyMiAQmU/EDtSJQqAlgd8+/Zt/Zs3bxiuXbvGMGnSJBQLKTGfoIKG+voAbm7u+V+/fhUAOoRhw8aNON1ZW1t74cePHwnd3d1Em89EwHJQsK8HWf7hwweGHTt34lP+ITg4+KG6ujpJiZoJj+UNyHF+4uRJBqDvqJ4NmXBYrgBN7XDw4MEDmpQDuEIgAF3gxYsXdHWAPr1KQlwOUEAX4ODgoKsDPmC4SEGBrg44iC5gYW5OVwdswBYCFhYWdMqGjY2gPNeILu7h7s7g4OBAlxAAOQJUEE3AqOrs7RkK8vNBzEITExOKEyf+orixsRBao6FEiYAAuDaeMGfOHAYJCQmKHECwOgY64gC0kQEqIR2g1Szto2CgC6JRB4w6gG6AhRLNwLY/I7CI/o/Eb4Bm2f0jIwRAICE+HsZsBBZasJ4RI60ccAFLZ8MRSW7oAYAAAwDOyH+hpYZdCQAAAABJRU5ErkJggg==',
          ),
          32 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAadJREFUeNpiYBgFAwwYSdVw4cIFASAVAMT2QKwAxAZALICk5ABImYGBQSEx5rGQaHkBkKpHsxAdOJBiJgsJls8HUgkw/v79+xnOnDnDcPPmTYZnz56BMQzIyMiAQmU/EDtSJQqAlgd8+/Zt/Zs3bxiuXbvGMGnSJBQLKTGfoIKG+voAbm7u+V+/fhUAOoRhw8aNON1ZW1t74cePHwnd3d1Em89EwHJQsK8HWf7hwweGHTt34lP+ITg4+KG6ujpJiZoJj+UNyHF+4uRJBqDvqJ4NmXBYrgBN7XDw4MEDmpQDuEIgAF3gxYsXdHWAPr1KQlwOUEAX4ODgoKsDPmC4SEGBrg44iC5gYW5OVwdswBYCFhYWdMqGjY2gPNeILu7h7s7g4OBAlxAAOQJUEE3AqOrs7RkK8vNBzEITExOKEyf+orixsRBao6FEiYAAuDaeMGfOHAYJCQmKHECwOgY64gC0kQEqIR2g1Szto2CgC6JRB4w6gG6AhRLNwLY/I7CI/o/Eb4Bm2f0jIwRAICE+HsZsBBZasJ4RI60ccAFLZ8MRSW7oAYAAAwDOyH+hpYZdCQAAAABJRU5ErkJggg==',
          ),
          24 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAU9JREFUeNrsVTFSg0AU/YYUlBxh5QJsSSepYud4A20InXgCwg20I93ewIIDuKGm2CIWVJIqlGQ4QPzfAWcySgKKhRn/zJu/y7L/7f7/dhfg347YWZeflFIGuhvEFYLVIMsR15xz1TZ33CE4R/eMMLIsgzRNoaqqZpglSXKHPqzJ+lscx69CiJ1lWTvstsHpnaJ5ENDKn2iV0WIBRVHsjXueR6sOoiii7gQhO6cIg7MmLZiiT8H72KjlOxWUCgvldvsjFbURXAwl09Fvn4M2gg/JccsCXdcHJ3hsGoZhwOV0+m2SLwnmYUgn85Zq/L4LzsGbzcC2bWma5jA1QBKB7hxxTxqnnfi+v3Rdd7giI0mJeMDm8s+p6EQJis1GvaxWVHzAa1ohxLE54z4EJZqmaWvHcUBKqWoZrw+9BV0Jmqs4Z4xJBBHkdWB52o/+mwADAPv5cI2zyLn/AAAAAElFTkSuQmCC',
          ),
          16 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAM9JREFUeNpiYBjygBGf5IULFxSAVP2TJ08CXrx4IfD+/fsDpaWlgUCxDwRNbqivV+jv6zuvr6//H8j9z8vLC8ZAtgOyOiY8ZuzfuXOnwcWLF8EcdXV1MEYHTDhsB9mi8OPnT4IuxecCBgF+foIGMGMTPHDw4AMHBwcFCQkJAwZGRoZv37594Ofn5wDJPXv2bCGQekDQBQ2NjYlAytDB3p4hKirqAlleABpygZAXWIhJLN+/f/8A8gbZBvz88eMiJyfnh7Nnzx5E9v8wAQABBgATekffChZMQgAAAABJRU5ErkJggg==',
          ),
          12 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAKNJREFUeNpiYBh0gBFd4MKFCwJv376df+nSpYBnz54xfP782XHGjBkHsOpuqK8XqKmuPs/BwfEfyP1vYmICohuQ1TCh6Sl48uSJwY8fP8AcoAYMQ9E1MAgICOD1A7qGCUANBxLi4xnk5OQeYNPAguKHxsYPQMoR6Jf96urqICEFgk6CgS9fvnz4+PHjA7w2IIeujIzMxefPn08Esh9QFHEAAQYAC3M3CbaUa5QAAAAASUVORK5CYII=',
          ),
        ),
      ),
    ),
  ),
);

?>
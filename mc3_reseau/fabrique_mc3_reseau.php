<?php

/**
 *  Fichier généré par la Fabrique de plugin v5
 *   le 2015-11-03 13:10:29
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
    'nom' => 'MC3 réseau',
    'slogan' => 'des copains pour mc3',
    'description' => '',
    'prefixe' => 'mc3_reseau',
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
      'nom' => 'Personnes',
      'nom_singulier' => 'Personne',
      'genre' => 'feminin',
      'logo_variantes' => 'on',
      'table' => 'spip_personnes',
      'cle_primaire' => 'id_personne',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'personne',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Nom',
          'champ' => 'nom',
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
          'nom' => 'Fonction',
          'champ' => 'fonction',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '5',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Société',
          'champ' => 'societe',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '5',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Pays',
          'champ' => 'pays',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '4',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Email',
          'champ' => 'email',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '3',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'nom',
      'rubriques' => 
      array (
        0 => 'id_rubrique',
        1 => 'vue_rubrique',
        2 => 'statut_rubrique',
      ),
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Personnes',
        'titre_objet' => 'Personne',
        'info_aucun_objet' => 'Aucune personne',
        'info_1_objet' => 'Une personne',
        'info_nb_objets' => '@nb@ personnes',
        'icone_creer_objet' => 'Créer une personne',
        'icone_modifier_objet' => 'Modifier cette personne',
        'titre_logo_objet' => 'Logo de cette personne',
        'titre_langue_objet' => 'Langue de cette personne',
        'texte_definir_comme_traduction_objet' => 'Cette personne est une traduction de la personne numéro :',
        'titre_objets_rubrique' => 'Personnes de la rubrique',
        'info_objets_auteur' => 'Les personnes de cet auteur',
        'retirer_lien_objet' => 'Retirer cette personne',
        'retirer_tous_liens_objets' => 'Retirer toutes les personnes',
        'ajouter_lien_objet' => 'Ajouter cette personne',
        'texte_ajouter_objet' => 'Ajouter une personne',
        'texte_creer_associer_objet' => 'Créer et associer une personne',
        'texte_changer_statut_objet' => 'Cette personne est :',
      ),
      'table_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => 'administrateur_restreint',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    1 => 
    array (
      'nom' => 'Instution',
      'nom_singulier' => 'Institutions',
      'genre' => 'feminin',
      'logo_variantes' => 'on',
      'table' => 'spip_institutions',
      'cle_primaire' => 'id_institution',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'institution',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Nom',
          'champ' => 'nom',
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
          'nom' => 'Description',
          'champ' => 'description',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '5',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'class=inserer_barre_edition',
        ),
        2 => 
        array (
          'nom' => 'Lien',
          'champ' => 'lien',
          'sql' => 'text NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '5',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'nom',
      'rubriques' => 
      array (
        0 => 'id_rubrique',
        1 => 'vue_rubrique',
        2 => 'statut_rubrique',
      ),
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Instution',
        'titre_objet' => 'Institutions',
        'info_aucun_objet' => 'Aucune institutions',
        'info_1_objet' => 'Une institutions',
        'info_nb_objets' => '@nb@ instution',
        'icone_creer_objet' => 'Créer une institutions',
        'icone_modifier_objet' => 'Modifier cette institutions',
        'titre_logo_objet' => 'Logo de cette institutions',
        'titre_langue_objet' => 'Langue de cette institutions',
        'texte_definir_comme_traduction_objet' => 'Cette institutions est une traduction de la institutions numéro :',
        'titre_objets_rubrique' => 'Instution de la rubrique',
        'info_objets_auteur' => 'Les instution de cet auteur',
        'retirer_lien_objet' => 'Retirer cette institutions',
        'retirer_tous_liens_objets' => 'Retirer toutes les instution',
        'ajouter_lien_objet' => 'Ajouter cette institutions',
        'texte_ajouter_objet' => 'Ajouter une institutions',
        'texte_creer_associer_objet' => 'Créer et associer une institutions',
        'texte_changer_statut_objet' => 'Cette institutions est :',
      ),
      'table_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => 'administrateur_restreint',
        'objet_supprimer' => '',
        'associerobjet' => '',
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
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMZJREFUeNpiYBjpgJFC/QZALABlP4BiuoAGIH4PxP/R8H4gdqClxSDfnsdiMTpOoJUD9hNhOQwHUNvyBBIsB+H7A+l7okOBiQQHOJCZS6jmAJqAIeWAA2SYf2FY5YIBLwcGRUlI9bqAicxQ+ABNYB8I1JBUBwU4fI6O30NDiapxv56Mong/tUKDHMth+Dw1Etx/CnEDJUH/ngoOAGEFcnJBAhVTdD45ms5Tyfc4i2ZCreL/tG6F07s6dhhtkIw6YBSgA4AAAwC6AsJBf/0OhgAAAABJRU5ErkJggg==',
          ),
          32 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAMZJREFUeNpiYBjpgJFC/QZALABlP4BiuoAGIH4PxP/R8H4gdqClxSDfnsdiMTpOoJUD9hNhOQwHUNvyBBIsB+H7A+l7okOBiQQHOJCZS6jmAJqAIeWAA2SYf2FY5YIBLwcGRUlI9bqAicxQ+ABNYB8I1JBUBwU4fI6O30NDiapxv56Mong/tUKDHMth+Dw1Etx/CnEDJUH/ngoOAGEFcnJBAhVTdD45ms5Tyfc4i2ZCreL/tG6F07s6dhhtkIw6YBSgA4AAAwC6AsJBf/0OhgAAAABJRU5ErkJggg==',
          ),
          24 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAK5JREFUeNpiYBhJwAGI9wPxfyh+D8TzgViAGoYHIBmMjs9TaokA1LX/8eD5lFiQQMBwGMYKmIiwQIGEOCLLAmLBA3I1GhARPPcpdd16AhYEUGqBAA5L3kMTAVWAAjQ5oidPBWoY3k8giPopMfw8kfmArBzdT6ThZPlEgUTDYViB2IwWQEHBSJQF+mRaoE+sBQoUJGealEUMtC7ssAJGAoUcOTXVByC+MHxaCgABBgDEamnGu1HbhQAAAABJRU5ErkJggg==',
          ),
          16 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAHRJREFUeNpiYBjMQAGI1wPxfyB+D8QNpBpwH6oZGfcTq9kBi2aYS1AAE4muEiDWgAckimMFBVicb0CKFy5AMQwcAOIPxNqegCMQ/0Pl8AIDPJphXlHA54V8ImIiAZ8BCkR40Z7cdIABWHCEPiFwgWo5DiDAAJZlKl6Pe25uAAAAAElFTkSuQmCC',
          ),
          12 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAFpJREFUeNpiYKASMABiByAWIEZxARD/h+L3UM14wXskDSC8HlmSCYsGAVLd349mQwAhGw4isS8A8Qd8piegmQ7DDrg03MehYT9MASOahv94bGfE5QfqAoAAAwDughxRHDpi+gAAAABJRU5ErkJggg==',
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
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQ1JREFUeNpiYBgFAwwYKdCrAMT5QGwAxB+AeCMQL6CXwxOA+D8WfB6IBWhtuQMOy2F4P60dsJ6AA/5Do4UowERmCBACAbR0wIADqkbBgCdCZiLUgLKVBTTfg9gngPghjni+AMSeQPwDqt4ASjNAywqSQQOOvG4AdQCy+H2ouAA0FND1zSe1jGggIq6x4ffUiB4FMi0nBjsQkw0daJyICTpAgV55GpcDDgyGAuc+jdIA0aFrQCBFk4MTSA0FAxx5mlR8n5yEbUBkuU+KIxpIafG8J6LAQa905hPhEIKtJgMSSz0FMkpOvCUiqXG+nsySM4FS36M7glQ9+6lZAZGLB75JNuoAlsFYCdEVAAQYAE9RNtAtukExAAAAAElFTkSuQmCC',
          ),
          32 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQ1JREFUeNpiYBgFAwwYKdCrAMT5QGwAxB+AeCMQL6CXwxOA+D8WfB6IBWhtuQMOy2F4P60dsJ6AA/5Do4UowERmCBACAbR0wIADqkbBgCdCZiLUgLKVBTTfg9gngPghjni+AMSeQPwDqt4ASjNAywqSQQOOvG4AdQCy+H2ouAA0FND1zSe1jGggIq6x4ffUiB4FMi0nBjsQkw0daJyICTpAgV55GpcDDgyGAuc+jdIA0aFrQCBFk4MTSA0FAxx5mlR8n5yEbUBkuU+KIxpIafG8J6LAQa905hPhEIKtJgMSSz0FMkpOvCUiqXG+nsySM4FS36M7glQ9+6lZAZGLB75JNuoAlsFYCdEVAAQYAE9RNtAtukExAAAAAElFTkSuQmCC',
          ),
          24 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAOxJREFUeNpiYBhJwAGI5wPxfiAuAGIBahqeAMT/0fB5alkCMuQ9Fgv+Q31ClaD5jwPvJ6SZiQgLPpApRxI4j8MHDoQ0suAJ9wQoDXJlIBCvB2IDJJcXAvEFpBQFEltAjK8MsETqfagFMP57aJJFVwfiKxCyYD2eSCUGr0c2jBGLBf+pEGeM+FIRpSnjA6FkuoFCCzYQk3P3kxn++9GLD1wZ7SAZQQVS/4BQ+aQATZL/8ZQ9DjgKP+SkakBqjkXWLECCOowMRkw4zydSHUZJ20BhBsNa0jIx0BjQ3AJGtBSkQEWzP0BLW9oCgAADAImMo3UaNYi6AAAAAElFTkSuQmCC',
          ),
          12 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAF1JREFUeNpiYKACCADi91AcQIyG/UD8H4r3o0syYdHwAAcbQ0M/1FQHIP4AFVNAskkAXfN/AtgB3YYPBPz2AV3DBjyKL6Ab2IBmPShI56OJ3ccVlHj9wcRAawAQYACQFyvWD1A4qwAAAABJRU5ErkJggg==',
          ),
          16 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAIZJREFUeNpiYBjWQAGIzwPxfyDeD8QCpBowH6oZhhuwKWLCYwBRNjLh0OgAxAeRxD4A8QGouAI+Aw2A+D2Ss+8j0cjiAbgMaEDzNy68n5gwwAc+4Au4/QRsfw/1KlZQgEVxA1J6+I8vXTjgsHE+HnGyAhA5hsgORFhSZ2BEE1Ag0ZADAAEGADpvSZf0JEPgAAAAAElFTkSuQmCC',
          ),
        ),
      ),
    ),
  ),
);

?>
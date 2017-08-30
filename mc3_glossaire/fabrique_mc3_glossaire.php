<?php

/**
 *  Fichier généré par la Fabrique de plugin v5
 *   le 2015-10-27 14:31:02
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
    'nom' => 'MC3 glossaire',
    'slogan' => 'Abcdefghijklmnopqrstuvwxyz',
    'description' => 'Avec des mots, des définitions et des références',
    'prefixe' => 'mc3_glossaire',
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
      'nom' => 'Mots glossaire',
      'nom_singulier' => 'Mot glossaire',
      'genre' => 'masculin',
      'logo_variantes' => 'on',
      'table' => 'spip_glomots',
      'cle_primaire' => 'id_glomot',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'glomot',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
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
      'champ_titre' => 'titre',
      'langues' => 
      array (
        0 => 'lang',
      ),
      'champ_date' => '',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Mots glossaire',
        'titre_objet' => 'Mot glossaire',
        'info_aucun_objet' => 'Aucun mot glossaire',
        'info_1_objet' => 'Un mot glossaire',
        'info_nb_objets' => '@nb@ mots glossaire',
        'icone_creer_objet' => 'Créer un mot glossaire',
        'icone_modifier_objet' => 'Modifier ce mot glossaire',
        'titre_logo_objet' => 'Logo de ce mot glossaire',
        'titre_langue_objet' => 'Langue de ce mot glossaire',
        'texte_definir_comme_traduction_objet' => 'Ce mot glossaire est une traduction du mot glossaire numéro :',
        'titre_objets_rubrique' => 'Mots glossaire de la rubrique',
        'info_objets_auteur' => 'Les mots glossaire de cet auteur',
        'retirer_lien_objet' => 'Retirer ce mot glossaire',
        'retirer_tous_liens_objets' => 'Retirer tous les mots glossaire',
        'ajouter_lien_objet' => 'Ajouter ce mot glossaire',
        'texte_ajouter_objet' => 'Ajouter un mot glossaire',
        'texte_creer_associer_objet' => 'Créer et associer un mot glossaire',
        'texte_changer_statut_objet' => 'Ce mot glossaire est :',
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
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
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
      'nom' => 'Définitions glossaire',
      'nom_singulier' => 'Définition glossaire',
      'genre' => 'feminin',
      'logo_variantes' => 'on',
      'table' => 'spip_glodefs',
      'cle_primaire' => 'id_glodef',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'glodef',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Définition',
          'champ' => 'definition',
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
      'champ_titre' => 'definition',
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Définitions glossaire',
        'titre_objet' => 'Définition glossaire',
        'info_aucun_objet' => 'Aucune définition glossaire',
        'info_1_objet' => 'Une définition glossaire',
        'info_nb_objets' => '@nb@ définitions glossaire',
        'icone_creer_objet' => 'Créer une définition glossaire',
        'icone_modifier_objet' => 'Modifier cette définition glossaire',
        'titre_logo_objet' => 'Logo de cette définition glossaire',
        'titre_langue_objet' => 'Langue de cette définition glossaire',
        'texte_definir_comme_traduction_objet' => 'Cette définition glossaire est une traduction de la définition glossaire numéro :',
        'titre_objets_rubrique' => 'Définitions glossaire de la rubrique',
        'info_objets_auteur' => 'Les définitions glossaire de cet auteur',
        'retirer_lien_objet' => 'Retirer cette définition glossaire',
        'retirer_tous_liens_objets' => 'Retirer toutes les définitions glossaire',
        'ajouter_lien_objet' => 'Ajouter cette définition glossaire',
        'texte_ajouter_objet' => 'Ajouter une définition glossaire',
        'texte_creer_associer_objet' => 'Créer et associer une définition glossaire',
        'texte_changer_statut_objet' => 'Cette définition glossaire est :',
      ),
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_glomots',
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
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
    2 => 
    array (
      'nom' => 'Références glossaire',
      'nom_singulier' => 'Référence glossaire',
      'genre' => 'feminin',
      'logo_variantes' => 'on',
      'table' => 'spip_glorefs',
      'cle_primaire' => 'id_gloref',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'gloref',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
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
          'nom' => 'Description',
          'champ' => 'description',
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
      'champ_titre' => 'titre',
      'champ_date' => 'date',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Références glossaire',
        'titre_objet' => 'Référence glossaire',
        'info_aucun_objet' => 'Aucune référence glossaire',
        'info_1_objet' => 'Une référence glossaire',
        'info_nb_objets' => '@nb@ références glossaire',
        'icone_creer_objet' => 'Créer une référence glossaire',
        'icone_modifier_objet' => 'Modifier cette référence glossaire',
        'titre_logo_objet' => 'Logo de cette référence glossaire',
        'titre_langue_objet' => 'Langue de cette référence glossaire',
        'texte_definir_comme_traduction_objet' => 'Cette référence glossaire est une traduction de la référence glossaire numéro :',
        'titre_objets_rubrique' => 'Références glossaire de la rubrique',
        'info_objets_auteur' => 'Les références glossaire de cet auteur',
        'retirer_lien_objet' => 'Retirer cette référence glossaire',
        'retirer_tous_liens_objets' => 'Retirer toutes les références glossaire',
        'ajouter_lien_objet' => 'Ajouter cette référence glossaire',
        'texte_ajouter_objet' => 'Ajouter une référence glossaire',
        'texte_creer_associer_objet' => 'Créer et associer une référence glossaire',
        'texte_changer_statut_objet' => 'Cette référence glossaire est :',
      ),
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_glodefs',
      ),
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'autorisations' => 
      array (
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
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
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAe5JREFUeNrsVs1OwkAQXgnh2nqBE0l5AvEJWg4cxZ7wiDyB+gT6BsoT0AQvchHwAahvsLxBE7hwwysXnGlmk3HdLRVJPNhJJm1nZndnvvnZClFQQQX9dzo5ZNFVt+vCo8lE8mU83hyyVzlDhweEmiwCTkg3Z/IWcHxsB26ArzWZA3x3zBSUMnSBQRYeuwZKGfB79D5hck/L/a/JloIee18AuwwRfEpLYQbkINZJDIWZcJu32UzpXbKR5Rzwx5qsZ3AAN32ljblTfXAigoMfqKZcbZ00pYDDvCEHeBqay+XS09Y8GjZHGj6PRtgt9xZ9XNpTaCp6Sc6ktF6vfW0N6loQLc6VvrKt1WrCcRyOJgbSuOh00O4UeGAaRHMGN7bck4pGtSVsvAl8n0eUQs2gR0Rufd8X9XpdiRM4uLGvC1wt/z1yiDsldrudDmeifU8VAlr0e7sgNBTXwVSpVPjnRx4HLrW8yhzDSRgKLHV8u91yJ87yDCJ+wIBmPOeJbWzTHFDzAFtOrFarL+hCOzazbsOQelnRuQEBLMJhtVoVreAbGAm7qFxVA+12W7eb0HDDe2VR/gH8wnLjSZodHhvfql2xM96pg3igoW0OxMSRBeqEdDHjKaEVaU5ha/ah9VDeYFc5t5HFL1lBBf05fQowACtXhvokkfv+AAAAAElFTkSuQmCC',
          ),
          32 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAe5JREFUeNrsVs1OwkAQXgnh2nqBE0l5AvEJWg4cxZ7wiDyB+gT6BsoT0AQvchHwAahvsLxBE7hwwysXnGlmk3HdLRVJPNhJJm1nZndnvvnZClFQQQX9dzo5ZNFVt+vCo8lE8mU83hyyVzlDhweEmiwCTkg3Z/IWcHxsB26ArzWZA3x3zBSUMnSBQRYeuwZKGfB79D5hck/L/a/JloIee18AuwwRfEpLYQbkINZJDIWZcJu32UzpXbKR5Rzwx5qsZ3AAN32ljblTfXAigoMfqKZcbZ00pYDDvCEHeBqay+XS09Y8GjZHGj6PRtgt9xZ9XNpTaCp6Sc6ktF6vfW0N6loQLc6VvrKt1WrCcRyOJgbSuOh00O4UeGAaRHMGN7bck4pGtSVsvAl8n0eUQs2gR0Rufd8X9XpdiRM4uLGvC1wt/z1yiDsldrudDmeifU8VAlr0e7sgNBTXwVSpVPjnRx4HLrW8yhzDSRgKLHV8u91yJ87yDCJ+wIBmPOeJbWzTHFDzAFtOrFarL+hCOzazbsOQelnRuQEBLMJhtVoVreAbGAm7qFxVA+12W7eb0HDDe2VR/gH8wnLjSZodHhvfql2xM96pg3igoW0OxMSRBeqEdDHjKaEVaU5ha/ah9VDeYFc5t5HFL1lBBf05fQowACtXhvokkfv+AAAAAElFTkSuQmCC',
          ),
          24 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAWxJREFUeNpiYBgFwx4wEqswPCzMAUiBMMPKVasaiNXHhEN8PhD/h+LzUDGQ4fVQzECpBQFIbAMgViA3iFiwiIEMFADiC0j8ACxBBrJUARhcB5DFN2/aBNP/wNfP7wG2OOgH4gIgXgDEH6DsA0ADDyIFD0guAcoGqQmMiYkRgOpF9q0hC57gOYhkgcO3b98ucHFxIfuyEYjzQa6VlJRcD3U1CByA6pUH+uACugUKSC7YALUADJ4+fRqgqqoK4wYCg+YB0Fcgw/arqanBDAcFiyO+SEYOa5Cr9sMs+fXrF9zrIMOhNDj8ZWVlYVILCUWyPxLbgYxEw48vmQogGZoIzYQgHIgj04FoUPwwPH78GCaVAExFArhycgI0g4GAIig8keTe62hrC2hrazMgxcsFmIOkpKQeODk5KSClqgvQuERJRQrQFPAAzXBYsjRACmd9qINAhm149uxZIVQ+HxqPDlAzFEZL41EwBABAgAEA8EBjbkSbVEsAAAAASUVORK5CYII=',
          ),
          16 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAANlJREFUeNpiYBgFFANGLGIJQKwAxAfCw8IcgHT9ylWrGHEZwIJFrB9K6wPxRUIuQDcAZKMAEDcCcT7MAKBLQK6yB+KDMTExG4B0AdSChUxoBvgD8QMgBikSuH//vj+Saz4A8fxfv37dh6pbCFWLAkCS54G4AYj/62hr/wfa/h8mmZGe/n/zpk0g7IDNCwbQwFsA5V+AioG8APKWwO/fv5HVHkA3AGZqIdS5IOfNh9L7QYZ/+fLlANTgfqArQN44yIDmAgckvgDQCw5A22GuUEBWjOyNIQ4AAgwA7HNCh3XHMdsAAAAASUVORK5CYII=',
          ),
          12 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAJxJREFUeNpiZiARMNNcAyMavwGIH4SHhSkAafuVq1Y5omtgQmIbAHE8EPcTawPIdH4gDrC3t78gIS4OMuABSCImJuYgyEYgvoBsgz8QC4AYb9+8CQBSH0BOEhUVBYnVA3Ggr59fIUyDAtRJC6EYBARAfvnx44cATM3mTZsEWJDcvwCID4CshVkPMvnz588ToU7LB+KHDIMv4gACDAAmeCeHxEg7QwAAAABJRU5ErkJggg==',
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
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAYlJREFUeNpiYBgFAwwYydUYHhYmAKQMoNwLK1et+kCOOSwkqO1HsnAjyFIg3g/lOwLxAVo6AOTbAjT+BWpEAbEOCIDSH6CWGzx+/FhBVlYWOUocoMwHwOh4AGJs3rTJAcmMC75+fh/IdYA9lF4AxAkgRzx79swfyQHroQ4Dg6rKykZLS8t8ZDFc0cREYggcBOINIMa3798D0NRMAIUQGxsbg7GxcT3U8g9Q8QW4ooyFSMuRfYIttScCg30DMBouAkNlPsgRMF8Dg/0CpWnAHom9HocamKMecHNzwwUJWU5sFMCCGhR/jVCMHgqw7Onw9etXuCAwERZQWhCBDD4PZQfC4h8I5ouJiSU4Ojigh4IAKPgDAgIYkKIBlCMUgNgQW4gwEel7BrQUvBHN4gOwdPLr168D79+/R07xCqMVziggJxcg13zUBAuhpSLBgghkuQMNHHCQ3LqAZmDAHcCCJ64O0sC+A0MmFyTQqAg9QGwogBqb/2mAG0ZzAbG54AKN7HswWvkMOgAQYABnnHdCZqGbLgAAAABJRU5ErkJggg==',
          ),
          32 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAYlJREFUeNpiYBgFAwwYydUYHhYmAKQMoNwLK1et+kCOOSwkqO1HsnAjyFIg3g/lOwLxAVo6AOTbAjT+BWpEAbEOCIDSH6CWGzx+/FhBVlYWOUocoMwHwOh4AGJs3rTJAcmMC75+fh/IdYA9lF4AxAkgRzx79swfyQHroQ4Dg6rKykZLS8t8ZDFc0cREYggcBOINIMa3798D0NRMAIUQGxsbg7GxcT3U8g9Q8QW4ooyFSMuRfYIttScCg30DMBouAkNlPsgRMF8Dg/0CpWnAHom9HocamKMecHNzwwUJWU5sFMCCGhR/jVCMHgqw7Onw9etXuCAwERZQWhCBDD4PZQfC4h8I5ouJiSU4Ojigh4IAKPgDAgIYkKIBlCMUgNgQW4gwEel7BrQUvBHN4gOwdPLr168D79+/R07xCqMVziggJxcg13zUBAuhpSLBgghkuQMNHHCQ3LqAZmDAHcCCJ64O0sC+A0MmFyTQqAg9QGwogBqb/2mAG0ZzAbG54AKN7HswWvkMOgAQYABnnHdCZqGbLgAAAABJRU5ErkJggg==',
          ),
          24 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAASlJREFUeNpiYBjqgJkUxeFhYQ462toCV69efUGsHiYC8v1A/B+KFYB4P1SMgVoWOCCxA8gJIhY8ciAXGwDxAahF9lBxA2BQvQfSAhwcHAdCQkKQHdLo6+fXQKwFMBcvhFoG4wsA8QSQoUZGRjCDNwDxQSC+QIoP/KH0fDTxAytXrSoE+qKBm5vbACpWCHT5A1LiQADqbZCmRiBegCQHCiKQvD6SWAKI2LxpkwKxFsCCAxT+oDAtRLMcFAcBt27d+gAVqwca/h9mETFBBHP5Bij/A9QSAWg4g1wq8PDhwwW2trYMSAZvYBh2gBFL2k+g0MwDUIwz5/6nEDeQUlRQDNBT0Qd83iMSPBjQSDYgtTjGAhYi53wWHEUEJeDggEYyrIigNB8MIwAQYAAAzFRRKzpHOwAAAABJRU5ErkJggg==',
          ),
          16 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAK5JREFUeNpiYBjUIDwsTAGIDfCpYcIhPh+I/9+/f389kO7HZwAjDvH7QCygo60toK2t/QHE1tPTOwDEDkD2AV8/P0d8LgA5WQGIP0D5D4A4UENDA6S5EFkzLgPigfgCSDGUDzIs/v3792C5zZs2NRAyYCHIRiDeAMSOUPbFW7duGULlLlA1ptADsR8aBoRAIS6X7AdFHxHYAZcLQLYLEOGCC0ixRJkLmBiGPAAIMABoUDqkLkcNEgAAAABJRU5ErkJggg==',
          ),
          12 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAHpJREFUeNpiYiARMGERUwBih/CwsAZsGliwiNUDcQKIAdTEYGtr+0BeXl7B18+vAZcNAUD8AcqWl5SUnA+kL+BykgEQPwDiiTDNv379+gC1lTyA7of9eNQuBOIF6Boc8Gg4iM2GRjwaDmAT/I8HN2CzgZGcmMYLAAIMAGy7HITSkl0RAAAAAElFTkSuQmCC',
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
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAb1JREFUeNpiYhhgwDTqgIF2AAu5GsPDwgSAlAGUe2HlqlUfaO2AfiQLN4IsBeL9UL4jEB+gpQNAvi1A4isAcSI9oyAASn+AOkbh8ePHCrKysnAHAqMkAOqwDcDoeLB50yaQOgdoqIFC64Cvn98Hch3gD6UXAHECyMJnz575IzlgPtRh4Kjq6uycAFOHZAbWaCI2FzhA6YMgH4IY375/D0BT0wgKIR4eHgZlZeUCqOUfoOILoKFAVhQEIPnEABrMDF+/fmW4evUqWPDd+/cbgCEyARgND2RkZOazsbHBfQ0M9guUpgF/JHY9jAFywBWoA6DBHQB00EQ9PT24YkKWExsFsOA/AA3OB7hyys1bt+pfvXoFFwAmxAZChjMSkAcF+XkoOxDqiPf4NJibmTEUFhYycHNzo0uBooPkRIic0A4gFUQ4wdVr1x58+fLFEZZYkbLvB2qUG6Do+E8Az6d1/fGegAMSaO2ABDyWn6dXLZqAJSTWo5V8NG8PXEBLZAzEJFJKgQA0mAckERJjOU0d0UCk5TDsQO/s9x9LoqQaMCDR8v+EimxSc4EAmWlmtF9AtUbpBWibbviB0TQAEGAAz2/Aap8iFtUAAAAASUVORK5CYII=',
          ),
          32 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAb1JREFUeNpiYhhgwDTqgIF2AAu5GsPDwgSAlAGUe2HlqlUfaO2AfiQLN4IsBeL9UL4jEB+gpQNAvi1A4isAcSI9oyAASn+AOkbh8ePHCrKysnAHAqMkAOqwDcDoeLB50yaQOgdoqIFC64Cvn98Hch3gD6UXAHECyMJnz575IzlgPtRh4Kjq6uycAFOHZAbWaCI2FzhA6YMgH4IY375/D0BT0wgKIR4eHgZlZeUCqOUfoOILoKFAVhQEIPnEABrMDF+/fmW4evUqWPDd+/cbgCEyARgND2RkZOazsbHBfQ0M9guUpgF/JHY9jAFywBWoA6DBHQB00EQ9PT24YkKWExsFsOA/AA3OB7hyys1bt+pfvXoFFwAmxAZChjMSkAcF+XkoOxDqiPf4NJibmTEUFhYycHNzo0uBooPkRIic0A4gFUQ4wdVr1x58+fLFEZZYkbLvB2qUG6Do+E8Az6d1/fGegAMSaO2ABDyWn6dXLZqAJSTWo5V8NG8PXEBLZAzEJFJKgQA0mAckERJjOU0d0UCk5TDsQO/s9x9LoqQaMCDR8v+EimxSc4EAmWlmtF9AtUbpBWibbviB0TQAEGAAz2/Aap8iFtUAAAAASUVORK5CYII=',
          ),
          24 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAATJJREFUeNpiYBgFBAAjAXkBIDaAsg+Eh4U1gBgrV61qINYCFgLyCUDcD2UHAnE9lE01C+KB+APUJ/4wQaBPAoCUAhBviImJAcnD+At8/fweEGsBLHg2ALED1BAYWA8ihISE6pHUMmDzHRMeC2AGglx0AWTIq9evGUD47r17oODaoKGhIQA1vBGIBYF4AikJAOTK/7iwspLS/DmzZ//fvGkTCBvgMgSfDxyg4e8IpVEA0BcJr169gnHnAy0pAGIHYi1wgHr9AJYwhoNly5cfgKoxgKY2B3LyigGeoCqgVoa8j8Xw99CkSRVggGbJe7Rky0BOJKPnCeQM9AFqqQA1XJ+AJw7OU2qJAr68AMX9lFjQQIQF7ymxYD8RFvzHl5qYqJTKFMgtri8QacGH0bqbbAAQYADgznxS4qTZ6wAAAABJRU5ErkJggg==',
          ),
          16 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAPFJREFUeNpiYBiMwACI9wPx+vCwsAYg/o9PMQsWMQcoZnjx8iWDhLg4A9CQBBA/JiZmA5AKAGIBXz+/CSAxJiwGxAPxAhDj7Zs3AVCxejY2tvm/fv16D2T3Q9VgBQJADHLyfSB+z83N/V9MTAzE78/Oyrq/edOm/0AcgKwB3QUwyQMgw75+/crw6tUrEL/g+IkTClA5f6AhCbgMACkC+XMhutMuX77M8P379wVQS+qJiYn/aPg8qdE5H0nzeyTvMeALA2TwEIg/QNkfKLEdGRcQmxL/48DvifGCAx7DBdDlmXAoIhpgywsHCOh5gMwBCDAAZ11U0uADs0sAAAAASUVORK5CYII=',
          ),
          12 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAKBJREFUeNpiYKA3eA/E68PDwv4DsQM2BYxIbJCC+UCsAFQM4j8QFxd/4OrqKgBkX/D180tE19wPteG/mJgYCO+fNnXq/82bNvUjK2JCYgcA8QEQ49WrVyDscPLkSRA3AVkTsgaQlQuRTVu4aFEjkApEF0cHIH/8hzpPgVAoGcD8AcXzCWm4j6QYhgNweZoBhxMMkDksaJIHsGh4gMwBCDAApM00HmpsEb8AAAAASUVORK5CYII=',
          ),
        ),
      ),
    ),
  ),
);

?>
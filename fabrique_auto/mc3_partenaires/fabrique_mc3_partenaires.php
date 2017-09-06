<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2017-09-06 11:21:38
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

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'mc3_partenaires',
    'nom' => 'mc3_partenaires',
    'slogan' => '',
    'description' => '',
    'logo' => 
    array (
      0 => '',
    ),
    'version' => '1.0.0',
    'auteur' => 'emmanuel.kormann',
    'auteur_lien' => '',
    'licence' => 'GNU/GPL',
    'categorie' => 'divers',
    'etat' => 'stable',
    'compatibilite' => '[3.1.6;3.1.*]',
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
      'nom' => 'Partenaires',
      'nom_singulier' => 'Partenaire',
      'genre' => 'masculin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'logo_variantes' => '',
      'table' => 'spip_partenaires',
      'cle_primaire' => 'id_partenaire',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'partenaire',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'titre',
          'champ' => 'titre',
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
        1 => 
        array (
          'nom' => 'lien',
          'champ' => 'lien',
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
      'champ_titre' => 'titre',
      'champ_date' => '',
      'statut' => '',
      'chaines' => 
      array (
        'titre_objets' => 'Partenaires',
        'titre_objet' => 'Partenaire',
        'info_aucun_objet' => 'Aucun partenaire',
        'info_1_objet' => 'Un partenaire',
        'info_nb_objets' => '@nb@ partenaires',
        'icone_creer_objet' => 'Créer un partenaire',
        'icone_modifier_objet' => 'Modifier ce partenaire',
        'titre_logo_objet' => 'Logo de ce partenaire',
        'titre_langue_objet' => 'Langue de ce partenaire',
        'texte_definir_comme_traduction_objet' => 'Ce partenaire est une traduction du partenaire numéro :',
        'titre_\\objets_lies_objet' => 'Liés à ce partenaire',
        'titre_objets_rubrique' => 'Partenaires de la rubrique',
        'info_objets_auteur' => 'Les partenaires de cet auteur',
        'retirer_lien_objet' => 'Retirer ce partenaire',
        'retirer_tous_liens_objets' => 'Retirer tous les partenaires',
        'ajouter_lien_objet' => 'Ajouter ce partenaire',
        'texte_ajouter_objet' => 'Ajouter un partenaire',
        'texte_creer_associer_objet' => 'Créer et associer un partenaire',
        'texte_changer_statut_objet' => 'Ce partenaire est :',
        'supprimer_objet' => 'Supprimer cet partenaire',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet partenaire ?',
      ),
      'liaison_directe' => '',
      'table_liens' => '',
      'afficher_liens' => '',
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
          'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAA00lEQVRYhWM8c+YMw0ACpgG1fdQBg8EBLJRo3rx5c8KzZ88UpaSk7vv6+i4gxwyKQmDLli3xs2fPrtuyZUs8uWYMeBSMOmDUAaMOwFkQPXv2TOH58+cK+DR/+fJFAEafPXvWAZ9aSUnJB1JSUg/QxRlxVcczZ85snD17dh0+Q0kBqampTenp6fXo4gMeBThDgBiQnp6+/+zZsw7GxsYHZs6c6UiOGQMeAqMOGHXAqAMG3AEUNUqLiooKv3z5IsDDw/OBXDMoKgmpAQY8CkYdMOAOAAAZAz9e90cDDQAAAABJRU5ErkJggg==',
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
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC20lEQVRYhe1Wv0/bQBT+LmRhsGopGehNxwC3psJbpOKIGcOIWBIGJG+oEXMi/wVJuzLEC3NoyJ4wZMPgjpkwA17KYLAlJKTgDiipHYh/pKB26Cd5eM/v3vfZ7927I+fn5/ibyPxV9v8C/gUB2aSBhmHI3W63bBiGbNs2o5Raq6ur5vr6+vfNzU19XgEkbhe4riseHh62DcOQZ8Vwzs1arbbHOTffVIDruqKqqr3hcFiISyQIgnN8fPyJUmqlERDZA5qmtZKQA89iNU1rpSGPFGDbNuv3+9tBH2MMrVYLvV4P7XYbhUJYm2EYclSpXsPMJjw9Pd2bJr+8vIQoihOfLMsolUowzd+l73a75bW1tX5SATP/wMXFxeegXalUQuQAIIoiDg4OQj7btllS8kgBScFYKr7kAqa72bKsV+POzs7eR8DKysqPoK3reqjWAGCaJprNZsiXdhbMnAOu64qKoly5rhsqfKVSAWMMlmXh5OQEjuOE1nU6neU0s2DmLhAEwdnZ2fl2dHRUC/p1XZ+ZbHd3t5l2EMWOYkVRrpJ0tiAITqfTWRYEwQGAbDbrB9/7vt8fjUal6XWxu6Ber+/FxQBAtVr9MiZPg0gBtn3TEMUPdc55ZBJKqTXviRgp4OHhoeB5nry1pUQm2d/f1wCAECKPn6QCEt0HOOfgnGM4HL54F/z6hYWFXlLiMRJPwll/oVqtfk1LOpcAzjmKxWLIJ0kSNjY2ygBwd3e3/erCGIRKkMlktKCdy+WZ53kTW1EUDAaDia2qKgghhaenp4pt39RzuVwUF5vO7/t+a1pAaOjk83lcX1sBO4disYjBYABJkiBJEgDg9vZn+fHxkUWxE0IYISSUfzQa9VKfhory3Auqqk58nufJafOMkVpAPp9Do9GYfP2fYq77QKn0YqK+nwBKKSilb0Y4jVAT+r7fnw5YWvoIALi/vw/GhWIWFxfh+/4LfwI4safhe+MXddwM9xCn9zMAAAAASUVORK5CYII=',
          ),
          32 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC20lEQVRYhe1Wv0/bQBT+LmRhsGopGehNxwC3psJbpOKIGcOIWBIGJG+oEXMi/wVJuzLEC3NoyJ4wZMPgjpkwA17KYLAlJKTgDiipHYh/pKB26Cd5eM/v3vfZ7927I+fn5/ibyPxV9v8C/gUB2aSBhmHI3W63bBiGbNs2o5Raq6ur5vr6+vfNzU19XgEkbhe4riseHh62DcOQZ8Vwzs1arbbHOTffVIDruqKqqr3hcFiISyQIgnN8fPyJUmqlERDZA5qmtZKQA89iNU1rpSGPFGDbNuv3+9tBH2MMrVYLvV4P7XYbhUJYm2EYclSpXsPMJjw9Pd2bJr+8vIQoihOfLMsolUowzd+l73a75bW1tX5SATP/wMXFxeegXalUQuQAIIoiDg4OQj7btllS8kgBScFYKr7kAqa72bKsV+POzs7eR8DKysqPoK3reqjWAGCaJprNZsiXdhbMnAOu64qKoly5rhsqfKVSAWMMlmXh5OQEjuOE1nU6neU0s2DmLhAEwdnZ2fl2dHRUC/p1XZ+ZbHd3t5l2EMWOYkVRrpJ0tiAITqfTWRYEwQGAbDbrB9/7vt8fjUal6XWxu6Ber+/FxQBAtVr9MiZPg0gBtn3TEMUPdc55ZBJKqTXviRgp4OHhoeB5nry1pUQm2d/f1wCAECKPn6QCEt0HOOfgnGM4HL54F/z6hYWFXlLiMRJPwll/oVqtfk1LOpcAzjmKxWLIJ0kSNjY2ygBwd3e3/erCGIRKkMlktKCdy+WZ53kTW1EUDAaDia2qKgghhaenp4pt39RzuVwUF5vO7/t+a1pAaOjk83lcX1sBO4disYjBYABJkiBJEgDg9vZn+fHxkUWxE0IYISSUfzQa9VKfhory3Auqqk58nufJafOMkVpAPp9Do9GYfP2fYq77QKn0YqK+nwBKKSilb0Y4jVAT+r7fnw5YWvoIALi/vw/GhWIWFxfh+/4LfwI4safhe+MXddwM9xCn9zMAAAAASUVORK5CYII=',
          ),
          24 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAACZklEQVRIib2VP2vbQBjGnzuXhhSuiNSLz4tKCsrUqFhDt0ofwIkLHgIN1A3YeG0gq8H+AjadAhnsbxCRL2At6ZSAVk26LPISHBl7ciLcoZUqR3LimKbvdO8fPb/39J5O5OLiAs9p9FnV/wfgxWMFnufJg8FABoBcLic45+KfADzPk5vNZvfy8lKPxwuFgnV4ePhdURR7GQBJG7LjOGq9Xu+Px2Mp7SHGmH98fGwsA0mdQavV6sbFZVmGLMtRfjweS0dHR6dLbCAJcBxHdRxHDf1utwvXdeG6Lk5P/2p6nidbllV6MsCyrM/hWtd1VCqVKFcqleZ8x3E+PBkQN1VVEzFJSh3L8gDOuRuuTdOE7/tRzvd9mKYZ+YyxmycDdF03GWM+AAghYBgGOp0Oer0eDMOAEGKu9jFA4jtgjPl7e3s/Tk5OGgBg2zZsO3kaq9Vqi3MuCCEqgOi9zWYzK16X+h0AwM7Ojut5npyW45yLs7OztwCQyWT6hBA9zN3d3ZF4beqQh8NhpVwui1Ty7+6bi3L3LfWquLkZft3efq9ns1lcX18nui8Wiz1KaQiRHwI8eEwPDr4lYmH3lNIGpbRBCFkdoCgKFEWJfM45dnd3pel0+qBo3DK1Wg1/OmoSQgxCiHF7O/00mUwkAMhmszg//wkAaLfbyOfzH6+uxNbGxputRU2HOgBENANKaSNcM/Yag8FgbheMMWiaBgDSaDRaeAfFdYIg6D/6wwGA/f0vyOX4MqUJWwqgadrKgNQhM8ZQKGjgfDXRuEU7CILAuJ+UJAnr66+wtvYSQRBE8c3Nd3P+IpvNZvYv5qfQw3X4588AAAAASUVORK5CYII=',
          ),
          16 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABnElEQVQ4jaWTsW7iQBCGv7Uvh2QJYelCEVf2G3CBHg4hEeWEfT1S4hQWlOYFDuUJ/Ai4gZqTH8CGGulqV4l0kUsrEt1FwtccFjhGFJlqd3b2m/lnZ8Vms+EjJn3oNvCpzBkEgZ0kiQHQarXCZrMZnQKIQwnb7VYdj8dhHMeNw6DBYOBPp9OHMsCRhMViMYnjuKGqKq7rYtt2XlEQBPZZwHq9NgE8z8PzPGazGa7rArBarayzgCRJdABd13Ofqqq5vLOAfbMmkwlRFLFcLvF9H4B2u/2rDHDUxDiOG8Ph8HcxSNO05/l8/rVWq/0ADOBpt9v57yowDOO13+9HRYDjOI/VavVVCHEvSdJPIcR9qYQ0TR+63W6nmN00zWdJkh4BvQh/N4mXl1+wLDPfj0ajpRDi2//M5QBJkmxZlsN6vX4H0Ov1UBQFTdOwLMtO0/Tu8JIQoiHLcijLcrgfZUMI0alUKgAoisLNTZ/b2+8A6tvb3+ITqkKIDpz4CwCO43B1pZ06zm0PeMqyLAK4vm7y8vKHi4vPZFkGcLQu2j/eN4Fgr9bX4QAAAABJRU5ErkJggg==',
          ),
          12 => 
          array (
            'extension' => 'png',
            'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAABEUlEQVQokZVRoW6DUBQ97wWBIUGTsLylS58doAnPD9P+wAwE2T9ogucnprAbwXeZhgyFRq2SJbhXAlNtgHai19zc3HNyzrmXFEWBe4rehQagTIeyLEWe56+apv16nvfhOM7nkkDOlsqyFFEUHabLJEk2Qoj3m5bSNN0xxtC2Ldq2BWMMaZru/rXUdZ0OALquY9qXdVHwff+taRpYlgXLslBVFWzb/iKECEKIuMogpWRBEHzXda0DgGEYTZZlj4qijADQ9z2ZKUgpme+/XHyEYRifwVcZKKWxqqoPnHNwztF1HVzXnQWmlMbjOB7OhL2qqgCA7XaD1eoJp5N8XhD2wzDMH2eaJjRNw3rNcTz+3LzSH/GpXDNGBRp0AAAAAElFTkSuQmCC',
          ),
        ),
      ),
    ),
  ),
);

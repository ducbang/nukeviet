<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2022 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */


if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$lang_translator['author'] = 'Phạm Chí Quang';
$lang_translator['createdate'] = '21/6/2010, 19:30';
$lang_translator['copyright'] = '@Copyright (C) 2009-2021 VINADES.,JSC. Tous droits réservés';
$lang_translator['info'] = 'Langue française pour NukeViet 4';
$lang_translator['langtype'] = 'lang_module';

$lang_module['categories'] = 'Gestion du rubrique';
$lang_module['topics'] = 'Sujets';
$lang_module['topics1'] = 'Ligne d\'événements';
$lang_module['topics_error_title'] = 'Erreur: Vous ne saisissez pas le titre de l\'événement';
$lang_module['sources'] = 'Source';
$lang_module['save'] = 'Sauver';
$lang_module['send'] = 'Publiez';
$lang_module['action'] = 'Effectuer';
$lang_module['move'] = 'Déplacer';
$lang_module['save_temp'] = 'Sauvegarde temporairement';
$lang_module['publtime'] = 'Publier';
$lang_module['publtime_action'] = 'Publier (ne s\'applique pas aux brouillons et aux messages verrouillés)';
$lang_module['exptime'] = 'Expirer l\'article';
$lang_module['status_action_0'] = 'Passer à l\'attente d\'examiner';
$lang_module['declined'] = 'Refuse l\'article';
$lang_module['re_published'] = 'Publier l\'article';
$lang_module['status'] = 'Etat';
$lang_module['status_0'] = 'Désactivé';
$lang_module['status_1'] = 'Publié';
$lang_module['status_2'] = 'Horaire';
$lang_module['status_3'] = 'Expiré';
$lang_module['status_4'] = 'Sauvegarder temporairement';
$lang_module['status_5'] = 'Passer à l\'examination';
$lang_module['status_6'] = 'Refuser d\'examiner cet article';
$lang_module['status_7'] = 'En cours d\'examiner d\'article';
$lang_module['status_8'] = 'Passer à la mise en ligne de l\'article';
$lang_module['status_9'] = 'Refuse de mettre en ligne de l\'article';
$lang_module['status_10'] = 'En cours d\'examiner avant de mettre en ligne';
$lang_module['status_lockbycat'] = 'Verrouillé par catégories';
$lang_module['errorsave'] = 'Erreur: il est impossible de mettre à jour, vérifiez si le titre ou l\'alias a été utilisé';
$lang_module['errorexists'] = 'Erreur: le titre ou le lien statique est dupliqué, entrez une valeur différente';
$lang_module['saveok'] = 'Mise à jour réussie';
$lang_module['clickgotomodule'] = 'Cliquez ici pour aller à la gestion des articles';
$lang_module['alias'] = 'Alias';
$lang_module['name'] = 'Titre';
$lang_module['no_name'] = 'Aucun titre';
$lang_module['titlesite'] = 'Modification Le titre du site';
$lang_module['error_name'] = 'Erreur: Manque de titre';
$lang_module['weight'] = 'Position';
$lang_module['numsubcat'] = 'Nombre de sous-catégories';
$lang_module['numlinks'] = 'Nombre de liens';
$lang_module['numcomments'] = 'Nombre de commentaire';
$lang_module['numtags'] = 'Nombre de tags';
$lang_module['newday'] = 'Icone des nouvelles (par jour)';
$lang_module['hitstotal'] = 'Nombre de regard';
$lang_module['checkall'] = 'Sélectionner tout';
$lang_module['uncheckall'] = 'Désélectionner tout';
$lang_module['cat_instant_view'] = 'Voir URL du flux RSS article instantanée';
$lang_module['cat_instant_viewsimple'] = 'Voir URL de flux RSS';
$lang_module['cat_instant_title'] = 'Les flux RSS, URL instantanée';
$lang_module['show_hide_pass'] = 'Afficher / Masquer le mot de passe';
$lang_module['gen_rand_pass'] = 'Généré au hasard';
$lang_module['cat_status_0'] = 'Suspension active';
$lang_module['cat_status_1'] = 'Actif, affiché sur la page d\'accueil';
$lang_module['cat_status_2'] = 'Actif, non visible sur la page d\'accueil';
$lang_module['cat_status_0_confirm'] = 'Remarque: La suspension de ce forum arrêtera tous les messages actifs dans le forum et ses sous-catégories. Êtes-vous sûr de ne pas?';
$lang_module['cat_locked_byparent'] = 'Lock par la catégorie père';
$lang_module['description'] = 'Description';
$lang_module['viewdescription'] = 'Faire apparaître le contenu en détail en regardant l\'article';
$lang_module['viewdescription_0'] = 'Cacher';
$lang_module['viewdescription_1'] = 'Apparaître dans la première page du sujet';
$lang_module['viewdescription_2'] = 'Apparaître dans toutes les pages du sujets';
$lang_module['keywords'] = 'Mots clés';
$lang_module['content_list'] = 'Liste des articles';
$lang_module['content_add'] = 'Ajout d\'un article';
$lang_module['add_cat'] = 'Ajouter une catégorie';
$lang_module['add_topic'] = 'Ajouter un sujet';
$lang_module['add_sources'] = 'Ajouter une source';
$lang_module['edit_cat'] = 'Éditer la catégorie';
$lang_module['edit_topic'] = 'Éditer le sujet';
$lang_module['edit_sources'] = 'Éditer la source';
$lang_module['add_block_cat'] = 'Ajouter un groupe de blocks';
$lang_module['edit_block_cat'] = 'Éditer le groupe de blocks';
$lang_module['link'] = 'Lien de la source';
$lang_module['cat_sub'] = 'Catégorie';
$lang_module['cat_sub_sl'] = 'Catégorie principale';
$lang_module['cat_parent'] = 'Catégorie principale';
$lang_module['note_cat_title'] = 'Sans catégorie';
$lang_module['note_cat_content'] = 'Vous avez besoin de la catégorie avant d\'ajouter de nouveaux messages. Le système vous passer à la <strong>Gérer les catégories</strong> dans le moment!';
$lang_module['topic_sl'] = 'Sélectionnez ou tapez le sujet';
$lang_module['delcat_msg_cat'] = 'Cette catégorie a  %s sous-catégories, il faut les supprimer ou les déplacer tout d\'abord';
$lang_module['delcat_msg_rows'] = 'Cette catégorie a %s articles, êtes-vous sûr de vouloir les supprimer ou déplacer vers une autre catégorie';
$lang_module['delcat_msg_rows_select'] = 'Note: Rubrique %s a %s articles.<br />Supprimer Ce Rubrique va supprimer tous les articles à l\'intérieur';
$lang_module['delcat_msg_rows_move'] = 'Ou sélectionnez une catégorie pour les déplacer';
$lang_module['delcat_msg_cat_permissions'] = 'Vous n’êtes pas autorisé à faire cette action';
$lang_module['delcatandrows'] = 'Supprimer la catégorie et les articles';
$lang_module['delcat_msg_rows_noselect'] = 'Sélectionnez une catégorie pour déplacer les articles';
$lang_module['deltopic_msg_rows'] = 'Ce sujet a %s articles, êtes-vous sûr de vouloir le supprimer?.';
$lang_module['setting'] = 'Configuration du module';
$lang_module['setting_indexfile'] = 'Affichage à l\'Accueil';
$lang_module['setting_mobile_indexfile'] = 'Affichage à l\'Accueil dans le thème Mobile';
$lang_module['setting_homesite'] = 'Tailles de photo à l\'Accueil';
$lang_module['setting_thumbblock'] = 'Tailles de photos dans les blocks';
$lang_module['setting_imagefull'] = 'Tailles de photo sous l\'introduction de l\'article';
$lang_module['setting_per_page'] = 'Nombre d\'articles affichés sur une page';
$lang_module['setting_st_links'] = 'Nombre de liens affichés';
$lang_module['setting_idf_df'] = 'Défaut';
$lang_module['setting_copyright'] = 'Texte de droit d\'auteur';
$lang_module['setting_view'] = 'Configuration de l\'apparition';
$lang_module['setting_post'] = 'Configuration de la mise en ligne des articles';
$lang_module['setting_auto_tags'] = 'Créer les mots tags automatiquement pour un article si vous ne donnez pas les mots tags au moment de mettre en ligne les articles';
$lang_module['setting_tags_remind'] = 'Rappeler les mots tags qui n\'ont pas de description';
$lang_module['setting_keywords_tag'] = 'Si vous ne saisissez pas de mots-clés, utilisez des mots-clés comme tags';
$lang_module['setting_alias_lower'] = 'Mettre les alias en minuscule quand on les crée à nouveau';
$lang_module['setting_elasticseach'] = 'Configurer le serveur de recherche en utilisant ElasticSearch';
$lang_module['setting_elas_use'] = 'Utilisez ElasticSearch';
$lang_module['setting_elas_host'] = 'Serveur d\'adresses installé ElasticSearch';
$lang_module['setting_elas_port'] = 'Connectez-vous à des ports de serveur ElasticSearch';
$lang_module['setting_elas_index'] = 'Base de données stockées dans le serveur ElasticSearch';
$lang_module['error_elas_host_connect'] = 'Impossible de se connecter au serveur ElasticSearch!';
$lang_module['use_setup_elasticseach'] = 'Les instructions d\'installation ElasticSearch';
$lang_module['use_dev_elasticseach'] = 'Guide ElasticSearch intégré dans NukeViet';
$lang_module['setting_insart_caption'] = 'Configurer l\'article instantanée';
$lang_module['setting_active_instant_articles'] = 'Activer l\'article instantanée';
$lang_module['setting_instant_articles_template'] = 'L\'article de l\'échantillon est utilisé par défaut si chaque article ne précise pas une forme particulière';
$lang_module['setting_instant_articles_httpauth'] = 'Activer l\'authentification HTTP pour les flux RSS';
$lang_module['setting_instant_articles_username'] = 'Authentification de compte';
$lang_module['setting_instant_articles_password'] = 'L\'authentification par mot de passe';
$lang_module['setting_instant_articles_livetime'] = '(Minutes) pour recréer RSS';
$lang_module['setting_instant_articles_livetime1'] = 'Entrez 0 pour créer un nouveau flux, même lorsque les requêtes dans l\'alimentation. RSS crée automatiquement la requête droit de fournir si le cache (cache) supprimé sans moules d\'attente terme';
$lang_module['setting_instant_articles_gettime'] = 'Limitée dans le temps (minutes) obtenir de nouveaux articles publiés et des articles mis à jour à partir du moment de la création il y a RSS';
$lang_module['setting_instant_articles_gettime1'] = 'Remarque: requête Facebook pour alimenter de nombreuses heures, mais pour vous assurer que les nouvelles mises à jour de poste ou le créateur peut afficher requête standard de délai d\'attente de Facebook devrait sélectionner des valeurs de 60 minutes ou plus vers le haut. A noter également, si vous choisissez cette valeur est inférieure au temps de recréer RSS des articles ne peuvent pas être affichés';
$lang_module['setting_instant_articles_defaulturl'] = 'URL du flux RSS pour déclarer si vous utilisez l\'article instantanée';
$lang_module['setting_instant_articles_defaulturl1'] = 'Remarque: Cette URL est une URL contenant tout l\'article du module. Pour obtenir l\'URL du flux pour chaque catégorie, après activation en utilisant l\'instant de l\'article caractéristique terminée, vous devez entrer dans la catégorie de gestion, cliquez sur le bouton affichant l\'URL du flux RSS, l\'article immédiatement dans chaque catégorie respective.';
$lang_module['setting_instant_articles_auto'] = 'Article par défaut est un article publié immédiatement si cette fonction activée';
$lang_module['setting_sys'] = 'Configurer le système';
$lang_module['setting_identify_cat_change'] = 'Support pour changer les catégories d\'articles';
$lang_module['setting_identify_cat_change_help'] = 'Activer cette fonctionnalité permettra au système de rediriger manuellement l\'ancien article vers une nouvelle adresse lors du changement de catégorie de l\'article, mais les performances diminueront un peu. Si vous ne modifiez pas régulièrement les catégories d\'articles, désactivez cette fonctionnalité.';
$lang_module['setting_active_history'] = 'Activer l\'historique des articles';
$lang_module['setting_active_history_help'] = 'Activez cette option, le système enregistrera l\'historique des modifications chaque fois que vous modifierez l\'article. Vous pouvez restaurer la version précédente si vous le souhaitez';
$lang_module['viewcat_page'] = 'Méthode d\'affichage';
$lang_module['viewcat_page_new'] = 'liste, nouveau en haut';
$lang_module['viewcat_page_old'] = 'liste, ancien en haut';
$lang_module['viewcat_main_left'] = 'par catégorie, autres articles à gauche';
$lang_module['viewcat_main_right'] = 'par catégorie, autres articles à droite';
$lang_module['viewcat_main_bottom'] = 'par catégorie, autres articles en bas';
$lang_module['viewcat_two_column'] = 'par catégorie en 2 colonnes';
$lang_module['viewcat_list_new'] = 'par titre, le plus récent en haut';
$lang_module['viewcat_list_old'] = 'par titre, ancien en haut';
$lang_module['viewcat_grid_new'] = 'par grille, nouveau en haut';
$lang_module['viewcat_grid_old'] = 'par grille, ancien en haut';
$lang_module['viewcat_none'] = 'cacher';
$lang_module['viewcat_detail'] = 'Les groupes peuvent regarder les articles en détails';
$lang_module['search'] = 'Rechercher';
$lang_module['search_type'] = 'Recherche par';
$lang_module['search_status'] = 'État';
$lang_module['search_id'] = 'ID';
$lang_module['search_key'] = 'Mot clé';
$lang_module['search_cat'] = 'Catégorie';
$lang_module['search_cat_all'] = 'Toutes les catégories';
$lang_module['search_title'] = 'Titre';
$lang_module['search_bodytext'] = 'Contenu';
$lang_module['search_author'] = 'Auteur';
$lang_module['search_admin'] = 'Déposé par';
$lang_module['search_per_page'] = 'Délai de parution';
$lang_module['search_public_time'] = 'Publication time';
$lang_module['search_type_date'] = '---Choisissez le type de temps---';
$lang_module['search_note'] = 'Mot clé doit être plus de 2 et moins de 64 caractères, code html interdit';
$lang_module['search_time_from'] = 'Depuis';
$lang_module['search_time_to'] = 'À ce jour';
$lang_module['kind_of_time'] = 'Type d\'heure';
$lang_module['content_edit'] = 'Éditer';
$lang_module['error_title'] = 'Erreur: Manque de titre';
$lang_module['error_bodytext'] = 'Erreur: Manque de contenu';
$lang_module['error_cat'] = 'Erreur: Il faut sélectionner la catégorie';
$lang_module['sources_sl'] = 'Sélectionnez ou tapez';
$lang_module['content_cat'] = 'Catégorie';
$lang_module['content_block'] = 'Articles liés aux blocks';
$lang_module['content_topic'] = 'Sujet';
$lang_module['content_homeimg'] = 'Image';
$lang_module['content_homeimgalt'] = 'Anoter l\'image';
$lang_module['content_hometext'] = 'Introduction';
$lang_module['content_notehome'] = '(Apparaitre avec tous les objets même quand il n\'ont pas de droit)';
$lang_module['content_keyword'] = 'Les keywords pour l\'article';
$lang_module['content_tag'] = 'Les tags pour l\'article';
$lang_module['content_showmore'] = '(extendre)';
$lang_module['content_notetime'] = '(Date/mois/année heure:minute)';
$lang_module['content_publ_date'] = 'Horaire de publication';
$lang_module['order_publtime'] = 'Réorganiser par publication';
$lang_module['content_exp_date'] = 'Date d\'expiration';
$lang_module['content_extra'] = 'Fonction d\'extension';
$lang_module['content_inhome'] = 'Afficher à l\'Accueil';
$lang_module['content_allowed_comm'] = 'Autoriser les commentaires';
$lang_module['content_note_comm'] = 'Fonctionnement Permission de discussion est actuellement géré  sous module Gestion des commentaires';
$lang_module['content_allowed_rating'] = 'Autoriser l\'évaluation';
$lang_module['allowed_rating_point'] = 'Faire apparaitre l\'article sur google si l\'article a le score de';
$lang_module['no_allowed_rating'] = 'Cacher';
$lang_module['content_allowed_send'] = 'Autoriser l\'envoi aux copains';
$lang_module['content_allowed_print'] = 'Autoriser l\'impression';
$lang_module['content_allowed_save'] = 'Autoriser l\'entregistrement';
$lang_module['content_allshow'] = 'Afficher tout';
$lang_module['content_allcollapse'] = 'Masquer tout';
$lang_module['content_bodytext'] = 'Contenu détaillé';
$lang_module['content_bodytext_note'] = '(Afficher uniquement aux personnes autorisées)';
$lang_module['content_admin'] = 'Créateur';
$lang_module['author'] = 'Auteur';
$lang_module['content_author'] = 'Auteur externe';
$lang_module['content_internal_author'] = 'Auteur sous gestion';
$lang_module['content_sourceid'] = 'Source';
$lang_module['content_copyright'] = 'Garder le droit d\'auteur';
$lang_module['content_external_link'] = 'Lien open source (si disponible)';
$lang_module['content_external_link1'] = 'Lien open source';
$lang_module['content_saveok'] = 'Enregistrement de données avec succès';
$lang_module['content_main'] = 'Retour à la gestion';
$lang_module['content_back'] = 'Retour à l\'administration';
$lang_module['redircet_title'] = 'Action réussie';
$lang_module['content_checkcat'] = 'Catégorie de l\'article';
$lang_module['content_checkcatmsg'] = 'Veuillez choisir la catégorie pour l\'article';
$lang_module['content_archive'] = 'Archiver à l\'expiration';
$lang_module['content_tags_empty'] = 'Note:L\'article n\'a aucun mot clé';
$lang_module['content_tags_empty_auto'] = 'Système va créer les mots clés au moment où vous sauvegardez cet article, vous pouvez éteindre le fonctionnement de créer les mots clés dans le rubrique Gestion des modules';
$lang_module['content_advfeature'] = 'Options avancées';
$lang_module['content_description'] = 'Description du site';
$lang_module['content_insart'] = 'instant article';
$lang_module['content_instant_active'] = 'Cet article est instantanée';
$lang_module['content_instant_template'] = 'échantillon';
$lang_module['content_instant_template1'] = 'Modèle d\'article instantané';
$lang_module['content_instant_templatenote'] = 'Blank-à-dire à l\'aide de modèles par défaut';
$lang_module['content_instant_creatauto'] = 'Créer automatiquement l\'article instantané de l\'article souvent';
$lang_module['content_locked_bycat'] = 'Verrouiller par catégories';
$lang_module['showtooltip'] = 'Afficher tooltips';
$lang_module['showtooltip_position'] = 'Position de l\'affichage';
$lang_module['showtooltip_position_top'] = 'Au dessus';
$lang_module['showtooltip_position_bottom'] = 'Au dessous';
$lang_module['showtooltip_position_left'] = 'A gauche';
$lang_module['showtooltip_position_right'] = 'A droite';
$lang_module['showtooltip_length'] = 'Numero';
$lang_module['showhometext'] = 'Afficher l\'introduction lors de la lecture d\'article complet';
$lang_module['htmlhometext'] = 'Utilisez l\'éditeur pour l\'introduction brève';
$lang_module['show_no_image'] = 'Afficher l\'image No-image si l\'article n\'a pas de l\'image d\'illustration';
$lang_module['imgposition'] = 'Position de l\'image';
$lang_module['imgpositiondefault'] = 'Configuration par défaut, La mise en page des images dans l\'article';
$lang_module['imgposition_0'] = 'Masquer';
$lang_module['imgposition_1'] = 'Selon la configuration';
$lang_module['imgposition_2'] = 'Sous l\'introduction';
$lang_module['addtoblock'] = 'Ajouter au block';
$lang_module['delete_from_block'] = 'Supprimer du block';
$lang_module['error_del_content'] = 'Erreur: impossible de supprimer tous les articles, merci de vérifier';
$lang_module['msgnocheck'] = 'Il faut sélectionner au moins un article';
$lang_module['facebookAppID'] = 'Facebook App ID';
$lang_module['facebookAppIDNote'] = '(En forme 1419186468293063,  <a href="http://wiki.nukeviet.vn/nukeviet:admin:news:facebookapi" target="_blank">Regarder en détails</a>)';
$lang_module['socialbutton'] = 'Afficher les boutons de réseaux sociaux lors de la consultation d\'un article';
$lang_module['socialbutton_zalo_note'] = 'Tout d\'abord, vous devez déclarer l\'ID de compte officiel Zalo';
$lang_module['block'] = 'Les groupes de nouvelles';
$lang_module['adddefaultblock'] = 'Par défaut lors d\'ajout d\'article';
$lang_module['source_logo'] = 'Logo de la source';
$lang_module['topic_page'] = 'Articles du même sujet';
$lang_module['topic_del'] = 'Supprimer du sujet';
$lang_module['topic_nocheck'] = 'Sélectionnez au moins 1 article';
$lang_module['topic_delete_confirm'] = 'Êtes-vous sûr de vouloir supprimer le sujet de l\'article ?';
$lang_module['topic_delete_success'] = 'Supression réussie !';
$lang_module['topic_nonews'] = 'Aucun article dans ce sujet !';
$lang_module['addtotopics'] = 'Ajout au sujet';
$lang_module['topic_update_success'] = 'Mise à jour réussie !';
$lang_module['topic_num_news'] = 'articles';
$lang_module['siteinfo_publtime'] = 'Total des articles actifs';
$lang_module['siteinfo_users_send'] = 'Articles envoyés par les utilisateurs';
$lang_module['siteinfo_pending'] = 'Articles suspens';
$lang_module['siteinfo_expired'] = 'Articles expirés';
$lang_module['siteinfo_exptime'] = 'Articles à peine expirés';
$lang_module['siteinfo_comment'] = 'Commentaires publiés';
$lang_module['siteinfo_comment_pending'] = 'Commentaires suspens';
$lang_module['siteinfo_tags_incomplete'] = 'Nombres de tags qui n\'ont pas de description';
$lang_module['group_content'] = 'Configuration de la mise en ligne dans la page de l\'utilisateur';
$lang_module['group_addcontent'] = 'Envoi autorisé';
$lang_module['group_postcontent'] = 'Publier sans censurer';
$lang_module['group_editcontent'] = 'Édition des articles publiés autorisée';
$lang_module['group_delcontent'] = 'Suppression autorisée';
$lang_module['admin'] = 'Décentralisation de la gestion';
$lang_module['admin_permissions'] = 'Pouvoirs';
$lang_module['admin_edit'] = 'Modifier le pouvoir';
$lang_module['admin_edit_user'] = 'Changer les droits d\'utilisateur';
$lang_module['admin_full_module'] = 'Administrateur du module';
$lang_module['admin_module'] = 'Administrateur de module';
$lang_module['admin_module_for_user'] = 'Vous avez tous les pouvoirs du module, hors de la gestion décentralisée';
$lang_module['admin_cat'] = 'Administrateur de Catégorie';
$lang_module['admin_cat_for_user'] = 'Vos pouvoirs aux catégories';
$lang_module['admin_no_user_title'] = 'Aucun module de gestionnaire';
$lang_module['admin_no_user_content'] = 'Fonction du droit pour ce module s\'appliquent uniquement au module opérateur, vous devez ajouter le module d\'exploitation avant la séparation des pouvoirs.';
$lang_module['admin_userid'] = 'Identifiant';
$lang_module['admin_username'] = 'Nom d\'utilisateur';
$lang_module['admin_full_name'] = 'Nom complet';
$lang_module['admin_first_name'] = 'Nom';
$lang_module['admin_last_name'] = 'Prénom';
$lang_module['admin_email'] = 'Email';
$lang_module['firstname_lastname'] = 'Nom et Prénom';
$lang_module['lastname_firstname'] = 'Prénom et Nom';
$lang_module['permissions_admin'] = 'Gestion de Catégories';
$lang_module['permissions_add_content'] = 'Créer l\'article';
$lang_module['permissions_pub_content'] = 'Mise en ligne l\'article';
$lang_module['permissions_app_content'] = 'Examiner les articles';
$lang_module['permissions_edit_content'] = 'Éditer les articles';
$lang_module['permissions_del_content'] = 'Supprimer l\'article';
$lang_module['permissions_pub_error'] = 'Erreur: Vous ne pouvez pas poster les articles dans la catégorie: %1$s';
$lang_module['permissions_sendspadmin_error'] = 'Erreur: Vous n\'avez pas de droit d\'envoyer l\'article au rédacteur en chef dans le rubrique: %1$s';
$lang_module['permissions_pub_show_error'] = 'Erreur: Vous ne pouvez pas afficher les articles dans le Rubrique : %1$s';
$lang_module['error_no_del_content_id'] = 'Erreur: impossible de supprimer l\'article ayant ID:';
$lang_module['structure_image_upload'] = 'Les images envoyées du module est stockés selon la structure de dossier';
$lang_module['config_source'] = 'Méthode d\'afficher la source de l’article';
$lang_module['config_source_title'] = 'Afficher le titre de la source';
$lang_module['config_source_link'] = 'Afficher le lien de la source';
$lang_module['config_source_link_nofollow'] = 'Afficher le lien de la source (rel= "nofollow")';
$lang_module['config_source_logo'] = 'Afficher le logo de la source';
$lang_module['tags'] = 'Gestion des tags';
$lang_module['add_tags'] = 'Ajouter les tags';
$lang_module['edit_tags'] = 'Modifier les tags';
$lang_module['tags_alias'] = 'Enlever les signes du vietnamien, les caractères a-z, 0-9, - dans les alias des tags';
$lang_module['tags_all_link'] = 'Le mode d\'affichage des tags qui n\'ont pas de descriptions est activé; cliquer ici pour regarder tous les tags';
$lang_module['tags_no_description'] = 'Pas de description';
$lang_module['input_title_blocks'] = 'Saisir le titre du bloque de nouvelles';
$lang_module['input_keyword'] = 'Saisir le mot clé';
$lang_module['input_tag'] = 'Saisir le mot tag';
$lang_module['input_pseudonym'] = 'Veuillez saisir un pseudonyme';
$lang_module['alias_empty_notice'] = 'Les alias manquants, le système va créer lui même les alias correspondants';
$lang_module['functional'] = 'Fonctionnement';
$lang_module['featured'] = 'Nouvelle spéciale';
$lang_module['addtocat'] = 'Ajouter les articles spéciales dans les rubriques';
$lang_module['delete_from_cat'] = 'Supprimer les articles des rubriques';
$lang_module['not_featured'] = 'Aucun article';
$lang_module['notification_post_queue'] = 'Modéré <strong>%s</strong> par <strong>%s</strong><br /><em>%s</em>';
$lang_module['ad_block_show'] = 'Affichage du sous-bloc';
$lang_module['ad_block_top'] = 'Catégories du parti blocs';
$lang_module['ad_block_bot'] = 'Catégories de blocs ci-dessous';
$lang_module['fbinsartmgs_100'] = 'Erreur: Les articles avec les balises HTML: <strong />%s  ne sont pas pris en charge par les postes immédiatement. Pour sélectionner cet article comme article s\'il vous plaît les enlever immédiatement, remplacé par le support de carte ou cocher la case convertit automatiquement des articles dans l\'article habituellement instantané. Remarque: lors de la conversion du système laissera automatiquement le composant ne prend pas en charge ou les remplacer par d\'autres ingrédients appropriés';
$lang_module['fbinsartmgs_101'] = 'Erreur: L\'sans contenu';
$lang_module['fbinsartmgs_102'] = 'Erreur: Votre article a des attributs pour les balises. Pour sélectionner cet article comme l\'article les retirer immédiatement de la carte ou cocher la case convertit automatiquement des articles dans l\'article habituellement instantané. Remarque: lors de la conversion du système laissera automatiquement le composant ne prend pas en charge ou les remplacer par d\'autres ingrédients appropriés';
$lang_module['dulicate_edit'] = 'L\'article <b>%s </b> est édité par le compte <b>%s </b> à %s. Vous ne pouvez pas modifier cette publication jusqu\'à ce qu\'elle soit terminée.';
$lang_module['dulicate_edit_admin'] = 'L\'article <b>%s</b> est édité par le compte <b>%s</b> à %s. Voulez-vous <b> Prendre en charge l\'éditeur de la publication </b>?';
$lang_module['dulicate_takeover'] = 'Prendre en charge l\'éditeur de la publication';
$lang_module['dulicate_edit_takeover'] = 'Vous avez été pris en charge par ce compte %s à %s. Vos modifications ne peuvent pas être sauvegardées dans le système, copiez-les à nouveau pour éviter de perdre vos modifications.';
$lang_module['setting_copy_news'] = 'Nouvelles de copie';
$lang_module['title_copy_news'] = 'Copier l\'article';
$lang_module['order_articles'] = 'Trier les articles';
$lang_module['order_articles_0'] = 'Trier par heure de publication';
$lang_module['order_articles_1'] = 'Personnaliser, incrémenter la numérotation';
$lang_module['order_articles_number'] = 'Non arrangements actuels';
$lang_module['order_articles_new'] = 'Non arrangements actuels';
$lang_module['pick_layout'] = 'Choisissez une mise en page pour l\'article';
$lang_module['pick_layout1'] = 'Disposition des messages';
$lang_module['default_layout'] = 'Par défaut';
$lang_module['setting_frontend_post'] = 'Configurer la zone de publication sur la page de l\'utilisateur';
$lang_module['frontend_edit_alias'] = 'Autoriser la liaison statique personnalisée lors de la publication de nouveaux';
$lang_module['frontend_edit_layout'] = 'Vous permet de personnaliser la mise en page';
$lang_module['large_sys_message'] = 'Note: Il y a actuellement des messages <strong />% s  sur le site, après avoir posté plus de messages, ce système deviendra un grand système. Pour assurer la sécurité du serveur, certaines fonctionnalités telles que la suspension, la réactivation des catégories seront verrouillées. Avant de poster, veuillez vérifier les catégories du forum si vous devez réactiver ou supprimer les messages qu\'il contient.';
$lang_module['fileattach'] = 'Pièces jointes';
$lang_module['add'] = 'Ajouter';
$lang_module['status_12'] = 'Sauvegarder l\'article, passer à la rédacteur';
$lang_module['status_13'] = 'Sauvegarder l\'article, passer à la rédacteur en chef';
$lang_module['error_edit'] = 'Les messages sont des modérateurs modérés. Vous ne pouvez pas éditer ensuite.';
$lang_module['not_edit_by_admin'] = 'Vous avez été détourné pour éditer cette publication. Vos modifications ne peuvent pas être sauvegardées dans le système, copiez-les à nouveau pour éviter de perdre vos modifications.';
$lang_module['post_is_editing'] = 'édite cet article';
$lang_module['add_multiple_tags'] = 'Ajouter plus de cartes';
$lang_module['tag'] = 'Tags';
$lang_module['note_tags'] = 'Entrez une balise par ligne, les balises existantes seront ignorées';
$lang_module['author_manage'] = 'Gérer l\'auteur';
$lang_module['add_author'] = 'Ajouter un auteur';
$lang_module['edit_author'] = 'Modifier l\'auteur';
$lang_module['author_pseudonym'] = 'Pseudonyme';
$lang_module['author_image'] = 'Avatar';
$lang_module['author_uid'] = 'Compte d\'utilisateur';
$lang_module['author_select_account'] = 'Sélectionnez un compte utilisateur';
$lang_module['author_description'] = 'Description';
$lang_module['author_pseudonym_empty'] = 'Le pseudonyme ne peut pas être laissé vide';
$lang_module['author_pseudonym_error'] = 'Le pseudonyme est déjà utilisé. Veuillez déclarer un autre pseudonyme';
$lang_module['author_uid_empty'] = 'Veuillez sélectionner un compte utilisateur';
$lang_module['author_uid_error'] = 'Le compte utilisateur est déjà utilisé. Veuillez sélectionner un autre compte';
$lang_module['author_unspecified_error'] = 'Une erreur non spécifiée s\'est produite. Veuillez réessayer plus tard!';
$lang_module['author_add_time'] = 'Heure de début';
$lang_module['author_numnews'] = 'Articles';
$lang_module['author_status'] = 'Statut';
$lang_module['author_status_0'] = 'Désactivée';
$lang_module['author_status_1'] = 'Activée';
$lang_module['history'] = 'Historique des publications';
$lang_module['history_time'] = 'Temps';
$lang_module['history_changefields'] = 'Changement de données';
$lang_module['history_restore'] = 'Restaurer';
$lang_module['history_author'] = 'Créateur d\'histoire';
$lang_module['history_restore_confirm'] = 'Voulez-vous vraiment restaurer cette version ?';
$lang_module['history_recovering'] = 'Le système récupère automatiquement, veuillez patienter';
$lang_module['history_restore_success'] = 'Récupération réussie';
$lang_module['content_voice'] = 'Sélectionnez les fichiers audio pour les voix';
$lang_module['order'] = 'Ordre';
$lang_module['function'] = 'Fonction';
$lang_module['voice'] = 'Voix de lecture';
$lang_module['voice_manager'] = 'Réglage de la voix';
$lang_module['voice_title'] = 'Titre';
$lang_module['voice_description'] = 'La description';
$lang_module['voice_add'] = 'Ajouter une voix';
$lang_module['voice_edit'] = 'Modifier la voix';
$lang_module['voice_error_title'] = 'Erreur: Le titre ne peut pas être laissé vide';
$lang_module['voice_error_exists'] = 'Erreur: Titre en double';

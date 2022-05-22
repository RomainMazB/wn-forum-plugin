<?php

return [
    'topics' => [
        'component_name' => 'Liste de topics',
        'component_description' => 'Affiche la liste de tous les topics.',
        'per_page' => 'Topics par page',
        'per_page_validation' => 'Format invalide de topics par page'
    ],
    'topic' => [
        'page_name' => 'Page Topic',
        'page_help' => 'Nom de la page à utiliser lors du clic sur un sujet.'
    ],
    'posts' => [
        'component_name' => 'Liste de messages',
        'component_description' => 'Affiche la liste de tous les messages.',
        'per_page' => 'Messages par page',
        'per_page_validation' => 'Message par page doit être un nombre'
    ],
    'member' => [
        'page_name' => 'Page Membre',
        'page_help' => 'Nom de la page à utiliser lors du clic sur un membre.'
    ],
    'channel' => [
        'component_name' => 'Canal',
        'component_description' => 'Affiche la liste des topics d\'un canal.',
        'page_name' => 'Page Canal',
        'page_help' => 'Nom de la page à utiliser lors du clic sur un canal.'
    ],
    'channels' => [
        'new_channel' => 'Nouveau Canal',
        'delete_selected_confirm' => 'Êtes-vous sûr?',
        'delete' => 'Supprimer',
        'manage' => 'Gérer l\'ordre des canaux',
        'return' => 'Retour aux Canaux',
        'name' => 'Canaux',
        'create' => 'Créer un Canal',
        'update' => 'Modifier le Canal',
        'preview' => 'Previsualiser le Canal',
        'manage' => 'Gérer les Canaux',
        'creating' => 'Création du Canal...',
        'create' => 'Créer',
        'createnclose' => 'Créer et Fermer',
        'cancel' => 'Annuler',
        'or' => 'ou',
        'returnlist' => 'Retour à la liste des canaux',
        'saving' => 'Enregistrement du Canal...',
        'save' => 'Enregistrer',
        'savenclose' => 'Enregistrer et Fermer',
        'deleting' => 'Suppression du Canal...',
        'really' => 'Êtes vous sûr de vouloir supprimer ce Canal?',
        'list_name' => 'Liste des canaux',
        'list_desc' => 'Affiche la liste de tous les canaux visibles.'
    ],
    'slug' => [
        'name' => 'Nom du paramètre slug',
        'desc' => 'Le paramètre dans l\'URL utilisé pour retrouvé un canal par son slug. Un slug écris en dur peut aussi être utilisé.'
    ],
    'frontend' => [
        'notopic' => 'Il n\'y a aucun topic dans ce canal.'
    ],

    'plugin' => [
        'name' => 'Forum',
        'description' => 'Un forum basique intégrable.'
    ],
    'data' => [
        'title' => 'Titre',
        'desc' => 'Description',
        'slug' => 'Slug',
        'parent' => 'Parent',
        'noparent' => '-- Aucun parent --',
        'moderated' => 'Modéré',
        'is_mod' => 'Seul les modérateurs peuvent discuter dans ce canal.',
        'hidden' => 'Caché',
        'is_hidden' => 'Cacher ce canal dans la liste principale des canaux.',
        'guarded' => 'Protection anti-spam',
        'is_guarded' => 'Les membres doivent être approuvés par les modérateurs avant que leurs messages ne soient diffusés aux visiteurs non-enregistrés.'
    ],
    'settings' => [
        'username' => 'Nom d\'utilisateur',
        'username_comment' => 'The display to represent this user on the forum.',
        'moderator' => 'Modérateur du forum',
        'moderator_comment' => 'Cochez cette case si l\'utilisateur peut modérer le forum entier.',
        'banned' => 'Bannis du forum',
        'banned_comment' => 'Cochez cette case si l\'utilisateur doit être interdit de discuter sur le forum.',
        'forum_username' => 'Nom d\'utilisateur du forum',
        'channels' => 'Canaux du forum',
        'channels_desc' => 'Gérer les canaux disponibles du forum.',
        'channels_filter' => 'Filtre de canal',
        'channels_filter_description' => 'Saisissez un slug de canal ou un paramètre d\'URL à utiliser pour filtrer les topics. Laissez vide pour afficher tous les topics.',
        'rssfeed_title' => 'Flux RSS',
        'rssfeed_description' => 'Génère un flux RSS contenant les topics du forum.',
        'rssfeed_forum' => 'Page Forum',
        'rssfeed_forum_description' => 'Nom de la page principale du forum pour la génération des liens. Cette propriété est utilisée par le partiel par défaut du composant.',
    ],
    'embedch' => [
        'channel_name' => 'Canal intégré',
        'channel_self_desc' => 'Affiche un canal sur n\'importe quel page.',
        'channel_title' => 'Canal Parent',
        'channel_desc' => 'Spécifie le canal parent dans lequel créer le nouveau',
        'embed_title' => 'Paramètre du code d\'intégration',
        'embed_desc' => 'Un code unique pour le canal généré. Un paramètre de routage peut aussi être utilisé.',
        'topic_name' => 'Paramètre du code du topic',
        'topic_desc' => 'Le paramètre de routage d\'URL utilisé pour rechercher le topic par son slug.'
    ],
    'embedtopic' => [
        'topic_name' => 'Topic intégré',
        'topic_self_desc' => 'Affiche un topic sur n\'importe quel page.',
        'target_name' => 'Canal visé',
        'target_desc' => 'Specifie le canal dans lequel créer le nouveau topic ou nouveau canal',
        'embed_title' => 'Code d\'intégration',
        'embed_desc' => 'Un code unique pour la génération du topic ou du canal. Un paramètre de routage peut aussi être utilisé.'
    ],
    'memberpage' => [
        'name' => 'Membre',
        'self_desc' => 'Affiche le formulation d\'information du membre et ses activités.',
        'slug_name' => 'Nom du paramètre slug',
        'slug_desc' => 'Le paramètre dans l\'URL utilisé pour retrouvé un membre par son slug. Un slug écris en dur peut aussi être utilisé.',
        'view_title' => 'Mode de vue',
        'view_desc' => 'Définissez manuellement le mode de vue pour le composant membre.',
        'ch_title' => 'Page Canal',
        'ch_desc' => 'NoPage name to use for clicking on a channel.',
        'topic_title' => 'Topic page',
        'topic_desc' => 'Page name to use for clicking on a conversation topic.'
    ],
    'topicpage' => [
        'name' => 'Topic',
        'self_desc' => 'Affiche un topic et ses messages.',
        'slug_name' => 'Nom du paramètre slug',
        'slug_desc' => 'Le paramètre dans l\'URL utilisé pour retrouvé un topic par son slug. Un slug écris en dur peut aussi être utilisé.',
        'channel_title' => 'Channel Page',
        'channel_desc' => 'Nom de la page à utiliser lors du clic sur un canal.'
    ],
    'components' => [
        'general' => [
            'properties' => [
                'includeStyles' => 'Activer le CSS',
                'includeStyles_desc' => 'Intègre les fichiers CSS par défault pour le forum',
            ],
        ],
    ],
];

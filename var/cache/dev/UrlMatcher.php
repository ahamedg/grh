<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'service', '_controller' => 'App\\Controller\\CloudCompteControllers\\Compte\\CloudCompteController::loading'], null, null, null, false, false, null]],
        '/service/new' => [[['_route' => 'service_new', '_controller' => 'App\\Controller\\CloudCompteControllers\\Compte\\CloudCompteController::ajouter'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'compte', '_controller' => 'App\\Controller\\CloudCompteControllers\\Compte\\CloudFamilleCompteController::loading'], null, null, null, false, false, null]],
        '/compte/new' => [[['_route' => 'compte_new', '_controller' => 'App\\Controller\\CloudCompteControllers\\Compte\\CloudFamilleCompteController::ajouter'], null, null, null, false, false, null]],
        '/compte/edit' => [[['_route' => 'compte_edit', '_controller' => 'App\\Controller\\CloudCompteControllers\\Compte\\CloudFamilleCompteController::modifier'], null, null, null, false, false, null]],
        '/commune' => [[['_route' => 'commune', '_controller' => 'App\\Controller\\CloudCompteControllers\\Localisation\\MapCommuneController::ajouter'], null, null, null, false, false, null]],
        '/pays' => [[['_route' => 'pays', '_controller' => 'App\\Controller\\CloudCompteControllers\\Localisation\\MapPaysController::loading'], null, null, null, false, false, null]],
        '/prefecture' => [[['_route' => 'prefecture', '_controller' => 'App\\Controller\\CloudCompteControllers\\Localisation\\MapPrefectureController::ajouter'], null, null, null, false, false, null]],
        '/states' => [[['_route' => 'states', '_controller' => 'App\\Controller\\CloudCompteControllers\\Localisation\\MapStatesController::loading'], null, null, null, false, false, null]],
        '/ville' => [[['_route' => 'ville', '_controller' => 'App\\Controller\\CloudCompteControllers\\Localisation\\MapVilleController::loading'], null, null, null, false, false, null]],
        '/params_compte/categorie_service' => [[['_route' => 'categorie_service', '_controller' => 'App\\Controller\\CloudCompteControllers\\Params\\CloudCategorieServiceController::ajouter'], null, null, null, false, false, null]],
        '/params_compte/section' => [[['_route' => 'section', '_controller' => 'App\\Controller\\CloudCompteControllers\\Params\\CloudSectionController::ajouter'], null, null, null, false, false, null]],
        '/params_compte/budget' => [[['_route' => 'type_budget', '_controller' => 'App\\Controller\\CloudCompteControllers\\Params\\CloudTypeBudgetController::ajouter'], null, null, null, false, false, null]],
        '/params_compte/type_compte' => [[['_route' => 'type_compte', '_controller' => 'App\\Controller\\CloudCompteControllers\\Params\\CloudTypeCompteController::ajouter'], null, null, null, false, false, null]],
        '/compte/type_compte_edit' => [[['_route' => 'type_compte_edit', '_controller' => 'App\\Controller\\CloudCompteControllers\\Params\\CloudTypeCompteController::editer'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/params_compte/type_service' => [[['_route' => 'type_service', '_controller' => 'App\\Controller\\CloudCompteControllers\\Params\\CloudTypeServiceController::ajouter'], null, null, null, false, false, null]],
        '/cloud/params' => [
            [['_route' => 'cloud_params', '_controller' => 'App\\Controller\\CloudParamsController::index'], null, null, null, false, false, null],
            [['_route' => 'cloud_params_index', '_controller' => 'App\\Controller\\CloudParamsController::index2'], null, null, null, false, false, null],
        ],
        '/' => [[['_route' => 'login', '_controller' => 'App\\Controller\\ConnexionController::login'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/civilite' => [[['_route' => 'civilite', '_controller' => 'App\\Controller\\PersonnelControllers\\Params\\CiviliteController::index'], null, null, null, false, false, null]],
        '/accueil/utilisateur' => [[['_route' => 'utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::loading'], null, null, null, false, false, null]],
        '/accueil/utilisateur/new' => [[['_route' => 'utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::ajouter'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/compte/type_service/(\\d+)(*:195)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [
            [['_route' => 'editcloudtypeservice', '_controller' => 'App\\Controller\\CloudCompteControllers\\Params\\CloudTypeServiceController::moutonEditAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

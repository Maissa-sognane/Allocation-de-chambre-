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
        '/chambre' => [[['_route' => 'chambre', '_controller' => 'App\\Controller\\ChambreController::index'], null, null, null, false, false, null]],
        '/chambre/ajax' => [[['_route' => 'app_chambre_data', '_controller' => 'App\\Controller\\ChambreController::data'], null, null, null, false, false, null]],
        '/chambre/create' => [[['_route' => 'chambre_create', '_controller' => 'App\\Controller\\ChambreController::create'], null, null, null, false, false, null]],
        '/etudiant' => [[['_route' => 'etudiant', '_controller' => 'App\\Controller\\EtudiantController::index'], null, null, null, false, false, null]],
        '/etudiant/create' => [[['_route' => 'etudiant_create', '_controller' => 'App\\Controller\\EtudiantController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
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
                .'|/chambre/(?'
                    .'|([0-9]+)/update(*:196)'
                    .'|([0-9]+)/delete(*:219)'
                    .'|([0-9]+)/delete_chambre(*:250)'
                .')'
                .'|/etudiant/(?'
                    .'|([0-9]+)/update(*:287)'
                    .'|([0-9]+)/delete_message(*:318)'
                    .'|([0-9]+)/delete(*:341)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'chambre_update', '_controller' => 'App\\Controller\\ChambreController::update'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        219 => [[['_route' => 'chambre_delete', '_controller' => 'App\\Controller\\ChambreController::MessageDelete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        250 => [[['_route' => 'chambre_delete_chambre', '_controller' => 'App\\Controller\\ChambreController::delete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        287 => [[['_route' => 'etudiant_update', '_controller' => 'App\\Controller\\EtudiantController::update'], ['id'], null, null, false, false, null]],
        318 => [[['_route' => 'delete_message', '_controller' => 'App\\Controller\\EtudiantController::messageDelete'], ['id'], null, null, false, false, null]],
        341 => [
            [['_route' => 'delete', '_controller' => 'App\\Controller\\EtudiantController::delete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

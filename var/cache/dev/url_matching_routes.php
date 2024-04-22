<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/AddCategorie' => [[['_route' => 'AddCategorie', '_controller' => 'App\\Controller\\CategorieController::AddCategorie'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Categorie' => [[['_route' => 'list_Categorie', '_controller' => 'App\\Controller\\CategorieController::AffichageCategorie'], null, null, null, false, false, null]],
        '/chart' => [[['_route' => 'chart', '_controller' => 'App\\Controller\\ChartController::chart'], null, null, null, false, false, null]],
        '/AddCourFormation' => [[['_route' => 'AddCourFormation', '_controller' => 'App\\Controller\\CoursFormationController::AddCourFormation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/afficheCours' => [[['_route' => 'list_Cours', '_controller' => 'App\\Controller\\CoursFormationController::AffichageCours'], null, null, null, false, false, null]],
        '/afficheCoursFront' => [[['_route' => 'afficheCoursFront', '_controller' => 'App\\Controller\\CoursFormationController::AffichageCoursFront'], null, null, null, false, false, null]],
        '/Front' => [[['_route' => 'Front', '_controller' => 'App\\Controller\\FormationController::index'], null, null, null, false, false, null]],
        '/AddFormation' => [[['_route' => 'AddFormation', '_controller' => 'App\\Controller\\FormationController::AddFormation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Formation' => [[['_route' => 'list_Formation', '_controller' => 'App\\Controller\\FormationController::AffichageFormation'], null, null, null, false, false, null]],
        '/stats' => [[['_route' => 'stats', '_controller' => 'App\\Controller\\FormationController::stats'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index2'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/affiche' => [[['_route' => 'affiche', '_controller' => 'App\\Controller\\HomeController::index1'], null, null, null, false, false, null]],
        '/affiche1' => [[['_route' => 'affiche1', '_controller' => 'App\\Controller\\HomeController::index0'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/chart-data' => [[['_route' => 'chart_data', '_controller' => 'App\\Controller\\ChartController::chartData'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/d(?'
                    .'|elete(?'
                        .'|/([^/]++)(*:29)'
                        .'|c/([^/]++)(*:46)'
                        .'|f/([^/]++)(*:63)'
                    .')'
                    .'|ownload\\-pdf/([^/]++)(*:92)'
                .')'
                .'|/edit(?'
                    .'|/([^/]++)(*:117)'
                    .'|c/([^/]++)(*:135)'
                    .'|f/([^/]++)(*:153)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:193)'
                    .'|wdt/([^/]++)(*:213)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:259)'
                            .'|router(*:273)'
                            .'|exception(?'
                                .'|(*:293)'
                                .'|\\.css(*:306)'
                            .')'
                        .')'
                        .'|(*:316)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['nomCategorie'], null, null, false, true, null]],
        46 => [[['_route' => 'deletec', '_controller' => 'App\\Controller\\CoursFormationController::delete'], ['idcour'], null, null, false, true, null]],
        63 => [[['_route' => 'deletef', '_controller' => 'App\\Controller\\FormationController::delete'], ['idDeFormation'], null, null, false, true, null]],
        92 => [[['_route' => 'download_pdf', '_controller' => 'App\\Controller\\CoursFormationController::downloadPdfAction'], ['idcour'], null, null, false, true, null]],
        117 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\CategorieController::editAuthorAction'], ['nomCategorie'], null, null, false, true, null]],
        135 => [[['_route' => 'editc', '_controller' => 'App\\Controller\\CoursFormationController::editCoursAction'], ['idcour'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        153 => [[['_route' => 'editf', '_controller' => 'App\\Controller\\FormationController::editAuthorAction'], ['idDeFormation'], null, null, false, true, null]],
        193 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        213 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        259 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        273 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        293 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        306 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        316 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

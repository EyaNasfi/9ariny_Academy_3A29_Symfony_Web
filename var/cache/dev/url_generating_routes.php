<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'AddCategorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::AddCategorie'], [], [['text', '/AddCategorie']], [], [], []],
    'list_Categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::AffichageCategorie'], [], [['text', '/Categorie']], [], [], []],
    'delete' => [['nomCategorie'], ['_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'nomCategorie', true], ['text', '/delete']], [], [], []],
    'edit' => [['nomCategorie'], ['_controller' => 'App\\Controller\\CategorieController::editAuthorAction'], [], [['variable', '/', '[^/]++', 'nomCategorie', true], ['text', '/edit']], [], [], []],
    'chart' => [[], ['_controller' => 'App\\Controller\\ChartController::chart'], [], [['text', '/chart']], [], [], []],
    'AddCourFormation' => [[], ['_controller' => 'App\\Controller\\CoursFormationController::AddCourFormation'], [], [['text', '/AddCourFormation']], [], [], []],
    'download_pdf' => [['idcour'], ['_controller' => 'App\\Controller\\CoursFormationController::downloadPdfAction'], [], [['variable', '/', '[^/]++', 'idcour', true], ['text', '/download-pdf']], [], [], []],
    'deletec' => [['idcour'], ['_controller' => 'App\\Controller\\CoursFormationController::delete'], [], [['variable', '/', '[^/]++', 'idcour', true], ['text', '/deletec']], [], [], []],
    'editc' => [['idcour'], ['_controller' => 'App\\Controller\\CoursFormationController::editCoursAction'], [], [['variable', '/', '[^/]++', 'idcour', true], ['text', '/editc']], [], [], []],
    'list_Cours' => [[], ['_controller' => 'App\\Controller\\CoursFormationController::AffichageCours'], [], [['text', '/afficheCours']], [], [], []],
    'afficheCoursFront' => [[], ['_controller' => 'App\\Controller\\CoursFormationController::AffichageCoursFront'], [], [['text', '/afficheCoursFront']], [], [], []],
    'Front' => [[], ['_controller' => 'App\\Controller\\FormationController::index'], [], [['text', '/Front']], [], [], []],
    'AddFormation' => [[], ['_controller' => 'App\\Controller\\FormationController::AddFormation'], [], [['text', '/AddFormation']], [], [], []],
    'list_Formation' => [[], ['_controller' => 'App\\Controller\\FormationController::AffichageFormation'], [], [['text', '/Formation']], [], [], []],
    'deletef' => [['idDeFormation'], ['_controller' => 'App\\Controller\\FormationController::delete'], [], [['variable', '/', '[^/]++', 'idDeFormation', true], ['text', '/deletef']], [], [], []],
    'editf' => [['idDeFormation'], ['_controller' => 'App\\Controller\\FormationController::editAuthorAction'], [], [['variable', '/', '[^/]++', 'idDeFormation', true], ['text', '/editf']], [], [], []],
    'stats' => [[], ['_controller' => 'App\\Controller\\FormationController::stats'], [], [['text', '/stats']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index2'], [], [['text', '/']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/contact']], [], [], []],
    'affiche' => [[], ['_controller' => 'App\\Controller\\HomeController::index1'], [], [['text', '/affiche']], [], [], []],
    'affiche1' => [[], ['_controller' => 'App\\Controller\\HomeController::index0'], [], [['text', '/affiche1']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'chart_data' => [[], ['_controller' => 'App\\Controller\\ChartController::chartData'], [], [['text', '/chart-data']], [], [], []],
];

<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_club' => [[], ['_controller' => 'App\\Controller\\ClubController::ajouter'], [], [['text', '/club']], [], [], []],
    'app_afficherclub' => [[], ['_controller' => 'App\\Controller\\ClubController::affiche'], [], [['text', '/club/afficher']], [], [], []],
    'app_modifierclub' => [['id'], ['_controller' => 'App\\Controller\\ClubController::modifier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/club/modifier']], [], [], []],
    'app_supprimerclub' => [['id'], ['_controller' => 'App\\Controller\\ClubController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/club/supprimer']], [], [], []],
    'app_afficherclubfront' => [[], ['_controller' => 'App\\Controller\\ClubController::affichefront'], [], [['text', '/front/club/afficher']], [], [], []],
    'app_event' => [[], ['_controller' => 'App\\Controller\\EventController::ajouter'], [], [['text', '/event']], [], [], []],
    'app_afficherevent' => [[], ['_controller' => 'App\\Controller\\EventController::affiche'], [], [['text', '/event/afficher']], [], [], []],
    'app_modifierevent' => [['id'], ['_controller' => 'App\\Controller\\EventController::modifier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event/modifier']], [], [], []],
    'app_supprimerevent' => [['id'], ['_controller' => 'App\\Controller\\EventController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event/supprimer']], [], [], []],
    'app_affichereventfront' => [[], ['_controller' => 'App\\Controller\\EventController::afficher'], [], [['text', '/afficherfrontevent']], [], [], []],
    'app_certif' => [[], ['_controller' => 'App\\Controller\\HomeController::certif'], [], [['text', '/certif']], [], [], []],
    'app_certif_pdf' => [[], ['_controller' => 'App\\Controller\\HomeController::certifPdf'], [], [['text', '/certif/pdf']], [], [], []],
    'app_pdf' => [[], ['_controller' => 'App\\Controller\\HomeController::pdf'], [], [['text', '/pdf']], [], [], []],
    'app_note' => [[], ['_controller' => 'App\\Controller\\NoteController::ajouter'], [], [['text', '/note']], [], [], []],
    'app_affichernote' => [['idquiz'], ['_controller' => 'App\\Controller\\NoteController::affiche'], [], [['variable', '/', '[^/]++', 'idquiz', true], ['text', '/affichernote']], [], [], []],
    'app_questions' => [[], ['_controller' => 'App\\Controller\\QuestionsController::ajouter'], [], [['text', '/questions']], [], [], []],
    'app_afficherquestions' => [['idquiz'], ['_controller' => 'App\\Controller\\QuestionsController::affiche'], [], [['variable', '/', '[^/]++', 'idquiz', true], ['text', '/afficherquest']], [], [], []],
    'app_supprimerquestion' => [['id'], ['_controller' => 'App\\Controller\\QuestionsController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/questions/supprimer']], [], [], []],
    'app_modifierquestion' => [['id'], ['_controller' => 'App\\Controller\\QuestionsController::modifier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/questions/modifier']], [], [], []],
    'app_afficherbackquestions' => [[], ['_controller' => 'App\\Controller\\QuestionsController::afficheback'], [], [['text', '/afficherquestback']], [], [], []],
    'app_quiz' => [[], ['_controller' => 'App\\Controller\\QuizController::ajouter'], [], [['text', '/quiz']], [], [], []],
    'app_afficherquiz' => [[], ['_controller' => 'App\\Controller\\QuizController::affiche'], [], [['text', '/quiz/afficher']], [], [], []],
    'app_afficherfront' => [[], ['_controller' => 'App\\Controller\\QuizController::affichefront'], [], [['text', '/quiz/front/afficherquiz']], [], [], []],
    'app_supprimerquiz' => [['id'], ['_controller' => 'App\\Controller\\QuizController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/quiz/supprimer']], [], [], []],
    'app_modifierquiz' => [['id'], ['_controller' => 'App\\Controller\\QuizController::modifier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/quiz/modifier']], [], [], []],
    'app_reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::ajouter'], [], [['text', '/front']], [], [], []],
    'app_afficherreclamationfront' => [[], ['_controller' => 'App\\Controller\\ReclamationController::affiche'], [], [['text', '/afficher']], [], [], []],
    'app_modifierreclamation' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::modifier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/modifier']], [], [], []],
    'app_afficherreclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::afficheback'], [], [['text', '/reclamation/back/afficher']], [], [], []],
    'app_search' => [[], ['_controller' => 'App\\Controller\\ReclamationController::search'], [], [['text', '/search']], [], [], []],
    'app_searchh' => [[], ['_controller' => 'App\\Controller\\ReclamationController::searchh'], [], [['text', '/searchh']], [], [], []],
    'app_afficherreponsetraite' => [[], ['_controller' => 'App\\Controller\\ReclamationController::affichetraite'], [], [['text', '/reclamation/back/affichetraite']], [], [], []],
    'app_supprimerreclamation' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::supprimerback'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/back/supprimer']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_reponse' => [[], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['text', '/reponse']], [], [], []],
    'app_ajouterreponsee' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::ajouter'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse']], [], [], []],
    'app_afficherreponse' => [[], ['_controller' => 'App\\Controller\\ReponseController::affiche'], [], [['text', '/reclamation/back/afficher']], [], [], []],
    'app_supprimerreponse' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse/supprimer']], [], [], []],
    'app_modifierreponse' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::modifier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse/modifier']], [], [], []],
    'app_map' => [[], ['_controller' => 'App\\Controller\\ReponseController::map'], [], [['text', '/map']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ReponseController::contact'], [], [['text', '/contact']], [], [], []],
    'app_team' => [[], ['_controller' => 'App\\Controller\\ReponseController::team'], [], [['text', '/team']], [], [], []],
    'app_about' => [[], ['_controller' => 'App\\Controller\\ReponseController::about'], [], [['text', '/about']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\SecurityController::home'], [], [['text', '/home']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_user' => [[], ['_controller' => 'App\\Controller\\UserController::ajouter'], [], [['text', '/user']], [], [], []],
    'app_afficheruser' => [[], ['_controller' => 'App\\Controller\\UserController::affiche'], [], [['text', '/afficheruser']], [], [], []],
    'app_supprimeruser' => [['id'], ['_controller' => 'App\\Controller\\UserController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/supprimer']], [], [], []],
    'app_modifieruser' => [['id'], ['_controller' => 'App\\Controller\\UserController::modifier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/modifier']], [], [], []],
    'app_inscription' => [[], ['_controller' => 'App\\Controller\\UserController::inscription'], [], [['text', '/inscription']], [], [], []],
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
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::home'], [], [['text', '/']], [], [], []],
];
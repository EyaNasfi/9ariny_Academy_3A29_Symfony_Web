<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/club' => [[['_route' => 'app_club', '_controller' => 'App\\Controller\\ClubController::ajouter'], null, null, null, false, false, null]],
        '/club/afficher' => [[['_route' => 'app_afficherclub', '_controller' => 'App\\Controller\\ClubController::affiche'], null, null, null, false, false, null]],
        '/front/club/afficher' => [[['_route' => 'app_afficherclubfront', '_controller' => 'App\\Controller\\ClubController::affichefront'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event', '_controller' => 'App\\Controller\\EventController::ajouter'], null, null, null, false, false, null]],
        '/event/afficher' => [[['_route' => 'app_afficherevent', '_controller' => 'App\\Controller\\EventController::affiche'], null, null, null, false, false, null]],
        '/afficherfrontevent' => [[['_route' => 'app_affichereventfront', '_controller' => 'App\\Controller\\EventController::afficher'], null, null, null, false, false, null]],
        '/certif' => [[['_route' => 'app_certif', '_controller' => 'App\\Controller\\HomeController::certif'], null, null, null, false, false, null]],
        '/certif/pdf' => [[['_route' => 'app_certif_pdf', '_controller' => 'App\\Controller\\HomeController::certifPdf'], null, null, null, false, false, null]],
        '/pdf' => [[['_route' => 'app_pdf', '_controller' => 'App\\Controller\\HomeController::pdf'], null, null, null, false, false, null]],
        '/note' => [[['_route' => 'app_note', '_controller' => 'App\\Controller\\NoteController::ajouter'], null, null, null, false, false, null]],
        '/questions' => [[['_route' => 'app_questions', '_controller' => 'App\\Controller\\QuestionsController::ajouter'], null, null, null, false, false, null]],
        '/afficherquestback' => [[['_route' => 'app_afficherbackquestions', '_controller' => 'App\\Controller\\QuestionsController::afficheback'], null, null, null, false, false, null]],
        '/quiz' => [[['_route' => 'app_quiz', '_controller' => 'App\\Controller\\QuizController::ajouter'], null, null, null, false, false, null]],
        '/quiz/afficher' => [[['_route' => 'app_afficherquiz', '_controller' => 'App\\Controller\\QuizController::affiche'], null, null, null, false, false, null]],
        '/quiz/front/afficherquiz' => [[['_route' => 'app_afficherfront', '_controller' => 'App\\Controller\\QuizController::affichefront'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\ReclamationController::ajouter'], null, null, null, false, false, null]],
        '/afficher' => [[['_route' => 'app_afficherreclamationfront', '_controller' => 'App\\Controller\\ReclamationController::affiche'], null, null, null, false, false, null]],
        '/reclamation/back/afficher' => [
            [['_route' => 'app_afficherreclamation', '_controller' => 'App\\Controller\\ReclamationController::afficheback'], null, null, null, false, false, null],
            [['_route' => 'app_afficherreponse', '_controller' => 'App\\Controller\\ReponseController::affiche'], null, null, null, false, false, null],
        ],
        '/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\ReclamationController::search'], null, null, null, false, false, null]],
        '/searchh' => [[['_route' => 'app_searchh', '_controller' => 'App\\Controller\\ReclamationController::searchh'], null, null, null, false, false, null]],
        '/reclamation/back/affichetraite' => [[['_route' => 'app_afficherreponsetraite', '_controller' => 'App\\Controller\\ReclamationController::affichetraite'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse', '_controller' => 'App\\Controller\\ReponseController::index'], null, null, null, false, false, null]],
        '/map' => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\ReponseController::map'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ReponseController::contact'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'app_team', '_controller' => 'App\\Controller\\ReponseController::team'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\ReponseController::about'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\SecurityController::home'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::ajouter'], null, null, null, false, false, null]],
        '/afficheruser' => [[['_route' => 'app_afficheruser', '_controller' => 'App\\Controller\\UserController::affiche'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\UserController::inscription'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/club/(?'
                    .'|modifier/([^/]++)(*:33)'
                    .'|supprimer/([^/]++)(*:58)'
                .')'
                .'|/event/(?'
                    .'|modifier/([^/]++)(*:93)'
                    .'|supprimer/([^/]++)(*:118)'
                .')'
                .'|/afficher(?'
                    .'|note/([^/]++)(*:152)'
                    .'|quest/([^/]++)(*:174)'
                .')'
                .'|/qu(?'
                    .'|estions/(?'
                        .'|supprimer/([^/]++)(*:218)'
                        .'|modifier/([^/]++)(*:243)'
                    .')'
                    .'|iz/(?'
                        .'|supprimer/([^/]++)(*:276)'
                        .'|modifier/([^/]++)(*:301)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|modifier/([^/]++)(*:347)'
                        .'|back/supprimer/([^/]++)(*:378)'
                    .')'
                    .'|ponse/(?'
                        .'|([^/]++)(*:404)'
                        .'|supprimer/([^/]++)(*:430)'
                        .'|modifier/([^/]++)(*:455)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|supprimer/([^/]++)(*:492)'
                    .'|modifier/([^/]++)(*:517)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:557)'
                    .'|wdt/([^/]++)(*:577)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:623)'
                            .'|router(*:637)'
                            .'|exception(?'
                                .'|(*:657)'
                                .'|\\.css(*:670)'
                            .')'
                        .')'
                        .'|(*:680)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'app_modifierclub', '_controller' => 'App\\Controller\\ClubController::modifier'], ['id'], null, null, false, true, null]],
        58 => [[['_route' => 'app_supprimerclub', '_controller' => 'App\\Controller\\ClubController::supprimer'], ['id'], null, null, false, true, null]],
        93 => [[['_route' => 'app_modifierevent', '_controller' => 'App\\Controller\\EventController::modifier'], ['id'], null, null, false, true, null]],
        118 => [[['_route' => 'app_supprimerevent', '_controller' => 'App\\Controller\\EventController::supprimer'], ['id'], null, null, false, true, null]],
        152 => [[['_route' => 'app_affichernote', '_controller' => 'App\\Controller\\NoteController::affiche'], ['idquiz'], null, null, false, true, null]],
        174 => [[['_route' => 'app_afficherquestions', '_controller' => 'App\\Controller\\QuestionsController::affiche'], ['idquiz'], null, null, false, true, null]],
        218 => [[['_route' => 'app_supprimerquestion', '_controller' => 'App\\Controller\\QuestionsController::supprimer'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'app_modifierquestion', '_controller' => 'App\\Controller\\QuestionsController::modifier'], ['id'], null, null, false, true, null]],
        276 => [[['_route' => 'app_supprimerquiz', '_controller' => 'App\\Controller\\QuizController::supprimer'], ['id'], null, null, false, true, null]],
        301 => [[['_route' => 'app_modifierquiz', '_controller' => 'App\\Controller\\QuizController::modifier'], ['id'], null, null, false, true, null]],
        347 => [[['_route' => 'app_modifierreclamation', '_controller' => 'App\\Controller\\ReclamationController::modifier'], ['id'], null, null, false, true, null]],
        378 => [[['_route' => 'app_supprimerreclamation', '_controller' => 'App\\Controller\\ReclamationController::supprimerback'], ['id'], null, null, false, true, null]],
        404 => [[['_route' => 'app_ajouterreponsee', '_controller' => 'App\\Controller\\ReponseController::ajouter'], ['id'], null, null, false, true, null]],
        430 => [[['_route' => 'app_supprimerreponse', '_controller' => 'App\\Controller\\ReponseController::supprimer'], ['id'], null, null, false, true, null]],
        455 => [[['_route' => 'app_modifierreponse', '_controller' => 'App\\Controller\\ReponseController::modifier'], ['id'], null, null, false, true, null]],
        492 => [[['_route' => 'app_supprimeruser', '_controller' => 'App\\Controller\\UserController::supprimer'], ['id'], null, null, false, true, null]],
        517 => [[['_route' => 'app_modifieruser', '_controller' => 'App\\Controller\\UserController::modifier'], ['id'], null, null, false, true, null]],
        557 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        577 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        623 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        637 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        657 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        670 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        680 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

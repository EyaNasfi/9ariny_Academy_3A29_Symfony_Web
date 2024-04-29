<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\Home::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_index_admin', '_controller' => 'App\\Controller\\Home::indexAdmin'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/user/admin/adduser' => [[['_route' => 'app_add_user_admin', '_controller' => 'App\\Controller\\UserController::AddUserAdmin'], null, null, null, false, false, null]],
        '/user/MonProfile' => [[['_route' => 'app_myprofile', '_controller' => 'App\\Controller\\UserController::Myprofile'], null, null, null, false, false, null]],
        '/user/modifier-profil' => [[['_route' => 'app_edit_profile', '_controller' => 'App\\Controller\\UserController::editProfile'], null, null, null, false, false, null]],
        '/user/EditProfilePassword' => [[['_route' => 'app_edit_profile_password', '_controller' => 'App\\Controller\\UserController::EditProfilePassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/reset-password/submitted' => [[['_route' => 'app_reset_password_submited', '_controller' => 'App\\Controller\\UserController::resetPasswordSubmitted'], null, null, null, false, false, null]],
        '/user/reset-password' => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\UserController::resetPassword'], null, null, null, false, false, null]],
        '/user/resetPassword/profil' => [[['_route' => 'reset_password_profil', '_controller' => 'App\\Controller\\UserController::resetPasswordProfile'], null, null, null, false, false, null]],
        '/user/admin/resetPassword/profil' => [[['_route' => 'reset_password_profil_admin', '_controller' => 'App\\Controller\\UserController::resetPasswordProfileAdmin'], null, null, null, false, false, null]],
        '/user/admin' => [[['_route' => 'app_users_index_admin', '_controller' => 'App\\Controller\\UserController::showUsersAdmin'], null, null, null, false, false, null]],
        '/user/admin/MonProfile' => [[['_route' => 'app_myprofile_admin', '_controller' => 'App\\Controller\\UserController::MyprofileAdmin'], null, null, null, false, false, null]],
        '/user/admin/modifier-profil' => [[['_route' => 'app_edit_profile_admin', '_controller' => 'App\\Controller\\UserController::editProfileAdmin'], null, null, null, false, false, null]],
        '/user/r/search_user' => [[['_route' => 'search_user', '_controller' => 'App\\Controller\\UserController::searchUser'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/user/(?'
                    .'|verify\\-reset\\-code/([^/]++)(*:44)'
                    .'|admin/([^/]++)/edit(*:70)'
                    .'|([^/]++)/user(*:90)'
                    .'|profile/([^/]++)(*:113)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:150)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:189)'
                    .'|wdt/([^/]++)(*:209)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:255)'
                            .'|router(*:269)'
                            .'|exception(?'
                                .'|(*:289)'
                                .'|\\.css(*:302)'
                            .')'
                        .')'
                        .'|(*:312)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        44 => [[['_route' => 'verify_reset_code', '_controller' => 'App\\Controller\\UserController::verifyResetCode'], ['resetCode'], null, null, false, true, null]],
        70 => [[['_route' => 'app_user_edit_etat', '_controller' => 'App\\Controller\\UserController::editEtat'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        90 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, false, null]],
        113 => [[['_route' => 'app_show_profile', '_controller' => 'App\\Controller\\UserController::showProfile'], ['id'], ['GET' => 0], null, false, true, null]],
        150 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        189 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        209 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        255 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        269 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        289 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        302 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        312 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

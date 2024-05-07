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
        '/statistiques1' => [[['_route' => 'chart_statistiquesparcategorie', '_controller' => 'ChartController::statistiquesParCategorie'], null, null, null, false, false, null]],
        '/webhook' => [[['_route' => 'webhook', '_controller' => 'App\\Controller\\ChatbotController::index2'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/club' => [[['_route' => 'app_club', '_controller' => 'App\\Controller\\ClubController::ajouter'], null, null, null, false, false, null]],
        '/club/afficher' => [[['_route' => 'app_afficherclub', '_controller' => 'App\\Controller\\ClubController::affiche'], null, null, null, false, false, null]],
        '/front/club/afficher' => [[['_route' => 'app_afficherclubfront', '_controller' => 'App\\Controller\\ClubController::affichefront'], null, null, null, false, false, null]],
        '/AddCourFormation' => [[['_route' => 'AddCourFormation', '_controller' => 'App\\Controller\\CoursFormationController::AddCourFormation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/afficheCours' => [[['_route' => 'list_Cours', '_controller' => 'App\\Controller\\CoursFormationController::AffichageCours'], null, null, null, false, false, null]],
        '/afficheCoursFront' => [[['_route' => 'afficheCoursFront', '_controller' => 'App\\Controller\\CoursFormationController::AffichageCoursFront'], null, null, null, false, false, null]],
        '/Youtube' => [[['_route' => 'Youtube', '_controller' => 'App\\Controller\\CoursFormationController::youtubeapi'], null, null, null, false, false, null]],
        '/admin/equipement/export-excel' => [[['_route' => 'app_equipement_export_excel', '_controller' => 'App\\Controller\\EquipementController::exportExcel'], null, ['GET' => 0], null, false, false, null]],
        '/admin/equipement' => [[['_route' => 'app_equipement_index', '_controller' => 'App\\Controller\\EquipementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/equipement/new' => [[['_route' => 'app_equipement_new', '_controller' => 'App\\Controller\\EquipementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event' => [[['_route' => 'app_event', '_controller' => 'App\\Controller\\EventController::ajouter'], null, null, null, false, false, null]],
        '/eventaff' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, false, false, null]],
        '/event/afficher' => [[['_route' => 'app_afficherevent', '_controller' => 'App\\Controller\\EventController::affiche'], null, null, null, false, false, null]],
        '/afficherfrontevent' => [[['_route' => 'app_affichereventfront', '_controller' => 'App\\Controller\\EventController::afficher'], null, null, null, false, false, null]],
        '/insert-feedback' => [[['_route' => 'insert_feedback', '_controller' => 'App\\Controller\\FeedbackController::insertFeedback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/feedback' => [[['_route' => 'feedback', '_controller' => 'App\\Controller\\FeedbackController::index2'], null, null, null, false, false, null]],
        '/feedbacks' => [[['_route' => 'feedbacks', '_controller' => 'App\\Controller\\FeedbackController::feedbackList'], null, null, null, false, false, null]],
        '/Fronttt' => [[['_route' => 'Front', '_controller' => 'App\\Controller\\FormationController::index'], null, null, null, false, false, null]],
        '/AddFormation' => [[['_route' => 'AddFormation', '_controller' => 'App\\Controller\\FormationController::AddFormation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Formation' => [[['_route' => 'list_Formation', '_controller' => 'App\\Controller\\FormationController::AffichageFormation'], null, null, null, false, false, null]],
        '/searchByNomFormation' => [[['_route' => 'searchByNomFormation', '_controller' => 'App\\Controller\\FormationController::searchByNomFormation'], null, null, null, false, false, null]],
        '/statistiques' => [[['_route' => 'statistiques', '_controller' => 'App\\Controller\\FormationController::statistiques'], null, null, null, false, false, null]],
        '/Frontt' => [[['_route' => 'Frontt', '_controller' => 'App\\Controller\\FormationController::indexx'], null, null, null, false, false, null]],
        '/salle' => [[['_route' => 'app_salle_indexf', '_controller' => 'App\\Controller\\FrontController::index'], null, ['GET' => 0], null, true, false, null]],
        '/' => [
            [['_route' => 'app_index', '_controller' => 'App\\Controller\\Home::index'], null, null, null, false, false, null],
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null],
        ],
        '/admin' => [[['_route' => 'app_index_admin', '_controller' => 'App\\Controller\\Home::indexAdmin'], null, null, null, false, false, null]],
        '/certif' => [[['_route' => 'app_certif', '_controller' => 'App\\Controller\\HomeController::certif'], null, null, null, false, false, null]],
        '/certif/pdf' => [[['_route' => 'app_certif_pdf', '_controller' => 'App\\Controller\\HomeController::certifPdf'], null, null, null, false, false, null]],
        '/pdf' => [[['_route' => 'app_pdf', '_controller' => 'App\\Controller\\HomeController::pdf'], null, null, null, false, false, null]],
        '/backhome' => [[['_route' => 'app_backhome', '_controller' => 'App\\Controller\\HomeController::backhome'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\InscriptionController::inscription'], null, null, null, false, false, null]],
        '/send-mail' => [[['_route' => 'send_mail', '_controller' => 'App\\Controller\\MailController::sendMail'], null, null, null, false, false, null]],
        '/note' => [[['_route' => 'app_note', '_controller' => 'App\\Controller\\NoteController::ajouter'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\PaymentController::checkout'], null, null, null, false, false, null]],
        '/success-url' => [[['_route' => 'success_url', '_controller' => 'App\\Controller\\PaymentController::successUrl'], null, null, null, false, false, null]],
        '/cancel-url' => [[['_route' => 'cancel_url', '_controller' => 'App\\Controller\\PaymentController::cancelUrl'], null, null, null, false, false, null]],
        '/questions' => [[['_route' => 'app_questions', '_controller' => 'App\\Controller\\QuestionsController::ajouter'], null, null, null, false, false, null]],
        '/afficherquestback' => [[['_route' => 'app_afficherbackquestions', '_controller' => 'App\\Controller\\QuestionsController::afficheback'], null, null, null, false, false, null]],
        '/quiz' => [[['_route' => 'app_quiz', '_controller' => 'App\\Controller\\QuizController::ajouter'], null, null, null, false, false, null]],
        '/quiz/afficher' => [[['_route' => 'app_afficherquiz', '_controller' => 'App\\Controller\\QuizController::affiche'], null, null, null, false, false, null]],
        '/quiz/front/afficherquiz' => [[['_route' => 'app_afficherfront', '_controller' => 'App\\Controller\\QuizController::affichefront'], null, null, null, false, false, null]],
        '/rate' => [[['_route' => 'rate_formation', '_controller' => 'App\\Controller\\RatingController::addRating'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [[['_route' => 'app_reclamation', '_controller' => 'App\\Controller\\ReclamationController::ajouter'], null, null, null, false, false, null]],
        '/afficher' => [[['_route' => 'app_afficherreclamationfront', '_controller' => 'App\\Controller\\ReclamationController::affiche'], null, null, null, false, false, null]],
        '/app' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/reclamation/back/afficher' => [
            [['_route' => 'app_afficherreclamation', '_controller' => 'App\\Controller\\ReclamationController::afficheback'], null, null, null, false, false, null],
            [['_route' => 'app_afficherreponse', '_controller' => 'App\\Controller\\ReponseController::affiche'], null, null, null, false, false, null],
        ],
        '/search' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\ReclamationController::search'], null, null, null, false, false, null]],
        '/searchh' => [[['_route' => 'app_searchh', '_controller' => 'App\\Controller\\ReclamationController::searchh'], null, null, null, false, false, null]],
        '/reclamation/back/affichetraite' => [[['_route' => 'app_afficherreponsetraite', '_controller' => 'App\\Controller\\ReclamationController::affichetraite'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'forgot_password', '_controller' => 'App\\Controller\\ReclamationController::forgotPassword'], null, null, null, false, false, null]],
        '/remise' => [[['_route' => 'app_remise_index', '_controller' => 'App\\Controller\\RemiseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/remise/remise/new' => [[['_route' => 'remise_new', '_controller' => 'App\\Controller\\RemiseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse', '_controller' => 'App\\Controller\\ReponseController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\ReponseController::home'], null, null, null, false, false, null]],
        '/map' => [[['_route' => 'app_map', '_controller' => 'App\\Controller\\ReponseController::map'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ReponseController::contact'], null, null, null, false, false, null]],
        '/team' => [[['_route' => 'app_team', '_controller' => 'App\\Controller\\ReponseController::team'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\ReponseController::about'], null, null, null, false, false, null]],
        '/admin/salle/front' => [[['_route' => 'app_salle_front', '_controller' => 'App\\Controller\\SalleController::front'], null, ['GET' => 0], null, false, false, null]],
        '/admin/salle' => [[['_route' => 'app_salle_index', '_controller' => 'App\\Controller\\SalleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/salle/new' => [[['_route' => 'app_salle_new', '_controller' => 'App\\Controller\\SalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
        ],
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
                .'|/d(?'
                    .'|elete(?'
                        .'|(?:/([^/]++))?(*:34)'
                        .'|c/([^/]++)(*:51)'
                        .'|f/([^/]++)(*:68)'
                    .')'
                    .'|ownload\\-pdf/([^/]++)(*:97)'
                .')'
                .'|/e(?'
                    .'|dit(?'
                        .'|(?:/([^/]++))?(*:130)'
                        .'|c/([^/]++)(*:148)'
                        .'|f/([^/]++)(*:166)'
                    .')'
                    .'|vent/(?'
                        .'|modifier/([^/]++)(*:200)'
                        .'|supprimer/([^/]++)(*:226)'
                    .')'
                .')'
                .'|/club/(?'
                    .'|modifier/([^/]++)(*:262)'
                    .'|supprimer/([^/]++)(*:288)'
                .')'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|equipement/([^/]++)(?'
                            .'|(*:332)'
                            .'|/edit(*:345)'
                            .'|(*:353)'
                        .')'
                        .'|salle/([^/]++)(?'
                            .'|(*:379)'
                            .'|/edit(*:392)'
                            .'|(*:400)'
                        .')'
                    .')'
                    .'|fficher(?'
                        .'|note/([^/]++)(*:433)'
                        .'|quest/([^/]++)(*:455)'
                    .')'
                .')'
                .'|/triFormation/([^/]++)(*:487)'
                .'|/q(?'
                    .'|u(?'
                        .'|estions/(?'
                            .'|supprimer/([^/]++)(*:533)'
                            .'|modifier/([^/]++)(*:558)'
                        .')'
                        .'|iz/(?'
                            .'|supprimer/([^/]++)(*:591)'
                            .'|modifier/([^/]++)(*:616)'
                        .')'
                    .')'
                    .'|r\\-code/([^/]++)/([\\w\\W]+)(*:652)'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|modifier/([^/]++)(*:697)'
                        .'|back/supprimer/([^/]++)(*:728)'
                    .')'
                    .'|mise/(?'
                        .'|remise/([^/]++)(?'
                            .'|(*:763)'
                            .'|/edit(*:776)'
                        .')'
                        .'|([^/]++)(*:793)'
                    .')'
                    .'|ponse/(?'
                        .'|([^/]++)(*:819)'
                        .'|supprimer/([^/]++)(*:845)'
                        .'|modifier/([^/]++)(*:870)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|verify\\-reset\\-code/([^/]++)(*:917)'
                    .'|admin/([^/]++)/edit(*:944)'
                    .'|([^/]++)/user(*:965)'
                    .'|profile/([^/]++)(*:989)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1029)'
                    .'|wdt/([^/]++)(*:1050)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1097)'
                            .'|router(*:1112)'
                            .'|exception(?'
                                .'|(*:1133)'
                                .'|\\.css(*:1147)'
                            .')'
                        .')'
                        .'|(*:1158)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'delete', 'nomCategorie' => null, '_controller' => 'App\\Controller\\CategorieController::delete'], ['nomCategorie'], null, null, false, true, null]],
        51 => [[['_route' => 'deletec', '_controller' => 'App\\Controller\\CoursFormationController::delete'], ['idcour'], null, null, false, true, null]],
        68 => [[['_route' => 'deletef', '_controller' => 'App\\Controller\\FormationController::delete'], ['idDeFormation'], null, null, false, true, null]],
        97 => [[['_route' => 'download_pdf', '_controller' => 'App\\Controller\\CoursFormationController::downloadPdfAction'], ['idcour'], null, null, false, true, null]],
        130 => [[['_route' => 'editC', 'nomCategorie' => null, '_controller' => 'App\\Controller\\CategorieController::editAuthorAction'], ['nomCategorie'], null, null, false, true, null]],
        148 => [[['_route' => 'editc', '_controller' => 'App\\Controller\\CoursFormationController::editCoursAction'], ['idcour'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        166 => [[['_route' => 'editf', '_controller' => 'App\\Controller\\FormationController::editAuthorAction'], ['idDeFormation'], null, null, false, true, null]],
        200 => [[['_route' => 'app_modifierevent', '_controller' => 'App\\Controller\\EventController::modifier'], ['id'], null, null, false, true, null]],
        226 => [[['_route' => 'app_supprimerevent', '_controller' => 'App\\Controller\\EventController::supprimer'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'app_modifierclub', '_controller' => 'App\\Controller\\ClubController::modifier'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'app_supprimerclub', '_controller' => 'App\\Controller\\ClubController::supprimer'], ['id'], null, null, false, true, null]],
        332 => [[['_route' => 'app_equipement_show', '_controller' => 'App\\Controller\\EquipementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        345 => [[['_route' => 'app_equipement_edit', '_controller' => 'App\\Controller\\EquipementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        353 => [[['_route' => 'app_equipement_delete', '_controller' => 'App\\Controller\\EquipementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        379 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        392 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        400 => [[['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        433 => [[['_route' => 'app_affichernote', '_controller' => 'App\\Controller\\NoteController::affiche'], ['idquiz'], null, null, false, true, null]],
        455 => [[['_route' => 'app_afficherquestions', '_controller' => 'App\\Controller\\QuestionsController::affiche'], ['idquiz'], null, null, false, true, null]],
        487 => [[['_route' => 'triFormation', '_controller' => 'App\\Controller\\FormationController::triFormation'], ['critere'], null, null, false, true, null]],
        533 => [[['_route' => 'app_supprimerquestion', '_controller' => 'App\\Controller\\QuestionsController::supprimer'], ['id'], null, null, false, true, null]],
        558 => [[['_route' => 'app_modifierquestion', '_controller' => 'App\\Controller\\QuestionsController::modifier'], ['id'], null, null, false, true, null]],
        591 => [[['_route' => 'app_supprimerquiz', '_controller' => 'App\\Controller\\QuizController::supprimer'], ['id'], null, null, false, true, null]],
        616 => [[['_route' => 'app_modifierquiz', '_controller' => 'App\\Controller\\QuizController::modifier'], ['id'], null, null, false, true, null]],
        652 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        697 => [[['_route' => 'app_modifierreclamation', '_controller' => 'App\\Controller\\ReclamationController::modifier'], ['id'], null, null, false, true, null]],
        728 => [[['_route' => 'app_supprimerreclamation', '_controller' => 'App\\Controller\\ReclamationController::supprimerback'], ['id'], null, null, false, true, null]],
        763 => [[['_route' => 'app_remise_show', '_controller' => 'App\\Controller\\RemiseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        776 => [[['_route' => 'app_remise_edit', '_controller' => 'App\\Controller\\RemiseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        793 => [[['_route' => 'app_remise_delete', '_controller' => 'App\\Controller\\RemiseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        819 => [[['_route' => 'app_ajouterreponsee', '_controller' => 'App\\Controller\\ReponseController::ajouter'], ['id'], null, null, false, true, null]],
        845 => [[['_route' => 'app_supprimerreponse', '_controller' => 'App\\Controller\\ReponseController::supprimer'], ['id'], null, null, false, true, null]],
        870 => [[['_route' => 'app_modifierreponse', '_controller' => 'App\\Controller\\ReponseController::modifier'], ['id'], null, null, false, true, null]],
        917 => [[['_route' => 'verify_reset_code', '_controller' => 'App\\Controller\\UserController::verifyResetCode'], ['resetCode'], null, null, false, true, null]],
        944 => [[['_route' => 'app_user_edit_etat', '_controller' => 'App\\Controller\\UserController::editEtat'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        965 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], null, null, false, false, null]],
        989 => [[['_route' => 'app_show_profile', '_controller' => 'App\\Controller\\UserController::showProfile'], ['id'], ['GET' => 0], null, false, true, null]],
        1029 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1050 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1097 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1112 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1133 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1147 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1158 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'AddCategorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::AddCategorie'], [], [['text', '/AddCategorie']], [], [], []],
    'list_Categorie' => [[], ['_controller' => 'App\\Controller\\CategorieController::AffichageCategorie'], [], [['text', '/Categorie']], [], [], []],
    'delete' => [['nomCategorie'], ['nomCategorie' => null, '_controller' => 'App\\Controller\\CategorieController::delete'], [], [['variable', '/', '[^/]++', 'nomCategorie', true], ['text', '/delete']], [], [], []],
    'editC' => [['nomCategorie'], ['nomCategorie' => null, '_controller' => 'App\\Controller\\CategorieController::editAuthorAction'], [], [['variable', '/', '[^/]++', 'nomCategorie', true], ['text', '/edit']], [], [], []],
    'chart_statistiquesparcategorie' => [[], ['_controller' => 'ChartController::statistiquesParCategorie'], [], [['text', '/statistiques1']], [], [], []],
    'webhook' => [[], ['_controller' => 'App\\Controller\\ChatbotController::index2'], [], [['text', '/webhook']], [], [], []],
    'app_club' => [[], ['_controller' => 'App\\Controller\\ClubController::ajouter'], [], [['text', '/club']], [], [], []],
    'app_afficherclub' => [[], ['_controller' => 'App\\Controller\\ClubController::affiche'], [], [['text', '/club/afficher']], [], [], []],
    'app_modifierclub' => [['id'], ['_controller' => 'App\\Controller\\ClubController::modifier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/club/modifier']], [], [], []],
    'app_supprimerclub' => [['id'], ['_controller' => 'App\\Controller\\ClubController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/club/supprimer']], [], [], []],
    'app_afficherclubfront' => [[], ['_controller' => 'App\\Controller\\ClubController::affichefront'], [], [['text', '/front/club/afficher']], [], [], []],
    'AddCourFormation' => [[], ['_controller' => 'App\\Controller\\CoursFormationController::AddCourFormation'], [], [['text', '/AddCourFormation']], [], [], []],
    'download_pdf' => [['idcour'], ['_controller' => 'App\\Controller\\CoursFormationController::downloadPdfAction'], [], [['variable', '/', '[^/]++', 'idcour', true], ['text', '/download-pdf']], [], [], []],
    'deletec' => [['idcour'], ['_controller' => 'App\\Controller\\CoursFormationController::delete'], [], [['variable', '/', '[^/]++', 'idcour', true], ['text', '/deletec']], [], [], []],
    'editc' => [['idcour'], ['_controller' => 'App\\Controller\\CoursFormationController::editCoursAction'], [], [['variable', '/', '[^/]++', 'idcour', true], ['text', '/editc']], [], [], []],
    'list_Cours' => [[], ['_controller' => 'App\\Controller\\CoursFormationController::AffichageCours'], [], [['text', '/afficheCours']], [], [], []],
    'afficheCoursFront' => [[], ['_controller' => 'App\\Controller\\CoursFormationController::AffichageCoursFront'], [], [['text', '/afficheCoursFront']], [], [], []],
    'Youtube' => [[], ['_controller' => 'App\\Controller\\CoursFormationController::youtubeapi'], [], [['text', '/Youtube']], [], [], []],
    'app_equipement_export_excel' => [[], ['_controller' => 'App\\Controller\\EquipementController::exportExcel'], [], [['text', '/admin/equipement/export-excel']], [], [], []],
    'app_equipement_index' => [[], ['_controller' => 'App\\Controller\\EquipementController::index'], [], [['text', '/admin/equipement/']], [], [], []],
    'app_equipement_new' => [[], ['_controller' => 'App\\Controller\\EquipementController::new'], [], [['text', '/admin/equipement/new']], [], [], []],
    'app_equipement_show' => [['id'], ['_controller' => 'App\\Controller\\EquipementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/equipement']], [], [], []],
    'app_equipement_edit' => [['id'], ['_controller' => 'App\\Controller\\EquipementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/equipement']], [], [], []],
    'app_equipement_delete' => [['id'], ['_controller' => 'App\\Controller\\EquipementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/equipement']], [], [], []],
    'app_event' => [[], ['_controller' => 'App\\Controller\\EventController::ajouter'], [], [['text', '/event']], [], [], []],
    'app_event_index' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/eventaff']], [], [], []],
    'app_afficherevent' => [[], ['_controller' => 'App\\Controller\\EventController::affiche'], [], [['text', '/event/afficher']], [], [], []],
    'app_modifierevent' => [['id'], ['_controller' => 'App\\Controller\\EventController::modifier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event/modifier']], [], [], []],
    'app_supprimerevent' => [['id'], ['_controller' => 'App\\Controller\\EventController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/event/supprimer']], [], [], []],
    'app_affichereventfront' => [[], ['_controller' => 'App\\Controller\\EventController::afficher'], [], [['text', '/afficherfrontevent']], [], [], []],
    'insert_feedback' => [[], ['_controller' => 'App\\Controller\\FeedbackController::insertFeedback'], [], [['text', '/insert-feedback']], [], [], []],
    'feedback' => [[], ['_controller' => 'App\\Controller\\FeedbackController::index2'], [], [['text', '/feedback']], [], [], []],
    'feedbacks' => [[], ['_controller' => 'App\\Controller\\FeedbackController::feedbackList'], [], [['text', '/feedbacks']], [], [], []],
    'Front' => [[], ['_controller' => 'App\\Controller\\FormationController::index'], [], [['text', '/Fronttt']], [], [], []],
    'AddFormation' => [[], ['_controller' => 'App\\Controller\\FormationController::AddFormation'], [], [['text', '/AddFormation']], [], [], []],
    'list_Formation' => [[], ['_controller' => 'App\\Controller\\FormationController::AffichageFormation'], [], [['text', '/Formation']], [], [], []],
    'deletef' => [['idDeFormation'], ['_controller' => 'App\\Controller\\FormationController::delete'], [], [['variable', '/', '[^/]++', 'idDeFormation', true], ['text', '/deletef']], [], [], []],
    'editf' => [['idDeFormation'], ['_controller' => 'App\\Controller\\FormationController::editAuthorAction'], [], [['variable', '/', '[^/]++', 'idDeFormation', true], ['text', '/editf']], [], [], []],
    'searchByNomFormation' => [[], ['_controller' => 'App\\Controller\\FormationController::searchByNomFormation'], [], [['text', '/searchByNomFormation']], [], [], []],
    'triFormation' => [['critere'], ['_controller' => 'App\\Controller\\FormationController::triFormation'], [], [['variable', '/', '[^/]++', 'critere', true], ['text', '/triFormation']], [], [], []],
    'statistiques' => [[], ['_controller' => 'App\\Controller\\FormationController::statistiques'], [], [['text', '/statistiques']], [], [], []],
    'Frontt' => [[], ['_controller' => 'App\\Controller\\FormationController::indexx'], [], [['text', '/Frontt']], [], [], []],
    'app_salle_indexf' => [[], ['_controller' => 'App\\Controller\\FrontController::index'], [], [['text', '/salle/']], [], [], []],
    'app_index' => [[], ['_controller' => 'App\\Controller\\Home::index'], [], [['text', '/']], [], [], []],
    'app_index_admin' => [[], ['_controller' => 'App\\Controller\\Home::indexAdmin'], [], [['text', '/admin']], [], [], []],
    'app_certif' => [[], ['_controller' => 'App\\Controller\\HomeController::certif'], [], [['text', '/certif']], [], [], []],
    'app_certif_pdf' => [[], ['_controller' => 'App\\Controller\\HomeController::certifPdf'], [], [['text', '/certif/pdf']], [], [], []],
    'app_pdf' => [[], ['_controller' => 'App\\Controller\\HomeController::pdf'], [], [['text', '/pdf']], [], [], []],
    'app_backhome' => [[], ['_controller' => 'App\\Controller\\HomeController::backhome'], [], [['text', '/backhome']], [], [], []],
    'app_inscription' => [[], ['_controller' => 'App\\Controller\\InscriptionController::inscription'], [], [['text', '/inscription']], [], [], []],
    'send_mail' => [[], ['_controller' => 'App\\Controller\\MailController::sendMail'], [], [['text', '/send-mail']], [], [], []],
    'app_note' => [[], ['_controller' => 'App\\Controller\\NoteController::ajouter'], [], [['text', '/note']], [], [], []],
    'app_affichernote' => [['idquiz'], ['_controller' => 'App\\Controller\\NoteController::affiche'], [], [['variable', '/', '[^/]++', 'idquiz', true], ['text', '/affichernote']], [], [], []],
    'app_payment' => [[], ['_controller' => 'App\\Controller\\PaymentController::index'], [], [['text', '/payment']], [], [], []],
    'checkout' => [[], ['_controller' => 'App\\Controller\\PaymentController::checkout'], [], [['text', '/checkout']], [], [], []],
    'success_url' => [[], ['_controller' => 'App\\Controller\\PaymentController::successUrl'], [], [['text', '/success-url']], [], [], []],
    'cancel_url' => [[], ['_controller' => 'App\\Controller\\PaymentController::cancelUrl'], [], [['text', '/cancel-url']], [], [], []],
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
    'rate_formation' => [[], ['_controller' => 'App\\Controller\\RatingController::addRating'], [], [['text', '/rate']], [], [], []],
    'app_reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::ajouter'], [], [['text', '/front']], [], [], []],
    'app_afficherreclamationfront' => [[], ['_controller' => 'App\\Controller\\ReclamationController::affiche'], [], [['text', '/afficher']], [], [], []],
    'app_modifierreclamation' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::modifier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/modifier']], [], [], []],
    'app_front' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/app']], [], [], []],
    'app_afficherreclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::afficheback'], [], [['text', '/reclamation/back/afficher']], [], [], []],
    'app_search' => [[], ['_controller' => 'App\\Controller\\ReclamationController::search'], [], [['text', '/search']], [], [], []],
    'app_searchh' => [[], ['_controller' => 'App\\Controller\\ReclamationController::searchh'], [], [['text', '/searchh']], [], [], []],
    'app_afficherreponsetraite' => [[], ['_controller' => 'App\\Controller\\ReclamationController::affichetraite'], [], [['text', '/reclamation/back/affichetraite']], [], [], []],
    'app_supprimerreclamation' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::supprimerback'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reclamation/back/supprimer']], [], [], []],
    'forgot_password' => [[], ['_controller' => 'App\\Controller\\ReclamationController::forgotPassword'], [], [['text', '/forgot-password']], [], [], []],
    'app_remise_index' => [[], ['_controller' => 'App\\Controller\\RemiseController::index'], [], [['text', '/remise/']], [], [], []],
    'remise_new' => [[], ['_controller' => 'App\\Controller\\RemiseController::new'], [], [['text', '/remise/remise/new']], [], [], []],
    'app_remise_show' => [['id'], ['_controller' => 'App\\Controller\\RemiseController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/remise/remise']], [], [], []],
    'app_remise_edit' => [['id'], ['_controller' => 'App\\Controller\\RemiseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/remise/remise']], [], [], []],
    'app_remise_delete' => [['id'], ['_controller' => 'App\\Controller\\RemiseController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/remise']], [], [], []],
    'app_reponse' => [[], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['text', '/reponse']], [], [], []],
    'app_ajouterreponsee' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::ajouter'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse']], [], [], []],
    'app_afficherreponse' => [[], ['_controller' => 'App\\Controller\\ReponseController::affiche'], [], [['text', '/reclamation/back/afficher']], [], [], []],
    'app_supprimerreponse' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::supprimer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse/supprimer']], [], [], []],
    'app_modifierreponse' => [['id'], ['_controller' => 'App\\Controller\\ReponseController::modifier'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reponse/modifier']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\ReponseController::home'], [], [['text', '/home']], [], [], []],
    'app_map' => [[], ['_controller' => 'App\\Controller\\ReponseController::map'], [], [['text', '/map']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\ReponseController::contact'], [], [['text', '/contact']], [], [], []],
    'app_team' => [[], ['_controller' => 'App\\Controller\\ReponseController::team'], [], [['text', '/team']], [], [], []],
    'app_about' => [[], ['_controller' => 'App\\Controller\\ReponseController::about'], [], [['text', '/about']], [], [], []],
    'app_salle_front' => [[], ['_controller' => 'App\\Controller\\SalleController::front'], [], [['text', '/admin/salle/front']], [], [], []],
    'app_salle_index' => [[], ['_controller' => 'App\\Controller\\SalleController::index'], [], [['text', '/admin/salle/']], [], [], []],
    'app_salle_new' => [[], ['_controller' => 'App\\Controller\\SalleController::new'], [], [['text', '/admin/salle/new']], [], [], []],
    'app_salle_show' => [['id'], ['_controller' => 'App\\Controller\\SalleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/salle']], [], [], []],
    'app_salle_edit' => [['id'], ['_controller' => 'App\\Controller\\SalleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/salle']], [], [], []],
    'app_salle_delete' => [['id'], ['_controller' => 'App\\Controller\\SalleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/salle']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/user/register']], [], [], []],
    'app_add_user_admin' => [[], ['_controller' => 'App\\Controller\\UserController::AddUserAdmin'], [], [['text', '/user/admin/adduser']], [], [], []],
    'app_myprofile' => [[], ['_controller' => 'App\\Controller\\UserController::Myprofile'], [], [['text', '/user/MonProfile']], [], [], []],
    'app_edit_profile' => [[], ['_controller' => 'App\\Controller\\UserController::editProfile'], [], [['text', '/user/modifier-profil']], [], [], []],
    'app_edit_profile_password' => [[], ['_controller' => 'App\\Controller\\UserController::EditProfilePassword'], [], [['text', '/user/EditProfilePassword']], [], [], []],
    'app_reset_password_submited' => [[], ['_controller' => 'App\\Controller\\UserController::resetPasswordSubmitted'], [], [['text', '/user/reset-password/submitted']], [], [], []],
    'reset_password' => [[], ['_controller' => 'App\\Controller\\UserController::resetPassword'], [], [['text', '/user/reset-password']], [], [], []],
    'verify_reset_code' => [['resetCode'], ['_controller' => 'App\\Controller\\UserController::verifyResetCode'], [], [['variable', '/', '[^/]++', 'resetCode', true], ['text', '/user/verify-reset-code']], [], [], []],
    'reset_password_profil' => [[], ['_controller' => 'App\\Controller\\UserController::resetPasswordProfile'], [], [['text', '/user/resetPassword/profil']], [], [], []],
    'reset_password_profil_admin' => [[], ['_controller' => 'App\\Controller\\UserController::resetPasswordProfileAdmin'], [], [['text', '/user/admin/resetPassword/profil']], [], [], []],
    'app_users_index_admin' => [[], ['_controller' => 'App\\Controller\\UserController::showUsersAdmin'], [], [['text', '/user/admin']], [], [], []],
    'app_myprofile_admin' => [[], ['_controller' => 'App\\Controller\\UserController::MyprofileAdmin'], [], [['text', '/user/admin/MonProfile']], [], [], []],
    'app_edit_profile_admin' => [[], ['_controller' => 'App\\Controller\\UserController::editProfileAdmin'], [], [['text', '/user/admin/modifier-profil']], [], [], []],
    'app_user_edit_etat' => [['id'], ['_controller' => 'App\\Controller\\UserController::editEtat'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user/admin']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['text', '/user'], ['variable', '/', '[^/]++', 'id', true], ['text', '/user']], [], [], []],
    'app_show_profile' => [['id'], ['_controller' => 'App\\Controller\\UserController::showProfile'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/user/profile']], [], [], []],
    'search_user' => [[], ['_controller' => 'App\\Controller\\UserController::searchUser'], [], [['text', '/user/r/search_user']], [], [], []],
    'qr_code_generate' => [['builder', 'data'], ['_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['data' => '[\\w\\W]+'], [['variable', '/', '[\\w\\W]+', 'data', true], ['variable', '/', '[^/]++', 'builder', true], ['text', '/qr-code']], [], [], []],
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
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];

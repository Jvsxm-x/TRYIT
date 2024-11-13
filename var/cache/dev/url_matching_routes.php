<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/abonnements' => [[['_route' => 'app_abonnements_index', '_controller' => 'App\\Controller\\AbonnementsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/abonnements/new' => [[['_route' => 'app_abonnements_new', '_controller' => 'App\\Controller\\AbonnementsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/adherants' => [[['_route' => 'app_adherants_index', '_controller' => 'App\\Controller\\AdherantsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/adherants/new' => [[['_route' => 'app_adherants_new', '_controller' => 'App\\Controller\\AdherantsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/administrators' => [[['_route' => 'app_administrators_index', '_controller' => 'App\\Controller\\AdministratorsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/administrators/new' => [[['_route' => 'app_administrators_new', '_controller' => 'App\\Controller\\AdministratorsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendar' => [
            [['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, null, null, false, false, null],
            [['_route' => 'app_calendar_index', '_controller' => 'App\\Controller\\Headers1Controller::calendarIndex'], null, null, null, false, false, null],
        ],
        '/categories' => [[['_route' => 'app_categories_index', '_controller' => 'App\\Controller\\CategoriesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categories/new' => [[['_route' => 'app_categories_new', '_controller' => 'App\\Controller\\CategoriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/coachs' => [[['_route' => 'app_coachs_index', '_controller' => 'App\\Controller\\CoachsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/coachs/new' => [[['_route' => 'app_coachs_new', '_controller' => 'App\\Controller\\CoachsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/show_profile' => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\Headers1Controller::show'], null, ['GET' => 0], null, false, false, null]],
        '/coach/add' => [[['_route' => 'app_coach_add', '_controller' => 'App\\Controller\\Headers1Controller::addCoach'], null, null, null, false, false, null]],
        '/user/coachlist' => [[['_route' => 'app_usercoachlist_index', '_controller' => 'App\\Controller\\Headers1Controller::listAdherents'], null, null, null, false, false, null]],
        '/about' => [
            [['_route' => 'app_about', '_controller' => 'App\\Controller\\Headers1Controller::about'], null, null, null, false, false, null],
            [['_route' => 'about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null],
        ],
        '/contact' => [
            [['_route' => 'app_contact', '_controller' => 'App\\Controller\\Headers1Controller::contact'], null, null, null, false, false, null],
            [['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null],
        ],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::indexs'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\HomeController::registerRedirect'], null, null, null, false, false, null]],
        '/imc' => [
            [['_route' => 'app_imc_index', '_controller' => 'App\\Controller\\ImcController::index'], null, null, null, false, false, null],
            [['_route' => 'imc_show', '_controller' => 'App\\Controller\\ImcController::showAllByUserId'], null, null, null, false, false, null],
        ],
        '/imc/new' => [[['_route' => 'imc_new', '_controller' => 'App\\Controller\\ImcController::new'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/some-page' => [[['_route' => 'some_page', '_controller' => 'App\\Controller\\LoginController::somePage'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/machines' => [[['_route' => 'app_machines_index', '_controller' => 'App\\Controller\\MachinesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/machines/new' => [[['_route' => 'app_machines_new', '_controller' => 'App\\Controller\\MachinesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messageries' => [[['_route' => 'app_messageries_index', '_controller' => 'App\\Controller\\MessageriesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/messageries/new' => [[['_route' => 'app_messageries_new', '_controller' => 'App\\Controller\\MessageriesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Profile' => [[['_route' => 'app_show', '_controller' => 'App\\Controller\\Profile\\ProfileController::show'], null, ['GET' => 0], null, true, false, null]],
        '/scheduler' => [[['_route' => 'scheduler_index', '_controller' => 'App\\Controller\\SchedulerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/scheduler/new' => [[['_route' => 'scheduler_new', '_controller' => 'App\\Controller\\SchedulerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'app_users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/users/new' => [[['_route' => 'app_users_new', '_controller' => 'App\\Controller\\UsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|bonnements/([^/]++)(?'
                        .'|(*:229)'
                        .'|/edit(*:242)'
                        .'|(*:250)'
                    .')'
                    .'|d(?'
                        .'|herants/([^/]++)(?'
                            .'|(*:282)'
                            .'|/edit(*:295)'
                            .'|(*:303)'
                        .')'
                        .'|ministrators/([^/]++)(?'
                            .'|(*:336)'
                            .'|/edit(*:349)'
                            .'|(*:357)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategories/([^/]++)(?'
                        .'|(*:394)'
                        .'|/edit(*:407)'
                        .'|(*:415)'
                    .')'
                    .'|oachs/([^/]++)(?'
                        .'|(*:441)'
                        .'|/edit(*:454)'
                        .'|(*:462)'
                    .')'
                .')'
                .'|/m(?'
                    .'|achine(?'
                        .'|/([^/]++)(*:495)'
                        .'|s/([^/]++)(?'
                            .'|(*:516)'
                            .'|/edit(*:529)'
                            .'|(*:537)'
                        .')'
                    .')'
                    .'|essageries/([^/]++)(?'
                        .'|(*:569)'
                        .'|/edit(*:582)'
                        .'|(*:590)'
                    .')'
                .')'
                .'|/imc/(?'
                    .'|([^/]++)(?'
                        .'|(*:619)'
                        .'|/edit(*:632)'
                    .')'
                    .'|delete/([^/]++)(*:656)'
                .')'
                .'|/Profile/([^/]++)(?'
                    .'|/edit(*:690)'
                    .'|(*:698)'
                .')'
                .'|/scheduler/([^/]++)(?'
                    .'|/edit(*:734)'
                    .'|(*:742)'
                .')'
                .'|/users/([^/]++)(?'
                    .'|(*:769)'
                    .'|/(?'
                        .'|edit(*:785)'
                        .'|verify\\-old\\-password(*:814)'
                    .')'
                    .'|(*:823)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        229 => [[['_route' => 'app_abonnements_show', '_controller' => 'App\\Controller\\AbonnementsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'app_abonnements_edit', '_controller' => 'App\\Controller\\AbonnementsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        250 => [[['_route' => 'app_abonnements_delete', '_controller' => 'App\\Controller\\AbonnementsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        282 => [[['_route' => 'app_adherants_show', '_controller' => 'App\\Controller\\AdherantsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        295 => [[['_route' => 'app_adherants_edit', '_controller' => 'App\\Controller\\AdherantsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        303 => [[['_route' => 'app_adherants_delete', '_controller' => 'App\\Controller\\AdherantsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        336 => [[['_route' => 'app_administrators_show', '_controller' => 'App\\Controller\\AdministratorsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_administrators_edit', '_controller' => 'App\\Controller\\AdministratorsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'app_administrators_delete', '_controller' => 'App\\Controller\\AdministratorsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_categories_show', '_controller' => 'App\\Controller\\CategoriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        407 => [[['_route' => 'app_categories_edit', '_controller' => 'App\\Controller\\CategoriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        415 => [[['_route' => 'app_categories_delete', '_controller' => 'App\\Controller\\CategoriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        441 => [[['_route' => 'app_coachs_show', '_controller' => 'App\\Controller\\CoachsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        454 => [[['_route' => 'app_coachs_edit', '_controller' => 'App\\Controller\\CoachsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        462 => [[['_route' => 'app_coachs_delete', '_controller' => 'App\\Controller\\CoachsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        495 => [[['_route' => 'machine_detail', '_controller' => 'App\\Controller\\HomeController::machineDetail'], ['id'], null, null, false, true, null]],
        516 => [[['_route' => 'app_machines_show', '_controller' => 'App\\Controller\\MachinesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        529 => [[['_route' => 'app_machines_edit', '_controller' => 'App\\Controller\\MachinesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        537 => [[['_route' => 'app_machines_delete', '_controller' => 'App\\Controller\\MachinesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        569 => [[['_route' => 'app_messageries_show', '_controller' => 'App\\Controller\\MessageriesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        582 => [[['_route' => 'app_messageries_edit', '_controller' => 'App\\Controller\\MessageriesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        590 => [[['_route' => 'app_messageries_delete', '_controller' => 'App\\Controller\\MessageriesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        619 => [[['_route' => 'imc_shows', '_controller' => 'App\\Controller\\ImcController::show'], ['id'], null, null, false, true, null]],
        632 => [[['_route' => 'imc_edit', '_controller' => 'App\\Controller\\ImcController::edit'], ['id'], null, null, false, false, null]],
        656 => [[['_route' => 'app_imc_delete', '_controller' => 'App\\Controller\\ImcController::delete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        690 => [[['_route' => 'app_edit', '_controller' => 'App\\Controller\\Profile\\ProfileController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        698 => [[['_route' => 'app_delete', '_controller' => 'App\\Controller\\Profile\\ProfileController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        734 => [[['_route' => 'scheduler_edit', '_controller' => 'App\\Controller\\SchedulerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        742 => [[['_route' => 'scheduler_delete', '_controller' => 'App\\Controller\\SchedulerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        769 => [[['_route' => 'app_users_show', '_controller' => 'App\\Controller\\UsersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        785 => [[['_route' => 'app_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        814 => [[['_route' => 'app_users_verify_old_password', '_controller' => 'App\\Controller\\UsersController::verifyOldPassword'], ['id'], ['POST' => 0], null, false, false, null]],
        823 => [
            [['_route' => 'app_users_delete', '_controller' => 'App\\Controller\\UsersController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

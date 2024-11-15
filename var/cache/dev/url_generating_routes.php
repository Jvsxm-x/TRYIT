<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_abonnements_index' => [[], ['_controller' => 'App\\Controller\\AbonnementsController::index'], [], [['text', '/abonnements']], [], [], []],
    'app_abonnements_new' => [[], ['_controller' => 'App\\Controller\\AbonnementsController::new'], [], [['text', '/abonnements/new']], [], [], []],
    'app_abonnements_show' => [['id'], ['_controller' => 'App\\Controller\\AbonnementsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/abonnements']], [], [], []],
    'app_abonnements_edit' => [['id'], ['_controller' => 'App\\Controller\\AbonnementsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/abonnements']], [], [], []],
    'app_abonnements_delete' => [['id'], ['_controller' => 'App\\Controller\\AbonnementsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/abonnements']], [], [], []],
    'app_adherants_index' => [[], ['_controller' => 'App\\Controller\\AdherantsController::index'], [], [['text', '/adherants']], [], [], []],
    'app_adherants_new' => [[], ['_controller' => 'App\\Controller\\AdherantsController::new'], [], [['text', '/adherants/new']], [], [], []],
    'app_adherants_show' => [['id'], ['_controller' => 'App\\Controller\\AdherantsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adherants']], [], [], []],
    'app_adherants_edit' => [['id'], ['_controller' => 'App\\Controller\\AdherantsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/adherants']], [], [], []],
    'app_adherants_delete' => [['id'], ['_controller' => 'App\\Controller\\AdherantsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adherants']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'app_administrators_index' => [[], ['_controller' => 'App\\Controller\\AdministratorsController::index'], [], [['text', '/administrators']], [], [], []],
    'app_administrators_new' => [[], ['_controller' => 'App\\Controller\\AdministratorsController::new'], [], [['text', '/administrators/new']], [], [], []],
    'app_administrators_show' => [['id'], ['_controller' => 'App\\Controller\\AdministratorsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/administrators']], [], [], []],
    'app_administrators_edit' => [['id'], ['_controller' => 'App\\Controller\\AdministratorsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/administrators']], [], [], []],
    'app_administrators_delete' => [['id'], ['_controller' => 'App\\Controller\\AdministratorsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/administrators']], [], [], []],
    'calendar_index' => [[], ['_controller' => 'App\\Controller\\CalendarController::index'], [], [['text', '/calendar']], [], [], []],
    'app_categories_index' => [[], ['_controller' => 'App\\Controller\\CategoriesController::index'], [], [['text', '/categories']], [], [], []],
    'app_categories_new' => [[], ['_controller' => 'App\\Controller\\CategoriesController::new'], [], [['text', '/categories/new']], [], [], []],
    'app_categories_show' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'app_categories_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'app_categories_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'app_coachs_index' => [[], ['_controller' => 'App\\Controller\\CoachsController::index'], [], [['text', '/coachs']], [], [], []],
    'app_coachs_new' => [[], ['_controller' => 'App\\Controller\\CoachsController::new'], [], [['text', '/coachs/new']], [], [], []],
    'app_coachs_show' => [['id'], ['_controller' => 'App\\Controller\\CoachsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coachs']], [], [], []],
    'app_coachs_edit' => [['id'], ['_controller' => 'App\\Controller\\CoachsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/coachs']], [], [], []],
    'app_coachs_delete' => [['id'], ['_controller' => 'App\\Controller\\CoachsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coachs']], [], [], []],
    'app_calendar_index' => [[], ['_controller' => 'App\\Controller\\Headers1Controller::calendarIndex'], [], [['text', '/calendar']], [], [], []],
    'app_user_profile' => [[], ['_controller' => 'App\\Controller\\Headers1Controller::show'], [], [['text', '/show_profile']], [], [], []],
    'app_coach_add' => [[], ['_controller' => 'App\\Controller\\Headers1Controller::addCoach'], [], [['text', '/coach/add']], [], [], []],
    'app_usercoachlist_index' => [[], ['_controller' => 'App\\Controller\\Headers1Controller::listAdherents'], [], [['text', '/user/coachlist']], [], [], []],
    'app_about' => [[], ['_controller' => 'App\\Controller\\Headers1Controller::about'], [], [['text', '/about']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\Headers1Controller::contact'], [], [['text', '/contact']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::indexs'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\HomeController::about'], [], [['text', '/about']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\HomeController::contact'], [], [['text', '/contact']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\HomeController::registerRedirect'], [], [['text', '/register']], [], [], []],
    'machine_detail' => [['id'], ['_controller' => 'App\\Controller\\HomeController::machineDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/machine']], [], [], []],
    'app_imc_index' => [[], ['_controller' => 'App\\Controller\\ImcController::index'], [], [['text', '/imc']], [], [], []],
    'imc_new' => [[], ['_controller' => 'App\\Controller\\ImcController::new'], [], [['text', '/imc/new']], [], [], []],
    'imc_shows' => [['id'], ['_controller' => 'App\\Controller\\ImcController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/imc']], [], [], []],
    'imc_show' => [[], ['_controller' => 'App\\Controller\\ImcController::showAllByUserId'], [], [['text', '/imc']], [], [], []],
    'imc_edit' => [['id'], ['_controller' => 'App\\Controller\\ImcController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/imc']], [], [], []],
    'app_imc_delete' => [['id'], ['_controller' => 'App\\Controller\\ImcController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/imc/delete']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'some_page' => [[], ['_controller' => 'App\\Controller\\LoginController::somePage'], [], [['text', '/some-page']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'app_machines_index' => [[], ['_controller' => 'App\\Controller\\MachinesController::index'], [], [['text', '/machines']], [], [], []],
    'app_machines_new' => [[], ['_controller' => 'App\\Controller\\MachinesController::new'], [], [['text', '/machines/new']], [], [], []],
    'app_machines_show' => [['id'], ['_controller' => 'App\\Controller\\MachinesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/machines']], [], [], []],
    'app_machines_edit' => [['id'], ['_controller' => 'App\\Controller\\MachinesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/machines']], [], [], []],
    'app_machines_delete' => [['id'], ['_controller' => 'App\\Controller\\MachinesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/machines']], [], [], []],
    'app_messageries_index' => [[], ['_controller' => 'App\\Controller\\MessageriesController::index'], [], [['text', '/messageries']], [], [], []],
    'app_messageries_new' => [[], ['_controller' => 'App\\Controller\\MessageriesController::new'], [], [['text', '/messageries/new']], [], [], []],
    'app_messageries_show' => [['id'], ['_controller' => 'App\\Controller\\MessageriesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/messageries']], [], [], []],
    'app_messageries_edit' => [['id'], ['_controller' => 'App\\Controller\\MessageriesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/messageries']], [], [], []],
    'app_messageries_delete' => [['id'], ['_controller' => 'App\\Controller\\MessageriesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/messageries']], [], [], []],
    'app_show' => [[], ['_controller' => 'App\\Controller\\Profile\\ProfileController::show'], [], [['text', '/Profile/']], [], [], []],
    'app_edit' => [['id'], ['_controller' => 'App\\Controller\\Profile\\ProfileController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/Profile']], [], [], []],
    'app_delete' => [['id'], ['_controller' => 'App\\Controller\\Profile\\ProfileController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Profile']], [], [], []],
    'scheduler_index' => [[], ['_controller' => 'App\\Controller\\SchedulerController::index'], [], [['text', '/scheduler/']], [], [], []],
    'scheduler_new' => [[], ['_controller' => 'App\\Controller\\SchedulerController::new'], [], [['text', '/scheduler/new']], [], [], []],
    'scheduler_edit' => [['id'], ['_controller' => 'App\\Controller\\SchedulerController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/scheduler']], [], [], []],
    'scheduler_delete' => [['id'], ['_controller' => 'App\\Controller\\SchedulerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/scheduler']], [], [], []],
    'app_users_index' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users']], [], [], []],
    'app_users_new' => [[], ['_controller' => 'App\\Controller\\UsersController::new'], [], [['text', '/users/new']], [], [], []],
    'app_users_show' => [['id'], ['_controller' => 'App\\Controller\\UsersController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_edit' => [['id'], ['_controller' => 'App\\Controller\\UsersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_verify_old_password' => [['id'], ['_controller' => 'App\\Controller\\UsersController::verifyOldPassword'], [], [['text', '/verify-old-password'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'app_users_delete' => [['id'], ['_controller' => 'App\\Controller\\UsersController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'App\Controller\AbonnementsController::index' => [[], ['_controller' => 'App\\Controller\\AbonnementsController::index'], [], [['text', '/abonnements']], [], [], []],
    'App\Controller\AbonnementsController::new' => [[], ['_controller' => 'App\\Controller\\AbonnementsController::new'], [], [['text', '/abonnements/new']], [], [], []],
    'App\Controller\AbonnementsController::show' => [['id'], ['_controller' => 'App\\Controller\\AbonnementsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/abonnements']], [], [], []],
    'App\Controller\AbonnementsController::edit' => [['id'], ['_controller' => 'App\\Controller\\AbonnementsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/abonnements']], [], [], []],
    'App\Controller\AbonnementsController::delete' => [['id'], ['_controller' => 'App\\Controller\\AbonnementsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/abonnements']], [], [], []],
    'App\Controller\AdherantsController::index' => [[], ['_controller' => 'App\\Controller\\AdherantsController::index'], [], [['text', '/adherants']], [], [], []],
    'App\Controller\AdherantsController::new' => [[], ['_controller' => 'App\\Controller\\AdherantsController::new'], [], [['text', '/adherants/new']], [], [], []],
    'App\Controller\AdherantsController::show' => [['id'], ['_controller' => 'App\\Controller\\AdherantsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adherants']], [], [], []],
    'App\Controller\AdherantsController::edit' => [['id'], ['_controller' => 'App\\Controller\\AdherantsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/adherants']], [], [], []],
    'App\Controller\AdherantsController::delete' => [['id'], ['_controller' => 'App\\Controller\\AdherantsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/adherants']], [], [], []],
    'App\Controller\Admin\AdminController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\Admin\DashboardController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'App\Controller\AdministratorsController::index' => [[], ['_controller' => 'App\\Controller\\AdministratorsController::index'], [], [['text', '/administrators']], [], [], []],
    'App\Controller\AdministratorsController::new' => [[], ['_controller' => 'App\\Controller\\AdministratorsController::new'], [], [['text', '/administrators/new']], [], [], []],
    'App\Controller\AdministratorsController::show' => [['id'], ['_controller' => 'App\\Controller\\AdministratorsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/administrators']], [], [], []],
    'App\Controller\AdministratorsController::edit' => [['id'], ['_controller' => 'App\\Controller\\AdministratorsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/administrators']], [], [], []],
    'App\Controller\AdministratorsController::delete' => [['id'], ['_controller' => 'App\\Controller\\AdministratorsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/administrators']], [], [], []],
    'App\Controller\CalendarController::index' => [[], ['_controller' => 'App\\Controller\\CalendarController::index'], [], [['text', '/calendar']], [], [], []],
    'App\Controller\CategoriesController::index' => [[], ['_controller' => 'App\\Controller\\CategoriesController::index'], [], [['text', '/categories']], [], [], []],
    'App\Controller\CategoriesController::new' => [[], ['_controller' => 'App\\Controller\\CategoriesController::new'], [], [['text', '/categories/new']], [], [], []],
    'App\Controller\CategoriesController::show' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'App\Controller\CategoriesController::edit' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'App\Controller\CategoriesController::delete' => [['id'], ['_controller' => 'App\\Controller\\CategoriesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categories']], [], [], []],
    'App\Controller\CoachsController::index' => [[], ['_controller' => 'App\\Controller\\CoachsController::index'], [], [['text', '/coachs']], [], [], []],
    'App\Controller\CoachsController::new' => [[], ['_controller' => 'App\\Controller\\CoachsController::new'], [], [['text', '/coachs/new']], [], [], []],
    'App\Controller\CoachsController::show' => [['id'], ['_controller' => 'App\\Controller\\CoachsController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coachs']], [], [], []],
    'App\Controller\CoachsController::edit' => [['id'], ['_controller' => 'App\\Controller\\CoachsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/coachs']], [], [], []],
    'App\Controller\CoachsController::delete' => [['id'], ['_controller' => 'App\\Controller\\CoachsController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coachs']], [], [], []],
    'App\Controller\Headers1Controller::calendarIndex' => [[], ['_controller' => 'App\\Controller\\Headers1Controller::calendarIndex'], [], [['text', '/calendar']], [], [], []],
    'App\Controller\Headers1Controller::show' => [[], ['_controller' => 'App\\Controller\\Headers1Controller::show'], [], [['text', '/show_profile']], [], [], []],
    'App\Controller\Headers1Controller::addCoach' => [[], ['_controller' => 'App\\Controller\\Headers1Controller::addCoach'], [], [['text', '/coach/add']], [], [], []],
    'App\Controller\Headers1Controller::listAdherents' => [[], ['_controller' => 'App\\Controller\\Headers1Controller::listAdherents'], [], [['text', '/user/coachlist']], [], [], []],
    'App\Controller\Headers1Controller::about' => [[], ['_controller' => 'App\\Controller\\Headers1Controller::about'], [], [['text', '/about']], [], [], []],
    'App\Controller\Headers1Controller::contact' => [[], ['_controller' => 'App\\Controller\\Headers1Controller::contact'], [], [['text', '/contact']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'App\Controller\HomeController::indexs' => [[], ['_controller' => 'App\\Controller\\HomeController::indexs'], [], [['text', '/']], [], [], []],
    'App\Controller\HomeController::login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\HomeController::about' => [[], ['_controller' => 'App\\Controller\\HomeController::about'], [], [['text', '/about']], [], [], []],
    'App\Controller\HomeController::contact' => [[], ['_controller' => 'App\\Controller\\HomeController::contact'], [], [['text', '/contact']], [], [], []],
    'App\Controller\HomeController::registerRedirect' => [[], ['_controller' => 'App\\Controller\\HomeController::registerRedirect'], [], [['text', '/register']], [], [], []],
    'App\Controller\HomeController::machineDetail' => [['id'], ['_controller' => 'App\\Controller\\HomeController::machineDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/machine']], [], [], []],
    'App\Controller\ImcController::index' => [[], ['_controller' => 'App\\Controller\\ImcController::index'], [], [['text', '/imc']], [], [], []],
    'App\Controller\ImcController::new' => [[], ['_controller' => 'App\\Controller\\ImcController::new'], [], [['text', '/imc/new']], [], [], []],
    'App\Controller\ImcController::show' => [['id'], ['_controller' => 'App\\Controller\\ImcController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/imc']], [], [], []],
    'App\Controller\ImcController::showAllByUserId' => [[], ['_controller' => 'App\\Controller\\ImcController::showAllByUserId'], [], [['text', '/imc']], [], [], []],
    'App\Controller\ImcController::edit' => [['id'], ['_controller' => 'App\\Controller\\ImcController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/imc']], [], [], []],
    'App\Controller\ImcController::delete' => [['id'], ['_controller' => 'App\\Controller\\ImcController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/imc/delete']], [], [], []],
    'App\Controller\LoginController::login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\LoginController::somePage' => [[], ['_controller' => 'App\\Controller\\LoginController::somePage'], [], [['text', '/some-page']], [], [], []],
    'App\Controller\LoginController::logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\MachinesController::index' => [[], ['_controller' => 'App\\Controller\\MachinesController::index'], [], [['text', '/machines']], [], [], []],
    'App\Controller\MachinesController::new' => [[], ['_controller' => 'App\\Controller\\MachinesController::new'], [], [['text', '/machines/new']], [], [], []],
    'App\Controller\MachinesController::show' => [['id'], ['_controller' => 'App\\Controller\\MachinesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/machines']], [], [], []],
    'App\Controller\MachinesController::edit' => [['id'], ['_controller' => 'App\\Controller\\MachinesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/machines']], [], [], []],
    'App\Controller\MachinesController::delete' => [['id'], ['_controller' => 'App\\Controller\\MachinesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/machines']], [], [], []],
    'App\Controller\MessageriesController::index' => [[], ['_controller' => 'App\\Controller\\MessageriesController::index'], [], [['text', '/messageries']], [], [], []],
    'App\Controller\MessageriesController::new' => [[], ['_controller' => 'App\\Controller\\MessageriesController::new'], [], [['text', '/messageries/new']], [], [], []],
    'App\Controller\MessageriesController::show' => [['id'], ['_controller' => 'App\\Controller\\MessageriesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/messageries']], [], [], []],
    'App\Controller\MessageriesController::edit' => [['id'], ['_controller' => 'App\\Controller\\MessageriesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/messageries']], [], [], []],
    'App\Controller\MessageriesController::delete' => [['id'], ['_controller' => 'App\\Controller\\MessageriesController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/messageries']], [], [], []],
    'App\Controller\Profile\ProfileController::show' => [[], ['_controller' => 'App\\Controller\\Profile\\ProfileController::show'], [], [['text', '/Profile/']], [], [], []],
    'App\Controller\Profile\ProfileController::edit' => [['id'], ['_controller' => 'App\\Controller\\Profile\\ProfileController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/Profile']], [], [], []],
    'App\Controller\Profile\ProfileController::delete' => [['id'], ['_controller' => 'App\\Controller\\Profile\\ProfileController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/Profile']], [], [], []],
    'App\Controller\SchedulerController::index' => [[], ['_controller' => 'App\\Controller\\SchedulerController::index'], [], [['text', '/scheduler/']], [], [], []],
    'App\Controller\SchedulerController::new' => [[], ['_controller' => 'App\\Controller\\SchedulerController::new'], [], [['text', '/scheduler/new']], [], [], []],
    'App\Controller\SchedulerController::edit' => [['id'], ['_controller' => 'App\\Controller\\SchedulerController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/scheduler']], [], [], []],
    'App\Controller\SchedulerController::delete' => [['id'], ['_controller' => 'App\\Controller\\SchedulerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/scheduler']], [], [], []],
    'App\Controller\UsersController::index' => [[], ['_controller' => 'App\\Controller\\UsersController::index'], [], [['text', '/users']], [], [], []],
    'App\Controller\UsersController::new' => [[], ['_controller' => 'App\\Controller\\UsersController::new'], [], [['text', '/users/new']], [], [], []],
    'App\Controller\UsersController::show' => [['id'], ['_controller' => 'App\\Controller\\UsersController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'App\Controller\UsersController::edit' => [['id'], ['_controller' => 'App\\Controller\\UsersController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'App\Controller\UsersController::verifyOldPassword' => [['id'], ['_controller' => 'App\\Controller\\UsersController::verifyOldPassword'], [], [['text', '/verify-old-password'], ['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
    'App\Controller\UsersController::delete' => [['id'], ['_controller' => 'App\\Controller\\UsersController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/users']], [], [], []],
];

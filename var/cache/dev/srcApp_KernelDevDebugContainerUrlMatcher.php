<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/nos-annonces' => [[['_route' => 'ad.index', '_controller' => 'App\\Controller\\AdController::index'], null, null, null, false, false, null]],
            '/annonce/creer' => [[['_route' => 'ad.create', '_controller' => 'App\\Controller\\AdController::create'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'admin.dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
            '/admin/users' => [[['_route' => 'admin.user.index', '_controller' => 'App\\Controller\\AdminUserController::index'], null, null, null, false, false, null]],
            '/admin/login' => [[['_route' => 'admin.user.login', '_controller' => 'App\\Controller\\AdminUserController::login'], null, null, null, false, false, null]],
            '/admin/logout' => [[['_route' => 'admin.user.logout', '_controller' => 'App\\Controller\\AdminUserController::logout'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
            '/mon-compte/inscription' => [[['_route' => 'user.register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
            '/mon-compte/editer-profil' => [[['_route' => 'user.profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
            '/mon-compte/modifier-mot-de-passe' => [[['_route' => 'user.password', '_controller' => 'App\\Controller\\UserController::updatePassword'], null, null, null, false, false, null]],
            '/mon-compte/identification' => [[['_route' => 'user.login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
            '/mon-compte/deconnexion' => [[['_route' => 'user.logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
            '/mon-compte' => [[['_route' => 'user.account', '_controller' => 'App\\Controller\\UserController::account'], null, null, null, false, false, null]],
            '/mon-compte/reservations' => [[['_route' => 'user.bookings', '_controller' => 'App\\Controller\\UserController::bookings'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
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
                    .'|/a(?'
                        .'|nnonce/([^/]++)(?'
                            .'|/(?'
                                .'|modifier(*:204)'
                                .'|supprimer(*:221)'
                                .'|book(*:233)'
                            .')'
                            .'|(*:242)'
                        .')'
                        .'|dmin/(?'
                            .'|ads(?'
                                .'|(?:/(\\d+))?(*:276)'
                                .'|/([^/]++)/(?'
                                    .'|modifier(*:305)'
                                    .'|delete(*:319)'
                                .')'
                            .')'
                            .'|bookings(?'
                                .'|(?:/(\\d+))?(*:351)'
                                .'|/([^/]++)/(?'
                                    .'|modifier(*:380)'
                                    .'|delete(*:394)'
                                .')'
                            .')'
                            .'|comments(?'
                                .'|(?:/(\\d+))?(*:426)'
                                .'|/([^/]++)/(?'
                                    .'|modifier(*:455)'
                                    .'|delete(*:469)'
                                .')'
                            .')'
                            .'|users/([^/]++)/(?'
                                .'|modifier(*:505)'
                                .'|delete(*:519)'
                            .')'
                        .')'
                    .')'
                    .'|/reservation/([^/]++)(*:551)'
                    .'|/utilisateur/([^/]++)(*:580)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            204 => [[['_route' => 'ad.edit', '_controller' => 'App\\Controller\\AdController::edit'], ['slug'], null, null, false, false, null]],
            221 => [[['_route' => 'ad.delete', '_controller' => 'App\\Controller\\AdController::delete'], ['slug'], null, null, false, false, null]],
            233 => [[['_route' => 'booking.create', '_controller' => 'App\\Controller\\BookingController::book'], ['slug'], null, null, false, false, null]],
            242 => [[['_route' => 'ad.show', '_controller' => 'App\\Controller\\AdController::show'], ['slug'], null, null, false, true, null]],
            276 => [[['_route' => 'admin.ads.index', 'page' => '1', '_controller' => 'App\\Controller\\AdminAdController::index'], ['page'], null, null, false, true, null]],
            305 => [[['_route' => 'admin.ads.edit', '_controller' => 'App\\Controller\\AdminAdController::edit'], ['id'], null, null, false, false, null]],
            319 => [[['_route' => 'admin.ads.delete', '_controller' => 'App\\Controller\\AdminAdController::delete'], ['id'], null, null, false, false, null]],
            351 => [[['_route' => 'admin.bookings.index', 'page' => '1', '_controller' => 'App\\Controller\\AdminBookingController::index'], ['page'], null, null, false, true, null]],
            380 => [[['_route' => 'admin.bookings.edit', '_controller' => 'App\\Controller\\AdminBookingController::edit'], ['id'], null, null, false, false, null]],
            394 => [[['_route' => 'admin.bookings.delete', '_controller' => 'App\\Controller\\AdminBookingController::delete'], ['id'], null, null, false, false, null]],
            426 => [[['_route' => 'admin.comments.index', 'page' => '1', '_controller' => 'App\\Controller\\AdminCommentController::index'], ['page'], null, null, false, true, null]],
            455 => [[['_route' => 'admin.comments.edit', '_controller' => 'App\\Controller\\AdminCommentController::edit'], ['id'], null, null, false, false, null]],
            469 => [[['_route' => 'admin.comments.delete', '_controller' => 'App\\Controller\\AdminCommentController::delete'], ['id'], null, null, false, false, null]],
            505 => [[['_route' => 'admin.user.edit', '_controller' => 'App\\Controller\\AdminUserController::edit'], ['id'], null, null, false, false, null]],
            519 => [[['_route' => 'admin.user.delete', '_controller' => 'App\\Controller\\AdminUserController::delete'], ['id'], null, null, false, false, null]],
            551 => [[['_route' => 'booking.show', '_controller' => 'App\\Controller\\BookingController::show'], ['id'], null, null, false, true, null]],
            580 => [[['_route' => 'user.show', '_controller' => 'App\\Controller\\UserPageController::show'], ['slug'], null, null, false, true, null]],
        ];
    }
}

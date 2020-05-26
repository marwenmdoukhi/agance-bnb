<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'ad.index' => [[], ['_controller' => 'App\\Controller\\AdController::index'], [], [['text', '/nos-annonces']], [], []],
        'ad.create' => [[], ['_controller' => 'App\\Controller\\AdController::create'], [], [['text', '/annonce/creer']], [], []],
        'ad.edit' => [['slug'], ['_controller' => 'App\\Controller\\AdController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/annonce']], [], []],
        'ad.delete' => [['slug'], ['_controller' => 'App\\Controller\\AdController::delete'], [], [['text', '/supprimer'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/annonce']], [], []],
        'ad.show' => [['slug'], ['_controller' => 'App\\Controller\\AdController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/annonce']], [], []],
        'admin.ads.index' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\AdminAdController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/ads']], [], []],
        'admin.ads.edit' => [['id'], ['_controller' => 'App\\Controller\\AdminAdController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/ads']], [], []],
        'admin.ads.delete' => [['id'], ['_controller' => 'App\\Controller\\AdminAdController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/ads']], [], []],
        'admin.bookings.index' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\AdminBookingController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/bookings']], [], []],
        'admin.bookings.edit' => [['id'], ['_controller' => 'App\\Controller\\AdminBookingController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/bookings']], [], []],
        'admin.bookings.delete' => [['id'], ['_controller' => 'App\\Controller\\AdminBookingController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/bookings']], [], []],
        'admin.comments.index' => [['page'], ['page' => '1', '_controller' => 'App\\Controller\\AdminCommentController::index'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page', true], ['text', '/admin/comments']], [], []],
        'admin.comments.edit' => [['id'], ['_controller' => 'App\\Controller\\AdminCommentController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/comments']], [], []],
        'admin.comments.delete' => [['id'], ['_controller' => 'App\\Controller\\AdminCommentController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/comments']], [], []],
        'admin.dashboard' => [[], ['_controller' => 'App\\Controller\\AdminDashboardController::index'], [], [['text', '/admin']], [], []],
        'admin.user.index' => [[], ['_controller' => 'App\\Controller\\AdminUserController::index'], [], [['text', '/admin/users']], [], []],
        'admin.user.edit' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::edit'], [], [['text', '/modifier'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], []],
        'admin.user.delete' => [['id'], ['_controller' => 'App\\Controller\\AdminUserController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/users']], [], []],
        'admin.user.login' => [[], ['_controller' => 'App\\Controller\\AdminUserController::login'], [], [['text', '/admin/login']], [], []],
        'admin.user.logout' => [[], ['_controller' => 'App\\Controller\\AdminUserController::logout'], [], [['text', '/admin/logout']], [], []],
        'booking.create' => [['slug'], ['_controller' => 'App\\Controller\\BookingController::book'], [], [['text', '/book'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/annonce']], [], []],
        'booking.show' => [['id'], ['_controller' => 'App\\Controller\\BookingController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/reservation']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
        'user.register' => [[], ['_controller' => 'App\\Controller\\UserController::register'], [], [['text', '/mon-compte/inscription']], [], []],
        'user.profile' => [[], ['_controller' => 'App\\Controller\\UserController::profile'], [], [['text', '/mon-compte/editer-profil']], [], []],
        'user.password' => [[], ['_controller' => 'App\\Controller\\UserController::updatePassword'], [], [['text', '/mon-compte/modifier-mot-de-passe']], [], []],
        'user.login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/mon-compte/identification']], [], []],
        'user.logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/mon-compte/deconnexion']], [], []],
        'user.account' => [[], ['_controller' => 'App\\Controller\\UserController::account'], [], [['text', '/mon-compte']], [], []],
        'user.bookings' => [[], ['_controller' => 'App\\Controller\\UserController::bookings'], [], [['text', '/mon-compte/reservations']], [], []],
        'user.show' => [['slug'], ['_controller' => 'App\\Controller\\UserPageController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/utilisateur']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

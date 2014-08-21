<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_search' => true,
       '_coachellamylineup' => true,
       '_showText' => true,
       '_dropEdit' => true,
       '_imageDrop' => true,
       '_imageUpload' => true,
       '_textDrop' => true,
       '_showLayouts' => true,
       '_getLayout' => true,
       '_createCMS' => true,
       '_updateCMS' => true,
       '_checkLayout' => true,
       '_createArtist' => true,
       '_deleteArtists' => true,
       '_artistPage' => true,
       '_updateStage' => true,
       '_signup' => true,
       '_topArtists' => true,
       '_addToMylineup' => true,
       '_checkVB' => true,
       '_createMylineup' => true,
       '_removeMylineup' => true,
       '_createStage' => true,
       '_editStage' => true,
       '_deleteStage' => true,
       '_editArtists' => true,
       '_showArtists' => true,
       '_createArtists' => true,
       '_showStages' => true,
       '_userpage' => true,
       '_checkFrontgate' => true,
       '_mylineup' => true,
       '_logout' => true,
       '_login' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search',  ),));
    }

    private function get_coachellamylineupRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\MyLineupController::coachellamylineupAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/coachellamylineup/',  ),));
    }

    private function get_showTextRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::showTextAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/showText',  ),));
    }

    private function get_dropEditRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::dropEditAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/dropEdit',  ),));
    }

    private function get_imageDropRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::imageDropAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/imageDrop',  ),));
    }

    private function get_imageUploadRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::imageUploadAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/imageUpload',  ),));
    }

    private function get_textDropRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::textDropAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/textDrop',  ),));
    }

    private function get_showLayoutsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::showLayoutsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/showLayouts',  ),));
    }

    private function get_getLayoutRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::getLayoutAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/getLayout',  ),));
    }

    private function get_createCMSRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::createCMSAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/cms',  ),));
    }

    private function get_updateCMSRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::updateCMSAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/updateCMS',  ),));
    }

    private function get_checkLayoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::checkLayoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/checkLayout',  ),));
    }

    private function get_createArtistRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\ArtistsController::createArtistsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/createArtist',  ),));
    }

    private function get_deleteArtistsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\ArtistsController::deleteArtistsAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/deleteArtists',  ),));
    }

    private function get_artistPageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\ArtistsController::artistPageAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/artistPage',  ),));
    }

    private function get_updateStageRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'artist',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\StagesController::updateStageAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'artist',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/updateStage',  ),));
    }

    private function get_signupRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::createUserAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/signup',  ),));
    }

    private function get_topArtistsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\MylineupController::getTopArtistsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/topArtists',  ),));
    }

    private function get_addToMylineupRouteInfo()
    {
        return array(array (  0 => 'id',  1 => 'date',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\MylineupController::addToMylineupAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'date',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/addToMylineup',  ),));
    }

    private function get_checkVBRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::checkVBAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/checkVB',  ),));
    }

    private function get_createMylineupRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\MylineupController::createMylineupAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/createMylineup',  ),));
    }

    private function get_removeMylineupRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\MylineupController::removeMylineupAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/removeMylineup',  ),));
    }

    private function get_createStageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\StagesController::createStageAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/createStage',  ),));
    }

    private function get_editStageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\StagesController::editStageAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/editStage',  ),));
    }

    private function get_deleteStageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\StagesController::deleteStageAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/deleteStage',  ),));
    }

    private function get_editArtistsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\ArtistsController::editArtistsAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/editArtists',  ),));
    }

    private function get_showArtistsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\ArtistsController::showArtistsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/showArtists',  ),));
    }

    private function get_createArtistsRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\StagesController::createArtistsAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/createArtists',  ),));
    }

    private function get_showStagesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\StagesController::showStagesAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/showStages',  ),));
    }

    private function get_userpageRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::userPageAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/userpage',  ),));
    }

    private function get_checkFrontgateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::checkFrontgateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/checkFrontgate',  ),));
    }

    private function get_mylineupRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\MylineupController::mylineupAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/mylineup',  ),));
    }

    private function get_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function get_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::loginUserAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }
}

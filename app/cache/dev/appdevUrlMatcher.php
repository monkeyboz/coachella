<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::searchAction',  '_route' => '_search',);
        }

        // _coachellamylineup
        if (rtrim($pathinfo, '/') === '/coachellamylineup') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_coachellamylineup');
            }
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\MyLineupController::coachellamylineupAction',  '_route' => '_coachellamylineup',);
        }

        // _showText
        if (0 === strpos($pathinfo, '/showText') && preg_match('#^/showText/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::showTextAction',)), array('_route' => '_showText'));
        }

        // _dropEdit
        if ($pathinfo === '/dropEdit') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::dropEditAction',  '_route' => '_dropEdit',);
        }

        // _imageDrop
        if ($pathinfo === '/imageDrop') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::imageDropAction',  '_route' => '_imageDrop',);
        }

        // _imageUpload
        if ($pathinfo === '/imageUpload') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::imageUploadAction',  '_route' => '_imageUpload',);
        }

        // _textDrop
        if ($pathinfo === '/textDrop') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::textDropAction',  '_route' => '_textDrop',);
        }

        // _showLayouts
        if ($pathinfo === '/showLayouts') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::showLayoutsAction',  '_route' => '_showLayouts',);
        }

        // _getLayout
        if (0 === strpos($pathinfo, '/getLayout') && preg_match('#^/getLayout/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::getLayoutAction',)), array('_route' => '_getLayout'));
        }

        // _createCMS
        if ($pathinfo === '/cms') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::createCMSAction',  '_route' => '_createCMS',);
        }

        // _updateCMS
        if ($pathinfo === '/updateCMS') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::updateCMSAction',  '_route' => '_updateCMS',);
        }

        // _checkLayout
        if ($pathinfo === '/checkLayout') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\CMSController::checkLayoutAction',  '_route' => '_checkLayout',);
        }

        // _createArtist
        if ($pathinfo === '/createArtist') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\ArtistsController::createArtistsAction',  '_route' => '_createArtist',);
        }

        // _deleteArtists
        if (0 === strpos($pathinfo, '/deleteArtists') && preg_match('#^/deleteArtists/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\ArtistsController::deleteArtistsAction',)), array('_route' => '_deleteArtists'));
        }

        // _artistPage
        if (0 === strpos($pathinfo, '/artistPage') && preg_match('#^/artistPage/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\ArtistsController::artistPageAction',)), array('_route' => '_artistPage'));
        }

        // _updateStage
        if (0 === strpos($pathinfo, '/updateStage') && preg_match('#^/updateStage/(?P<id>[^/]+?)/(?P<artist>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\StagesController::updateStageAction',)), array('_route' => '_updateStage'));
        }

        // _signup
        if ($pathinfo === '/signup') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::createUserAction',  '_route' => '_signup',);
        }

        // _topArtists
        if ($pathinfo === '/topArtists') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\MylineupController::getTopArtistsAction',  '_route' => '_topArtists',);
        }

        // _addToMylineup
        if (0 === strpos($pathinfo, '/addToMylineup') && preg_match('#^/addToMylineup/(?P<id>[^/]+?)/(?P<date>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\MylineupController::addToMylineupAction',)), array('_route' => '_addToMylineup'));
        }

        // _checkVB
        if ($pathinfo === '/checkVB') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::checkVBAction',  '_route' => '_checkVB',);
        }

        // _createMylineup
        if (0 === strpos($pathinfo, '/createMylineup') && preg_match('#^/createMylineup/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\MylineupController::createMylineupAction',)), array('_route' => '_createMylineup'));
        }

        // _removeMylineup
        if (0 === strpos($pathinfo, '/removeMylineup') && preg_match('#^/removeMylineup/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\MylineupController::removeMylineupAction',)), array('_route' => '_removeMylineup'));
        }

        // _createStage
        if ($pathinfo === '/createStage') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\StagesController::createStageAction',  '_route' => '_createStage',);
        }

        // _editStage
        if (0 === strpos($pathinfo, '/editStage') && preg_match('#^/editStage/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\StagesController::editStageAction',)), array('_route' => '_editStage'));
        }

        // _deleteStage
        if (0 === strpos($pathinfo, '/deleteStage') && preg_match('#^/deleteStage/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\StagesController::deleteStageAction',)), array('_route' => '_deleteStage'));
        }

        // _editArtists
        if (0 === strpos($pathinfo, '/editArtists') && preg_match('#^/editArtists/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\ArtistsController::editArtistsAction',)), array('_route' => '_editArtists'));
        }

        // _showArtists
        if ($pathinfo === '/showArtists') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\ArtistsController::showArtistsAction',  '_route' => '_showArtists',);
        }

        // _createArtists
        if (0 === strpos($pathinfo, '/createArtists') && preg_match('#^/createArtists/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\StagesController::createArtistsAction',)), array('_route' => '_createArtists'));
        }

        // _showStages
        if ($pathinfo === '/showStages') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\StagesController::showStagesAction',  '_route' => '_showStages',);
        }

        // _userpage
        if (0 === strpos($pathinfo, '/userpage') && preg_match('#^/userpage/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::userPageAction',)), array('_route' => '_userpage'));
        }

        // _checkFrontgate
        if ($pathinfo === '/checkFrontgate') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::checkFrontgateAction',  '_route' => '_checkFrontgate',);
        }

        // _mylineup
        if (0 === strpos($pathinfo, '/mylineup') && preg_match('#^/mylineup/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Coachella\\UserBundle\\Controller\\MylineupController::mylineupAction',)), array('_route' => '_mylineup'));
        }

        // _logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::logoutAction',  '_route' => '_logout',);
        }

        // _login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Coachella\\UserBundle\\Controller\\DefaultController::loginUserAction',  '_route' => '_login',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

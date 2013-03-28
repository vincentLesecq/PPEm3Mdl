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

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
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
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#s', $pathinfo, $matches)) {
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/Mdl')) {
            // LamMdlBundle_homepage
            if (rtrim($pathinfo, '/') === '/Mdl') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'LamMdlBundle_homepage');
                }
                return array (  '_controller' => 'Lam\\MdlBundle\\Controller\\DefaultController::indexAction',  '_route' => 'LamMdlBundle_homepage',);
            }

            // LamMdlBundle_formationinformatique
            if ($pathinfo === '/Mdl/fi') {
                return array (  '_controller' => 'Lam\\MdlBundle\\Controller\\FormationInformatiqueController::listeAction',  '_route' => 'LamMdlBundle_formationinformatique',);
            }

            // LamMdlBundle_contenuformationinformatique
            if (0 === strpos($pathinfo, '/Mdl/contenufi') && preg_match('#^/Mdl/contenufi(?:/(?P<num>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Lam\\MdlBundle\\Controller\\FormationInformatiqueController::contenuinfoAction',  'num' => 1,)), array('_route' => 'LamMdlBundle_contenuformationinformatique'));
            }

            // LamMdlBundle_datesstageinfo
            if (0 === strpos($pathinfo, '/Mdl/datesstageinfo') && preg_match('#^/Mdl/datesstageinfo(?:/(?P<num>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Lam\\MdlBundle\\Controller\\FormationInformatiqueController::stageAction',  'num' => 1,)), array('_route' => 'LamMdlBundle_datesstageinfo'));
            }

            // LamMdlBundle_formationsport
            if ($pathinfo === '/Mdl/fs') {
                return array (  '_controller' => 'Lam\\MdlBundle\\Controller\\FormationSportController::listeAction',  '_route' => 'LamMdlBundle_formationsport',);
            }

            // LamMdlBundle_contenuformationsport
            if (0 === strpos($pathinfo, '/Mdl/contenufs') && preg_match('#^/Mdl/contenufs(?:/(?P<num>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Lam\\MdlBundle\\Controller\\FormationSportController::contenusportAction',  'num' => 1,)), array('_route' => 'LamMdlBundle_contenuformationsport'));
            }

            // LamMdlBundle_datesstagesport
            if (0 === strpos($pathinfo, '/Mdl/datesstagesport') && preg_match('#^/Mdl/datesstagesport(?:/(?P<num>[^/]+?))?$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Lam\\MdlBundle\\Controller\\FormationSportController::stageAction',  'num' => 1,)), array('_route' => 'LamMdlBundle_datesstagesport'));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

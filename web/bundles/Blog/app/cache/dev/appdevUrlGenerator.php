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
       'BlogBlogBundle_homepage' => true,
       'BlogBlogBundle_adminpage' => true,
       'BlogBlogBundle_contactopage' => true,
       'BlogBlogBundle_enviarmailpage' => true,
       'BlogBlogBundle_nuevaentradapage' => true,
       'BlogBlogBundle_crearentradapage' => true,
       'BlogBlogBundle_entradapage' => true,
       'BlogBlogBundle_crearcomentariopage' => true,
       'BlogBlogBundle_archivoaniopage' => true,
       'manage_entrada' => true,
       'manage_entrada_show' => true,
       'manage_entrada_new' => true,
       'manage_entrada_create' => true,
       'manage_entrada_edit' => true,
       'manage_entrada_update' => true,
       'manage_entrada_delete' => true,
       'manage_comentario' => true,
       'manage_comentario_show' => true,
       'manage_comentario_new' => true,
       'manage_comentario_create' => true,
       'manage_comentario_edit' => true,
       'manage_comentario_update' => true,
       'manage_comentario_delete' => true,
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
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
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

    private function getBlogBlogBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/index',  ),));
    }

    private function getBlogBlogBundle_adminpageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\DefaultController::adminAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin',  ),));
    }

    private function getBlogBlogBundle_contactopageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\DefaultController::contactoAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contacto',  ),));
    }

    private function getBlogBlogBundle_enviarmailpageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\DefaultController::enviarmailAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/enviarmail',  ),));
    }

    private function getBlogBlogBundle_nuevaentradapageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\DefaultController::nuevaentradaAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/nuevaentrada',  ),));
    }

    private function getBlogBlogBundle_crearentradapageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\DefaultController::crearentradaAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/crearentrada',  ),));
    }

    private function getBlogBlogBundle_entradapageRouteInfo()
    {
        return array(array (  0 => 'anio',  1 => 'mes',  2 => 'name',), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\DefaultController::entradaAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '-',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/entrada',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'mes',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'anio',  ),));
    }

    private function getBlogBlogBundle_crearcomentariopageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\DefaultController::crearcomentarioAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/crearcomentario',  ),));
    }

    private function getBlogBlogBundle_archivoaniopageRouteInfo()
    {
        return array(array (  0 => 'anio',), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\DefaultController::archivoanioAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'anio',  ),  1 =>   array (    0 => 'text',    1 => '/archivo',  ),));
    }

    private function getmanage_entradaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\EntradaController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/manage/entrada/',  ),));
    }

    private function getmanage_entrada_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\EntradaController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/entrada',  ),));
    }

    private function getmanage_entrada_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\EntradaController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/manage/entrada/new',  ),));
    }

    private function getmanage_entrada_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\EntradaController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/manage/entrada/create',  ),));
    }

    private function getmanage_entrada_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\EntradaController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/entrada',  ),));
    }

    private function getmanage_entrada_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\EntradaController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/entrada',  ),));
    }

    private function getmanage_entrada_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\EntradaController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/entrada',  ),));
    }

    private function getmanage_comentarioRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\ComentarioController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/manage/comentario/',  ),));
    }

    private function getmanage_comentario_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\ComentarioController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/comentario',  ),));
    }

    private function getmanage_comentario_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\ComentarioController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/manage/comentario/new',  ),));
    }

    private function getmanage_comentario_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\ComentarioController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/manage/comentario/create',  ),));
    }

    private function getmanage_comentario_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\ComentarioController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/comentario',  ),));
    }

    private function getmanage_comentario_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\ComentarioController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/comentario',  ),));
    }

    private function getmanage_comentario_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Blog\\Bundle\\BlogBundle\\Controller\\ComentarioController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/comentario',  ),));
    }
}

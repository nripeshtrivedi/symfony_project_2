<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::newAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/loggedin')) {
                // create
                if ($pathinfo === '/loggedin') {
                    return array (  '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::loggedinAction',  '_route' => 'create',);
                }

                // process
                if ($pathinfo === '/loggedin2') {
                    return array (  '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::processAction',  '_route' => 'process',);
                }

                // answer
                if ($pathinfo === '/loggedin_answer') {
                    return array (  '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::answerAction',  '_route' => 'answer',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Acme\\TaskBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

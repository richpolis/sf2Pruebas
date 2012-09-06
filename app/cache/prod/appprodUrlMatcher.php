<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // EnsJobeetBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'EnsJobeetBundle_homepage'));
        }

        if (0 === strpos($pathinfo, '/ens_job')) {
            // ens_job
            if (rtrim($pathinfo, '/') === '/ens_job') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ens_job');
                }
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'ens_job',);
            }

            // ens_job_show
            if (preg_match('#^/ens_job/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::showAction',)), array('_route' => 'ens_job_show'));
            }

            // ens_job_new
            if ($pathinfo === '/ens_job/new') {
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::newAction',  '_route' => 'ens_job_new',);
            }

            // ens_job_create
            if ($pathinfo === '/ens_job/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_create;
                }
                return array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::createAction',  '_route' => 'ens_job_create',);
            }
            not_ens_job_create:

            // ens_job_edit
            if (preg_match('#^/ens_job/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::editAction',)), array('_route' => 'ens_job_edit'));
            }

            // ens_job_update
            if (preg_match('#^/ens_job/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::updateAction',)), array('_route' => 'ens_job_update'));
            }
            not_ens_job_update:

            // ens_job_delete
            if (preg_match('#^/ens_job/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ens_job_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Ens\\JobeetBundle\\Controller\\JobController::deleteAction',)), array('_route' => 'ens_job_delete'));
            }
            not_ens_job_delete:

        }

        if (0 === strpos($pathinfo, '/blogger')) {
            // BloggerBlogBundle_homepage
            if (rtrim($pathinfo, '/') === '/blogger') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_BloggerBlogBundle_homepage;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'BloggerBlogBundle_homepage');
                }
                return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::indexAction',  '_route' => 'BloggerBlogBundle_homepage',);
            }
            not_BloggerBlogBundle_homepage:

            // BloggerBlogBundle_about
            if ($pathinfo === '/blogger/about') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_BloggerBlogBundle_about;
                }
                return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::aboutAction',  '_route' => 'BloggerBlogBundle_about',);
            }
            not_BloggerBlogBundle_about:

            // BloggerBlogBundle_contact
            if ($pathinfo === '/blogger/contact') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_BloggerBlogBundle_contact;
                }
                return array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::contactAction',  '_route' => 'BloggerBlogBundle_contact',);
            }
            not_BloggerBlogBundle_contact:

            // BloggerBlogBundle_blog_show
            if (preg_match('#^/blogger/(?P<id>\\d+)/(?P<slug>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_BloggerBlogBundle_blog_show;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\BlogController::showAction',)), array('_route' => 'BloggerBlogBundle_blog_show'));
            }
            not_BloggerBlogBundle_blog_show:

            // BloggerBlogBundle_comment_create
            if (0 === strpos($pathinfo, '/blogger/comment') && preg_match('#^/blogger/comment/(?P<blog_id>\\d+)$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_BloggerBlogBundle_comment_create;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\CommentController::createAction',)), array('_route' => 'BloggerBlogBundle_comment_create'));
            }
            not_BloggerBlogBundle_comment_create:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

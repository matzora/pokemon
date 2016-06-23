<?php
/**
 * Created by PhpStorm.
 * User: Mathieu
 * Date: 22/06/2016
 * Time: 16:04
 */

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class APIController extends FOSRestController
{
    /**
     * @Route("/")
     *
     * @Method("GET")
     *
     * @return View
     */
    public function getAllUser(): View
    {
        $routes = array(
            0 => "/user",
            1 => "/pokemon",
            2 => "/trainer"

        );

        $view = $this->view($routes, 200)->setFormat('json');

        return $view;
    }
}
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
     * @Method("POST")
     *
     * @return View
     */
    public function getAllUser(): View
    {
        $routes = array(
            "login" => "/user",
            "pokemon" => "/pokemon",
            "type" => "/type",
            "attack" => "/attack"
        );

        $view = $this->view($routes, 200)->setFormat('json');

        return $view;
    }
}
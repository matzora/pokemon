<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Attack;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AttackController extends FOSRestController
{
    /**
     * @Route("/")
     *
     * @Method("GET")
     *
     * @return View
     */
    public function getAllPokemons(): View
    {
        $attack = $this->getDoctrine()->getRepository('AppBundle:Attack')->findAll();

        $view = $this->view($attack, 200)->setFormat('json');

        return $view;
    }
}
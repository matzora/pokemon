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
     * @Method("POST")
     *
     * @return View
     */
    public function getAllAttacks(): View
    {
        $attack = $this->getDoctrine()->getRepository('AppBundle:Attack')->findAll();

        $view = $this->view($attack, 200)->setFormat('json');

        return $view;
    }

    /**
     * @Route("/{id}", requirements={
     *     "id": "\d+"
     * })
     *
     * @ParamConverter("attack", class="AppBundle:Attack")
     *
     * @Method("POST")
     *
     * @param Attack $attack
     * @return View
     */
    public function getAttack(Attack $attack): View
    {
        if (!$attack instanceof Attack) {
            throw new NotFoundHttpException('No attack found');
        }

        $view = $this->view($attack, 200)->setFormat('json');

        return $view;
    }
}
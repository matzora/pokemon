<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Multiplicator;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MultiplicatorController extends FOSRestController
{
    /**
     * @Route("/")
     *
     * @Method("POST")
     *
     * @return View
     */
    public function getAllMultiplicators(): View
    {
        $multiplicator = $this->getDoctrine()->getRepository('AppBundle:Multiplicator')->findAll();

        $view = $this->view($multiplicator, 200)->setFormat('json');

        return $view;
    }

    /**
     * @Route("/{id}", requirements={
     *     "id": "\d+"
     * })
     *
     * @ParamConverter("multiplicator", class="AppBundle:Multiplicator")
     *
     * @Method("POST")
     *
     * @param Multiplicator $multiplicator
     * @return View
     */
    public function getMultiplicator(Multiplicator $multiplicator): View
    {
        if (!$multiplicator instanceof Multiplicator) {
            throw new NotFoundHttpException('No multiplicator found');
        }

        $view = $this->view($multiplicator, 200)->setFormat('json');

        return $view;
    }
}
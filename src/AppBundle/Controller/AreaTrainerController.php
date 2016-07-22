<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AreaTrainer;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AreaTrainerController extends FOSRestController
{
    /**
     * @Route("/")
     *
     * @Method("POST")
     *
     * @return View
     */
    public function getAllAreaTrainers(): View
    {
        $areaTrainers = $this->getDoctrine()->getRepository('AppBundle:AreaTrainer')->findAll();

        $view = $this->view($areaTrainers, 200)->setFormat('json');

        return $view;
    }

    /**
     * @Route("/{id}", requirements={
     *     "id": "\d+"
     * })
     *
     * @ParamConverter("areaTrainer", class="AppBundle:AreaTrainer")
     *
     * @Method("POST")
     *
     * @param AreaTrainer $areaTrainer
     * @return View
     */
    public function getAreaTrainer(AreaTrainer $areaTrainer): View
    {
        if (!$areaTrainer instanceof AreaTrainer) {
            throw new NotFoundHttpException('No areaTrainer found');
        }

        $view = $this->view($areaTrainer, 200)->setFormat('json');

        return $view;
    }
}
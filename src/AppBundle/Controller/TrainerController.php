<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Trainer;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TrainerController extends FOSRestController
{
    /**
     * @Route("/")
     *
     * @Method("POST")
     *
     * @return View
     */
    public function getAllTrainers(): View
    {
        $trainers = $this->getDoctrine()->getRepository('AppBundle:Trainer')->findAll();

        $view = $this->view($trainers, 200)->setFormat('json');

        return $view;
    }

    /**
     * @Route("/{id}", requirements={
     *     "id": "\d+"
     * })
     *
     * @ParamConverter("trainer", class="AppBundle:Trainer")
     *
     * @Method("POST")
     *
     * @param Trainer $trainer
     * @return View
     */
    public function getTrainer(Trainer $trainer): View
    {
        if (!$trainer instanceof Trainer) {
            throw new NotFoundHttpException('No trainer found');
        }

        $view = $this->view($trainer, 200)->setFormat('json');

        return $view;
    }
}
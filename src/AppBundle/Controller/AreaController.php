<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Area;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AreaController extends FOSRestController
{
    /**
     * @Route("/")
     *
     * @Method("POST")
     *
     * @return View
     */
    public function getAllAreas(): View
    {
        $area = $this->getDoctrine()->getRepository('AppBundle:Area')->findAll();

        $view = $this->view($area, 200)->setFormat('json');

        return $view;
    }

    /**
     * @Route("/{id}", requirements={
     *     "id": "\d+"
     * })
     *
     * @ParamConverter("area", class="AppBundle:Area")
     *
     * @Method("POST")
     *
     * @param Area $area
     * @return View
     */
    public function getArea(Area $area): View
    {
        if (!$area instanceof Area) {
            throw new NotFoundHttpException('No area found');
        }

        $view = $this->view($area, 200)->setFormat('json');

        return $view;
    }
}
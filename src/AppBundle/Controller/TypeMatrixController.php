<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TypeMatrix as TypeMatrix;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TypeMatrixController extends FOSRestController
{
    /**
     * @Route("/")
     *
     * @Method("POST")
     *
     * @return View
     */
    public function getAllTypeMatrix(): View
    {
        $typeMatrix = $this->getDoctrine()->getRepository('AppBundle:TypeMatrix')->findAll();

        $view = $this->view($typeMatrix, 200)->setFormat('json');

        return $view;
    }

    /**
     * @Route("/{id}", requirements={
     *     "id": "\d+"
     * })
     *
     * @ParamConverter("typeMatrix", class="AppBundle:TypeMatrix")
     *
     * @Method("POST")
     *
     * @param TypeMatrix $typeMatrix
     * @return View
     */
    public function getTypeMatrix(TypeMatrix $typeMatrix): View
    {
        if (!$typeMatrix instanceof TypeMatrix) {
            throw new NotFoundHttpException('No typeMatrix found');
        }

        $view = $this->view($typeMatrix, 200)->setFormat('json');

        return $view;
    }
}
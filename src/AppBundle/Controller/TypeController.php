<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Type as Type;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TypeController extends FOSRestController
{
    /**
     * @Route("/")
     *
     * @Method("POST")
     *
     * @return View
     */
    public function getAllPokemons(): View
    {
        $types = $this->getDoctrine()->getRepository('AppBundle:Type')->findAll();

        $view = $this->view($types, 200)->setFormat('json');

        return $view;
    }

    /**
     * @Route("/{id}", requirements={
     *     "id": "\d+"
     * })
     *
     * @ParamConverter("type", class="AppBundle:Type")
     *
     * @Method("POST")
     *
     * @param Type $type
     * @return View
     */
    public function getType(Type $type): View
    {
        if (!$type instanceof Type) {
            throw new NotFoundHttpException('No type found');
        }

        $view = $this->view($type, 200)->setFormat('json');

        return $view;
    }
}
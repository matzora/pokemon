<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\User;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends FOSRestController
{
    /**
     * @Route("/login")
     *
     * @Method("GET")
     *
     *
     * @return View
     */
    public function login(Request $request): View
    {
        $requestData = $request->request->get('security_login');

        $username = $requestData['username'];
        $plainPassword = $requestData['plainPassword'];
        $existsUser = $this->get('fos_user.user_manager')->findUserByUsernameOrEmail($username);
        $factory = $this->get('security.encoder_factory');

        if (!$existsUser instanceof User) {
            $statusCode = 404;
            $content = ['response' => 'User for username = ' . $username . ' is not found.'];
        } else {
            $encoder = $factory->getEncoder($existsUser);
            if (!$encoder->isPasswordValid($existsUser->getPassword(), $plainPassword, $existsUser->getSalt())) {
                $statusCode = 403;
                $content = ['response' => 'Password : ' . $plainPassword . ' mismatch the correct one.'];
            } else {
                $statusCode = 200;
                $content = ['response' => 'Successfully logged in'];
                $this->get('fos_user.security.login_manager')->logInUser('main', $existsUser);
            }
        }
        return $this->view($content, $statusCode)->setFormat('json');
    }

    /**
     * @Route("/login")
     *
     * @Method("POST")
     *
     *
     * @return View
     */
    public function loginPost(Request $request): View
    {
        $params = array();
        $content = $this->get("request")->getContent();
        if (!empty($content))
        {
            $params = json_decode($content, true); // 2nd param to get as array
        }
    }

    /**
     * @Route("/")
     *
     * @Method("GET")
     *
     *
     * @return View
     */
    public function getAllUser(): View
    {
        $users = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();

        if (count($users) == 0) {
            throw new NotFoundHttpException('User not found');
        } else {
            $view = $this->view($users, 200)->setFormat('json');
        }

        return $view;
    }

    /**
     * @Route("/")
     *
     * @Method("POST")
     *
     * @param Request $request
     * @return View
     */
    public function createUser(Request $request): View
    {
        $requestData = $request->request->get('user');

        $user = new User();
        $user->setUsername($requestData['username']);
        $user->setEmail($requestData['email']);
        $user->setPassword($requestData['password']);
        $user->setEnabled($requestData['enabled'] ?? false);

        return $this->validateAndStoreUser($user);
    }

    /**
     * @Route("/{id}", requirements={
     *     "id": "\d+"
     * })
     *
     * @Method("GET")
     *
     * @param $id
     * @return View
     */
    public function getUserById(int $id): View
    {
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);


        if (!$user instanceof User) {
            throw new NotFoundHttpException('User for id=' . $id . ' not found');
        }

        $view = $this->view($user, 200)->setFormat('json');

        return $view;
    }

    /**
     * @Route("/{id}", requirements={
     *     "id": "\d+"
     * })
     *
     * @Method("DELETE")
     *
     * @param $id
     * @return View
     */
    public function deleteUser(int $id): View
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->find($id);

        if (!$user instanceof User) {
            throw new NotFoundHttpException('No user found for id : ' . $id);
        }

        $em->remove($user);
        $em->flush();

        $view = $this->view('User deleted', 200)->setFormat('json');

        return $view;
    }

    /**
     * @Route("/{id}", requirements={
     *     "id": "\d+"
     * })
     *
     * @Method("PUT")
     *
     * @param $id
     * @param Request $request
     * @return View
     */
    public function editUser(int $id, Request $request): View
    {
        /** @var User $user */
        $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($id);

        if (!$user instanceof User) {
            throw new NotFoundHttpException('No user found for id : ' . $id);
        }

        $requestData = $request->request->get('user');

        $user->setUsername($requestData['username']);
        $user->setEmail($requestData['email']);
        $user->setPassword($requestData['password']);
        $user->setEnabled($requestData['enabled']);

        return $this->validateAndStoreUser($user);
    }

    /**
     * @param User $user
     * @return View
     */
    private function validateAndStoreUser(User $user): View
    {
        // Get validator service
        $validator = $this->get('validator');

        // Validate the object
        $listErrors = $validator->validate($user);

        // If form is valid
        if (count($listErrors) == 0) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $statusCode = 200;
            $content = 'User stored';
        } else {
            $statusCode = 400;

            // Return the form errors as content
            $content = $listErrors;
        }

        return $this->view($content, $statusCode)->setFormat('json');
    }
}
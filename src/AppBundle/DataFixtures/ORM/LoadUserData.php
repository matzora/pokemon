<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    /**
     * @var ContainerInterface $container
     */
    private $container;

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        // On récupère le UserManager de FOSUserBundle
        $userManager = $this->container->get('fos_user.user_manager');

        // On initialise le manager
        $em = $this->container->get('doctrine')->getManager('default');

        // On va créer tous nos utilisateurs bidons
        for ($i = 1; $i <= 5; $i++) {
            $user = new User();
            //Required by fos_user
            $user->setUsername('user' . $i);
            $user->setPlainPassword('Abcd1234');
            $user->setEmail('user' . $i . '@pokemon.fr');
            $user->setEnabled(true);

            $user->setName("Rambo 3");



            // On met à jour notre user (on l'enregistre en bdd quoi)
            $userManager->updateUser($user);
        }
    }

    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        // The order in which fixtures will be loaded
        // the lower the number is, the sooner that this fixture is loaded
        return 3;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 05/11/2016
 * Time: 10:46
 */

namespace UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use UserBundle\Entity\Utilisateur;


class UtilisateurData
{
    /*private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {

        $user = new Utilisateur();
        $user->setUsername('admin');
        $user->setEmail("ldmlkf@dfs.com");


        $manager->persist($user);
        $manager->flush();

        $this->addReference('user1',$user);
    }

    public function getOrder()
    {
        return 3;
    }*/
}
<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 05/11/2016
 * Time: 10:03
 */

namespace FrontOfficeBundle\DataFixtures\ORM;


use FrontOfficeBundle\Entity\MailVisiteur;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class MailVisiteurData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $mailvisiteur1 = new MailVisiteur();
        $mailvisiteur1->setEmail("kljdkljsd");
        $mailvisiteur1->setMessage("kljklj");
        $mailvisiteur1->setName("kjklj");
        $mailvisiteur1->setSujet("lkjkj");
        $manager->persist($mailvisiteur1);

        $mailvisiteur2 = new MailVisiteur();
        $mailvisiteur2->setEmail("kljdkljsd");
        $mailvisiteur2->setMessage("kljklj");
        $mailvisiteur2->setName("kjklj");
        $mailvisiteur2->setSujet("lkjkj");
        $manager->persist($mailvisiteur2);

        $mailvisiteur3 = new MailVisiteur();
        $mailvisiteur3->setEmail("kljdkljsd");
        $mailvisiteur3->setMessage("kljklj");
        $mailvisiteur3->setName("kjklj");
        $mailvisiteur3->setSujet("lkjkj");
        $manager->persist($mailvisiteur3);


        $manager->flush();
    }

}
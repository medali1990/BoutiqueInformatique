<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 05/11/2016
 * Time: 10:37
 */

namespace BackOfficeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BackOfficeBundle\Entity\Tva;


class TvaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $tva = new Tva();
        $tva->setNom("lkjkl");
        $tva->setMultiplicate(1.77);
        $tva->setValeur("kljklj");

        $manager->persist($tva);
        $manager->flush();

        $this->addReference('tva1',$tva);
    }

    public function getOrder()
    {
        return 2;
    }
}
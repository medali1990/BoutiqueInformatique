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
use BackOfficeBundle\Entity\Media;


class MediaData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager){
        $media = new Media();
        $media->setAlt('samsung s5');
        $media->setPath('http://images.samsung.com/is/image/samsung/fr_SM-G900FZKAXEF_002_front_black?$TM-Gallery$');

        $manager->persist($media);
        $manager->flush();

        $this->addReference('media1',$media);
    }

    public function getOrder()
    {
     return 1;
    }

}
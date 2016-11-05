<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 05/11/2016
 * Time: 10:36
 */

namespace BackOfficeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BackOfficeBundle\Entity\Categories;


class CategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $categorie = new Categories();
        $categorie->setImageId(1);
        $categorie->setMedia($this->getReference('media1'));
        $categorie->setNom('samsung s5');

        $manager->persist($categorie);
        $manager->flush();

        $this->addReference('categorie1',$categorie);
    }

    public function getOrder()
    {
        // TODO: Implement getOrder() method.

        return 3;
    }

}
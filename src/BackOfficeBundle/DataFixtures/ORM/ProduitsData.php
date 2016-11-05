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
use BackOfficeBundle\Entity\Produits;


class ProduitsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $produit = new Produits();
        $produit->setNom("galaxy s 5");
        $produit->setMedia($this->getReference('media1'));
        $produit->setCategorieId(1);
        $produit->setCategories($this->getReference('categorie1'));
        $produit->setDescription("fdfdf");
        $produit->setDisponible("oui");
        $produit->setImageId(2);
        $produit->setPrix(200);
        $produit->setSoustitre("dfdf");
        $produit->setTva($this->getReference('tva1'));
        $produit->setTvaId(1);

        $manager->persist($produit);
        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}
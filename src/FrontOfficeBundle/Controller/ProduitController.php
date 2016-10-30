<?php
namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontOfficeBundle\Entity\produit;
use FrontOfficeBundle\Form\produitType;
use FrontOfficeBundle\Entity\MailVisiteur;
use FrontOfficeBundle\Form\MailVisiteurType;

class ProduitController Extends Controller {

    public function produitsAction(){

        $em = $this->getDoctrine()->getEntityManager();
        $produits = $em->getRepository('FrontOfficeBundle:produit')->findAll();


        return $this->render('FrontOfficeBundle:produit:produits.html.twig',Array('produits' => $produits ,));
    }

    public function specialofferAction()
    {
        return $this->render('FrontOfficeBundle:produit:specialoffer.html.twig');
    }

    public function camparerAction()
    {
        return $this->render('FrontOfficeBundle:produit:camparer.html.twig');
    }

    public function detailproduitAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $produit = $em->getRepository('FrontOfficeBundle:produit')->find($id);

        return $this->render('FrontOfficeBundle:produit:detailproduit.html.twig',Array('produit' => $produit ,));
    }

}

?>
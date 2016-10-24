<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontOfficeBundle\Entity\produit;
use FrontOfficeBundle\Form\produitType;
use FrontOfficeBundle\Entity\MailVisiteur;
use FrontOfficeBundle\Form\MailVisiteurType;



class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontOfficeBundle:Default:index.html.twig');
    }

    public function ajouterproduitAction()
    {
    	$titre_page=" Ajouter un Produit";

    	$produit = new produit();
    	$form = $this->createForm(new produitType, $produit);

    	$request = $this->get('request');
    	if($request->getMethod()=="POST"){
    		$form->bind($request);
    		if($form->isValid()){
    			$em = $this->getDoctrine()->getEntityManager();
    			$em->persist($produit);
    			$em->flush();
    			return $this->redirect($this->generateUrl('front_office_produits'));
    		}
    	}


    	return $this->render('FrontOfficeBundle:Default:ajouterproduit.html.twig',Array('titre_page' => $titre_page,'form' => $form->createView(),));
    }

    public function specialofferAction()
    {
    	return $this->render('FrontOfficeBundle:Default:specialoffer.html.twig');
    }

    public function nosservicesAction()
    {
    	return $this->render('FrontOfficeBundle:Default:nos_services.html.twig');
    }

    public function contactAction()
    {	
    	$mailvisiteur = new MailVisiteur();
    	
    	$form = $this->createForm(new MailVisiteurType ,$mailvisiteur);

    	$request = $this->getRequest('request');

    	if($request->getMethod() == "POST" ){
    		$form->bind($request);
    		if($form->isValid()){
    			$em = $this->getDoctrine()->getEntityManager();
    			$em->persist($mailvisiteur);
    			$em->flush();

    			return $this->redirect($this->generateUrl('front_office_homepage'));
    		}
    	}
    	return $this->render('FrontOfficeBundle:Default:contact.html.twig', Array('form' => $form->createView(),));
    }

    public function produitsAction()
    {	

    	$em = $this->getDoctrine()->getEntityManager();
    	$produits = $em->getRepository('FrontOfficeBundle:produit')->findAll();


    	return $this->render('FrontOfficeBundle:Default:produits.html.twig',Array('produits' => $produits ,));
    }

    public function camparerAction()
    {
    	return $this->render('FrontOfficeBundle:Default:camparer.html.twig');
    }

    public function passeoublierAction()
    {
    	return $this->render('FrontOfficeBundle:Default:passeoublier.html.twig');
    }

    public function mentionslegalesAction()
    {
    	return $this->render('FrontOfficeBundle:Default:mentionslegales.html.twig');
    }

    public function loginAction()
    {
    	return $this->render('FrontOfficeBundle:Default:login.html.twig');
    }

    public function detailproduitAction($id)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$produit = $thi->getRepository('FrontOfficeBundle:produit')->findBy($id);

    	return $this->render('FrontOfficeBundle:Default:detailproduit.html.twig',Array('produit' => $produit ,));
    }

    public function resumerproduitAction()
    {
    	return $this->render('FrontOfficeBundle:Default:resumerproduit.html.twig');
    }

    public function inscriptionAction()
    {
    	return $this->render('FrontOfficeBundle:Default:inscription.html.twig');
    }
}

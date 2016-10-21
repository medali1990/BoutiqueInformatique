<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontOfficeBundle:Default:index.html.twig');
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
    	return $this->render('FrontOfficeBundle:Default:contact.html.twig');
    }

    public function produitsAction()
    {
    	return $this->render('FrontOfficeBundle:Default:produits.html.twig');
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

    public function detailproduitAction()
    {
    	return $this->render('FrontOfficeBundle:Default:detailproduit.html.twig');
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

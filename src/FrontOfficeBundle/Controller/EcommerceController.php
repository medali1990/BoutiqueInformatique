<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontOfficeBundle\Entity\produit;
use FrontOfficeBundle\Form\produitType;
use FrontOfficeBundle\Entity\MailVisiteur;
use FrontOfficeBundle\Form\MailVisiteurType;



class EcommerceController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontOfficeBundle:ecommerce:index.html.twig');
    }
    
    

    public function nosservicesAction()
    {
        return $this->render('FrontOfficeBundle:ecommerce:nos_services.html.twig');
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
        return $this->render('FrontOfficeBundle:ecommerce:contact.html.twig', Array('form' => $form->createView(),));
    }


    public function mentionslegalesAction()
    {
        return $this->render('FrontOfficeBundle:ecommerce:mentionslegales.html.twig');
    }



}

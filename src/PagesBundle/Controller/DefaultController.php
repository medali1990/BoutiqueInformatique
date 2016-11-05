<?php

namespace PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function menuAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $pages = $em->getRepository('PagesBundle:Pages')->findAll();

        return $this->render('PagesBundle:Default:module/menu.html.twig', array('pages' => $pages));
    }

    public function indexAction($name)
    {
        return $this->render('PagesBundle:Default:index.html.twig', array('name' => $name));
    }

    public function pageAction($id){
        $em = $this->getDoctrine()->getEntityManager();
        $page = $em->getRepository('PagesBundle:Pages')->find($id);
        return $this->render('FrontOfficeBundle:ecommerce:pagesdynamique.html.twig',array('page'=>$page));
    }
}

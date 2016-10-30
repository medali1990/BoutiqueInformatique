<?php
/**
 * Created by PhpStorm.
 * User: sony
 * Date: 29/10/2016
 * Time: 10:27
 */

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontOfficeBundle\Entity\produit;
use FrontOfficeBundle\Form\produitType;
use FrontOfficeBundle\Entity\MailVisiteur;
use FrontOfficeBundle\Form\MailVisiteurType;



class UserTaskController extends Controller
{

    public function panierAction(){

        return $this->render("FrontOfficeBundle:usertask:resumerproduit.html.twig");
    }

    public function loginAction()
    {
        return $this->render('FrontOfficeBundle:usertask:login.html.twig');
    }

    public function passeoublierAction()
    {
        return $this->render('FrontOfficeBundle:usertask:passeoublier.html.twig');
    }

    public function inscriptionAction()
    {
        return $this->render('FrontOfficeBundle:usertask:inscription.html.twig');
    }
}
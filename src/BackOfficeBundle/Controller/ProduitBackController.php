<?php
/**
 * Created by PhpStorm.
 * User: sony
 * Date: 29/10/2016
 * Time: 11:06
 */

namespace BackOfficeBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontOfficeBundle\Entity\produit;
use FrontOfficeBundle\Form\produitType;
use FrontOfficeBundle\Entity\MailVisiteur;
use FrontOfficeBundle\Form\MailVisiteurType;
use BackOfficeBundle\Form\produitsType;
use BackOfficeBundle\Entity\produits;
use Symfony\Component\HttpFoundation\Request;


class ProduitBackController extends Controller
{

    public function ajouterproduitAction()
    {
        $titre_page = " Ajouter un Produit";

        $produit = new produit();
        $form = $this->createForm(new produitType, $produit);

        $request = $this->get('request');
        if ($request->getMethod() == "POST") {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($produit);
                $em->flush();
                return $this->redirect($this->generateUrl('back_office_homepage'));
            }
        }

        return $this->render('BackOfficeBundle:produitback:ajouterproduit.html.twig',Array('titre_page' => $titre_page,'form' => $form->createView(),));

    }


    public function ajoutAction(Request $request)
    {
        $titre_page ="ajout";
        $produit = new produits();
        $form = $this->createForm(new produitsType, $produit);

        $form->handleRequest($request);
        if($request->getMethod() == "POST"){
            if($form->isValid()){
                $task = $form->getData();
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($task);
                $em->flush();
                return $this->redirectToRoute('back_office_homepage');
            }
        }


        return $this->render('BackOfficeBundle:produitback:ajouterproduit.html.twig', Array('titre_page' => $titre_page ,'form' => $form->createView(),));
    }

}
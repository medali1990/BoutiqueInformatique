<?php
/**
 * Created by PhpStorm.
 * User: sony
 * Date: 29/10/2016
 * Time: 12:02
 */

namespace BackOfficeBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DashboardController extends Controller
{

    public function indexAction()
    {

        $titre_page = "Home";
        return $this->render('BackOfficeBundle:ecommerceback:index.html.twig',array('titre_page' => $titre_page));
    }
}
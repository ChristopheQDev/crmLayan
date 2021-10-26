<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;
use App\Form\Type\UserType;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(Request $request): Response
    {

        
        return $this->renderForm('index.html.twig',  [
        
        ]);

    }


   /**
     * @Route("/dashboard", name="app_dashboard")
     */
    public function loggedUser():Response{

        return $this->renderForm('dashboard/dashboard.html.twig',  [
        ]);
    }


}
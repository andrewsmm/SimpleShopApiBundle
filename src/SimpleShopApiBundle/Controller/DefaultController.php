<?php

namespace SimpleShopApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SimpleShopApiBundle:Default:index.html.twig');
    }
}

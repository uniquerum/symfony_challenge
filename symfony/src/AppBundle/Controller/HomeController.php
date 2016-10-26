<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/home")
 */
class HomeController extends Controller {
    
    /**
     * @Route("/welcome", name="home_welcome")
     */
    public function welcomeAction() {
        return $this->render('home/welcome.html.twig');
    }
}

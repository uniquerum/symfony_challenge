<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/user")
 */
class UserController extends Controller {
    
    /**
     * @Route("/edit", name="user_edit")
     */
    public function editAction() {
        return $this->render('user/edit.html.twig');
    }
}

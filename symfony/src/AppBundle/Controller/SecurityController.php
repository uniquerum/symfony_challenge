<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class SecurityController extends Controller {

    /**
     *  @Route("/login", name="login")
     */
    public function loginAction(Request $request) {
        $authentication_utils = $this->get('security.authentication_utils');

        return $this->render('security/login.html.twig', array(
            'last_email'   => $authentication_utils->getlastusername(),
            'error'        => $authentication_utils->getlastauthenticationerror()
        ));

    }

    /**
     *  @Route("/login_check", name="login_check")
     */
    public function loginCheckAction() {
    }

    /**
     *  @Route("/logout", name="logout")
     */
    public function logoutAction() {
    }

}

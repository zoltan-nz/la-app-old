<?php
/**
 * UsersController
 * User: szines
 * Date: 1/01/15
 * Time: 19:07
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller {

    public function cardAction() {
        return $this->render('users/card.html.twig', ['user' => ['name' => 'John Smith', 'phone' => '123456789']]);
    }
}
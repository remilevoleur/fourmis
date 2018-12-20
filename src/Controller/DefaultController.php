<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 07/12/18
 * Time: 15:46
 */

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(){
        return new Response(sprintf('Logged in as %s', $this->getUser()->getUsername()));
    }
}
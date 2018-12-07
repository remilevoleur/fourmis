<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 07/12/18
 * Time: 16:15
 */

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route("/register", name="registration")
     */
    public function register(Request $request)
    {
        $form = $this->createFormBuilder(User::class)
            ->add('email', TextType::class)
            ->add('password', PasswordType::class)
            ->getForm()
        ;

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
        }

        return $this->render('user/register.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
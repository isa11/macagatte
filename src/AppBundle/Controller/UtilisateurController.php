<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\registraterClientType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
// use AppBundle\Form\registrationType;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class UtilisateurController extends Controller
{


    /**
     * @Route("/client", name="client")
     */
    public function registerClientAction(Request $reques, UserPasswordEncoderInterface $passwordEncoder)
    {
        // return new Response("test");
        $utilisateur = new Utilisateur();
        $form = $this->createForm(userType::class, $utilisateur);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($utilisateur, $utilisateur->getPlainPassword());
            $utilisateur->setPassword($password);

            // 4) save the utilisateur!
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();

            // ... do any other work - like sending them an 
        // 1) build the form
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UserType::class, $utilisateur);
            // maybe set a "flash" success message for the utilisateur

            return $this->redirectToRoute('user_registration');
        }

        return $this->render(
            'registration/register.html.twig',
            array('form' => $form->createView())
        );
    }


}

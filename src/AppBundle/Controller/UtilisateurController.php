<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\UtilisateurType;
use AppBundle\Entity\Utilisateur;


// use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
// use AppBundle\Form\registrationType;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class UtilisateurController extends Controller
{


    /**
     * @Route("/client", name="client")
     */
    public function registerClientAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // return new Response("test");
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);

        // 2) handle the submit (will only happen on POST)
        $form = $handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($utilisateur, $utilisateur->getPlainPassword());
            $utilisateur->setPassword($password);

            // 4) save the utilisateur!
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the utilisateur

            return $this->redirectToRoute('user_registration');
        }

        return $this->render(
            'Utilisateur/utilisateur.html.twig',
            array('form' => $form->createView())
        );
    }


}

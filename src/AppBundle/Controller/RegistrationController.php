<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\registrationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use AppBundle\Entity\Utilisateur;


class registrationController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function registrationAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UserType::class, $utilisateur);

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

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the utilisateur

            return $this->redirectToRoute('user_registration');
        }

        return $this->render(
            'register/register.html.twig',
            array('form' => $form->createView())
        );
    }
}
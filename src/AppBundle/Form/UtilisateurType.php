<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;

use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\localiser;

class UtilisateurType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        $builder->add('nom', TextType::class, array('label'=> 'nom', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('prenom', TextType::class, array('label'=> 'prenom','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('adresse', TextType::class, array('label'=> 'adresse','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('tel', TextType::class, array('label'=> 'tel','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add(
                $builder->create('localiser', FormType::class, array('by_reference' => false))
                    ->add('ville', TextType::class)
                    ->add('codePostal', TextType::class)
            );            
            
            
            
    }

    
    public function getParent()

    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }
    
    public function getBlockPrefix()
    
    {
        return 'app_user_registration';
    }
    
    public function getName()
    
    {
        return $this->getBlockPrefix();
    }
}

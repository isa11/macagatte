<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use AppBundle\Entity\Utilisateur;
use AppBundle\Entity\Localiser;
            


class RegistrationType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            
    $builder->add('nom', TextType::class, array('label'=> 'nom', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('prenom', TextType::class, array('label'=> 'prenom','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('adresse', TextType::class, array('label'=> 'adresse','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('tel', TextType::class, array('label'=> 'tel','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('entreprise', TextType::class, array('label'=> 'entreprise','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('description', TextareaType::class, array('label'=> 'description','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('img', TextType::class, array('label'=> 'img','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('nSiren', TextType::class, array('label'=> 'nSiren','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            // ->add('localiser');
            ->add(
            $builder->create('localiser', FormType::class, array('by_reference' => true))
                    ->add('ville', TextType::class)
                    ->add('codePostal', TextType::class)
            );            
            
            // ->add('adresse', TextType::class, array('label'=> 'adresse','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            // ->add('codePostal', TextType::class, array('label'=> 'codePostal','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')));
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Localiser'
        ));
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
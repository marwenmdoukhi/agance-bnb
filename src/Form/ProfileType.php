<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfileType extends AppType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName',TextType::class, $this->getConfig("Prénom", ""))
            ->add('lastName', TextType::class, $this->getConfig("Nom", ""))
            ->add('email', EmailType::class, $this->getConfig("Adresse E-mail", ""))
            ->add('avatar', FileType::class,[
              'mapped'=>false
            ],

                $this->getConfig("Photo de profil", " photo de profil"))
            ->add('presentation', TextType::class, $this->getConfig("Présentation", "Présentez-vous en quelques mots..."))
            ->add('description', TextAreaType::class, $this->getConfig("Description", "Présentez-vous en détails"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

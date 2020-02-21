<?php

namespace App\Form;

use App\Entity\AccountUtilisateur;
use App\Form\ApplicationType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class UtilisateurEditFormType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, $this->getConfiguration('Nom d\'utilisateur *', 'Nom d\'utilisateur...'))
            ->add('emailCompte', EmailType::class, $this->getConfiguration('Adresse email *', 'Adresse email...'))
            // ->add('password', PasswordType::class, $this->getConfiguration('Mot de passe *', 'Mot de passe d\'au moins 8 caractères...'))
            // ->add('passwordConfirm', PasswordType::class, $this->getConfiguration('Confirmer le mot de passe *', 'Confirmer le mot de passe...'))
            ->add('telephone1Utilisateur', TextType::class, $this->getConfiguration('N° Téléphone 1 *', 'N° Téléphone 1...'))
            ->add('telephone2Utilisateur', TextType::class, $this->getConfiguration('N° Téléphone 2', 'N° Téléphone 2...', ['required' => false]))
            //->add('nomPhotoProfil', FileType::class, $this->getConfiguration('Photo de profil', 'Chercher une photo de profil...', ['required' => false]))
            ->add('adresseUtilisateur', TextareaType::class, $this->getConfiguration('Adresse', 'Mettre une adresse...', ['required' => false]));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AccountUtilisateur::class,
        ]);
    }
}

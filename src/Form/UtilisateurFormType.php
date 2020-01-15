<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('username')
            ->add('password')
            ->add('lostPasswordUrl')
            ->add('dateLostPassword')
            ->add('changePassword')
            ->add('emailCompte')
            ->add('nomPhotoProfil')
            ->add('idCompte')
            ->add('actif')
            ->add('supprimer')
            ->add('dateAjout')
            ->add('dateEdit')
            ->add('idUserAuteur')
            ->add('idUserEdit')
            ->add('version')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}

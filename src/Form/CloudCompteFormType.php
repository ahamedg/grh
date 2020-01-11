<?php

namespace App\Form;

use App\Entity\CloudCompte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CloudCompteFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codeCloudCompte')
            ->add('designationCloudCompte')
            ->add('logoCloudCompte')
            ->add('adresseCloudCompte')
            ->add('emailCloudCompte')
            ->add('telephone1CloudCompte')
            ->add('telephone2CloudCompte')
            ->add('profondeurCloudCompte')
            ->add('sigleCloudCompte')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CloudCompte::class,
        ]);
    }
}

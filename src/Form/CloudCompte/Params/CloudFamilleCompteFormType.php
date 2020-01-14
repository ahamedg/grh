<?php

namespace App\Form;

use App\Entity\CloudFamilleCompte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CloudFamilleCompteFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designationCloudFamilleCompte')
            ->add('descriptionCloudFamilleCompte')
            ->add('codeAccesCloudFamilleCompte')
            ->add('cleAccesCloudFamilleCompte')
            ->add('sigleCloudFamilleCompte')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CloudFamilleCompte::class,
        ]);
    }
}

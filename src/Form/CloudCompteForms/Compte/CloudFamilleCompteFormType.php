<?php

namespace App\Form\CloudCompteForms\Compte;

use App\Entity\CloudFamilleCompte;
use App\Entity\CloudTypeCompte;
use App\Entity\MapPays;
use App\Entity\MapStates;
use App\Entity\MapVille;
use App\Form\ApplicationType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CloudFamilleCompteFormType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cloudTypeCompte', EntityType::class, ['class' => CloudTypeCompte::class, 'choice_label' => 'libelle', 'placeholder' => 'Sélectionner un type de compte...'])
            ->add('designationCloudFamilleCompte', TextType::class, $this->getConfiguration('Nom du compte *', 'Saisir le nom du compte...'))
            ->add('codeAccesCloudFamilleCompte', TextType::class, $this->getConfiguration('Code d\'accès *', 'Saisir code d\'accès du compte...'))
            ->add('cleAccesCloudFamilleCompte', PasswordType::class, $this->getConfiguration('Clé d\'accès *', 'Clé d\'accès du compte d\'au moins 8 caractères...'))
            ->add('cleAccesCloudFamilleCompteConfirm', PasswordType::class, $this->getConfiguration('Confirmer la clé d\'accès *', 'Confirmer la clé d\'accès...'))
            ->add('sigleCloudFamilleCompte', TextType::class, $this->getConfiguration('Sigle', 'Saisir sigle du compte...', ['required' => false]))
            ->add('emailCloudFamilleCompte', TextType::class, $this->getConfiguration('Email *', 'Adresse email...'))
            ->add('telephoneCloudFamilleCompte', TextType::class, $this->getConfiguration('N° Téléphone *', 'N° Téléphone...'))
            ->add('pays', EntityType::class, ['class' => MapPays::class, 'choice_label' => 'nomPays', 'placeholder' => 'Sélectionner un pays...'])
            ->add('states', EntityType::class, ['class' => MapStates::class, 'choice_label' => 'nomStates', 'placeholder' => 'Sélectionner un State/Région...'])
            ->add('ville', EntityType::class, ['class' => MapVille::class, 'choice_label' => 'nomVille', 'placeholder' => 'Sélectionner une ville...'])
            ->add('logoCloudFamilleCompte', FileType::class, $this->getConfiguration('Logo', 'Chercher un logo...', ['required' => false]))
            ->add('adresseCloudFamilleCompte', TextareaType::class, $this->getConfiguration('Adresse', 'Mettre une adresse...', ['required' => false]))
            ->add('descriptionCloudFamilleCompte', TextareaType::class, $this->getConfiguration('Description', 'Mettre une description...', ['required' => false]));
        //->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
        // ... adding the name field if needed
        //});
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CloudFamilleCompte::class,
        ]);
    }
}

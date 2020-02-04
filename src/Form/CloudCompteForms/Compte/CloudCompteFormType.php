<?php

namespace App\Form\CloudCompteForms\Compte;

use App\Entity\CloudCategorieService;
use App\Entity\CloudCompte;
use App\Entity\CloudFamilleCompte;
use App\Entity\CloudSection;
use App\Entity\CloudTypeBudget;
use App\Entity\CloudTypeService;
use App\Entity\MapCommune;
use App\Entity\MapPays;
use App\Entity\MapPrefecture;
use App\Entity\MapStates;
use App\Entity\MapVille;
use App\Form\ApplicationType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CloudCompteFormType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('codeCloudCompte')
            //->add('profondeurCloudCompte')
            ->add('cloudFamilleCompte', EntityType::class, ['class' => CloudFamilleCompte::class, 'choice_label' => 'designationCloudFamilleCompte', 'label'=>'Compte parent *', 'placeholder'=>'Sélectionner un compte parent...'])

           // ->add(' cloudFamilleCompte', TextareaType::class, $this->getConfiguration('Compte parent', 'Mettre une adresse...', ['required' => false]))
            ->add('designationCloudCompte', TextType::class, $this->getConfiguration('Nom de service/subdivision *', 'Nom de service/subdivision...'))
            ->add('logoCloudCompte', FileType::class, $this->getConfiguration('Logo', 'Chercher un logo...', ['required' => false]))
            ->add('adresseCloudCompte', TextareaType::class, $this->getConfiguration('Adresse', 'Mettre une adresse...', ['required' => false]))
            ->add('emailCloudCompte', TextType::class, $this->getConfiguration('Email *', 'Adresse email...'))
            ->add('telephone1CloudCompte', TextType::class, $this->getConfiguration('N°Téléphone 1 *', 'N°Téléphone 1...'))
            ->add('telephone2CloudCompte', TextType::class, $this->getConfiguration('N°Téléphone 2', 'N°Téléphone 2...', ['required' => false]))
            ->add('sigleCloudCompte', TextType::class, $this->getConfiguration('Sigle', 'Saisir sigle du compte...', ['required' => false]))
            ->add('pays', EntityType::class, ['class' => MapPays::class, 'choice_label' => 'nomPays', 'label'=>'Pays *', 'placeholder'=>'Sélectionner un pays...'])
            ->add('states', EntityType::class, ['class' => MapStates::class, 'choice_label' => 'nomStates', 'label'=>'State/Région *', 'placeholder'=>'Sélectionner un State/Région...'])
            ->add('ville', EntityType::class, ['class' => MapVille::class, 'choice_label' => 'nomVille', 'label'=>'Ville *', 'placeholder'=>'Sélectionner une ville...'])
            ->add('commune', EntityType::class, ['class' => MapCommune::class, 'choice_label' => 'libelle', 'label'=>'Commune', 'placeholder'=>'Sélectionner une commune...', 'required' => false])
            ->add('prefecture', EntityType::class, ['class' => MapPrefecture::class, 'choice_label' => 'libelle', 'label'=>'Préfecture', 'placeholder'=>'Sélectionner une préfecture...', 'required' => false])
            ->add('cloudTypeBudget', EntityType::class, ['class' => CloudTypeBudget::class, 'choice_label' => 'libelle', 'label'=>'Type de budget', 'placeholder'=>'Sélectionner un type de budget...', 'required' => false])
            ->add('cloudSection', EntityType::class, ['class' => CloudSection::class, 'choice_label' => 'libelle', 'label'=>'Section', 'placeholder'=>'Sélectionner une section...', 'required' => false])
            ->add('cloudCategorieService', EntityType::class, ['class' => CloudCategorieService::class, 'choice_label' => 'libelle', 'label'=>'Catégorie de service *', 'placeholder'=>'Sélectionner une catégorie de service...', 'required' => false])
            ->add('cloudTypeService', EntityType::class, ['class' => CloudTypeService::class, 'choice_label' => 'libelle', 'label'=>'Type de service *', 'placeholder'=>'Sélectionner un type de service...', 'required' => false]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CloudCompte::class,
        ]);
    }
}

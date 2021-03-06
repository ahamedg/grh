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
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CloudFamilleCompteEditFormType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cloudTypeCompte', EntityType::class, ['class' => CloudTypeCompte::class, 'choice_label' => 'libelle', 'placeholder' => 'Sélectionner un type de compte...'])
            ->add('designationCloudFamilleCompte', TextType::class, $this->getConfiguration('Nom du compte *', 'Saisir le nom du compte...'))
            ->add('codeAccesCloudFamilleCompte', TextType::class, $this->getConfiguration('Code d\'accès *', 'Saisir code d\'accès du compte...'))
            //->add('cleAccesCloudFamilleCompte', PasswordType::class, $this->getConfiguration('Clé d\'accès *', 'Saisir clé d\'accès du compte...'))
            ->add('sigleCloudFamilleCompte', TextType::class, $this->getConfiguration('Sigle', 'Saisir sigle du compte...', ['required' => false]))
            ->add('emailCloudFamilleCompte', TextType::class, $this->getConfiguration('Email *', 'Adresse email...'))
            ->add('telephoneCloudFamilleCompte', TextType::class, $this->getConfiguration('N° Téléphone *', 'N° Téléphone...'))
            ->add('pays', EntityType::class, ['class' => MapPays::class, 'choice_label' => 'nomPays', 'placeholder' => 'Sélectionner un pays...'])
            ->add('states', EntityType::class, ['class' => MapStates::class, 'choice_label' => 'nomStates', 'placeholder' => 'Sélectionner un State/Région...'])
            ->add('ville', EntityType::class, ['class' => MapVille::class, 'choice_label' => 'nomVille', 'placeholder' => 'Sélectionner une ville...'])
            ->add('logoCloudFamilleCompte', FileType::class, $this->getConfiguration('Logo', 'Chercher un logo...', ['required' => false]))
            ->add('adresseCloudFamilleCompte', TextareaType::class, $this->getConfiguration('Adresse', 'Mettre une adresse...', ['required' => false]))
            ->add('descriptionCloudFamilleCompte', TextareaType::class, $this->getConfiguration('Description', 'Mettre une description...', ['required' => false]));

        $builder->get('pays')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) {
                //$mapPays = $event->getForm()->getData();
                $form = $event->getForm();
                $this->addStatesField($form->getParent(), $form->getData());

            }
        );
        $builder->addEventListener(FormEvents::POST_SET_DATA,
            function (FormEvent $event) {
                $data = $event->getData();
                /* @var $mapVille MapVille */
                $mapVille = $data->getVille();
                if ($mapVille) {
                    $mapStates = $mapVille->getStates();
                    $mapPays = $mapStates->getPays();
                    $this->addStatesField($event->getForm(), $mapPays);
                    $this->addVilleField($event->getForm(), $mapStates);
                }
            });
    }

    /**
     * Rajoute un champ département au formulaire
     * @param FormInterface $form
     * @param MapPays $mapPays
     * @return void
     */
    private function addStatesField(FormInterface $form, ?MapPays $mapPays)
    {
        $builder = $form->getConfig()->getFormFactory()->createNamedBuilder('states', EntityType::class, null,
            ['class' => MapStates::class, 'choice_label' => 'nomStates', 'label' => 'Département *',
                'placeholder' => $mapPays ? 'Sélectionner un département...' : 'Sélectionner d\'abord un pays...',
                'auto_initialize' => false, 'required' => false,
                'choices' => $mapPays ? $mapPays->getStates() : []]);

        $builder->addEventListener(FormEvents::POST_SUBMIT,
            function (FormEvent $event) {
                //dump($event->getForm());
                $form = $event->getForm();
                $this->addVilleField($form->getParent(), $form->getData());
            });
        $form->add($builder->getForm());
    }

    /**
     * @param FormInterface $form
     * @param MapStates $mapStates
     * @return void
     */
    private function addVilleField(FormInterface $form, ?MapStates $mapStates): void
    {
        $form->add('ville', EntityType::class, ['class' => MapVille::class, 'choice_label' => 'nomVille','label' => 'Ville *',
            'placeholder' => $mapStates ? 'Sélectionner une ville...' : 'Veuiller sélectionner d\'abord un département...', 'required' => false,
            'choices' => $mapStates ? $mapStates->getVilles() : []]);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CloudFamilleCompte::class,
        ]);
    }
}

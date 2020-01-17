<?php

namespace App\Form;

use App\Entity\CloudFamilleCompte;
use App\Entity\CloudTypeCompte;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CloudFamilleCompteFormType extends AbstractType
{

    /*
   * Permet d'avoir la configuration de base d'un champ !
   * @param string $label
   * @param string $placeholder
   * @param array $options
   *@return array
   * */
    private function getConfiguration( $label, $placeholder, $options = [] ) {
        return array_merge([
            'label' => $label,
            'attr' => [
                'placeholder' => $placeholder
            ]
        ], $options);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designationCloudFamilleCompte', TextType::class, $this->getConfiguration( 'Désignation', 'Saisir désignation famille compte...' ))
            ->add('codeAccesCloudFamilleCompte', TextType::class, $this->getConfiguration( 'Code d\'accès', 'Saisir code d"accès famille compte...'))
            ->add('cleAccesCloudFamilleCompte', TextType::class, $this->getConfiguration( 'Clé d\'accès', 'Saisir clé d"accès famille compte...'))
            ->add('sigleCloudFamilleCompte', TextType::class, $this->getConfiguration( 'Sigle', 'Saisir sigle du compte...'))
            ->add('cloudTypeCompte', EntityType::class,['class'=>CloudTypeCompte::class, 'choice_label'=>'libelle'], $this->getConfiguration( 'Type de compte', 'Sélectionner un type de compte...'))
            ->add('descriptionCloudFamilleCompte', TextareaType::class, $this->getConfiguration( 'Description', 'Mettre une description...', ['required'=>false ]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CloudFamilleCompte::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\CloudTypeCompte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CloudTypeCompteFormType extends AbstractType {

    /*
    * Permet d'avoir la configuration de base d'un champ !
    *@param string $label
    *@param string $placeholder
    *@return array
    * */
    private function getConfiguration( $label, $placeholder ) {
        return [
            'label' => $label,
            'attr' => [
                'placeholder' => $placeholder
            ]
        ];
    }

    public function buildForm( FormBuilderInterface $builder, array $options ) {
        $builder
        //->add( 'code', TextType::class, $this->getConfiguration( 'Code', 'Saisir un code...' ) )
        ->add( 'libelle', TextType::class, $this->getConfiguration( 'Libellé', 'Saisir un libellé...' ) )
        ->add( 'description', TextareaType::class, $this->getConfiguration( 'Description', 'Mettre une description...' ) );
    }

    public function configureOptions( OptionsResolver $resolver ) {
        $resolver->setDefaults( [
            'data_class' => CloudTypeCompte::class,
        ] );
    }
}

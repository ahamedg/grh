<?php

namespace App\Form\CloudCompteForms\Params;

use App\Entity\CloudSection;
use App\Form\ApplicationType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CloudSectionFormType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add( 'code', TextType::class, $this->getConfiguration( 'Code', 'Saisir un code...' ) )
            ->add('libelle', TextType::class, $this->getConfiguration('Libellé *', 'Saisir un libellé...'))
            ->add('description', TextareaType::class, $this->getConfiguration('Description', 'Mettre une description...', ['required' => false]));

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CloudSection::class,
        ]);
    }
}

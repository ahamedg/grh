<?php

namespace App\Form;

use App\Entity\MapStates;
use App\Entity\MapPrefecture;
use App\Form\ApplicationType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MapPrefectureFormType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('states', EntityType::class, ['class' => MapStates::class, 'choice_label' => 'nomStates', 'label' => 'States/Régions *', 'placeholder' => 'Sélectionner un State/Région...'])
            //->add('code')
            ->add('libelle', TextType::class, $this->getConfiguration('Libellé *', 'Saisir un libellé...'))
            ->add('description', TextareaType::class, $this->getConfiguration('Description', 'Mettre une description...', ['required' => false]));;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MapPrefecture::class,
        ]);
    }
}

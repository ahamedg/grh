<?php

namespace App\Form\AccountForms;

use App\Entity\AccountAction;
use App\Entity\AccountProfil;
use App\Form\ApplicationType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AccountProfilFormType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('accountAction', EntityType::class, ['class' => AccountAction::class, 'choice_label' => 'libelle', 'label' => 'Action *', 'placeholder' => 'Sélectionner une action...'])
            ->add('libelle', TextType::class, $this->getConfiguration('Libellé *', 'Saisir un libellé...'))
            ->add('description', TextareaType::class, $this->getConfiguration('Description', 'Mettre une description...', ['required' => false]));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AccountProfil::class,
        ]);
    }
}

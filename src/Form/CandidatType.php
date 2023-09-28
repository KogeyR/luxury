<?php

namespace App\Form;

use App\Entity\Candidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('adress')
            ->add('country')
            ->add('nationality')
            ->add('isPassportValid')
            ->add('location')
            ->add('birthAt')
            ->add('placeOfBirth')
            ->add('isAvailable')
            ->add('shortDescription')
            ->add('notes')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('deletedAt')
            ->add('userid')
            ->add('gender')
            ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidat::class,
        ]);
    }
}

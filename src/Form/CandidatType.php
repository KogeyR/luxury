<?php

namespace App\Form;

use App\Entity\Gender;
use App\Entity\Candidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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
            ->add('birthAt', DateType::class, [
                'html5' => true,
                'widget' => 'single_text',
            ])
            ->add('placeOfBirth')
            ->add('isAvailable')
            ->add('shortDescription')
            ->add('notes')     
            ->add('updatedAt')
            ->add('user')
            ->add('gender')
            ->add('category')
            ->add('experience')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidat::class,
        ]);
    }
}

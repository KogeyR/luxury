<?php

namespace App\Form;

use App\Entity\Gender;
use App\Entity\Candidat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
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
            ->add('country', CountryType::class)
            ->add('nationality')
            ->add('location')
            ->add('birthAt', DateType::class, [
                'html5' => true,
                'widget' => 'single_text',
            ])
            ->add('placeOfBirth')
            ->add('shortDescription')    
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

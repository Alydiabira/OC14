<?php

declare(strict_types=1);

namespace App\Form;

use App\Model\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('rating', IntegerType::class, [
                'label' => 'Note',
                'required' => true,
                'attr' => [
                    'min' => 1,
                    'max' => 5,
                ],
            ])
            ->add('comment', TextareaType::class, [
                'label' => 'Commentaire',
                'required' => true,
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Votre avis…',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Review::class,
        ]);
    }
}

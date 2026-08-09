<?php

declare(strict_types=1);

namespace App\Form;

use App\List\VideoGameList\Filter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class FilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('search', TextType::class, [
                'label' => 'Rechercher',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Rechercher...',
                ],
            ])

            // 🔥 IMPORTANT : ChoiceType + multiple
            // On accepte des IDs (strings), pas des objets Tag
            ->add('tags', ChoiceType::class, [
                'label' => 'Tags',
                'required' => false,
                'multiple' => true,
                'expanded' => false,   // select multiple
                'choices' => [],       // tu rempliras plus tard si tu veux
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', Filter::class);
    }
}

<?php

declare(strict_types=1);

namespace App\Form;

use App\List\VideoGameList\Filter;
use App\Doctrine\Repository\TagRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class FilterType extends AbstractType
{
    public function __construct(private TagRepository $tagRepository) {}

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $tags = $this->tagRepository->findAll();

        $choices = [];
        foreach ($tags as $tag) {
            $choices[$tag->getName()] = $tag->getId();
        }

        $builder
            ->add('search', SearchType::class, [
                'required' => false,
                'label'    => 'Rechercher',
            ])
            ->add('tags', ChoiceType::class, [
                'required' => false,
                'multiple' => true,
                'expanded' => true,
                'choices'  => $choices,
                'label'    => 'Tags',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class'        => Filter::class,
            'method'            => 'GET',
            'csrf_protection'   => false,
            'allow_extra_fields' => true,
        ]);
    }
}

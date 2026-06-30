<?php

declare(strict_types=1);

namespace App\Form;

use App\Model\Entity\Review;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class ReviewType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ✔️ Correction : rating → note
            ->add('note', IntegerType::class)
            ->add('comment', TextareaType::class)
        ;
    }
}

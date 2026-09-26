<?php

declare(strict_types=1);

namespace App\Form;

use App\Model\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class RegisterType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefault('data_class', User::class);
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Pseudo',
<<<<<<< HEAD
                'error_bubbling' => true,
                'empty_data' => '',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                'attr' => [
                    'placeholder' => 'Pseudo',
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
<<<<<<< HEAD
                'empty_data' => '',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                'attr' => [
                    'placeholder' => 'Email',
                ]
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Mot de passe',
<<<<<<< HEAD
                'empty_data' => '',
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                'attr' => [
                    'placeholder' => 'Mot de passe',
                ]
            ]);
    }
}

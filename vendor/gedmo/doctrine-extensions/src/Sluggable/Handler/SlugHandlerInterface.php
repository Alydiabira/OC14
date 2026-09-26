<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Sluggable\Handler;

use Doctrine\Persistence\Mapping\ClassMetadata;
use Gedmo\Exception\InvalidMappingException;
use Gedmo\Sluggable\Mapping\Event\SluggableAdapter;
use Gedmo\Sluggable\SluggableListener;

/**
 * Interface defining a handler for the sluggable behavior.
 * Usage is intended only for internal access of the
 * Sluggable extension and should not be used elsewhere.
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
<<<<<<< HEAD
=======
 *
 * @phpstan-import-type SlugConfiguration from SluggableListener
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
interface SlugHandlerInterface
{
    /**
     * Create a new handler instance
     */
    public function __construct(SluggableListener $sluggable);

    /**
     * Hook on slug handlers before the decision is made whether
     * the slug needs to be recalculated.
     *
     * @param array<string, mixed> $config
     * @param object               $object
     * @param string               $slug
     * @param bool                 $needToChangeSlug
     *
<<<<<<< HEAD
=======
     * @phpstan-param SlugConfiguration $config
     *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @return void
     */
    public function onChangeDecision(SluggableAdapter $ea, array &$config, $object, &$slug, &$needToChangeSlug);

    /**
     * Hook on slug handlers called after the slug is built.
     *
     * @param array<string, mixed> $config
     * @param object               $object
     * @param string               $slug
     *
<<<<<<< HEAD
=======
     * @phpstan-param SlugConfiguration $config
     *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @return void
     */
    public function postSlugBuild(SluggableAdapter $ea, array &$config, $object, &$slug);

    /**
     * Hook for slug handlers called after the slug is completed.
     *
     * @param array<string, mixed> $config
     * @param object               $object
     * @param string               $slug
     *
<<<<<<< HEAD
=======
     * @phpstan-param SlugConfiguration $config
     *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @return void
     */
    public function onSlugCompletion(SluggableAdapter $ea, array &$config, $object, &$slug);

    /**
     * @return bool Whether this handler has already urlized the slug
     */
    public function handlesUrlization();

    /**
     * Validates the options for the handler.
     *
<<<<<<< HEAD
     * @param array<string, mixed> $options
=======
     * @param array<string, mixed>  $options
     * @param ClassMetadata<object> $meta
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     *
     * @throws InvalidMappingException if the configuration is invalid
     *
     * @return void
     */
    public static function validate(array $options, ClassMetadata $meta);
}

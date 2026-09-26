<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Sluggable;

use Doctrine\Common\EventArgs;
<<<<<<< HEAD
use Doctrine\Persistence\Event\LoadClassMetadataEventArgs;
=======
use Doctrine\ORM\Mapping\FieldMapping;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Doctrine\Persistence\Event\LoadClassMetadataEventArgs;
use Doctrine\Persistence\Event\ManagerEventArgs;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\Persistence\Mapping\ClassMetadata;
use Doctrine\Persistence\ObjectManager;
use Gedmo\Exception\InvalidArgumentException;
use Gedmo\Mapping\MappedEventSubscriber;
use Gedmo\Sluggable\Handler\SlugHandlerInterface;
use Gedmo\Sluggable\Handler\SlugHandlerWithUniqueCallbackInterface;
use Gedmo\Sluggable\Mapping\Event\SluggableAdapter;
<<<<<<< HEAD
use Gedmo\Sluggable\Util\Urlizer;
=======
use Symfony\Component\String\Slugger\AsciiSlugger;

use function Symfony\Component\String\u;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

/**
 * The SluggableListener handles the generation of slugs
 * for documents and entities.
 *
 * This behavior can impact the performance of your application
 * since it does some additional calculations on persisted objects.
 *
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 * @author Klein Florian <florian.klein@free.fr>
 *
 * @phpstan-type SluggableConfiguration = array{
 *   mappedBy?: string,
 *   pathSeparator?: string,
 *   slug?: string,
<<<<<<< HEAD
 *   slugs?: array<string, array{
 *     fields?: string[],
 *     slug?: string,
 *     style?: string,
 *     dateFormat?: string,
 *     updatable?: bool,
 *     unique?: bool,
 *     unique_base?: string,
 *     separator?: string,
 *     prefix?: string,
 *     suffix?: string,
 *     handlers?: array<class-string, array{
 *       mappedBy?: string,
 *       inverseSlugField?: string,
 *       parentRelationField?: string,
 *       relationClass?: class-string,
 *       relationField?: string,
 *       relationSlugField?: string,
 *       separator?: string,
 *     }>,
 *   }>,
 *   unique?: bool,
 *   useObjectClass?: class-string,
 * }
 *
 * @phpstan-method SluggableConfiguration getConfiguration(ObjectManager $objectManager, $class)
 *
 * @method SluggableAdapter getEventAdapter(EventArgs $args)
=======
 *   slugs?: array<string, SlugConfiguration>,
 *   unique?: bool,
 *   useObjectClass?: class-string,
 * }
 * @phpstan-type SlugConfiguration = array{
 *   fields: string[],
 *   slug: string,
 *   style: string,
 *   dateFormat: string,
 *   pathSeparator?: string,
 *   updatable: bool,
 *   unique: bool,
 *   unique_base: string,
 *   separator: string,
 *   prefix: string,
 *   suffix: string,
 *   handlers: array<class-string, array{
 *     mappedBy?: string,
 *     inverseSlugField?: string,
 *     parentRelationField?: string,
 *     relationClass?: class-string,
 *     relationField?: string,
 *     relationSlugField?: string,
 *     separator?: string,
 *     urilize?: bool,
 *   }>,
 *   uniqueOverTranslations: bool,
 *   useObjectClass?: class-string,
 * }
 *
 * @phpstan-extends MappedEventSubscriber<SluggableConfiguration, SluggableAdapter>
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
 */
class SluggableListener extends MappedEventSubscriber
{
    /**
     * The power exponent to jump
     * the slug unique number by tens.
<<<<<<< HEAD
     *
     * @var int
     */
    private $exponent = 0;
=======
     */
    private int $exponent = 0;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * Transliteration callback for slugs
     *
<<<<<<< HEAD
     * @var callable
     *
     * @phpstan-var callable(string $text, string $separator, object $object): string
     */
    private $transliterator = [Urlizer::class, 'transliterate'];
=======
     * @var callable(string, string, object): string
     */
    private $transliterator;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * Urlize callback for slugs
     *
<<<<<<< HEAD
     * @var callable
     *
     * @phpstan-var callable(string $text, string $separator, object $object): string
     */
    private $urlizer = [Urlizer::class, 'urlize'];
=======
     * @var callable(string, string, object): string
     */
    private $urlizer;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    /**
     * List of inserted slugs for each object class.
     * This is needed in case there are identical slug
     * composition in number of persisted objects
     * during the same flush
     *
     * @var array<string, array<int, object>>
     *
     * @phpstan-var array<class-string, array<int, object>>
     */
    private array $persisted = [];

    /**
     * List of initialized slug handlers
     *
     * @var array<string, SlugHandlerInterface>
     *
     * @phpstan-var array<class-string<SlugHandlerInterface>, SlugHandlerInterface>
     */
    private array $handlers = [];

    /**
     * List of filters which are manipulated when slugs are generated
     *
     * @var array<string, array<string, mixed>>
     */
    private array $managedFilters = [];

<<<<<<< HEAD
=======
    public function __construct()
    {
        parent::__construct();

        $this->setTransliterator(
            static fn (string $text, string $separator, object $object): string => u($text)->ascii()->toString()
        );

        /*
         * Note - Requiring the call to `lower()` in this chain contradicts with the `style` configuration
         * which doesn't require or enforce lowercase styling by default, but the Behat transliterator applied
         * this styling so it is used for B/C
         */

        $this->setUrlizer(
            static fn (string $text, string $separator, object $object): string => (new AsciiSlugger())
                ->slug($text, $separator)
                ->lower()
                ->toString()
        );
    }

>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    /**
     * Specifies the list of events to listen
     *
     * @return string[]
     */
    public function getSubscribedEvents()
    {
        return [
            'onFlush',
            'loadClassMetadata',
            'prePersist',
        ];
    }

    /**
     * Set the transliteration callable method
     * to transliterate slugs
     *
     * @param callable $callable
     *
     * @phpstan-param callable(string $text, string $separator, object $object): string $callable
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public function setTransliterator($callable)
    {
        if (!is_callable($callable)) {
            throw new InvalidArgumentException('Invalid transliterator callable parameter given');
        }
        $this->transliterator = $callable;
    }

    /**
     * Set the urlization callable method
     * to urlize slugs
     *
     * @param callable $callable
     *
     * @phpstan-param callable(string $text, string $separator, object $object): string $callable
     *
     * @throws InvalidArgumentException
     *
     * @return void
     */
    public function setUrlizer($callable)
    {
        if (!is_callable($callable)) {
            throw new InvalidArgumentException('Invalid urlizer callable parameter given');
        }
        $this->urlizer = $callable;
    }

    /**
     * Get currently used transliterator callable
     *
     * @return callable
     *
     * @phpstan-return callable(string $text, string $separator, object $object): string
     */
    public function getTransliterator()
    {
        return $this->transliterator;
    }

    /**
     * Get currently used urlizer callable
     *
     * @return callable
     *
     * @phpstan-return callable(string $text, string $separator, object $object): string
     */
    public function getUrlizer()
    {
        return $this->urlizer;
    }

    /**
     * Enables or disables the given filter when slugs are generated
     *
     * @param string $name
     * @param bool   $disable True by default
     *
     * @return void
     */
    public function addManagedFilter($name, $disable = true)
    {
        $this->managedFilters[$name] = ['disabled' => $disable];
    }

    /**
     * Removes a filter from the managed set
     *
     * @param string $name
     *
     * @return void
     */
    public function removeManagedFilter($name)
    {
        unset($this->managedFilters[$name]);
    }

    /**
     * Mapps additional metadata
     *
     * @param LoadClassMetadataEventArgs $eventArgs
     *
     * @phpstan-param LoadClassMetadataEventArgs<ClassMetadata<object>, ObjectManager> $eventArgs
     *
     * @return void
     */
    public function loadClassMetadata(EventArgs $eventArgs)
    {
        $this->loadMetadataForObjectClass($eventArgs->getObjectManager(), $eventArgs->getClassMetadata());
    }

    /**
     * Allows identifier fields to be slugged as usual
     *
<<<<<<< HEAD
=======
     * @param LifecycleEventArgs $args
     *
     * @phpstan-param LifecycleEventArgs<ObjectManager> $args
     *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @return void
     */
    public function prePersist(EventArgs $args)
    {
        $ea = $this->getEventAdapter($args);
        $om = $ea->getObjectManager();
        $object = $ea->getObject();
        $meta = $om->getClassMetadata(get_class($object));

        if ($config = $this->getConfiguration($om, $meta->getName())) {
            foreach ($config['slugs'] as $slugField => $options) {
                if ($meta->isIdentifier($slugField)) {
<<<<<<< HEAD
                    $meta->getReflectionProperty($slugField)->setValue($object, '__id__');
=======
                    $meta->setFieldValue($object, $slugField, uniqid('__sluggable_placeholder__'));
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                }
            }
        }
    }

    /**
     * Generate slug on objects being updated during flush
     * if they require changing
     *
<<<<<<< HEAD
=======
     * @param ManagerEventArgs $args
     *
     * @phpstan-param ManagerEventArgs<ObjectManager> $args
     *
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     * @return void
     */
    public function onFlush(EventArgs $args)
    {
        $this->persisted = [];
        $ea = $this->getEventAdapter($args);
        $om = $ea->getObjectManager();
        $uow = $om->getUnitOfWork();

        $this->manageFiltersBeforeGeneration($om);

        // process all objects being inserted, using scheduled insertions instead
        // of prePersist in case if record will be changed before flushing this will
        // ensure correct result. No additional overhead is encountered
        foreach ($ea->getScheduledObjectInsertions($uow) as $object) {
            $meta = $om->getClassMetadata(get_class($object));
            if ($this->getConfiguration($om, $meta->getName())) {
                // generate first to exclude this object from similar persisted slugs result
                $this->generateSlug($ea, $object);
                $this->persisted[$ea->getRootObjectClass($meta)][] = $object;
            }
        }
        // we use onFlush and not preUpdate event to let other
        // event listeners be nested together
        foreach ($ea->getScheduledObjectUpdates($uow) as $object) {
            $meta = $om->getClassMetadata(get_class($object));
            if ($this->getConfiguration($om, $meta->getName()) && !$uow->isScheduledForInsert($object)) {
                $this->generateSlug($ea, $object);
                $this->persisted[$ea->getRootObjectClass($meta)][] = $object;
            }
        }

        $this->manageFiltersAfterGeneration($om);
    }

    protected function getNamespace()
    {
        return __NAMESPACE__;
    }

    /**
     * Get the slug handler instance by $class name
     *
     * @phpstan-param class-string $class
     */
    private function getHandler(string $class): SlugHandlerInterface
    {
        if (!isset($this->handlers[$class])) {
            $this->handlers[$class] = new $class($this);
        }

        return $this->handlers[$class];
    }

    /**
     * Creates the slug for object being flushed
     */
    private function generateSlug(SluggableAdapter $ea, object $object): void
    {
        $om = $ea->getObjectManager();
        $meta = $om->getClassMetadata(get_class($object));
        $uow = $om->getUnitOfWork();
        $changeSet = $ea->getObjectChangeSet($uow, $object);
        $isInsert = $uow->isScheduledForInsert($object);
        $config = $this->getConfiguration($om, $meta->getName());

        foreach ($config['slugs'] as $slugField => $options) {
            $hasHandlers = [] !== $options['handlers'];
            $options['useObjectClass'] = $config['useObjectClass'];
            // collect the slug from fields
<<<<<<< HEAD
            $slug = $meta->getReflectionProperty($slugField)->getValue($object);

            // if slug should not be updated, skip it
            if (!$options['updatable'] && !$isInsert && (!isset($changeSet[$slugField]) || '__id__' === $slug)) {
=======
            $slug = $meta->getFieldValue($object, $slugField);

            // if slug should not be updated, skip it
            if (!$options['updatable'] && !$isInsert && (!isset($changeSet[$slugField]) || 0 === strpos($slug, '__sluggable_placeholder__'))) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                continue;
            }
            // must fetch the old slug from changeset, since $object holds the new version
            $oldSlug = isset($changeSet[$slugField]) ? $changeSet[$slugField][0] : $slug;
            $needToChangeSlug = false;

            // if slug is null, regenerate it, or needs an update
<<<<<<< HEAD
            if (null === $slug || '__id__' === $slug || !isset($changeSet[$slugField])) {
=======
            if (null === $slug || 0 === strpos($slug, '__sluggable_placeholder__') || !isset($changeSet[$slugField])) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $slug = '';

                foreach ($options['fields'] as $sluggableField) {
                    if (isset($changeSet[$sluggableField]) || isset($changeSet[$slugField])) {
                        $needToChangeSlug = true;
                    }
<<<<<<< HEAD
                    $value = $meta->getReflectionProperty($sluggableField)->getValue($object);
=======
                    $value = $meta->getFieldValue($object, $sluggableField);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    $slug .= $value instanceof \DateTimeInterface ? $value->format($options['dateFormat']) : $value;
                    $slug .= ' ';
                }
                // trim generated slug as it will have unnecessary trailing space
                $slug = trim($slug);
            } else {
                // slug was set manually
                $needToChangeSlug = true;
            }
            // notify slug handlers --> onChangeDecision
            if ($hasHandlers) {
                foreach ($options['handlers'] as $class => $handlerOptions) {
                    $this->getHandler($class)->onChangeDecision($ea, $options, $object, $slug, $needToChangeSlug);
                }
            }
            // if slug is changed, do further processing
            if ($needToChangeSlug) {
<<<<<<< HEAD
=======
                /** @var FieldMapping|array<mixed> $mapping */
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $mapping = $meta->getFieldMapping($slugField);
                // notify slug handlers --> postSlugBuild
                $urlized = false;

                if ($hasHandlers) {
                    foreach ($options['handlers'] as $class => $handlerOptions) {
                        $this->getHandler($class)->postSlugBuild($ea, $options, $object, $slug);
                        if ($this->getHandler($class)->handlesUrlization()) {
                            $urlized = true;
                        }
                    }
                }

                // build the slug
                // Step 1: transliteration, changing 北京 to 'Bei Jing'
                $slug = call_user_func_array(
                    $this->transliterator,
                    [$slug, $options['separator'], $object]
                );

                // Step 2: urlization (replace spaces by '-' etc...)
                if (!$urlized) {
                    $slug = call_user_func_array(
                        $this->urlizer,
                        [$slug, $options['separator'], $object]
                    );
                }

                // add suffix/prefix
                $slug = $options['prefix'].$slug.$options['suffix'];

                // Step 3: stylize the slug
                switch ($options['style']) {
                    case 'camel':
                        $quotedSeparator = preg_quote($options['separator']);
<<<<<<< HEAD
                        $slug = preg_replace_callback('/^[a-z]|'.$quotedSeparator.'[a-z]/smi', static fn ($m) => strtoupper($m[0]), $slug);
=======
                        $slug = preg_replace_callback(
                            '/^[a-z]|'.$quotedSeparator.'[a-z]/smi',
                            static fn (array $m): string => u($m[0])->upper()->toString(),
                            $slug
                        );
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                        break;

                    case 'lower':
<<<<<<< HEAD
                        if (function_exists('mb_strtolower')) {
                            $slug = mb_strtolower($slug);
                        } else {
                            $slug = strtolower($slug);
                        }
=======
                        $slug = u($slug)->lower()->toString();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                        break;

                    case 'upper':
<<<<<<< HEAD
                        if (function_exists('mb_strtoupper')) {
                            $slug = mb_strtoupper($slug);
                        } else {
                            $slug = strtoupper($slug);
                        }
=======
                        $slug = u($slug)->upper()->toString();
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

                        break;

                    default:
                        // leave it as is
                        break;
                }

                // cut slug if exceeded in length
<<<<<<< HEAD
                if (isset($mapping['length']) && strlen($slug) > $mapping['length']) {
                    $slug = substr($slug, 0, $mapping['length']);
                }

                if (isset($mapping['nullable']) && $mapping['nullable'] && 0 === strlen($slug)) {
=======
                $length = \is_object($mapping)
                    ? $mapping->length
                    : ($mapping['length'] ?? null);
                if (null !== $length && strlen($slug) > $length) {
                    $slug = substr($slug, 0, $length);
                }

                $nullable = \is_object($mapping)
                    ? ($mapping->nullable ?? false)
                    : ($mapping['nullable'] ?? false);
                if ($nullable && 0 === strlen($slug)) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                    $slug = null;
                }

                // notify slug handlers --> beforeMakingUnique
                if ($hasHandlers) {
                    foreach ($options['handlers'] as $class => $handlerOptions) {
                        $handler = $this->getHandler($class);
                        if ($handler instanceof SlugHandlerWithUniqueCallbackInterface) {
                            $handler->beforeMakingUnique($ea, $options, $object, $slug);
                        }
                    }
                }

                // make unique slug if requested
                if ($options['unique'] && null !== $slug) {
                    $this->exponent = 0;
                    $slug = $this->makeUniqueSlug($ea, $object, $slug, false, $options);
                }

                // notify slug handlers --> onSlugCompletion
                if ($hasHandlers) {
                    foreach ($options['handlers'] as $class => $handlerOptions) {
                        $this->getHandler($class)->onSlugCompletion($ea, $options, $object, $slug);
                    }
                }

                // set the final slug
<<<<<<< HEAD
                $meta->getReflectionProperty($slugField)->setValue($object, $slug);
=======
                $meta->setFieldValue($object, $slugField, $slug);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                // recompute changeset
                $ea->recomputeSingleObjectChangeSet($uow, $meta, $object);
                // overwrite changeset (to set old value)
                $uow->propertyChanged($object, $slugField, $oldSlug, $slug);
            }
        }
    }

    /**
     * Generates the unique slug
     *
<<<<<<< HEAD
     * @param array<string, mixed> $config
     */
    private function makeUniqueSlug(SluggableAdapter $ea, object $object, string $preferredSlug, bool $recursing = false, array $config = []): string
=======
     * @param SlugConfiguration $config
     */
    private function makeUniqueSlug(SluggableAdapter $ea, object $object, string $preferredSlug, bool $recursing, array $config): string
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $om = $ea->getObjectManager();
        $meta = $om->getClassMetadata(get_class($object));
        $similarPersisted = [];
        // extract unique base
        $base = false;

        if ($config['unique'] && isset($config['unique_base'])) {
<<<<<<< HEAD
            $base = $meta->getReflectionProperty($config['unique_base'])->getValue($object);
=======
            $base = $meta->getFieldValue($object, $config['unique_base']);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }

        // collect similar persisted slugs during this flush
        if (isset($this->persisted[$class = $ea->getRootObjectClass($meta)])) {
            foreach ($this->persisted[$class] as $obj) {
<<<<<<< HEAD
                if (false !== $base && $meta->getReflectionProperty($config['unique_base'])->getValue($obj) !== $base) {
                    continue; // if unique_base field is not the same, do not take slug as similar
                }
                $slug = $meta->getReflectionProperty($config['slug'])->getValue($obj);
=======
                if (false !== $base && $meta->getFieldValue($obj, $config['unique_base']) !== $base) {
                    continue; // if unique_base field is not the same, do not take slug as similar
                }
                $slug = $meta->getFieldValue($obj, $config['slug']);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                $quotedPreferredSlug = preg_quote($preferredSlug);
                if (preg_match("@^{$quotedPreferredSlug}.*@smi", $slug)) {
                    $similarPersisted[] = [$config['slug'] => $slug];
                }
            }
        }

        // load similar slugs
        $result = [...$ea->getSimilarSlugs($object, $meta, $config, $preferredSlug), ...$similarPersisted];

        // leave only right slugs

        if (!$recursing) {
            // filter similar slugs
            $quotedSeparator = preg_quote($config['separator']);
            $quotedPreferredSlug = preg_quote($preferredSlug);
            foreach ($result as $key => $similar) {
                if (!preg_match("@{$quotedPreferredSlug}($|{$quotedSeparator}[\d]+$)@smi", $similar[$config['slug']])) {
                    unset($result[$key]);
                }
            }
        }

        if ($result) {
            $generatedSlug = $preferredSlug;
            $sameSlugs = [];

            foreach ((array) $result as $list) {
                $sameSlugs[] = $list[$config['slug']];
            }

            $i = 10 ** $this->exponent;
            $uniqueSuffix = (string) $i;
            if ($recursing || in_array($generatedSlug, $sameSlugs, true)) {
                do {
                    $generatedSlug = $preferredSlug.$config['separator'].$uniqueSuffix;
                    $uniqueSuffix = (string) ++$i;
                } while (in_array($generatedSlug, $sameSlugs, true));
            }

            $mapping = $meta->getFieldMapping($config['slug']);
<<<<<<< HEAD
            if (isset($mapping['length']) && strlen($generatedSlug) > $mapping['length']) {
                $generatedSlug = substr(
                    $generatedSlug,
                    0,
                    $mapping['length'] - (strlen($uniqueSuffix) + strlen($config['separator']))
=======
            $length = \is_object($mapping)
                ? $mapping->length
                : ($mapping['length'] ?? null);
            if (null !== $length && strlen($generatedSlug) > $length) {
                $generatedSlug = substr(
                    $generatedSlug,
                    0,
                    $length - (strlen($uniqueSuffix) + strlen($config['separator']))
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                );
                $this->exponent = strlen($uniqueSuffix) - 1;
                if (substr($generatedSlug, -strlen($config['separator'])) == $config['separator']) {
                    $generatedSlug = substr($generatedSlug, 0, strlen($generatedSlug) - strlen($config['separator']));
                }
                $generatedSlug = $this->makeUniqueSlug($ea, $object, $generatedSlug, true, $config);
            }
            $preferredSlug = $generatedSlug;
        }

        return $preferredSlug;
    }

    private function manageFiltersBeforeGeneration(ObjectManager $om): void
    {
        $collection = $this->getFilterCollectionFromObjectManager($om);

        $enabledFilters = array_keys($collection->getEnabledFilters());

        // set each managed filter to desired status
        foreach ($this->managedFilters as $name => &$config) {
            $enabled = in_array($name, $enabledFilters, true);
            $config['previouslyEnabled'] = $enabled;

            if ($config['disabled']) {
                if ($enabled) {
                    $collection->disable($name);
                }
            } else {
                $collection->enable($name);
            }
        }
    }

    private function manageFiltersAfterGeneration(ObjectManager $om): void
    {
        $collection = $this->getFilterCollectionFromObjectManager($om);

        // Restore managed filters to their original status
        foreach ($this->managedFilters as $name => &$config) {
            if (true === $config['previouslyEnabled']) {
                $collection->enable($name);
            }

            unset($config['previouslyEnabled']);
        }
    }

    /**
     * Retrieves a FilterCollection instance from the given ObjectManager.
     *
     * @throws InvalidArgumentException
     *
     * @return mixed
     */
    private function getFilterCollectionFromObjectManager(ObjectManager $om)
    {
        if (is_callable([$om, 'getFilters'])) {
            return $om->getFilters();
        }
        if (is_callable([$om, 'getFilterCollection'])) {
            return $om->getFilterCollection();
        }

        throw new InvalidArgumentException('ObjectManager does not support filters');
    }
}

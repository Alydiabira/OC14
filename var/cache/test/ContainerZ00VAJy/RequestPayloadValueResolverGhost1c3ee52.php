<?php

namespace ContainerZ00VAJy;

class RequestPayloadValueResolverGhost1c3ee52 extends \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestPayloadValueResolver implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'serializer' => [parent::class, 'serializer', parent::class],
        "\0".parent::class."\0".'translator' => [parent::class, 'translator', parent::class],
        "\0".parent::class."\0".'validator' => [parent::class, 'validator', parent::class],
        'serializer' => [parent::class, 'serializer', parent::class],
        'translator' => [parent::class, 'translator', parent::class],
        'validator' => [parent::class, 'validator', parent::class],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('RequestPayloadValueResolverGhost1c3ee52', false)) {
    \class_alias(__NAMESPACE__.'\\RequestPayloadValueResolverGhost1c3ee52', 'RequestPayloadValueResolverGhost1c3ee52', false);
}

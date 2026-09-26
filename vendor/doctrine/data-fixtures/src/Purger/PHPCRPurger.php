<?php

declare(strict_types=1);

namespace Doctrine\Common\DataFixtures\Purger;

<<<<<<< HEAD
use Doctrine\ODM\PHPCR\DocumentManager;
=======
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Doctrine\ODM\PHPCR\DocumentManagerInterface;
use PHPCR\Util\NodeHelper;

/**
 * Class responsible for purging databases of data before reloading data fixtures.
 */
<<<<<<< HEAD
class PHPCRPurger implements PurgerInterface
{
    private ?DocumentManagerInterface $dm;

    public function __construct(?DocumentManagerInterface $dm = null)
=======
final class PHPCRPurger implements PHPCRPurgerInterface
{
    public function __construct(private DocumentManagerInterface|null $dm = null)
    {
    }

    public function setDocumentManager(DocumentManagerInterface $dm): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $this->dm = $dm;
    }

<<<<<<< HEAD
    public function setDocumentManager(DocumentManager $dm)
    {
        $this->dm = $dm;
    }

    /** @return DocumentManagerInterface|null */
    public function getObjectManager()
=======
    public function getObjectManager(): DocumentManagerInterface|null
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        return $this->dm;
    }

<<<<<<< HEAD
    /** @inheritDoc */
    public function purge()
=======
    public function purge(): void
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    {
        $session = $this->dm->getPhpcrSession();
        NodeHelper::purgeWorkspace($session);
        $session->save();
    }
}

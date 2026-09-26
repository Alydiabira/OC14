<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Tree\Strategy\ORM;

use Doctrine\ORM\EntityManagerInterface;
<<<<<<< HEAD
=======
use Doctrine\ORM\Mapping\ClassMetadata;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
use Gedmo\Tool\Wrapper\AbstractWrapper;
use Gedmo\Tree\Strategy\AbstractMaterializedPath;

/**
 * This strategy makes tree using materialized path strategy
 *
 * @author Gustavo Falco <comfortablynumb84@gmail.com>
 * @author Gediminas Morkevicius <gediminas.morkevicius@gmail.com>
 *
 * @final since gedmo/doctrine-extensions 3.11
 */
class MaterializedPath extends AbstractMaterializedPath
{
    /**
     * @param EntityManagerInterface $om
<<<<<<< HEAD
     */
    public function removeNode($om, $meta, $config, $node)
    {
        $uow = $om->getUnitOfWork();
=======
     * @param ClassMetadata<object>  $meta
     */
    public function removeNode($om, $meta, $config, $node)
    {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        $wrapped = AbstractWrapper::wrap($node, $om);

        $path = addcslashes($wrapped->getPropertyValue($config['path']), '%');

        $separator = $config['path_ends_with_separator'] ? null : $config['path_separator'];

        // Remove node's children
        $qb = $om->createQueryBuilder();
        $qb->select('e')
            ->from($config['useObjectClass'], 'e')
            ->where($qb->expr()->like('e.'.$config['path'], $qb->expr()->literal($path.$separator.'%')));

        if (isset($config['level'])) {
            $lvlField = $config['level'];
            $lvl = $wrapped->getPropertyValue($lvlField);
            if (!empty($lvl)) {
                $qb->andWhere($qb->expr()->gt('e.'.$lvlField, $qb->expr()->literal($lvl)));
            }
        }

        $results = $qb->getQuery()
            ->toIterable();

        foreach ($results as $node) {
<<<<<<< HEAD
            $uow->scheduleForDelete($node);
=======
            $om->remove($node);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        }
    }

    /**
     * @param EntityManagerInterface $om
<<<<<<< HEAD
=======
     * @param ClassMetadata<object>  $meta
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
     */
    public function getChildren($om, $meta, $config, $path)
    {
        $path = addcslashes($path, '%');
        $qb = $om->createQueryBuilder();
        $qb->select('e')
            ->from($config['useObjectClass'], 'e')
            ->where($qb->expr()->like('e.'.$config['path'], $qb->expr()->literal($path.'%')))
            ->andWhere('e.'.$config['path'].' != :path')
            ->orderBy('e.'.$config['path'], 'asc');      // This may save some calls to updateNode
        $qb->setParameter('path', $path);

        return $qb->getQuery()->getResult();
    }
}

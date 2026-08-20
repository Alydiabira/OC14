<?php

declare(strict_types=1);

namespace App\Doctrine\Repository;

use App\List\VideoGameList\Filter;
use App\List\VideoGameList\Pagination;
use App\Model\Entity\Tag;
use App\Model\Entity\VideoGame;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VideoGame>
 */
final class VideoGameRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VideoGame::class);
    }

    /**
     * 🔥 Ajout : findAll() qui hydrate les tags
     */
    public function findAll(): array
    {
        return $this->createQueryBuilder('v')
            ->leftJoin('v.tags', 't')
            ->addSelect('t')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Paginator<VideoGame>
     */
    public function getVideoGames(Pagination $pagination, Filter $filter): Paginator
    {
        $queryBuilder = $this->createQueryBuilder('vg')
            ->addSelect('t')
            ->leftJoin('vg.tags', 't')
            ->setFirstResult($pagination->getOffset())
            ->setMaxResults($pagination->getLimit())
            ->orderBy(
                $pagination->getSorting()->getSql(),
                $pagination->getDirection()->getSql()
            );

        if ($filter->getSearch() !== null) {
            $queryBuilder
                ->andWhere(
                    $queryBuilder->expr()->orX(
                        $queryBuilder->expr()->like('vg.title', ':search'),
                        $queryBuilder->expr()->like('vg.description', ':search'),
                        $queryBuilder->expr()->like('vg.test', ':search'),
                    )
                )
                ->setParameter('search', '%' . $filter->getSearch() . '%');
        }

        if ([] !== $filter->getTags()) {
            // ✅ Conversion des objets Tag en IDs
            $tagIds = array_map(
                fn(Tag $t) => $t->getId(),
                $filter->getTags()
            );

            $subQuery = $this->getEntityManager()->createQueryBuilder()
                ->select('vg2.id')
                ->from(VideoGame::class, 'vg2')
                ->join('vg2.tags', 't2')
                ->where('t2.id IN (:tags)')
                ->groupBy('vg2.id')
                ->having('COUNT(DISTINCT t2.id) = :tagCount');

            $queryBuilder
                ->andWhere($queryBuilder->expr()->in('vg.id', $subQuery->getDQL()))
                ->setParameter('tags', $tagIds)
                ->setParameter('tagCount', count($tagIds));
        }

        return new Paginator($queryBuilder, fetchJoinCollection: true);
    }
}

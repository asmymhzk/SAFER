<?php

namespace App\Repository;

use App\Entity\TerrainAgricole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TerrainAgricole>
 *
 * @method TerrainAgricole|null find($id, $lockMode = null, $lockVersion = null)
 * @method TerrainAgricole|null findOneBy(array $criteria, array $orderBy = null)
 * @method TerrainAgricole[]    findAll()
 * @method TerrainAgricole[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TerrainAgricoleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TerrainAgricole::class);
    }

    public function add(TerrainAgricole $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TerrainAgricole $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TerrainAgricole[] Returns an array of TerrainAgricole objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TerrainAgricole
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

<?php

namespace App\Repository;

use App\Entity\IntracommunityOperation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IntracommunityOperation>
 *
 * @method IntracommunityOperation|null find($id, $lockMode = null, $lockVersion = null)
 * @method IntracommunityOperation|null findOneBy(array $criteria, array $orderBy = null)
 * @method IntracommunityOperation[]    findAll()
 * @method IntracommunityOperation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntracommunityOperationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IntracommunityOperation::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(IntracommunityOperation $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(IntracommunityOperation $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return IntracommunityOperation[] Returns an array of IntracommunityOperation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IntracommunityOperation
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

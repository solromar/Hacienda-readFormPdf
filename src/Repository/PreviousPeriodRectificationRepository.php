<?php

namespace App\Repository;

use App\Entity\PreviousPeriodRectification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PreviousPeriodRectification>
 *
 * @method PreviousPeriodRectification|null find($id, $lockMode = null, $lockVersion = null)
 * @method PreviousPeriodRectification|null findOneBy(array $criteria, array $orderBy = null)
 * @method PreviousPeriodRectification[]    findAll()
 * @method PreviousPeriodRectification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreviousPeriodRectificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PreviousPeriodRectification::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(PreviousPeriodRectification $entity, bool $flush = true): void
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
    public function remove(PreviousPeriodRectification $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return PreviousPeriodRectification[] Returns an array of PreviousPeriodRectification objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PreviousPeriodRectification
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

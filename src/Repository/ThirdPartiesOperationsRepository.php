<?php

namespace App\Repository;

use App\Entity\ThirdPartiesOperations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ThirdPartiesOperations>
 *
 * @method ThirdPartiesOperations|null find($id, $lockMode = null, $lockVersion = null)
 * @method ThirdPartiesOperations|null findOneBy(array $criteria, array $orderBy = null)
 * @method ThirdPartiesOperations[]    findAll()
 * @method ThirdPartiesOperations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ThirdPartiesOperationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ThirdPartiesOperations::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(ThirdPartiesOperations $entity, bool $flush = true): void
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
    public function remove(ThirdPartiesOperations $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return ThirdPartiesOperations[] Returns an array of ThirdPartiesOperations objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ThirdPartiesOperations
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

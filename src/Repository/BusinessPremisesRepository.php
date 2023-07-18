<?php

namespace App\Repository;

use App\Entity\BusinessPremises;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BusinessPremises>
 *
 * @method BusinessPremises|null find($id, $lockMode = null, $lockVersion = null)
 * @method BusinessPremises|null findOneBy(array $criteria, array $orderBy = null)
 * @method BusinessPremises[]    findAll()
 * @method BusinessPremises[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BusinessPremisesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BusinessPremises::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(BusinessPremises $entity, bool $flush = true): void
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
    public function remove(BusinessPremises $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return BusinessPremises[] Returns an array of BusinessPremises objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BusinessPremises
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

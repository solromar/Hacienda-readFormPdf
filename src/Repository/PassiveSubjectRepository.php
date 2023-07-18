<?php

namespace App\Repository;

use App\Entity\PassiveSubject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PassiveSubject>
 *
 * @method PassiveSubject|null find($id, $lockMode = null, $lockVersion = null)
 * @method PassiveSubject|null findOneBy(array $criteria, array $orderBy = null)
 * @method PassiveSubject[]    findAll()
 * @method PassiveSubject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PassiveSubjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PassiveSubject::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(PassiveSubject $entity, bool $flush = true): void
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
    public function remove(PassiveSubject $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return PassiveSubject[] Returns an array of PassiveSubject objects
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
    public function findOneBySomeField($value): ?PassiveSubject
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

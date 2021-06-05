<?php

namespace App\Repository;

use App\Entity\Archives;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Archives|null find($id, $lockMode = null, $lockVersion = null)
 * @method Archives|null findOneBy(array $criteria, array $orderBy = null)
 * @method Archives[]    findAll()
 * @method Archives[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArchivesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Archives::class);
    }

    public function findPackages(){
        $builder = $this->createQueryBuilder('archives');
        $builder->where('archives.Type = ?1');
        $builder->setParameter(1,'Packages');
        $query = $builder->getQuery();

        return $query->execute();
    }

    public function findDesingPatterns(){
        $builder = $this->createQueryBuilder('archives');
        $builder->where('archives.Type = ?1');
        $builder->setParameter(1,'Desing Patterns');
        $query = $builder->getQuery();

        return $query->execute();
    }

    public function findModules(){
        $builder = $this->createQueryBuilder('archives');
        $builder->where('archives.Type = ?1');
        $builder->setParameter(1,'Modules');
        $query = $builder->getQuery();

        return $query->execute();
    }

    public function findExtensions(){
        $builder = $this->createQueryBuilder('archives');
        $builder->where('archives.Type = ?1');
        $builder->setParameter(1,'Extensions');
        $query = $builder->getQuery();

        return $query->execute();
    }

    public function findLibrary(){
        $builder = $this->createQueryBuilder('archives');
        $builder->where('archives.Type = ?1');
        $builder->setParameter(1,'Library');
        $query = $builder->getQuery();

        return $query->execute();
    }

    public function findServices(){
        $builder = $this->createQueryBuilder('archives');
        $builder->where('archives.Type = ?1');
        $builder->setParameter(1,'Services');
        $query = $builder->getQuery();

        return $query->execute();
    }

    // /**
    //  * @return Archives[] Returns an array of Archives objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Archives
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

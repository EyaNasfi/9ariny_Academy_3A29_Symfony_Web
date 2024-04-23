<?php

namespace App\Repository;

use App\Entity\Formation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class FormationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Formation::class);
    }
 

    public function countFormationsByCategory()
    {
        return $this->createQueryBuilder('f')
            ->select('c.nomCategorie as categorie, COUNT(f) as nombre')
            ->leftJoin('f.nomCategorie', 'c')
            ->groupBy('c.nomCategorie')
            ->getQuery()
            ->getResult();
    }
    
}
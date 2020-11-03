<?php


namespace App\Helper;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepositoryInterface;
use Doctrine\ORM\Tools\Pagination\Paginator;

class PaginatorHelper
{
    public static function paginate(ServiceEntityRepository $repository,  $page = 1, $limit = 10)
    {
        $dql = $repository
            ->createQueryBuilder('qb')
            ->getQuery();

        $paginator = new Paginator($dql);

        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1)) // Offset
            ->setMaxResults($limit); // Limit

        return $paginator;
    }
}
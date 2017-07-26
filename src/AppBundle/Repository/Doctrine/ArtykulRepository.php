<?php
/**
 * Created by PhpStorm.
 * User: marcinos
 * Date: 22.03.17
 * Time: 19:35
 */

namespace AppBundle\Repository\Doctrine;

abstract class ArtykulRepository extends DoctrineRepository
{
    public function getLast($maxResults)
    {
        return $this->getEntityManager()
            ->getRepository('AppBundle:Przepis')
            ->createQueryBuilder('p')
            ->orderBy('p.id', 'DESC')
            ->setMaxResults($maxResults)
            ->getQuery()
            ->getResult();
    }
}
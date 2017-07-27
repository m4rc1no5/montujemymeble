<?php

namespace AppBundle\Repository\Doctrine;

abstract class ArtykulRepository extends DoctrineRepository
{
    public function getLast($maxResults)
    {
        return $this->getEntityManager()
            ->getRepository('AppBundle:Artykul')
            ->createQueryBuilder('p')
            ->orderBy('p.id', 'DESC')
            ->setMaxResults($maxResults)
            ->getQuery()
            ->getResult();
    }
}
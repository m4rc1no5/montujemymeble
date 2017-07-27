<?php

namespace AppBundle\Repository\Doctrine;

use AppBundle\Form\Model\Artykul;

abstract class ArtykulRepository extends DoctrineRepository
{
    public function getAllOrderByName()
    {
        return $this->getEntityManager()
            ->getRepository('AppBundle:Artykul')
            ->findBy([], ['artykul' => 'ASC']);
    }

    public function update(Artykul $artykul)
    {
        $em = $this->getEntityManager();

        $artykulBaza = $this ->find($artykul->getId());

        $artykulBaza->setArtykul($artykul->getArtykul());
        $artykulBaza->setTresc($artykul->getTresc());

        $em->persist($artykulBaza);
        $em->flush();
    }

    public function getOneById($id)
    {
        return $this->getEntityManager()
            ->getRepository('AppBundle:Artykul')
            ->find($id);
    }
}
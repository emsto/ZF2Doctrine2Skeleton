<?php

namespace Application\EntityManager;

use Doctrine\ORM\EntityManager;

interface EntityManagerAwareInterface
{

    /**
     * 
     * @param \Doctrine\ORM\EntityManager $entityManager
     */
    public function setEntityManager(EntityManager $entityManager);
}

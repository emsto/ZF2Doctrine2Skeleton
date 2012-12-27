<?php

namespace Application\Controller;

use Application\EntityManager\EntityManagerAwareInterface;
use Doctrine\ORM\EntityManager;
use Zend\Mvc\Controller\AbstractActionController as ZendAbstractActionController;

abstract class AbstractActionController extends ZendAbstractActionController implements EntityManagerAwareInterface
{

    /**
     *
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * 
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->entityManager;
    }

    /**
     * 
     * @param EntityManager $entityManager
     * @return AbstractActionController
     */
    public function setEntityManager(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        return $this;
    }

}

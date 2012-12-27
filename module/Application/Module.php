<?php

namespace Application;

use Application\EntityManager\EntityManagerAwareInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface,
    Zend\ModuleManager\Feature\BootstrapListenerInterface,
    Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{

    /**
     * 
     * @param \Zend\Mvc\MvcEvent $e
     */
    public function onBootstrap(MvcEvent $e)
    {
        $app = $e->getApplication();
        $sm = $app->getServiceManager();
        $sm->get('translator');
        $eventManager = $app->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        $sm->get('ControllerLoader')->addInitializer(
                function($instance) use ($sm) {
                    if ($instance instanceof EntityManagerAwareInterface) {
                        $instance->setEntityManager($sm->get('doctrine.entitymanager.orm_default'));
                    }
                });
    }

    /**
     * 
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * 
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

}

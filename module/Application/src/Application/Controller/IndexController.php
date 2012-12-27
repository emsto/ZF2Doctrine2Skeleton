<?php

namespace Application\Controller;

use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }

}

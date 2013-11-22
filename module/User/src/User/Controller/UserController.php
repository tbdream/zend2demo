<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/User for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
//use Album\Form\AlbumForm;       // <-- Add this import
//use Album\Model\Album;          // <-- Add this import

class UserController extends AbstractActionController
{
	protected $CollectinfoTable;
	
// ...
    public function indexAction()
    {
        return new ViewModel(array(
            'Collectinfo' => $this->getCollectinfoTable()->fetchAll(),
        ));
    }
// ...

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /user/user/foo
        return array();
    }
    
    // module/Album/src/Album/Controller/AlbumController.php:
    public function getCollectinfoTable()
    {
    	if (!$this->CollectinfoTable) {
    		$sm = $this->getServiceLocator();
    		$this->CollectinfoTable = $sm->get('User\Model\UserTable');
    	}
    	return $this->CollectinfoTable;
    }
}

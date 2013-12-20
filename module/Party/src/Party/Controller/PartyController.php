<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Party for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Party\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel ;

class PartyController extends AbstractActionController
{
	protected $Party;
	
    public function indexAction()
    {
    	return new ViewModel(array('Party' => $this->getPartyTable()->fetchAll(),	
    	));
    }
    
    public function addAction()
    {
    	return array();
    }
    
    
    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /party/party/foo
        return array();
    }
    
    public function getPartyTable()
    {
    	if (!$this->Party) {	
    		$sm = $this->getServiceLocator();
    		$this->Party = $sm->get('Party\Model\Party');
    	}
    	return $this->Party;
    	 
    }
}

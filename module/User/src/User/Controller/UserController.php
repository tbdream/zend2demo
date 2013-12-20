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
use User\Model\User;
use User\Form\PartyForm;

class UserController extends AbstractActionController
{
	protected $infoTable;
	
// ...
    public function indexAction()
    {
        return new ViewModel(array(
            'userinfo' => $this->getinfoTable()->fetchAll(),
        ));
    }
// ...
	public  function addAction()
	{
		$form = new PartyForm();
		$form->get('submit')->setValue('Add');
		$request = $this->getRequest();
		if ($request->isPost()) {
			$User = new User();
			$form->setInputFilter($User->getInputFilter());
			$form->setData($request->getPost());
			if ($form->isValid()) {
				$User->exchangeArray($form->getData());
				$this->getinfoTable()->save_info($User);
		
				// Redirect to list of albums
				return $this->redirect()->toRoute('User');
			}
		}
		return array('form' => $form);
		
	}
    

	public function editAction()
	{
		$id = (int) $this->params()->fromRoute('id', 0);
		if (!$id) {
			return $this->redirect()->toRoute('User', array(
					'action' => 'add'
			));
		}
	
		// Get the Album with the specified id.  An exception is thrown
		// if it cannot be found, in which case go to the index page.
		try {
			$Party = $this->getinfoTable()->get_info($id);
		}
		catch (\Exception $ex) {
			return $this->redirect()->toRoute('user', array(
					'action' => 'index'
			));
		}
	
		$form  = new PartyForm();
		$form->bind($Party);
		$form->get('submit')->setAttribute('value', 'Edit');
	
		$request = $this->getRequest();
		if ($request->isPost()) {
			$form->setInputFilter($Party->getInputFilter());
			$form->setData($request->getPost());
	
			if ($form->isValid()) {
				$this->getinfoTable()->save_info($Party);
	
				// Redirect to list of albums
				return $this->redirect()->toRoute('User');
			}
		}
	
		return array(
				'id' => $id,
				'form' => $form,
		);
	}
	
	
	// module/Album/src/Album/Controller/AlbumController.php:
	//...
	// Add content to the following method:
	public function deleteAction()
	{
		$id = (int) $this->params()->fromRoute('id', 0);
		if (!$id) {
			return $this->redirect()->toRoute('User');
		}
	
		$request = $this->getRequest();
		if ($request->isPost()) {
			$del = $request->getPost('del', 'No');
	
			if ($del == 'Yes') {
				$id = (int) $request->getPost('id');
				$this->getinfoTable()->delete_info($id);
			}
	
			// Redirect to list of albums
			return $this->redirect()->toRoute('user');
		}
	
		return array(
				'id'    => $id,
				'partyinfo' => $this->getinfoTable()->get_info($id)
		);
	}
	
	//...
	
    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /user/user/foo
        return array();
    }
    
    // module/Album/src/Album/Controller/AlbumController.php:
    public function getinfoTable()
    {
    	if (!$this->infoTable) {
    		$sm = $this->getServiceLocator();
    		$this->infoTable = $sm->get('User\Model\UserTable');
    	}
    	return $this->infoTable;
    }
}

<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\View;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
/**
 * 登录验证模块
 * @return \Zend\View\View
 */    
    public function loginAction()
    {
    	return new View();
    }
/**
 * 登出验证模块
 * @return \Zend\View\View
 */    
    public function logoutAction()
    {
    	return new View();
    }
    
/**
 * 注册模块
 * @return \Zend\View\View
 */  
    public function registerAction()
    {
    	return new View();
    }
}

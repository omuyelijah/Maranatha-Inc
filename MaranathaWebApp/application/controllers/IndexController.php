<?php

/**
 * This controller file handles request for pages on the outside,
 * i.e. pages that need not users to login before accessing. They
 * all share common page fragments.
 *
 *
 */
class IndexController extends Maranatha_Controller_BaseController
{

    public function init()
    {
    	parent::init();    	    	    	   	            	            
    }

    public function indexAction()
    {    
       $this->view->headLink()->prependStylesheet("{$this->settingsMapper->getDeploymentFolder()}styles/home.css"); 
       $this->view->headTitle('Maranatha Inc.', '_SET');
    }     

    public function loginAction()
    {
        
    }

    public function registrationAction()
    {
        
    }    
    
}




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
    	
    	//1. Widely used urls
        $this->view->urlHome = $this->getUrl(null, 'index');
        $this->view->urlAbout = $this->getUrl(null, 'about');
        $this->view->urlContacts = $this->getUrl(null, 'contacts');
        
    	//2. Render the parts of our template
        //Add the scripts folder in the layout folder.   	     
        $this->view->addScriptPath(APPLICATION_PATH.SLASH."layouts".SLASH."scripts");         
        $response = $this->getResponse();
        $response->insert('header', $this->view->render('header.phtml'));       
        $response->insert('footer', $this->view->render('footer.phtml'));                
    }

    public function indexAction()
    {    
       $this->view->headLink()->prependStylesheet("{$this->settingsMapper->getDeploymentFolder()}styles/home.css"); 
    }

    public function aboutAction()
    {
       $this->view->headLink()->prependStylesheet("{$this->settingsMapper->getDeploymentFolder()}styles/about.css");
    }

    public function contactsAction()
    {
       $this->view->headLink()->prependStylesheet("{$this->settingsMapper->getDeploymentFolder()}styles/contacts.css"); 
    }

    public function loginAction()
    {
        
    }

    public function registrationAction()
    {
        
    }

    public function jobInternshipsAction()
    {
        
    }

    public function researchAction()
    {
        
    }

    public function studyAction()
    {
        
    }


}




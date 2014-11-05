<?php

class Maranatha_Controller_BaseController extends Zend_Controller_Action{
	
	protected $settingsMapper;		
	
	public function init(){
		
		parent::init();
		
		//1. Widely used urls
        $this->view->urlHome = $this->getUrl('default', 'index', 'index');
        //
        $this->view->urlAbout = $this->getUrl('us', 'about', 'index');        
        $this->view->urlContacts = $this->getUrl('us', 'contact', 'index');
        $this->view->urlPrivacyPolicy = $this->getUrl('us', 'privacy-policy', 'index');
        $this->view->urlTerms = $this->getUrl('us', 'terms', 'index');     
        //   
        $this->view->urlResearch = $this->getUrl('research', 'index', 'index');
        $this->view->urlStudy = $this->getUrl('study', 'index', 'index');
        $this->view->urlJobs = $this->getUrl('jobs', 'index', 'index');        
		
		//Settings mapper to read application settings from JSON file
		$this->settingsMapper = new Maranatha_AppSetting_SettingsMapper();	
		
		//Render the parts of our template
        //Add the scripts folder in the layout folder.   	     
        $this->view->addScriptPath(APPLICATION_PATH.SLASH."layouts".SLASH."scripts");         
        $response = $this->getResponse();
        $response->insert('header', $this->view->render('header.phtml'));       
        $response->insert('footer', $this->view->render('footer.phtml')); 			 
	}
	
	/**
	 * Determine the url of a page given needed parameters.
	 * 
	 * @param $module. The name of the page's module.
	 * @param $controller. The name of the page's controller.
	 * @param $action. The name of the page's action.
	 * @return String. The URL of a page.
	 */
	protected function getUrl($module = null, $controller = null, $action = null){
		if($module == null)
    		$module = $this->getRequest()->getModuleName();
    	if($controller == null)
    		$controller = $this->getRequest()->getControllerName();
    	if($action == null)
    		$actionName = $this->getRequest()->getActionName();
    		
    	return $this->view->url(array('module' => $module, 'controller' => $controller, 'action'=> $action),'default',true);
    }
	
}

?>

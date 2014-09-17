<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	/**
	 * Initialize custom libraries we develop ourselves or
	 * bring into the application.
	 */
	protected function _initLibraries(){
		//This procedure of loading a custom library requires
		//that the folder be located inside the library folder.
		$autoloader = Zend_Loader_Autoloader::getInstance();
    	$autoloader->registerNamespace('Maranatha');    	
    	
    	
    	
    	//A file that defines constant variables accessible application wide	
    	$constantsFile = APPLICATION_PATH.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."library".DIRECTORY_SEPARATOR;
	 	$constantsFile .= 'Constants.php';
	 	require_once($constantsFile);  
	}
	
	
	/**
	 * Initialize HTML views with needed global scripts
	 * and stylesheets at head of page before the other
	 * parts of the page are encountered.
	 */
	protected function _initHTMLView(){
		
		$this->bootstrap('view');
		$view = $this->getResource('view');
		
		//HTML Document type
        $view->doctype('HTML5');
        
        $settingsMapper = new Maranatha_AppSetting_SettingsMapper();
        
        //Main CSS style sheet & CSS Bootstrap for forms.
        $view->headLink()->prependStylesheet("{$settingsMapper->getDeploymentFolder()}styles/bootstrap/css/bootstrap.min.css");
        $view->headLink()->prependStylesheet("{$settingsMapper->getDeploymentFolder()}styles/bootstrap/css/bootstrap-theme.min.css");
        $view->headLink()->prependStylesheet("{$settingsMapper->getDeploymentFolder()}styles/main.css");         
        
        //Javascript libraries
        $view->headScript()->appendFile("{$settingsMapper->getDeploymentFolder()}styles/bootstrap/js/bootstrap.min.js");         
                       				
	}
	
	

}


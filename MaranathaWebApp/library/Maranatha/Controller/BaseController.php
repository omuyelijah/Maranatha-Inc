<?php

class Maranatha_Controller_BaseController extends Zend_Controller_Action{
	
	protected $settingsMapper;		
	
	public function init(){
		parent::init();
		
		//Settings mapper to read application settings from JSON file
		$this->settingsMapper = new Maranatha_AppSetting_SettingsMapper();
		
	}
	
	protected function getUrl($controllerName = null, $actionName = null){
    	if($controllerName == null)
    		$controllerName = $this->getRequest()->getControllerName();
    	if($actionName == '')
    		$actionName = $this->getRequest()->getActionName();
    		
    	return $this->view->url(array('controller' => $controllerName,'action'=>$actionName),'default',true);
    }
	
}

?>

<?php

class Maranatha_AppSetting_SettingsMapper implements Maranatha_AppSetting_ISettingsMapper{
	
	/**
	 * Reads the application settings JSON file
	 * and returns an array.
	 */
	protected function readSettingsFile(){
		$fileContents = file_get_contents(APPLICATION_SETTINGS_FILE);
		return json_decode($fileContents, true);
	}
	
	public function getDeploymentFolder(){
		$jsonObj = $this->readSettingsFile();
		return $jsonObj['deploymentFolder'];
	}
	
}




?>
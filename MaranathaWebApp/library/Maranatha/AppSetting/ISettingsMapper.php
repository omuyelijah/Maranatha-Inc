<?php

/**
 * This interface is implemented to help with
 * retrieving information from the application
 * settings file stored in json format.
 * 
 */
interface Maranatha_AppSetting_ISettingsMapper{
	
	/**
	 * Gets the path of the folder into
	 * which this application will be deployed
	 * when uploaded remotely. This is important
	 * when doing beta-testing on a remote server.
	 * 
	 */
	function getDeploymentFolder();
	
}

?>

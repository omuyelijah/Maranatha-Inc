<?php

class Research_IndexController extends Maranatha_Controller_BaseController
{

    public function init()
    {
       parent::init();
    }

    public function indexAction()
    {
       $this->view->headLink()->prependStylesheet("{$this->settingsMapper->getDeploymentFolder()}styles/services.css");
    }


}


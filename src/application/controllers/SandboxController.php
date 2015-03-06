<?php

class SandboxController extends Zend_Controller_Action
{
	
  //public $ajaxable = array('list' => array('html'));
	
	
	public function init(){
		$contextSwitch = $this->_helper->getHelper('contextSwitch');
		$contextSwitch->addActionContext('index', array('xml', 'json'))
									->setAutoJsonSerialization(false)
									->initContext();
		
		$ajaxContext = $this->_helper->getHelper('AjaxContext'); 
		/* @var $ajaxContext Zend_Controller_Action_Helper_AjaxContext */
		$ajaxContext->addActionContext('list', 'html')
								->initContext();
	}
	
	public function indexAction(){

	}
	
	public function listAction(){
		
	}
}
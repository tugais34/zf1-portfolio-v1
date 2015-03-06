<?php

class Form_Contact extends Ip_Form
{
	public function init()
	{
		/*
		 * Plus besoin de la ligne suivante grâce à la classe Ip_Form (surcharge de Zend_Form) 
		 */
		//$this->addPrefixPath('Ip_Form_Element', 'Ip/Form/Element', 'element');
		
		$this->addElement('text', 'name', array(
				'placeholder' => 'Nom & Prénom',
				'required' => true
		));
		
		$this->addElement('email', 'email', array(
				'placeholder' => 'Email',
				'required' => true
		));
		
		$this->addElement('textarea', 'message', array(
				'placeholder' => 'Votre message',
				'required' => true
		));
		
		$this->addElement('submit', 'send', array(
				'label' => 'Envoyer'
		));
	}
}
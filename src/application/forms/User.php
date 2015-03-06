<?php

class Form_User extends Ip_Form
{
	public function populate(Model_User $user)
	{
		$values = array(
			'username' => $user->getLogin(),
			'password' => $user->getPassword(),
			'email' => $user->getEmail(),
			'linkedinId' => $user->getLinkedinId(),
			'viadeoId' => $user->getViadeoId()
		);
		
		parent::populate($values);
	}
	
	public function init()
	{
		$this->addElement('text', 'username', array(
			'label' => 'Username',
			'validators' => array(
				array(
					'Db_NoRecordExists',
					false,
					array(
						'messages' => 'Account not autorized',	
						'table' => Model_DbTable_User::TABLE_NAME,
						'field' => Model_DbTable_User::COL_LOGIN
					)
				)
			),
			'required' => true
		));
		
		$this->addElement('password', 'password', array(
			'label' => 'Password',
			'required' => true
		));
		
		$this->addElement('password', 'repassword', array(
			'label' => 'Confirm password',
			'validators' => array(
				array(
					'Identical',
					false,
					array (
						'messages' => "Password not identical",
						'token' => 'password'
					)
				)
			),
			'required' => true
		));
		
		$this->addElement('text', 'linkedinId', array(
			'label' => 'LinkedinId',
			'validators' => array(
				array(
					'Db_NoRecordExists',
					false,
					array(
						'messages' => 'Account Linkedin not autorized',
						'table' => Model_DbTable_User::TABLE_NAME,
						'field' => Model_DbTable_User::COL_LINKEDIN_ID
					)
				)
			),
		));
		
		$this->addElement('text', 'linkedinId', array(
			'label' => 'ViadeoId',
			'validators' => array(
				array(
					'Db_NoRecordExists',
					false,
					array(
						'messages' => 'Account Viadeo not autorized',
						'table' => Model_DbTable_User::TABLE_NAME,
						'field' => Model_DbTable_User::COL_VIADEO_ID
					)
				)
			),
		));
		
		$this->addElement('submit', 'send', array(
			'label' => 'Create an account'
		));
	}
}
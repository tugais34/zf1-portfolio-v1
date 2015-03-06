<?php

class Model_User implements Zend_Acl_Role_Interface, Zend_Acl_Resource_Interface
{
    /**
     * Identifiant Utilisateur
     *
     * @var integer
     */
    private $id;

    /**
     * Login Utilisateur
     *
     * @var string
     */
    private $login;
    
    /**
     * Password Utilisateur
     *
     * @var string
     */
    private $password;
    
    /**
     * Email Utilisateur
     *
     * @var string
     */
    private $email;
    
    /**
     * LinkedinId Utilisateur
     *
     * @var string
     */
    private $linkedinId = null;
    
    /**
     * ViadeoId Utilisateur
     *
     * @var string
     */
    private $viadeoId = null;
    
    /**
     * Created Utilisateur
     *
     * @var string
     */
    private $created;
    
    /**
    * @param integer $id
    * @return Model_User
    */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
     
    /**
    * @return integer
    */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $login
     * @return Model_User
     */
    public function setLogin($login)
    {
    	$this->login = $login;
    	return $this;
    }
    
    /**
     * @return string
     */
    public function getLogin()
    {
    	return $this->login;
    }
    
    /**
     * @param string $password
     * @return Model_User
     */
    public function setPassword($password)
    {
    	$this->password = $password;
    	return $this;
    }
    
    /**
     * @return string
     */
    public function getPassword()
    {
    	return $this->password;
    }
    
    /**
     * @param string $email
     * @return Model_User
     */
    public function setEmail($email)
    {
    	$this->email = $email;
    	return $this;
    }
    
    /**
     * @return string
     */
    public function getEmail()
    {
    	return $this->email;
    }
    
    /**
     * @param string $linkedinId
     * @return Model_User
     */
    public function setLinkedinId($linkedinId)
    {
    	$this->linkedinId = $linkedinId;
    	return $this;
    }
    
    /**
     * @return string
     */
    public function getLinkedinId()
    {
    	return $this->linkedinId;
    }
    
    /**
     * @param string $viadeoId
     * @return Model_User
     */
    public function setViadeoId($viadeoId)
    {
    	$this->viadeoId = $viadeoId;
    	return $this;
    }
    
    /**
     * @return string
     */
    public function getViadeoId()
    {
    	return $this->viadeoId;
    }
	
	/**
	 * Set date created user
	 * @param Zend_Date $created
	 * @return Model_User
	 */
	public function setCreated($created = null)
	{
		if ($created === null)
			$created = Zend_Date::now();
		else
			$created = new Zend_Date($created);
		
		$this->created = $created;
		return $this;
	}
	
	/**
	 * @return Zend_Date
	 */
	public function getCreated()
	{
		return $this->created;
	}
	
	public function toArray()
	{
		return array(
			'id' => $this->getId(),
			'login' => $this->getLogin(),
			'password' => $this->getPassword(),
			'email' => $this->getEmail(),
			'linkedinId' => $this->getLinkedinId(),
			'viadeoId' => $this->getViadeoId(),
			'created' => $this->getCreated()
		);
	}
	
	/**
	 * Returns the string identifier of the Role
	 *
	 * @return string
	 */
	public function getRoleId(){
		if($this->getId() === null){
			return 'guest';
		}
		if($this->getId() == 1){
			return 'root';
		}
		return 'other';
	}
	
	/**
	 * Returns the string identifier of the Resource
	 *
	 * @return string
	 */
	public function getResourceId()
	{
		return 'user';
	}
}
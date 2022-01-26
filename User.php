<?php

abstract class User
{

    private $_id;
    private $_name;
    private $_firstName;
    private $_email;
    private $_username;
    private $_password;

    /**
     * @param $_id
     * @param $_name
     * @param $_firstName
     * @param $_email
     * @param $_username
     * @param $_password
     */
    public function __construct($_id, $_name, $_firstName, $_email, $_username, $_password)
    {
        $this->_id = $_id;
        $this->_name = $_name;
        $this->_firstName = $_firstName;
        $this->_email = $_email;
        $this->_username = $_username;
        $this->_password = $_password;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->_firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->_username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->_password = $password;
    }

}

;

?>
<?php

namespace UserRegistration\Entity;

/*require_once '../../vendor/autoload.php';*/

class User
{
   private $userName;
   private $userEmail;
   private $userPassword;
   private $userAge;
   private $country;
   private $userBio;

    /**
     * User constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($userEmail): void
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param mixed $userPassword
     */
    public function setUserPassword($userPassword): void
    {
        $this->userPassword = $userPassword;
    }

    /**
     * @return mixed
     */
    public function getUserAge()
    {
        return $this->userAge;
    }

    /**
     * @param mixed $userAge
     */
    public function setUserAge($userAge): void
    {
        $this->userAge = $userAge;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getUserBio()
    {
        return $this->userBio;
    }

    /**
     * @param mixed $userBio
     */
    public function setUserBio($userBio): void
    {
        $this->userBio = $userBio;
    }

    public function __toString()
    {
        return
        "
        $this->userName;
        $this->userEmail;
        $this->userPassword;
        $this->userAge;
        $this->country;
        $this->userBio;
        ";
    }


}
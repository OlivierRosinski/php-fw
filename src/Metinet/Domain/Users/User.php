<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 09:52
 */

namespace Metinet\Domain\Users;


class User
{
    public static function register(String $id, String $username, String $password): self
    {
        return new self($id, $username, password_hash($password,PASSWORD_BCRYPT));
    }

    private $id;
    private $username;
    private $password;

    /**
     * User constructor.
     * @param $id
     * @param $username
     * @param $password
     */
    public function __construct($id, $username, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function verifyPaswword($passwordToVerify){
        if ($this->getPassword() != $passwordToVerify){
            throw new Exception ('Le mot de passe n\'est pas bon');
        }
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:51
 */

namespace Metinet\Domain;


class Participant
{
    private $strNom;
    private $strPrenom;
    private $strPhone;
    private $strEmail;

    /**
     * Participant constructor.
     * @param $strNom
     * @param $strPrenom
     * @param $strPhone
     * @param $strEmail
     */
    public function __construct($strNom, $strPrenom, $strPhone, $strEmail)
    {
        $this->strNom = $strNom;
        $this->strPrenom = $strPrenom;
        $this->strPhone = $strPhone;
        $this->strEmail = $strEmail;
    }

    public function getStrNom()
    {
        return $this->strNom;
    }

    public function getStrPrenom()
    {
        return $this->strPrenom;
    }

    public function getStrPhone()
    {
        return $this->strPhone;
    }

    public function getStrEmail()
    {
        return $this->strEmail;
    }

    public function MailIsCorrect(){
        //Vérifie que le mail soit bien un mail existant
    }

    public function PhoneIsCorrect(){
        //Vérifie que le numéro de téléphone soit bien du bon format
    }

}
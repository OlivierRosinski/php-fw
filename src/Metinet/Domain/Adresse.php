<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 13:53
 */

namespace Metinet\Domain;


class Adresse
{
    private $adresse;
    private $ville;
    private $codepostal;

    /**
     * Adresse constructor.
     * @param $adresse
     * @param $ville
     * @param $codepostal
     */
    public function __construct(String $adresse, String $ville,  String $codepostal)
    {
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->codepostal = $codepostal;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function getCodepostal()
    {
        return $this->codepostal;
    }
}
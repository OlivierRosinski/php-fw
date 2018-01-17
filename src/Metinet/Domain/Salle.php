<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 13:00
 */

namespace Metinet\Domain;


class Salle
{


    private $nomSalle;
    private $objAdresse;
    private $bIsLibre;

    /**
     * Salle constructor.
     * @param $nomSalle
     * @param $adresse
     * @param $bIsLibre
     */
    public function __construct(String $nomSalle, Adresse $objAdresse, bool $bIsLibre)
    {
        $this->nomSalle = $nomSalle;
        $this->objAdresse = $objAdresse;
        $this->bIsLibre = $bIsLibre;
    }

    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    public function getObjAdresse()
    {
        return $this->objAdresse;
    }

    public function getBIsLibre()
    {
        return $this->bIsLibre;
    }

}
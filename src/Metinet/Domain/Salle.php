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

    /**
     * Salle constructor.
     * @param $nomSalle
     * @param $adresse
     */
    public function __construct(String $nomSalle, Adresse $objAdresse)
    {
        $this->nomSalle = $nomSalle;
        $this->objAdresse = $objAdresse;
    }

    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    public function getObjAdresse()
    {
        return $this->objAdresse;
    }

}
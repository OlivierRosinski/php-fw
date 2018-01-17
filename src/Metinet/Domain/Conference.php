<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:35
 */

namespace Metinet\Metier;


use Metinet\Domain\Adresse;
use Metinet\Domain\Candidate;
use Metinet\Domain\DateOfConference;
use Metinet\Domain\Salle;
use Exception;

class Conference
{

    private $nomConference;
    private $bExterneAutorise;
    private $description;
    private $objectifs;
    private $objSalle;
    private $nbMaxPersonne;
    private $dateDebut;
    private $dateFin;
    private $prixBillet;


    public function __construct(String $nomConference, bool $bExterneAutorise, String $description, String $objectifs, Salle $objSalle, Int $nbMaxPersonne, DateOfConference $dateDebut, DateOfConference $dateFin, Int $prixBillet, Int $duree)
    {
        $this->nomConference = $nomConference;
        $this->bExterneAutorise = $bExterneAutorise;
        $this->description = $description;
        $this->objectifs = $objectifs;
        $this->objSalle = $objSalle;
        $this->nbMaxPersonne = $nbMaxPersonne;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->prixBillet = $prixBillet;
        $this->duree = $duree;
    }

    public function getObjSalle(): Salle
    {
        return $this->objSalle;
    }

    public function getDateDebut(): DateOfConference
    {
        return $this->dateDebut;
    }

    public function getDateFin(): DateOfConference
    {
        return $this->dateFin;
    }

    public function getNomConference(): String
    {
        return $this->nomConference;
    }

    public function getDescription(): String
    {
        return $this->description;
    }

    public function getObjectifs(): String
    {
        return $this->objectifs;
    }

    public function getNbMaxPersonne(): Int
    {
        return $this->nbMaxPersonne;
    }

    public function getPrixBillet(): Int
    {
        return $this->prixBillet;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function getBExterneAutorise(): bool
    {
        return $this->bExterneAutorise;
    }

    public function NbMaxPlacePositif(){
        if ($this->nbMaxPersonne < 1) {
            throw new Exception('Le nombre de place maximun doit être supérieur à 0.');
        }
    }

    public function createConference(){

    }



}
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
use Metinet\Domain\Participant;
use Metinet\Domain\ParticipantCollection;
use Metinet\Domain\Salle;
use Exception;

class Conference
{

    private $strNomConference;
    private $bExterneAutorise;
    private $strDescription;
    private $strObjectifs;
    private $objSalle;
    private $nbMaxPersonne;
    private $dateDebut;
    private $dateFin;
    private $prixBillet;
    private $colParticipant;

    public function __construct(String $strNomConference, bool $bExterneAutorise, String $strDescription, String $strObjectifs, Salle $objSalle, Int $nbMaxPersonne, DateOfConference $dateDebut, DateOfConference $dateFin, Int $prixBillet)
    {
        $this->strNomConference = $strNomConference;
        $this->bExterneAutorise = $bExterneAutorise;
        $this->strDescription = $strDescription;
        $this->strObjectifs = $strObjectifs;
        $this->objSalle = $objSalle;
        $this->nbMaxPersonne = $nbMaxPersonne;
        $this->dateDebut = $dateDebut;
        $this->dateFin = $dateFin;
        $this->prixBillet = $prixBillet;
        $this->colParticipant = new ParticipantCollection();
    }

    public function getStrNomConference(): String
    {
        return $this->strNomConference;
    }

    public function isBExterneAutorise(): bool
    {
        return $this->bExterneAutorise;
    }

    public function getStrDescription(): String
    {
        return $this->strDescription;
    }

    public function getStrObjectifs(): String
    {
        return $this->strObjectifs;
    }

    public function getObjSalle(): Salle
    {
        return $this->objSalle;
    }

    public function getNbMaxPersonne(): Int
    {
        return $this->nbMaxPersonne;
    }

    public function getDateDebut(): DateOfConference
    {
        return $this->dateDebut;
    }

    public function getDateFin(): DateOfConference
    {
        return $this->dateFin;
    }

    public function getPrixBillet(): Int
    {
        return $this->prixBillet;
    }

    public function getColParticipant(): ParticipantCollection
    {
        return $this->colParticipant;
    }


    public function NbMaxPlacePositif(){
        if ($this->nbMaxPersonne < 1) {
            throw new Exception('Le nombre de place maximun doit être supérieur à 0.');
        }
    }

    public function DateDebutFinVerif(){
        if ($this->getDateDebut() > $this->getDateFin()){
            throw new Exception('La date de début doit être inférieure à la date de fin de la conférence.');
        }
    }

    public function createConference(){

    }



}
<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 15:53
 */

namespace Metinet\Domain;


class ParticipantCollection
{
    private $colParticipant;

    /**
     * ParticipantCollection constructor.
     * @param $colParticipant
     */
    public function __construct(array $colParticipant = [])
    {
        $this->colParticipant[] = $colParticipant;
    }

    public function add($objParticipant){
        $this->colParticipant[] = $objParticipant;
    }
}
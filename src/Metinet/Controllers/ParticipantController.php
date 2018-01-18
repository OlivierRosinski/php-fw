<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 15:30
 */

namespace Metinet\Controllers;
use Metinet\Core\Http\Request;
use Metinet\Core\Http\Response;
use Metinet\Domain\Participant;


class ParticipantController
{
    public function Participer(Request $request) : Response
    {
        $strNomParticipant = $request->getQuery()->get('strNomParticipant');
        $strPrenomParticipant  = $request->getQuery()->get('strPrenomParticipant');
        $strPhone = $request->getQuery()->get('strPhone');
        $strMail  = $request->getQuery()->get('strMail');
        $objParticipant = new Participant($strNomParticipant,$strPrenomParticipant,$strPhone,$strMail);
        return $objParticipant;
    }
}
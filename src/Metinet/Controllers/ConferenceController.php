<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:18
 */

namespace Metinet\Controllers;


use Metinet\Core\Http\Request;
use Metinet\Domain\Adresse;
use Metinet\Domain\Salle;
use Metinet\Metier\Conference;
use Metinet\Core\Http\Response;

class ConferenceController
{

    public function createConference(Request $request) : Response
    {
        $strNomConference = $request->getQuery()->get('nomConference');
        $bExterneAutorise  = $request->getQuery()->get('bExterneAutorise');
        $strDescription = $request->getQuery()->get('strDescription');
        $strObjectifs  = $request->getQuery()->get('strObjectifs');
        $strNomSalle = $request->getQuery()->get('strNomSalle');
        $strAdresse  = $request->getQuery()->get('strAdresse');
        $strVille  = $request->getQuery()->get('strVille');
        $strCodePostal  = $request->getQuery()->get('strCodePostal');
        $nbMaxPersonne = $request->getQuery()->get('nbMaxPersonne');
        $dateDebut = $request->getQuery()->get('dateDebut');
        $dateFin = $request->getQuery()->get('dateFin');
        $prixBillet = ($bExterneAutorise) ? $request->getQuery()->get('prixBillet') : null;
        $objAdresse = new Adresse($strAdresse,$strVille,$strCodePostal);
        $objSalle = new Salle($strNomSalle,$objAdresse);
        $objConference = new Conference($strNomConference,$bExterneAutorise,$strDescription,$strObjectifs,$objSalle,$nbMaxPersonne,$dateDebut,$dateFin,$prixBillet);
        try{
            $objConference->DateDebutFinVerif();
            $objConference->NbMaxPlacePositif();
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
        return $objConference;
    }

}
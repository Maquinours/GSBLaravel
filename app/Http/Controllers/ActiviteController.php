<?php
namespace App\Http\Controllers;

use App\Dao\ServiceInviter;
use App\Dao\ServicePraticien;

class ActiviteController extends Controller {
    public function getActivitesList($idPraticien) {
        try {
            if(!session('id'))
                return view('Vues/home');
            $praticien = ServicePraticien::getPraticien($idPraticien);
            $activites = ServiceInviter::getInviters($idPraticien);
            return view('Vues/listeActivites', compact(['praticien', 'activites']));
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function getInsertInviterForm($idPraticien) {
        try {
            if(!session('id'))
                return view('Vues/home');
            $activites = ServiceInviter::getAvailableActivites($idPraticien);
            return view('Vues/formActivite', compact('activites'));
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function getUpdateInviterForm($idPraticien, $idActivite) {
        try {
            if(!session('id'))
                return view('Vues/home');
            $inviter = ServiceInviter::getInviter($idPraticien, $idActivite);
            return view('Vues/formActivite', compact('inviter'));
        } catch (\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }
}
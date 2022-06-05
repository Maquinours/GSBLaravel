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
            return view('Vues/listeActivites', compact('error'));
        }
    }
}
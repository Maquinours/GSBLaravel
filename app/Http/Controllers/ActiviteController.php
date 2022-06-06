<?php
namespace App\Http\Controllers;

use App\Dao\ServiceInviter;
use App\Dao\ServicePraticien;
use Illuminate\Support\Facades\Request;

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
            return view('Vues/formActivite', compact(['idPraticien', 'activites']));
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function getUpdateInviterForm($idPraticien, $idActivite) {
        try {
            if(!session('id'))
                return view('Vues/home');
            $inviter = ServiceInviter::getInviter($idPraticien, $idActivite);
            return view('Vues/formActivite', compact(['idPraticien', 'inviter']));
        } catch (\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function insertInviter() {
        try {
            if(!session('id'))
                return view('Vues/home');
            $idPraticien = Request::input('idPraticien');
            $idActivite = Request::input('idActivite');
            $specialiste = Request::input('specialiste');
            ServiceInviter::insertInviter($idPraticien, $idActivite, $specialiste);
            return redirect("/activites/$idPraticien");
        } catch (\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function updateInviter() {
        try {
            if(!session('id'))
                return view('Vues/home');
            $idPraticien = Request::input('idPraticien');
            $idActivite = Request::input('idActivite');
            $specialiste = Request::input('specialiste');
            ServiceInviter::updateInviter($idPraticien, $idActivite, $specialiste);
            return redirect("/activites/$idPraticien");
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function deleteInviter($idPraticien, $idActivite) {
        try {
            if(!session('id'))
                return view('Vues/home');
            ServiceInviter::deleteInviter($idPraticien, $idActivite);
            return redirect("/activites/$idPraticien");
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }
}
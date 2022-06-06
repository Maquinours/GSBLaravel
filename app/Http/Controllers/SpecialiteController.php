<?php
namespace App\Http\Controllers;

use App\Dao\ServicePosseder;
use App\Dao\ServicePraticien;
use Illuminate\Support\Facades\Request;

class SpecialiteController extends Controller {
    public function getSpecialitesList($idPraticien) {
        try {
            if(!session('id'))
                return view('Vues/home');
            $praticien = ServicePraticien::getPraticien($idPraticien);
            $specialites = ServicePosseder::getPosseders($idPraticien);
            return view('Vues/listeSpecialites', compact(['praticien', 'specialites']));
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function getInsertPossederForm($idPraticien) {
        try {
            if(!session('id'))
                return view('Vues/home');
            $specialites = ServicePosseder::getAvailablesSpecialites($idPraticien);
            return view('Vues/formSpecialite', compact(['idPraticien', 'specialites']));
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function getUpdatePossederForm($idPraticien, $idSpecialite) {
        try {
            if(!session('id'))
                return view('Vues/home');
            $posseder = ServicePosseder::getPosseder($idPraticien, $idSpecialite);
            return view('Vues/formSpecialite', compact(['idPraticien','posseder']));
        } catch (\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function insertPosseder() {
        try {
            if(!session('id'))
                return view('Vues/home');
            $idPraticien = Request::input('idPraticien');
            $idSpecialite = Request::input('idSpecialite');
            $diplome = Request::input('diplome');
            $coefPrescription = Request::input('coefPrescription');
            ServicePosseder::insertPosseder($idPraticien, $idSpecialite, $diplome, $coefPrescription);
            return redirect("/specialites/$idPraticien");
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function updatePosseder() {
        try {
            if(!session('id'))
                return view('Vues/home');
            $idPraticien = Request::input('idPraticien');
            $idSpecialite = Request::input('idSpecialite');
            $diplome = Request::input('diplome');
            $coefPrescription = Request::input('coefPrescription');
            ServicePosseder::updatePosseder($idPraticien, $idSpecialite, $diplome, $coefPrescription);
            return redirect("/specialites/$idPraticien");
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function deletePosseder($idPraticien, $idSpecialite) {
        try {
            if(!session('id'))
                return view('Vues/home');
            ServicePosseder::deletePosseder($idPraticien, $idSpecialite);
            return redirect("/specialites/$idPraticien");
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }
}
<?php
namespace App\Http\Controllers;

use App\Dao\ServicePosseder;
use App\Dao\ServicePraticien;

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
            return view('Vues/formSpecialite', compact('specialites'));
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function getUpdatePossederForm($idPraticien, $idSpecialite) {
        try {
            if(!session('id'))
                return view('Vues/home');
            $posseder = ServicePosseder::getPosseder($idPraticien, $idSpecialite);
            return view('Vues/formSpecialite', compact('posseder'));
        } catch (\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function insertPosseder($idPraticien, $idSpecialite, $diplome, $coefPrescription) {
        try {
            if(!session('id'))
                return view('Vues/home');
            ServicePosseder::insertPosseder($idPraticien, $idSpecialite, $diplome, $coefPrescription);
            return redirect("/specialites/{$idPraticien}");
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }

    public function updatePosseder($idPraticien, $idSpecialite, $diplome, $coefPrescription) {
        try {
            if(!session('id'))
                return view('Vues/home');
            ServicePosseder::updatePosseder($idPraticien, $idSpecialite, $diplome, $coefPrescription);
            return redirect("/specialites/{$idPraticien}");
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }
}
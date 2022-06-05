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
            return view('Vues/listeSpecialites', compact('error'));
        }
    }
}
<?php
namespace App\Http\Controllers;

use App\Dao\ServicePosseder;
use App\Dao\ServicePraticien;
use App\Dao\ServiceTypePraticien;

class PraticienController extends Controller {
    public function getPraticienList() {
        try {
            if(!session('id'))
                return view('Vues/home');
            $praticiens = ServicePraticien::getPraticiens();
            $specialites = ServicePosseder::getAllSpecialites();
            $posseders = ServicePosseder::getAllPosseders();
            $types = ServiceTypePraticien::getTypes();
            return view('Vues/listePraticien', compact(['praticiens', 'specialites', 'posseders', 'types']));
        } catch(\Exception $error) {
            return view('Vues/error', compact('error'));
        }
    }
}
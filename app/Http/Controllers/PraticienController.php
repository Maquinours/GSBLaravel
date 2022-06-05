<?php
namespace App\Http\Controllers;

use App\Dao\ServicePraticien;

class PraticienController extends Controller {
    public function getPraticienList() {
        try {
            if(!session('id'))
                return view('Vues/home');
            $praticiens = ServicePraticien::getPraticiens();
            return view('Vues/listePraticien', compact('praticiens'));
        } catch(\Exception $error) {
            return view('Vues/listePraticien', compact('error'));
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use App\Dao\ServiceVisiteur;

class VisiteurController extends Controller
{
    public function getLogin() {
        try {
            if(session('id'))
                return view('Vues/home');
            return view('Vues/formLogin');
        } catch(\Exception $e) {
            $error = $e->getMessage();
            return view('Vues/error', compact('error'));
        }
    }

    public function signIn() {
        try {
            if(session('id'))
                return view('Vues/home');
            $login = Request::input('login');
            $pwd = Request::input('password');
            $visiteur = ServiceVisiteur::getVisiteur($login);
            if($visiteur) {
                if(Hash::check($pwd, $visiteur->pwd_visiteur)) {
                    Session::put('id', $visiteur->id_visiteur);
                    return view('Vues/home');
                }
            }
                $error = "Login ou mot de passe incorrect";
                return view('Vues/formLogin', compact('error'));
        } catch(\Exception $e) {
            $error = $e->getMessage();
            return view('Vues/error', compact('error'));
        }
    }

    public function signOut() {
        if(!session('id'))
            return view('Vues/home');
        Session::forget('id');
        return view('Vues/home');
    }

    public function updatePassword($pwd) {
        $unServiceVisiteur = new ServiceVisiteur();
        $unServiceVisiteur->updatePassword($pwd);
        return view('home');
    }
}

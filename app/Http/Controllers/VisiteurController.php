<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use App\dao\ServiceVisiteur;

class VisiteurController extends Controller
{
    public function getLogin() {
        try {
            $erreur = "";
            return view('Vues/formLogin', compact('erreur'));
        } catch(MonException $e) {
            $erreur = $e->getMessage();
            return view('Vues/formLogin', compact('erreur'));
        } catch(\Exception $e) {
            $erreur = $e->getMessage();
            return view('Vues/formLogin', compact('erreur'));
        }
    }

    public function signIn() {
        try {
            $login = Request::input('login');
            $pwd = Request::input('pwd');
            $unVisiteur = new ServiceVisiteur();
            $connected = $unVisiteur->login($login, $pwd);

            if($connected) {
                if(Session::get('type') == 'P') {
                    return view('Vues/homePraticien');
                } else {
                    return view('home');
                }
            } else {
                $erreur = "Login ou mot de passe inconnu";
                return view('Vues/formLogin', compact('erreur'));
            }
        } catch(MonException $e) {
            $erreur = $e->getMessage();
            return view('Vues/formLogin', compact('erreur'));
        } catch(\Exception $e) {
            $erreur = $e->getMessage();
            return view('Vues/formLogin', compact('erreur'));
        }
    }

    public function signOut() {
        $unVisiteur = new ServiceVisiteur();
        $unVisiteur->logout();
        return view('home');
    }

    public function updatePassword($pwd) {
        $unServiceVisiteur = new ServiceVisiteur();
        $unServiceVisiteur->updatePassword($pwd);
        return view('home');
    }
}

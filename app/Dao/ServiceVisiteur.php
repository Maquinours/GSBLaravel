<?php
namespace App\Dao;

use Illuminate\Database\QueryException;
use App\Exceptions\MonException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ServiceVisiteur {
    public static function getVisiteur($login) {
            return DB::table('visiteur')
                ->select()
                ->where('login_visiteur', '=', $login)
                ->first();
    }

    public function updatePassword($pwd) {
        $hashedPwd = Hash::make($pwd);
        try {
            DB::table('visiteur')
                ->update([
                    'pwd_visiteur' => $hashedPwd
                ]);
        } catch(QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }
}



<?php
namespace App\Dao;

use Illuminate\Support\Facades\DB;

class ServicePraticien {
    public static function getPraticiens() {
        return DB::table('praticien')
            ->select()
            ->join('type_praticien', 'praticien.id_type_praticien', '=', 'type_praticien.id_type_praticien')
            ->get();
    }
}


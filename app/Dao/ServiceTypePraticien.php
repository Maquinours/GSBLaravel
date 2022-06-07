<?php
namespace App\Dao;

use Illuminate\Support\Facades\DB;

class ServiceTypePraticien {
    public static function getTypes() {
        return DB::table('type_praticien')
            ->select()
            ->get();
    }
}


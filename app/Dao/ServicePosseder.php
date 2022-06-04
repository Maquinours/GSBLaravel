<?php
namespace App\Dao;

use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Collection;

class ServicePosseder {
    public static function getPosseders($idPraticien): Collection
    {
        return DB::table('posseder')
            ->select()
            ->join('specialite', 'posseder.id_specialite', '=', 'specialite.id_specialite')
            ->where('id_praticien', '=', $idPraticien)
            ->get();
    }

    public static function insertPosseder($idPraticien, $idSpecialite, $diplome, $coefPrescription) {
        DB::table('posseder')
            ->insert([
                'id_praticien' => $idPraticien,
                'id_specialite' => $idSpecialite,
                'diplome' => $diplome,
                'coef_prescription' => $coefPrescription
            ]);
    }

    public static function updatePosseder($idPraticien, $idSpecialite, $diplome, $coefPrescription) {
        DB::table('posseder')
            ->where('id_praticien', '=', $idPraticien)
            ->where('id_specialite', '=', $idSpecialite)
            ->update([
                'diplome' => $diplome,
                'coef_prescription' => $coefPrescription
            ]);
    }

    public static function deletePosseder($idPraticien, $idSpecialite) {
        DB::table('posseder')
            ->where('id_praticien', '=', $idPraticien)
            ->where('id_specialite', '=', $idSpecialite)
            ->delete();
    }
}
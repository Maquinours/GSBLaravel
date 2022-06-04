<?php
namespace App\Dao;

use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Collection;

class ServiceInviter {
    public static function getInviters($idPraticien): Collection
    {
        return DB::table('inviter')
            ->select()
            ->join('activite_compl', 'inviter.id_activite_compl', '=', 'activite_compl.id_activite_compl')
            ->where('id_praticien', '=', $idPraticien)
            ->get();
    }

    public static function insertInviter($idPraticien, $idActivite, $specialiste) {
        DB::table('inviter')
            ->insert([
                'id_praticien' => $idPraticien,
                'id_activite_compl' => $idActivite,
                'specialiste' => $specialiste
            ]);
    }

    public static function updateInviter($idPraticien, $idActivite, $specialiste) {
        DB::table('inviter')
            ->where('id_praticien', '=', $idPraticien)
            ->where('id_activite', '=', $idActivite)
            ->update([
                'specialiste' => $specialiste
            ]);
    }

    public static function deleteInviter($idPraticien, $idActivite) {
        DB::table('inviter')
            ->where('id_praticien', '=', $idPraticien)
            ->where('id_activite', '=', $idActivite)
            ->delete();
    }
}
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

    public static function getInviter($idPraticien, $idActivite) {
        return DB::table('inviter')
            ->select()
            ->join('activite_compl', 'inviter.id_activite_compl', '=', 'activite_compl.id_activite_compl')
            ->where('inviter.id_praticien', '=', $idPraticien)
            ->where('inviter.id_activite_compl', '=', $idActivite)
            ->first();
    }

    public static function getAvailableActivites($idPraticien) {
        return DB::table('activite_compl')
            ->whereNotIn('id_activite_compl', function ($query) use ($idPraticien) {
                $query->select('id_activite_compl')
                    ->from('inviter')
                    ->where('id_praticien', '=', $idPraticien)
                    ->get();
            })
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
            ->where('id_activite_compl', '=', $idActivite)
            ->update([
                'specialiste' => $specialiste
            ]);
    }

    public static function deleteInviter($idPraticien, $idActivite) {
        DB::table('inviter')
            ->where('id_praticien', '=', $idPraticien)
            ->where('id_activite_compl', '=', $idActivite)
            ->delete();
    }
}
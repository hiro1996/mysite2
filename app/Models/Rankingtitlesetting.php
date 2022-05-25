<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rankingtitlesetting extends Model
{
    public function rankingtitlesettingFlagModelGet($loginid) {
        $where = [
            'loginid' => $loginid
        ];
        $rankingflagconfigs = DB::table('rankingtitlesettings')
            ->join('rankingtablesettings',function($join) use ($where) {
            $join->on('rankingtitlesettings.first_display_flag','=','rankingtablesettings.rankingtablesetting_default_flag')
                ->where($where);
        })->get();
        return $rankingflagconfigs;
    }

    public function rankingtitlesettingModelGet() {
        $rankingconfigs = DB::table('rankingtitlesettings')->get();
        return $rankingconfigs;
    }
}

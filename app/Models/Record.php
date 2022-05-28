<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Record extends Model
{
    public function recordModelInsert($loginid,$workid,$browsehistory_sum) {
        $insert = [
            'loginid' => $loginid,
            'workid' => $workid,
            'browsehistory_sum' => $browsehistory_sum
        ];
        DB::table('records')->insert($insert);
    }

    public function recordModelUpdate($whereColumn1,$whereOutput1,$whereColumn2,$whereOutput2,$updateColumn,$updateOutput) {
        $where1 = [
            $whereColumn1 => $whereOutput1,
        ];
        $where2 = [
            $whereColumn2 => $whereOutput2,
        ];
        $update = [
            $updateColumn => $updateOutput,
        ];
        DB::table('records')->where($where1)->where($where2)->update($update);
    }

    public function recordModelGet() {
        $where = [
            'loginid' => session('loginid')
        ];
        $records = DB::table('records')->where($where)->get();
        return $records;
    }
}

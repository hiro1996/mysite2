<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Guestrecord extends Model
{
    public function guestrecordModelInsert($workid,$browsehistory_sum) {
        $insert = [
            'workid' => $workid,
            'browsehistory_sum' => $browsehistory_sum
        ];
        DB::table('guestrecords')->insert($insert);
    }

    public function guestrecordModelUpdate($whereColumn,$whereOutput,$updateColumn,$updateOutput) {
        $where = [
            $whereColumn => $whereOutput,
        ];
        $update = [
            $updateColumn => $updateOutput,
        ];
        DB::table('guestrecords')->where($where)->update($update);
    }

    public function guestrecordModelGet() {
        $guestrecords = DB::table('guestrecords')->get();
        return $guestrecords;
    }
}

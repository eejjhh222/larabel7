<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StoreModel extends Model
{
    //
    public function setTestTable()
    {
        DB::table('test')->insert(
            ['name' => 'john@example.com']
        );
    }

    public function getTestTable()
    {
        return DB::table('test')->get();

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KabarDesaModel extends Model
{
    protected $table = 'kabar_desa';
    public function allData()
    {
        return DB::select('select * from kabar_desa ORDER BY id_kabar_desa DESC');
    }

    public function detailData($id_kabar_desa)
    {
        return DB::table('kabar_desa')->where('id_kabar_desa', $id_kabar_desa)->first();
    }

    public function addData($data)
    {
        return DB::table('kabar_desa')->insert($data);
    }

    public function editData($id_kabar_desa, $data)
    {
        return DB::table('kabar_desa')
            ->where('id_kabar_desa', $id_kabar_desa)
            ->update($data);
    }
    
    public function deleteData($id_kabar_desa)
    {
        return DB::table('kabar_desa')
            ->where('id_kabar_desa', $id_kabar_desa)
            ->delete();
    }
}

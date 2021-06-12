<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NotifikasiModel extends Model
{
    use HasFactory;
    protected $table = 'notifikasi';
    public function allData()
    {
        return DB::select('select * from notifikasi ORDER BY id_notifikasi DESC');
    }

    public function editData($id_notifikasi, $data)
    {
        return DB::table('notifikasi')
            ->where('id_notifikasi', $id_notifikasi)
            ->update($data);
    }
    
}

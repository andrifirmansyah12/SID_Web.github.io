<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NotifikasiModel;

class NotifikasiController extends Controller
{
    public function __construct()
    {
        $this->NotifikasiModel = new NotifikasiModel();
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = [
            'notifikasi' => $this->NotifikasiModel->allData(),
        ];
        return view('notifikasi.v_notifikasi', $data);
    }
}

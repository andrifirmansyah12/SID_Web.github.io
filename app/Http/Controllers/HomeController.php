<?php

namespace App\Http\Controllers;
use App\Models\NotifikasiModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->NotifikasiModel = new NotifikasiModel();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'notifikasi' => $this->NotifikasiModel->allData(),
        ];
        return view('v_home', $data);
    }

    public function ubah_aksi($id_notifikasi)
    {

            $data = [
                'status' => Request()->status
            ];
            $this->NotifikasiModel->editData($id_notifikasi, $data);
        

        $this->NotifikasiModel->editData($id_notifikasi, $data);
        return redirect()->route('home')->with('pesan', 'Data Berhasil Dilihat');
    }
}

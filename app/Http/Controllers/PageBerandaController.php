<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageBerandaModel;

class PageBerandaController extends Controller
{
    public function __construct()
    {
        $this->PageBerandaModel = new PageBerandaModel();
      
    }

    public function index()
    {   
        $data = [
            'visimisi' => $this->PageBerandaModel->allData(),
            'aparaturdesa' => $this->PageBerandaModel->aptDesa(),
            'agendakegiatan' => $this->PageBerandaModel->agdkegiatan(),
            'kabar_desa' => $this->PageBerandaModel->kbrds()
        ];

        // $kbrds = PageBerandaModel::paginate(2);
        
        return view('beranda', $data);
    }

    public function show()
    {
        $data = [
            'kabar_desa' => $this->PageBerandaModel->show()
        ];

        return view('components.showKabarDesa', $data);
    }

    public function informasi($id_kabar_desa)
    {
        if (!$this->PageBerandaModel->informasi($id_kabar_desa)) {
            abort(404);
        }
        $data = [
            'kabar_desa' => $this->PageBerandaModel->informasi($id_kabar_desa),
        ];
        return view('components.isi_kabar_desa', $data);
    }

}

<?php

namespace App\Http\Controllers;
use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalGuestController extends Controller
{
    public function index() {
        $jurnal = Jurnal::where('tipe', 'publik')->get();
        return view('daftarjurnal',['jurnal' => $jurnal]);
        
    }

    public function lihat($id) {
        $jurnal = Jurnal::where('jurnal_id', $id)->get();
        return view('lihat',['jurnal' => $jurnal]);
    }
}

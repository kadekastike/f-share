<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JurnalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $user = Auth::user()->name;
        $jurnal = Jurnal::where('nama_user', $user)->get();
        return view('upload',['jurnal' => $jurnal]);
    }

    public function uploadProccess(Request $req){
        $this->validate($req, [
            'judul_jurnal' => 'required',
            'file' => 'required|mimes:pdf|max:10240',
            'kategori' => 'required',
        ]);

        $user = Auth::user()->name;
        $file = $req->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		Jurnal::create([
            'judul_jurnal' =>$req->judul_jurnal,
			'file' => $nama_file,
            'keterangan' => $req->keterangan,
            'kategori' => $req->kategori,
            'tipe' => $req->tipe,
            'nama_user' => $user,
        ]);
        
        return redirect('jurnal')->with('status', 'Jurnal Berhasil di Upload');
    }

    public function delete($id){
        Jurnal::where('jurnal_id', $id)->delete();
        return redirect('jurnal')->with('success','Biodata berhasil dihapus');
        
    }
}

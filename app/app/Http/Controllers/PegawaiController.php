<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PegawaiController extends Controller
{
    public function index() {


            // Your code here

        // dd($user);
        return view('peserta.index');
    }

    public function indexberkas() {
        $berkas = DB::table('daftarberkas')
        ->where('id', '=', auth()->user()->id)
        ->get();
        return view('peserta.indexBerkas', compact('berkas'));
    }
    public function detailhasil() {

    }
    public function detailtanggalujian() {
        $berkas = DB::table('tanggalujian')
        ->where('id', '=', auth()->user()->id)
        ->orWhere('tanggal','=',null)
        ->get();
        // dd($berkas);
        return view('peserta.detailtanggalujian', [
            'daft' => $berkas
        ]);
    }
    public function nilaipeserta() {
        $berkas = DB::table('nilai')
        ->where('id', '=', auth()->user()->id)
        ->get();
        // dd($berkas);
        return view('peserta.nilai', compact('berkas'));
    }
    public function indexuploadberkas() {
        $peserta = DB::table('users')->where('role_id','=','2')->get();
        return view('peserta.UploadBerkas', [
            'peserta' => $peserta
        ]);
    }
    public function cetakberkas() {
        $berkas = DB::table('nilai')->where('id','=',auth()->user()->id)->get();
        return view('peserta.BerkasCetak', compact('berkas'));
    }

    public function Halamansoal(Request $request) {
        $idpeserta  = DB::table('tanggalujian')->where('id',$request->id)->first();
        $daft = DB::table('jawabanbaru')->where('id',auth()->user()->id)->get();
        return view('peserta.soal',compact('idpeserta','daft'));
    }
    public function updatejawaban(Request $request){

        DB::table('tanggalujian')->where('id',$request->id)->update([
            'verifjawab' =>  'Dikerjakan',
        ]);

        DB::table('jawabanbaru')->where('id',$request->id)->update([
            'jawaban1' =>  $request->jawaban1,
            'jawaban2' =>  $request->jawaban2,
            'jawaban3' =>  $request->jawaban3,
            'jawaban4' =>  $request->jawaban4,
            'jawaban5' =>  $request->jawaban5,
            'jawaban6' =>  $request->jawaban6,
            'jawaban7' =>  $request->jawaban7,
            'jawaban8' =>  $request->jawaban8,
            'jawaban9' =>  $request->jawaban9,
            'jawaban10' => $request->jawaban10,
            'jawaban11' => $request->jawaban11,
            'jawaban12' => $request->jawaban12,
            'jawaban13' => $request->jawaban13,
            'jawaban14' => $request->jawaban14,
            'jawaban15' => $request->jawaban15,

         ]);
         return redirect('/Peserta/tanggal');

    }
    public function actionberkasku(Request $request) {

        try {
            $file1 = $request->file('kartupelajar');
            $kartupelajarName = time() . '.' . $file1->getClientOriginalExtension();
            $file1->storeAs('public/berkas/kartupelajar', $kartupelajarName);

            $file2 = $request->file('rapot');
            $rapotName = time() . '.' . $file2->getClientOriginalExtension();
            $file2->storeAs('public/berkas/rapot', $rapotName);

            $file3 = $request->file('sertifikatpkl');
            $sertifName = time() . '.' . $file3->getClientOriginalExtension();
            $file3->storeAs('public/berkas/sertif', $sertifName);

            $file4 = $request->file('asesmenmandiri');
            $assesmenname = time() . '.' . $file4->getClientOriginalExtension();
            $file4->storeAs('public/berkas/assesmen', $assesmenname);
            $test =  DB::table('daftarberkas')->insert([
                'id' => auth()->user()->id,
                'periode' => $request->periode,
                'schema' => $request->schema,
                'tanggal' => 'Menunggu penjadwalan',
                'asesmenmandiri' => $assesmenname,
                'name' => $request->name,
                'kartupelajar' => $kartupelajarName,
                'rapot' => $rapotName,
                'sertifikatpkl' => $sertifName,
                'status' => '1'
            ]);
            $pesan = 'Berhasil Upload Berkas';
            $berkas = DB::table('daftarberkas')
            ->where('id', '=', auth()->user()->id)
            ->get();
            if ($test) {
                return view('peserta.indexBerkas',compact('pesan','berkas'));
            }

        } catch (\Throwable $th) {
                $berkas = DB::table('daftarberkas')
                ->where('id', '=', auth()->user()->id)
                ->get();
                $gagal = 'Anda Sudah Melakukan Pengajuan Harap Daftar Peserta Kembali';
                return view('peserta.indexBerkas',compact('gagal','berkas'));
        }



    }



}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\For_;
use PhpParser\Node\Stmt\TryCatch;

class SuperadminController extends Controller
{
    public function index() {
        return view('superadmin.index');
    }

    public function indexberkas() {
        $berkas = DB::table('daftarberkas')->where('status','=','1')->get();
        return view('superadmin.VerifikasiBerkas', [
            'daft' => $berkas
        ]);
    }



    public function terimaberkas($id) {
        DB::table('daftarberkas')->where('id',$id)->update([
            'status' => '2'
        ]);
        return redirect('/admin/berkas');
    }
    public function indexujian(){
        $dataujian = DB::table('daftarberkas')
        ->where('status',3)
        ->get();

        return view('superadmin.detailujian',compact('dataujian'));
    }
    public function tolakberkas($id){
        DB::table('daftarberkas')->where('id',$id)->update([
            'status' => '2'
        ]);
        return redirect('/admin/berkas');
    }

    public function indexverif($id) {
        $peserta = DB::table('users')->where('id',$id)->get();
        return view('superadmin.detailVerifBerkas', [
            'peserta' => $peserta
        ]);
    }
    public function updateverif(Request $request) {
        DB::table('daftarberkas')->where('id',$request->id)->update([
            'tanggal' => $request->tanggal,
            'status' => '3'
        ]);
        return redirect('/admin/berkas');
    }



    public function indexdatapeserta() {
        $peserta = DB::table('users')->where('role_id','=','2')->get();
        return view('superadmin.listPeserta', [
            'peserta' => $peserta
        ]);
    }


    public function indexdatapesertasearch(Request $request) {

     if($request->ajax())
    {

        $output="";
        $users=DB::table('users')
        ->where('nis','LIKE','%'.$request->search."%")
        ->orWhere('name','LIKE','%'.$request->search."%")
        ->orWhere('alamat','LIKE','%'.$request->search."%")
        ->orWhere('email','LIKE','%'.$request->search."%")
        ->orWhere('jeniskelamin','LIKE','%'.$request->search."%")
        ->get();
        if($users)
        {
        $no =0;
            foreach ($users as $key => $user) {
                $output .= '<tr>' .
                    '<td>' . ++$no . '</td>' .
                    '<td>' . $user->nis . '</td>' .
                    '<td>' . $user->name . '</td>' .
                    '<td>' . $user->jeniskelamin . '</td>' .
                    '<td>' . $user->email . '</td>' .
                    '<td>' . $user->alamat . '</td>' .
                    '<td>
                    <a href="/listpeserta/edit/'.$user->id.'"><button type="button" class="btn btn-success">Update</button></a>
                    <br/>
                    <br/>
                    <a href="/listpeserta/delete/'.$user->id.'"><button type="button" class="btn btn-danger">Delete</button></a>
                    </td>'.

                    '</tr>';
            }


        return Response($output);

       }
    }}





    //     $peserta = DB::table('users')->where('role_id','=','2')->get();
    //     return view('superadmin.listPeserta', [
    //         'peserta' => $peserta
    //     ]);
    // }

    public function indexupdatepeserta($id) {
        $peserta = DB::table('users')->where('id',$id)->get();
        return view('superadmin.updatePeserta', [
            'peserta' => $peserta
        ]);
    }
    public function actionupdatepeserta(Request $request) {
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/admin/listpeserta');
    }
    public function pesertadelete($id)
	{
    DB::table('users')->where('id',$id)->delete();
	return redirect('/admin/listpeserta');
	}
    public function inputtanggal(Request $request)
	{
    //   $idpeserta = auth()->user()->id;
    $idpeserta  = DB::table('users')->where('id',$request->id)->first();
    $repo = DB::table('soalbaru')->get();
    // dd($idpeserta);
	return view('superadmin.halamaninputtanggal',compact('idpeserta','repo'));
	}

    public function inserttanggalujian(Request $request){
            try {
                DB::table('users')
                ->where('id',$request->id)
                ->first();
                    $data2 = [
                        'id'=>$request->id,
                        'namapeserta'=>$request->peserta,
                        'jenisujian'=>$request->jenisujian,
                        'tanggal'=>$request->tanggal,

                    ];
                // dd($data2);
                $inserttanggal = DB::table('tanggalujian')->insert($data2);
                if ($inserttanggal) {
                    return Redirect('/daftartanggalujian')->with(['berhasil'=>'Tanggal Ujian Berhasil Diinputkan']);
                }

            } catch (\Throwable $th) {
                    return Redirect('/daftartanggalujian')->with(['gagal'=>'Data Nama Ini Sudah Dinput Tanggal Ujiannya ']);
            }
    }
    public function DetailSoal() {
        $peserta  = DB::table('tanggalujian')->get();
        return view('superadmin.detailtanggalujian',compact('peserta'));
    }

    public function pilihSoal($id) {
        $peserta  = DB::table('tanggalujian')->where('id',$id)->get();
        $soal= DB::table('soalbaru')->join('tanggalujian','soalbaru.judulsoal','tanggalujian.jenisujian')->where('id',$id)->get();
        return view('superadmin.halamanpilihsoal',['peserta' => $peserta, 'soal' => $soal]);
    }

    public function inputsoal(Request $request)
	{
    // $peserta  = DB::table('tanggalujian')->where('id',$request->id)->first();
    // dd($idpeserta);
	return view('superadmin.halamaninputsoal');
	}

    public function lihatjawaban(Request $request)
	{
    $peserta  = DB::table('jawabanbaru')->where('idjawaban',$request->idjawaban)->first();
    // dd($idpeserta);
	return view('superadmin.halamaninputnilai',compact('peserta'));
	}
    public function nilai(Request $request)
	{
        DB::table('jawabanbaru')->where('id',$request->id)->update([
            'verif' =>  'Dinilai',
        ]);

        DB::table('nilai')->insert([
            'idjawaban' =>  $request->idjawaban,
            'id' =>  $request->id,
            'namapeserta' =>  $request->peserta,
            'totalnilai' =>  $request->Nilai,
         ]);

	return  redirect('/detailjawaban');
	}

    public function jawaban(Request $request)
	{
    $peserta  = DB::table('jawabanbaru')->get();
    // dd($idpeserta);
	return view('superadmin.halamanjawaban',compact('peserta'));
	}
    public function insertsoal(Request $request)
	{

        DB::table('soalbaru')->insert([
            'judulsoal' =>  $request->judulsoal,
            'namasoal1' =>  $request->soal1,
            'namasoal2' =>  $request->soal2,
            'namasoal3' =>  $request->soal3,
            'namasoal4' =>  $request->soal4,
            'namasoal5' =>  $request->soal5,
            'namasoal6' =>  $request->soal6,
            'namasoal7' =>  $request->soal7,
            'namasoal8' =>  $request->soal8,
            'namasoal9' =>  $request->soal9,
            'namasoal10' => $request->soal10,
            'namasoal11' => $request->soal11,
            'namasoal12' => $request->soal12,
            'namasoal13' => $request->soal13,
            'namasoal14' => $request->soal14,
            'namasoal15' => $request->soal15,

         ]);

	return redirect('/detailujianpeserta');
	}


    public function insertpilihsoal(Request $request)
	{
        DB::table('tanggalujian')->where('id', $request->id)->update([
            'verif' => 'Inserted'
    ]);

        DB::table('jawabanbaru')->insert([
            'id' => $request->id,
            'namapeserta' => $request->namapeserta,
            'namasoal1' =>  $request->namasoal1,
            'namasoal2' =>  $request->namasoal2,
            'namasoal3' =>  $request->namasoal3,
            'namasoal4' =>  $request->namasoal4,
            'namasoal5' =>  $request->namasoal5,
            'namasoal6' =>  $request->namasoal6,
            'namasoal7' =>  $request->namasoal7,
            'namasoal8' =>  $request->namasoal8,
            'namasoal9' =>  $request->namasoal9,
            'namasoal10' => $request->namasoal10,
            'namasoal11' => $request->namasoal11,
            'namasoal12' => $request->namasoal12,
            'namasoal13' => $request->namasoal13,
            'namasoal14' => $request->namasoal14,
            'namasoal15' => $request->namasoal15,

         ]);


        return redirect('/detailujianpeserta');
	}


}

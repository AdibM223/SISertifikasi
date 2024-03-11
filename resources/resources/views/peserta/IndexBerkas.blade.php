@extends('peserta.index');

@section('content')
<script>
    var tampilpesan = '{{$pesan ?? ''}}';
    alert(tampilpesan);
</script>

<script>
    var tampilpesanGagal = '{{$gagal ?? ''}}';
    alert(tampilpesanGagal);
</script>

<center>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <h3>Pendaftaran Berkas</h3>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <!-- <div class="col-sm-6"> -->
                    <a href="/Peserta/berkasupload"><button type="button" class='btn btn-primary'>Daftar Berkas</button></a>
                    </br>
                </br>
                    <table class="table  table-striped-columns">
                        <thead>
                            <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">ID Peserta</th>
                                <th scope="col">Periode</th>
                                <th scope="col">Tujuan Validasi</th>
                                <th scope="col">Tanggal Validasi</th>
                                <th scope="col">Asesmen </th>
                                <th scope="col">Nama </th>
                                <th scope="col">Kartu Pelajar </th>
                                <th scope="col">Rapot</th>
                                <th scope="col">Sertifikat PKL</th>
                                <th scope="col">Persetujuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($berkas as $r => $rows)
                                <td>{{ $r+1 }}</td>
                                <td>{{ $rows->id }}</td>
                                <td>{{ $rows->periode }}</td>
                                <td>{{ $rows->schema }}</td>
                                <td>{{ $rows->tanggal }}</td>
                                <td>
                                    <a href="{{asset('storage/berkas/assesmen/'.$rows->asesmenmandiri) }}">{{
                                        $rows->asesmenmandiri }}
                                </td>
                                <td>
                                    {{ $rows->name }}</td>
                                <td>
                                    <a href="{{asset('storage/berkas/kartupelajar/'.$rows->kartupelajar) }}">{{
                                        $rows->kartupelajar }}</a>
                                </td>
                                <td>
                                    <a href="{{asset('storage/berkas/rapot/'.$rows->rapot) }}">{{ $rows->rapot }}</a>
                                </td>
                                <td>
                                    <a href="{{asset('storage/berkas/sertif/'.$rows->sertifikatpkl) }}">{{ $rows->sertifikatpkl
                                        }}</a>
                                </td>
                                <td>
                                    @if ( $rows->status == '3')
                                    <button type="button" class="btn btn-success" disabled>Disetujui</button>
                                    @elseif ($rows->status == '1')
                                    <button type="button" class="btn btn-warning" disabled>Menunggu Persetujuan</button>
                                    @elseif ($rows->status == '2')
                                    <button type="button" class="btn btn-danger" disabled>Ditolak</button>
                                    @endif
                                </td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</center>

<!-- </div> -->
@endsection

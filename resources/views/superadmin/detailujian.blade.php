@extends('superadmin.index');

@section('content2')
@php
$pesanberhasil = Session::get('berhasil');
$pesangagal = Session::get('gagal');

@endphp
@if (Session::get('berhasil'))
<script>
    tampilpesan = '<?php echo $pesanberhasil?>'
    alert(tampilpesan)

</script>
@endif
@if (Session::get('gagal'))
<script>
    tampilpesan = '<?php echo $pesangagal?>'
    alert(tampilpesan)

</script>
@endif
<center>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <h3>Data Tanggal Ujian Peserta</h3>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- <div class="col-sm-6"> -->
                <br>
                <table class="table  table-striped-columns">
                    <thead>
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">No Pendaftaran</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Asesmen Mandiri</th>
                            <th scope="col">Kartu Pelajar</th>
                            <th scope="col">Rapot</th>
                            <th scope="col">Sertifikat PKL</th>
                            <th scope="col">Status</th>
                            <th scope="col">Input Tanggal Ujian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($dataujian as $r => $rows)
                            <td>{{ $r+1 }}</td>
                            <td>{{ $rows->id }}</td>
                            <td>{{ $rows->name }}</td>
                            <td>{{ $rows->asesmenmandiri }}</td>
                            <td>
                                <a href="{{asset('storage/berkas/kartupelajar/'.$rows->kartupelajar) }}">{{
                                    $rows->kartupelajar }}</a>
                            </td>
                            <td>
                                <a href="{{asset('storage/berkas/rapot/'.$rows->rapot) }}">{{ $rows->rapot }}</a>
                            </td>
                            <td>
                                <a href="{{asset('storage/berkas/sertif/'.$rows->sertifikatpkl) }}">{{
                                    $rows->sertifikatpkl
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
                            @if($rows->tanggal == "Menunggu Penjadwalan")

                            <td> <a href="/listpeserta/inputtanggal/{{$rows->id }}"><button type="button"
                                        class='btn btn-success'>Input Tanggal Ujian</button></a>
                            @else
                            <td>
                            <button type="button" class='btn btn-primary' disabled>Tanggal Terinput </button>
                            </td>
                            @endif

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->

</center>

@endsection

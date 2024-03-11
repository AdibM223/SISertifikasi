@extends('peserta.index');

@section('content')
<center>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <h3>Informasi Nilai Anda </h3>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <!-- <div class="col-sm-6"> -->

                    <br>
                    @if($berkas->isEmpty())
                                <h1> Nilai Anda Belum Keluar</h1>
                    @else
                    <a href="/lapperiode/cetak" target="__blank"><button type="button" class='btn btn-primary' >Export Pdf</button></a>
                    </br>
                    </br>
                    <table class="table  table-striped-columns">
                        <thead>
                            <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">ID Peserta</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nilai Anda</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                @foreach($berkas as $r => $rows)
                                <td>{{ $r+1 }}</td>
                                <td>{{ $rows->id }}</td>
                                <td>{{ $rows->namapeserta }}</td>
                                <td>{{ $rows->totalnilai }}</td>
                                @if($rows->totalnilai >= 75)
                                <td style="color:  green;"> Anda Lulus Ujian Tertulis</td>
                                @else
                                <td style="color: red;"> Anda Tidak Ujian Tertulis</td>
                                @endif
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</center>

<!-- </div> -->
@endsection

@extends('peserta.index');

@section('content')
<center>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <h3>Informasi Tanggal Ujian </h3>
        
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <!-- <div class="col-sm-6"> -->

                    <br>
                    @if($daft->isEmpty())
                                <h1> Tanggal Ujian Anda Belum Dikonfirmasi Admin</h1>
                    @else
                    <table class="table  table-striped-columns">
                        <thead>
                            <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">ID Peserta</th>
                                <th scope="col">Nama</th>
                                <th scope="col">jenis ujian</th>
                                <th scope="col">tanggal </th>
                                <th scope="col">Lihat Soal</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                @foreach($daft as $r => $rows)
                                <td>{{ $r+1 }}</td>
                                <td>{{ $rows->id }}</td>
                                <td>{{ $rows->namapeserta }}</td>
                                <td>{{ $rows->jenisujian }}</td>
                                <td>{{ $rows->tanggal }}</td>
                                @if($rows->verifjawab == "Dikerjakan")
                                <td> <button type="button" class='btn btn-success' disabled>Sudah Dikerjakan</button> </td>
                                @elseif ($rows->verifjawab == "Belum Dikerjakan")
                                <td> <a href="/Soal/Ujian/{{$rows->id }}"><button type="button" class='btn btn-danger'>Lihat Soal</button></a></td>
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

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
    <h3>Detail Halaman Input Peserta</h3>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- <div class="col-sm-6"> -->
                <a href="/inputsoal" style="margin-bottom: 50px;"><button type="button"
                                        class='btn btn-success'>Input soal </button></a>
                </br>
                <table class="table  table-striped-columns">
                    <thead>
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">ID Peserta</th>
                            <th scope="col">Nama Peserta</th>
                            <th scope="col">Jenis Ujian</th>
                            <th scope="col">Tanggal Ujian</th>
                            <th scope="col">Input Soal</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($peserta as $r => $rows)
                            <td>{{ $r+1 }}</td>
                            <td>{{ $rows->id }}</td>
                            <td>{{ $rows->namapeserta }}</td>
                            <td>{{ $rows->jenisujian }}</td>
                            <td>{{ $rows->tanggal }}</td>
                                @if($rows->verif == "Inserted")
                                <td>
                                <button type="button" class='btn btn-primary' disabled >Soal dipilih </button>
                                </td>
                                @elseif($rows->verif == "Need Verify")
                                <td>
                                <a href="/pilihsoal/{{ $rows->id }}" style="margin-bottom: 50px;"><button type="button" class='btn btn-success'>Pilih soal </button></a>

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

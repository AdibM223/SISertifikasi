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
    <h3>Halaman Data Penilaian Ujian</h3>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- <div class="col-sm-6"> -->
                <br>
                <table class="table  table-striped-columns">
                    <thead>
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">ID Peserta</th>
                            <th scope="col">Nama</th>
                            <th scope="col">soal 1</th>
                            <th scope="col">soal 2</th>
                            <th scope="col">soal 3</th>
                            <th scope="col">soal 4</th>
                            <th scope="col">soal 5</th>
                            <th scope="col">soal 6</th>
                            <th scope="col">soal 7</th>
                            <th scope="col">soal 8</th>
                            <th scope="col">soal 9</th>
                            <th scope="col">soal 10</th>
                            <th scope="col">soal 11</th>
                            <th scope="col">soal 12</th>
                            <th scope="col">soal 13</th>
                            <th scope="col">soal 14</th>
                            <th scope="col">soal 15</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($peserta as $r => $rows)
                            <td>{{ $r+1 }}</td>
                            <td>{{ $rows->id }}</td>
                            <td>{{ $rows->namapeserta }}</td>
                            <td>{{ $rows->namasoal1 }}</td>
                            <td>{{ $rows->namasoal2 }}</td>
                            <td>{{ $rows->namasoal3 }}</td>
                            <td>{{ $rows->namasoal4 }}</td>
                            <td>{{ $rows->namasoal5 }}</td>
                            <td>{{ $rows->namasoal6 }}</td>
                            <td>{{ $rows->namasoal7 }}</td>
                            <td>{{ $rows->namasoal8 }}</td>
                            <td>{{ $rows->namasoal9 }}</td>
                            <td>{{ $rows->namasoal10 }}</td>
                            <td>{{ $rows->namasoal11 }}</td>
                            <td>{{ $rows->namasoal12 }}</td>
                            <td>{{ $rows->namasoal13 }}</td>
                            <td>{{ $rows->namasoal14 }}</td>
                            <td>{{ $rows->namasoal15 }}</td>
                            @if($rows->verif == "Dinilai")
                            <td> <button type="button"
                                        class='btn btn-primary' disabled>Telah Dinilai</button>
                            @elseif($rows->verif == "Belum Dinilai")
                            <td> <a href="/inputnilai/{{$rows->idjawaban }}"><button type="button"
                                        class='btn btn-success'>Input Nilai</button></a>
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

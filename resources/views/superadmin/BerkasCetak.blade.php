<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LAPORAN PERIODE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
</head>
<center>
<body class="A4 landscape ">
    <section class="sheet padding-14mm">
        <h1>LAPORAN PERIODE PESERTA SERTIFIKASI </h1>
  
        <table class="table">
        <thead>
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">ID Peserta</th>
                            <th scope="col">Periode</th>
                            <th scope="col">Schema</th>
                            <th scope="col">Tanggal Validasi</th>
                            <th scope="col">Asesmen </th>
                            <th scope="col">Nama </th>
                            <th scope="col">Kartu Pelajar </th>
                            <th scope="col">Rapot</th>
                            <th scope="col">Sertifikat PKL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($daft as $r => $rows)
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
    </tr>
@endforeach
  </tbody>
        </table>
    </section>
</body>
</center>

<script type="text/javascript">

    
    window.print();
</script>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Nilai Ujian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js">
</head>

<body>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        img {
            height: 80px;
            width: auto;
            margin-top: 40px;
            margin-right: 10px;
            /* Adjust the right margin as needed */
        }

        h2 {
            margin-bottom: 30px;
            margin-top: 40px;
            text-align: center;
        }


        .btn-export {
            margin-bottom: 20px;
        }

        .table {
            margin-bottom: 50px;
        }

        .table thead th {
            background-color: #089340c5;
            color: white;
        }

        .table tbody th,
        .table tbody td {
            vertical-align: middle;
        }

        .total-row {
            background-color: #089340c5;
            font-weight: bold;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h2>Laporan Nilai  {{Auth::user()->name}} </h2>
            </div>
        </div>
        <h2></h2>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">ID Nilai</th>
                    <th scope="col">Idjawaban</th>
                    <th scope="col">Id Peserta</th>
                    <th scope="col">Nama Peserta</th>
                    <th scope="col">Total Nilai </th>
                    <th scope="col">Keterangan </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($berkas as $r => $rows)
                    <td>{{ $r+1 }}</td>
                    <td>{{ $rows->idnilai }}</td>
                    <td>{{ $rows->idjawaban }}</td>
                    <td>{{ $rows->id }}</td>
                    <td>{{ $rows->namapeserta }}</td>
                    <td>
                        {{ $rows->totalnilai }}
                    </td>
                    @if($rows->totalnilai >= 75)
                    <td style="color: green;"> Anda Lulus Ujian Tertulis</td>
                    @else
                    <td style="color: red;"> Anda Tidak Ujian Tertulis</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
<script>
    window.print();
</script>

</html>

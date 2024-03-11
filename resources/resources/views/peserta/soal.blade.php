@extends('peserta.index');

@section('content')
<div class="content-wrapper" style="margin-top: 20px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="container">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Halaman Input Jawaban</div>
                        <div class="card-body">
                            <form action="/input/jawaban" method='post' enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> ID</label>
                                    <input type="text" class="form-control" name='id'  value='{{$idpeserta->id }}' required readonly>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> Nama </label>
                                    <input type="text" class="form-control" name='nama'  value='{{$idpeserta->namapeserta }}' required readonly>
                                </div>
                                @foreach($daft as $r => $rows)
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+1 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal1 }}</label>
                                    <input type="text" class="form-control" name='jawaban1'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+2 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal2 }}</label>
                                    <input type="text" class="form-control" name='jawaban2'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+3 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal3 }}</label>
                                    <input type="text" class="form-control" name='jawaban3'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+4 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal4 }}</label>
                                    <input type="text" class="form-control" name='jawaban4'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+5 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal5 }}</label>
                                    <input type="text" class="form-control" name='jawaban5'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+6 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal6 }}</label>
                                    <input type="text" class="form-control" name='jawaban6'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+7 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal7 }}</label>
                                    <input type="text" class="form-control" name='jawaban7'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+8 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal8 }}</label>
                                    <input type="text" class="form-control" name='jawaban8'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+9 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal9 }}</label>
                                    <input type="text" class="form-control" name='jawaban9'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+10 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal10 }}</label>
                                    <input type="text" class="form-control" name='jawaban10'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+11 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal11 }}</label>
                                    <input type="text" class="form-control" name='jawaban11'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+12 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal12 }}</label>
                                    <input type="text" class="form-control" name='jawaban12'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+13 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal13 }}</label>
                                    <input type="text" class="form-control" name='jawaban13'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+14 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal14 }}</label>
                                    <input type="text" class="form-control" name='jawaban14'  value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> {{$r+15 }}</label>
                                    <label for="exampleFormControlInput1"> {{$rows->namasoal15 }}</label>
                                    <input type="text" class="form-control" name='jawaban15'  value='' required>
                                </div>

                                @endforeach
                                <div>
                                    <br>
                                    <input class="btn btn-primary" type="submit" value="Input">
                                    <a href='/detailujianpeserta'><button type="button"
                                            class="btn btn-danger">Kembali</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

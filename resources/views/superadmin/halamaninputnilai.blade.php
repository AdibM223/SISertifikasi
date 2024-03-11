@extends('superadmin.index');

@section('content2')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="container">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Halaman Input Nilai</div>
                        <div class="card-body">
                            <form action="/input/nilai" method='post' enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">  ID Peserta</label>
                                    <input type="text" class="form-control" name='id' readonly value='{{$peserta->id}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">  Nama Peserta</label>
                                    <input type="text" class="form-control" name='peserta' readonly value='{{$peserta->namapeserta}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">  ID Jawaban</label>
                                    <input type="text" class="form-control" name='idjawaban' readonly value='{{$peserta->idjawaban}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 1. {{$peserta->namasoal1}}</label>
                                    <input type="text" class="form-control" name='jawaban1' readonly value='{{$peserta->jawaban1}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 2. {{$peserta->namasoal2}}</label>
                                    <input type="text" class="form-control" name='jawaban2' readonly value='{{$peserta->jawaban2}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 3. {{$peserta->namasoal3}}</label>
                                    <input type="text" class="form-control" name='jawaban3' readonly value='{{$peserta->jawaban3}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 4. {{$peserta->namasoal4}}</label>
                                    <input type="text" class="form-control" name='jawaban4' readonly value='{{$peserta->jawaban4}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 5. {{$peserta->namasoal5}}</label>
                                    <input type="text" class="form-control" name='jawaban5' readonly value='{{$peserta->jawaban5}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 6. {{$peserta->namasoal6}}</label>
                                    <input type="text" class="form-control" name='jawaban6' readonly value='{{$peserta->jawaban6}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 7. {{$peserta->namasoal7}}</label>
                                    <input type="text" class="form-control" name='jawaban7' readonly value='{{$peserta->jawaban7}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 8. {{$peserta->namasoal8}}</label>
                                    <input type="text" class="form-control" name='jawaban8' readonly value='{{$peserta->jawaban8}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 9. {{$peserta->namasoal9}}</label>
                                    <input type="text" class="form-control" name='jawaban9' readonly value='{{$peserta->jawaban9}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 10. {{$peserta->namasoal10}}</label>
                                    <input type="text" class="form-control" name='jawaban10' readonly value='{{$peserta->jawaban10}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 11. {{$peserta->namasoal11}}</label>
                                    <input type="text" class="form-control" name='jawaban11' readonly value='{{$peserta->jawaban11}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 12. {{$peserta->namasoal12}}</label>
                                    <input type="text" class="form-control" name='jawaban12' readonly value='{{$peserta->jawaban12}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 13. {{$peserta->namasoal13}}</label>
                                    <input type="text" class="form-control" name='jawaban13' readonly value='{{$peserta->jawaban13}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 14. {{$peserta->namasoal14}}</label>
                                    <input type="text" class="form-control" name='jawaban14' readonly value='{{$peserta->jawaban14}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> 15. {{$peserta->namasoal15}}</label>
                                    <input type="text" class="form-control" name='jawaban15' readonly value='{{$peserta->jawaban15}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> Nilai</label>
                                    <input type="text" class="form-control" name='Nilai'   required>
                                </div>
                                <div>
                                    <br>
                                    <input class="btn btn-primary" type="submit" value="Input">
                                    <a href='/detailjawaban'><button type="button"
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
@endsection

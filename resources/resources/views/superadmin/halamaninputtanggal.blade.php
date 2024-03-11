@extends('superadmin.index');

@section('content2')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="container">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Halaman Input Tanggal Peserta Ujian</div>
                        <div class="card-body">
                            <form action="/input/{{$idpeserta->id}}/tanggalujian" method='post' enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">  ID Users</label>
                                    <input type="text" class="form-control" name='id' disabled value='{{$idpeserta->id}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">  Nama Peserta</label>
                                    <input type="text" class="form-control" name='peserta' readonly value='{{$idpeserta->name}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Jenis Ujian </label>
                                    <select name='jenisujian' class="form-control" required>
                                        @foreach($repo as $a)
                                        <option value="{{$a->judulsoal}}">{{$a->judulsoal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tanggal </label>
                                    <input type="datetime-local" class="form-control" name='tanggal'  required>
                                </div>
                                <div>
                                    <br>
                                    <input class="btn btn-primary" type="submit" value="Input">
                                    <a href='/Peserta/berkas'><button type="button"
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

@extends('peserta.index');

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="container">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Lengkapi Persyaratan Asesmen</div>
                        <div class="card-body">
                            <form action="{{ route('actionberkas') }}" method='post' enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Data Peserta</label>
                                    <select class="form-control" name='name' required>
                                        <option value=""></option>
                                        @foreach($peserta as $r)
                                        <option value="{{ $r->name }}">{{ $r->nis }} - {{ $r->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Periode</label>
                                    <select class="form-control" name='periode' required>

                                        <option value="Ganjil"> Ganjil  </option>
                                        <option value="Genap">  Genap </option>
                                       
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Hasil Asesmen Mandiri</label>
                                    <input type="file" class="form-control" name='asesmenmandiri' value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Tujuan Asesmen</label>
                                    <select class="form-control" name='schema' required>

                                        <option value="Sertifikasi"> Sertifikasi  </option>
                                        <option value="Sertifikasi Ulang"> Sertifikasi Ulang </option>
                                        <option value="Pengakuan Kompetensi Teknik"> Pengakuan Kompetensi Teknik </option>
                                        <option value="Rekondisi Pembelajaran Lampau"> Rekondisi Pembelajaran Lampau </option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Kartu Pelajar</label>
                                    <input type="file" class="form-control" name='kartupelajar' value='' required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Raport</label>
                                    <input type="file" class="form-control" name='rapot' value='' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Sertifikat PKL</label>
                                    <input type="file" class="form-control" name='sertifikatpkl' value='' required>
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

@extends('superadmin.index');

@section('content2')
<div class="content-wrapper" style="margin-top: 20px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="container">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Halaman Input Soal</div>
                        <div class="card-body">
                            <form action="/input/pilih" method='post' enctype="multipart/form-data">
                                {{ csrf_field() }}
                                @foreach($peserta as $r)
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">  ID Users</label>
                                    <input type="text" class="form-control" name='id' readonly value='{{$r->id}}' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">  Nama Peserta</label>
                                    <input type="text" class="form-control" name='namapeserta' readonly value='{{$r->namapeserta}}' required>
                                </div>
                                @endforeach
                                <div class="form-group">
                                <label for="exampleFormControlInput1"> Judul Soal</label>
                                    <select name="judulsoal" class="form-control">
                                        <option value=""></option>
                                    @foreach($soal as $rt)
                                        <option value="{{$rt->judulsoal}}">{{$rt->idsoal}} - {{$rt->judulsoal}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                @foreach($soal as $rt)
                                <input type="hidden" class="form-control" name="namasoal1" readonly value='{{$rt->namasoal1}}' required>
                                <input type="hidden" class="form-control" name="namasoal2" readonly value='{{$rt->namasoal2}}' required>
                                <input type="hidden" class="form-control" name="namasoal3" readonly value='{{$rt->namasoal3}}' required>
                                <input type="hidden" class="form-control" name="namasoal4" readonly value='{{$rt->namasoal4}}' required>
                                <input type="hidden" class="form-control" name="namasoal5" readonly value='{{$rt->namasoal5}}' required>
                                <input type="hidden" class="form-control" name="namasoal6" readonly value='{{$rt->namasoal6}}' required>
                                <input type="hidden" class="form-control" name="namasoal7" readonly value='{{$rt->namasoal7}}' required>
                                <input type="hidden" class="form-control" name="namasoal8" readonly value='{{$rt->namasoal8}}' required>
                                <input type="hidden" class="form-control" name="namasoal9" readonly value='{{$rt->namasoal9}}' required>
                                <input type="hidden" class="form-control" name="namasoal10" readonly value='{{$rt->namasoal10}}' required>
                                <input type="hidden" class="form-control" name="namasoal11" readonly value='{{$rt->namasoal11}}' required>
                                <input type="hidden" class="form-control" name="namasoal12" readonly value='{{$rt->namasoal12}}' required>
                                <input type="hidden" class="form-control" name="namasoal13" readonly value='{{$rt->namasoal13}}' required>
                                <input type="hidden" class="form-control" name="namasoal14" readonly value='{{$rt->namasoal14}}' required>
                                <input type="hidden" class="form-control" name="namasoal15" readonly value='{{$rt->namasoal15}}' required>
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

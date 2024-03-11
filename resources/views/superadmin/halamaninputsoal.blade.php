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
                            <form action="/input/soal" method='post' enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> Judul Soal</label>
                                    <input type="text" class="form-control" name='judulsoal'  value='Sertifikasi ...' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> Soal 1</label>
                                    <input type="text" class="form-control" name='soal1'  value='a' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1"> Soal 2</label>
                                    <input type="text" class="form-control" name='soal2'  value='b' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 3 </label>
                                    <input type="text" class="form-control" name='soal3' value='b' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 4 </label>
                                    <input type="text" class="form-control" name='soal4' value='c' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 5 </label>
                                    <input type="text" class="form-control" name='soal5' value='d' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 6 </label>
                                    <input type="text" class="form-control" name='soal6' value='s'required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 7 </label>
                                    <input type="text" class="form-control" name='soal7' value='a'required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 8 </label>
                                    <input type="text" class="form-control" name='soal8' value='s'required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 9 </label>
                                    <input type="text" class="form-control" name='soal9' value='s'required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 10 </label>
                                    <input type="text" class="form-control" name='soal10'value='a' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 11 </label>
                                    <input type="text" class="form-control" name='soal11' value='a' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 12 </label>
                                    <input type="text" class="form-control" name='soal12'value='a' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 13</label>
                                    <input type="text" class="form-control" name='soal13'value='a' required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 14 </label>
                                    <input type="text" class="form-control" name='soal14' value='a'required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Soal 15 </label>
                                    <input type="text" class="form-control" name='soal15' value='a'required>
                                </div>
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

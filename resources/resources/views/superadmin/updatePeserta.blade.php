
@extends('superadmin.index');

@section('content2')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">Update Peserta</div>
        <div class="card-body">
            <form action="{{ route('actionupdatepeserta') }}" method='post'>
                {{ csrf_field() }}

                @foreach($peserta as $r)
                <input type="hidden" class="form-control" name='id' value='{{ $r->id }}'>

                <div class="form-group">
                    <label for="exampleFormControlInput1">nama</label>
                    <input type="text" class="form-control" name='name' value='{{ $r->name }}'>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">alamat</label>
                    <input type="text" class="form-control" name='alamat' value='{{ $r->alamat }}'>
                </div>
                @endforeach
                <div class="form-group">
                    <label for="exampleFormControlInput1">Password</label>
                    <input type="password" class="form-control" name='password'
                        placeholder='Masukkan Password lama/baru' value='' required>
                </div>

                <div>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Input">
                    <a href='/Peserta/berkas'><button type="button" class="btn btn-danger">Kembali</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

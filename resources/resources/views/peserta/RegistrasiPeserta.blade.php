<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">REGISTER PESERTA BARU</div>
            <div class="card-body">
                <form action="{{ route('actionRegPeserta') }}" method='post'>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Peserta</label>
                        <input type="text" class="form-control" name='name' value='' required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">NIS</label>
                        <input type="text" class="form-control" name='nis' value='' required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <input type="text" class="form-control" name='alamat' value='' required>
                    </div>
                    <div class="form-group">
                        {{-- <label for="exampleFormControlInput1">Jenis Kelamin</label> --}}
                        <select class="form-select" size="3" aria-label="size 3 select example" name="jeniskelamin">
                            <option selected>Jenis Kelamin</option>
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="text" class="form-control" name='email' value='' required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" class="form-control" name='password' value='' required>
                    </div>
                    <div>
                        <br>
                        <input class="btn btn-primary" type="submit" value="Input">
                        <a href='/'><button type="button" class="btn btn-danger">Kembali</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

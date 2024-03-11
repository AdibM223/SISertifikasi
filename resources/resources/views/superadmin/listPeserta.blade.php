
@extends('superadmin.index');

@section('content2')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<center>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <h3>Pendaftaran Berkas</h3>
        <div class="content-header">
        <div class="input-group">
      <div class="form-outline" data-mdb-input-init>
        <form action="/admin/listpeserta/search" >
        <input type="text"  id="search" class="form-control" placeholder="Search"/>
      </div>


        </form>

    </div>
          <div class="container-fluid">
            <div class="row mb-2">
              <!-- <div class="col-sm-6"> -->
    <table class="table  table-striped-columns">

      <thead>
        <tr>
          <th scope="col">NIS</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Email</th>
          <th scope="col">Alamat</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <tr>
            @foreach($peserta as $r)
                  <td>{{ $r->nis }}</td>
                  <td>{{ $r->name }}</td>
                  <td>{{ $r->jeniskelamin }}</td>
                  <td>{{ $r->email }}</td>
                  <td>{{ $r->alamat }}</td>
                  <td> <a href="/listpeserta/edit/{{$r->id }}"><button type="button" class='btn btn-success'>Update</button></a>
                <br/>
                <br/>
                <a href="/listpeserta/delete/{{$r->id }}"><button type="button" class='btn btn-danger'>Delete</button></a>
                </td>

            </tr>
            @endforeach
      </tbody>
    </table>
    </div></div></div></div>
    <script type="text/javascript">

    $('#search').on('keyup',function(){
    $value=$(this).val();

    $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
                  $('tbody').html(data);
             }
    });
    })

    </script>
    <script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
</center>

<!-- </div> -->
@endsection

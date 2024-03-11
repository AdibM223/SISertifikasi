@extends('superadmin.index');

@section('content2')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<center>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <h3>Pendaftaran Berkas</h3>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- <div class="col-sm-6"> -->
                {{-- <a href='/lapperiode/cetak' target="__blank"><button  type="button" class="btn btn-primary" >Cetak Laporan</button></a> --}}
                <div class="form-outline" data-mdb-input-init>
                    <form action="/admin/listpeserta/search" >
                    <input type="text"  id="search" class="form-control" placeholder="Search"/>
                    </form>
                  </div>



                <table class="table  table-striped-columns">

                    <thead>
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">ID Peserta</th>
                            <th scope="col">Periode</th>
                            <th scope="col">Tujuan Validasi</th>
                            <th scope="col">Tanggal Validasi</th>
                            <th scope="col">Asesmen </th>
                            <th scope="col">Nama </th>
                            <th scope="col">Kartu Pelajar </th>
                            <th scope="col">Rapot</th>
                            <th scope="col">Sertifikat PKL</th>
                            <th scope="col">Persetujuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($daft as $r => $rows)
                            <td>{{ $r+1 }}</td>
                            <td>{{ $rows->id }}</td>
                            <td>{{ $rows->periode }}</td>
                            <td>{{ $rows->schema }}</td>
                            <td>{{ $rows->tanggal_verif }}</td>
                            <td>
                                <a href="{{asset('storage/berkas/assesmen/'.$rows->asesmenmandiri) }}">{{
                                    $rows->asesmenmandiri }}
                            </td>
                            <td>
                                {{ $rows->name }}</td>
                            <td>
                                <a href="{{asset('storage/berkas/kartupelajar/'.$rows->kartupelajar) }}">{{
                                    $rows->kartupelajar }}</a>
                            </td>
                            <td>
                                <a href="{{asset('storage/berkas/rapot/'.$rows->rapot) }}">{{ $rows->rapot }}</a>
                            </td>
                            <td>
                                <a href="{{asset('storage/berkas/sertif/'.$rows->sertifikatpkl) }}">{{ $rows->sertifikatpkl
                                    }}</a>
                            </td>
                            <td>
                                <a href="/daftarberkas/terima/{{$rows->id }}"><button type="button"
                                        class='btn btn-success'>Terima</button></a>
                                <br />
                                <br />
                                <a href="/daftarberkas/tolak/{{$rows->id }}"><button type="button"
                                        class='btn btn-danger'>Tolak</button></a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
</center>
<script type="text/javascript">
    $('#search').on('keyup',function(){
$value=$(this).val();

$.ajax({
        type : 'get',
        url : '{{URL::to('search2')}}',
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
@endsection

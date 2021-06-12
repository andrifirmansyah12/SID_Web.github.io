@extends('layout.v_template-admin')
@section('title','Pengaduan')

@section('content')

@if (session('pesan'))
    <div class="alert alert-success" role="alert">
        {{session('pesan')}}
    </div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover data">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Status</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach ($pengaduan as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nik}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->status}}</td>
                                <td>
                                    <button type="button" class="btn btn-success btn-round btn-xs" data-toggle="modal" data-target="#ubah{{ $data->id_pengaduan }}">
                                        Baca
                                    </button>
                                    {{-- <a href="/pengaduan/detail/{{ $data->id_pengaduan }}" class="btn btn-success btn-round btn-xs">Baca</a> --}}
                                    <button type="button" class="btn btn-danger btn-round btn-xs" data-toggle="modal" data-target="#hapus{{ $data->id_pengaduan }}">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@foreach ($pengaduan as $data)
<!-- Modal Hapus -->
<div class="modal fade" id="hapus{{ $data->id_pengaduan }}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $data->nama }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah Anda Yakin Ingin Menghapus Data Ini ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="/pengaduan/hapus/{{ $data->id_pengaduan }}" class="btn btn-primary">Ya</a>
        </div>
      </div>
    </div>
  </div>

   <!-- Modal Ubah -->
<div class="modal fade" id="ubah{{ $data->id_pengaduan }}" tabindex="-1" role="dialog" aria-labelledby="ubahLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dibaca?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/pengaduan/ubah_aksi/{{ $data->id_pengaduan}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" id="status" name="status" value="Dilihat"> 
      <div class="modal-footer">
        {{-- <a href="/pengaduan/detail/{{ $data->id_pengaduan }}" type="submit" class="btn btn-primary">Ya</a> --}}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary" >Ya</button>
      </div>
    </div>
  </div>
      </form>
</div>

@endforeach

@endsection
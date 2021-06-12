@extends('layout.v_template-admin')
@section('title','Notifikasi')

@section('content')

{{-- <a href="/notifikasi/tambah" class="btn btn-primary btn-round btn-xs">Tambah Data</a> --}}
{{-- <a href="/notifikasi/print" target="_blank" class="btn btn-warning btn-round btn-xs">Print PDF</a> --}}
<br><br>

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
                        <th scope="col">Nik</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($notifikasi as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nik}}</td>
                            <td>{{$data->aksi}}</td>
                            <td>
                                <button type="button" class="btn {{ $data->status == 'Dilihat' ? 'btn-primary' : 'btn-success'}} btn-round btn-xs" data-toggle="modal" data-target="#ubah{{ $data->id_notifikasi }}">
                                    {{$data->status == 'Dilihat' ? 'Dilihat' : 'Terkirim'}}
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

@foreach ($notifikasi as $data)

  <!-- Modal Ubah -->
<div class="modal fade" id="ubah{{ $data->id_notifikasi }}" tabindex="-1" role="dialog" aria-labelledby="ubahLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Dilihat?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/notifikasi/ubah_aksi/{{ $data->id_notifikasi}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="status" name="status" value="Dilihat"> 
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" >Ya</button>
        </div>
      </div>
    </div>
        </form>
  </div>
@endforeach

@endsection
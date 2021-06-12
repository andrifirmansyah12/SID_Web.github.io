@extends('layout.v_template-admin')
@section('title','Tambah Data')

@section('content')

<form action="/kabar_desa/tambah_aksi" method="POST" enctype="multipart/form-data">
    @csrf
 
<div class="row">
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah Kabar Desa</div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control input-square @error('gambar') is-invalid @enderror" id="gambar" name="gambar" value="{{old('gambar')}}">
                <div class="invalid-feedback">
                    @error('gambar')
                    {{ $message }} 
                    @enderror
                </div> 
            </div>	            	

            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control input-square @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{old('judul')}}">
                <div class="invalid-feedback">
                    @error('judul')
                    {{ $message }} 
                    @enderror
                </div>
            </div>	
                        
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control input-square @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{old('tanggal')}}">
                <div class="invalid-feedback">
                    @error('tanggal')
                    {{ $message }} 
                    @enderror
                </div>
            </div>	
               
            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea cols="30" rows="10" class="form-control input-square @error('isi') is-invalid @enderror" id="isi" name="isi" value="{{old('isi')}}"></textarea>
                {{-- <input type="text" class="form-control input-square @error('isi') is-invalid @enderror" id="isi" name="isi" value="{{old('isi')}}" > --}}
                <div class="invalid-feedback">
                    @error('isi')
                    {{ $message }} 
                    @enderror
                </div>
            </div>									
        </div>

        <div class="card-action">
            <button type="submit" class="btn btn-success btn-round btn-sm">Simpan</button>
            <a href="/kabar_desa" class="btn btn-danger btn-round btn-sm"> Batal</a>
        </div>
    </div>

</form>
</div>


@endsection
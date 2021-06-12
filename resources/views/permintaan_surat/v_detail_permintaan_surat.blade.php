@extends('layout.v_template-admin')
@section('title','Detail Permintaan Surat')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <center>
                    <p class="card-category">
                    {{ $permintaan_surat->nama_penduduk}}
                    </p>
                    </center>
                </div>
                <div class="card-body">
                   
                    <table>
                        <tr>
                            <th width="100px">Nama</th>
                            <th width="30px">:</th>
                            <th>{{ $permintaan_surat->nama_penduduk}}</th>
                        </tr>
                        <tr>
                            <th width="100px">Nama Surat</th>
                            <th width="30px">:</th>
                            <th>{{ $permintaan_surat->nama_surat}}</th>
                        </tr>
                        <tr>
                            <th width="100px">status</th>
                            <th width="30px">:</th>
                            <th>{{ $permintaan_surat->status}}</th>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="legend">
                        
                            <th><a href="/permintaan_surat" class="btn btn-success btn-round btn-xs">Kembali</a></th>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

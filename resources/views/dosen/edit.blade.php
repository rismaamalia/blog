@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Dosen</div>

                <div class="card-body">
                    <form action="{{ route('dosen.update',$dosen->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Dosen</label>
                        <input class="form-control" value="{{ $dosen->nama }}" type="text" name="nama">

                    </div>
                    <div class="form-group">
                            <label for="">Nomor Induk Dosen Pembimbing</label>
                            <input class="form-control" value="{{ $dosen->nipd }}" type="text" name="nipd">
                        </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                            Simpan Data
                        </button>


           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Data Mahasiswa</div>

                <div class="card-body">
                   

                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <input class="form-control" value="{{ $mhs->nama }}" type="text" name="nama" disabled>

                    </div>
                    <div class="form-group">
                            <label for="">Nomor Induk Mahasiswa</label>
                            <input class="form-control" value="{{ $mhs->nim }}" type="text" name="nim" disabled>
                        </div>

                        <div class="form-group">
                                <label for="">Nama Dosen</label>
                                <input class="form-control" value="{{ $mhs->dosen->nama }}" type="text"disabled>
                        </div>
                                 
                    <div class="form-group">
                        
                        <a href="{{ url('mahasiswa') }}" class="btn btn-outline-info">
                            Kembali
                        </a>
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
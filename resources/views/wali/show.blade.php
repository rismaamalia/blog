@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Data Mahasiswa</div>

                <div class="card-body">
                   

                    <div class="form-group">
                        <label for="">Nama Wali</label>
                        <input class="form-control" value="{{ $wali->nama }}" type="text" name="nama" disabled>

                    </div>

                        <div class="form-group">
                                <label for="">Nama Mahasiswa</label>
                                <input class="form-control" value="{{ $wali->Mahasiswa->nama }}" type="text"disabled>
                        </div>
                                 
                    <div class="form-group">
                        
                        <a href="{{ url('wali') }}" class="btn btn-outline-info">
                            Kembali
                        </a>
                        
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
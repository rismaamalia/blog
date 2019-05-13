@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Dosen</div>

                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="">Nama Dosen</label>
                        <input class="form-control" value="{{ $dosen->nama }}" type="text" name="nama" disabled>

                    </div>
                    <div class="form-group">
                            <label for="">Nomor Induk Dosen Pembimbing</label>
                            <input class="form-control" value="{{ $dosen->nipd }}" type="text" name="nipd" disabled>
                        </div>
                    


           
        </div>
    </div>
</div>
@endsection
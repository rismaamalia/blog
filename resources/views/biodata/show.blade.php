@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Biodata</div>

                <div class="card-body">

                <div class="form-group">
                    <label for="">Nama</label>
                    <input class="form-control" value="{{ $bio->nama }}" type="text" name="nama" disabled>
                </div>



                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="10" disabled>{{ $bio->alamat }}</textarea>
                </div>



                <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input class="form-control" value="{{ $bio->tgl_lahir }}" type="date" name="tgl_lahir" disabled>
                </div>



                <div class="form-group">
                        <label for="">Foto</label>
                        @if (isset($bio) && $bio->foto)
                        <p>
                                <img widht:100%
                                src ="{{asset('/assets/img/biodata/'.
                                $bio->foto.'') }}"
                                alt="foto">
                        </p>
                        @endif
                        <input class="form-control" value="{{ $bio->foto }}" type="file" name="foto" disabled>
                </div>



                <div class="form-group">
                    <a href="{{ url('biodata') }}" class="btn btn-outline-info">
                        Kembali
                    </a>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
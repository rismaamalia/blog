@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Biodata</div>

                <div class="card-body">
                <form action="{{ route('biodata.update', $bio->id) }}" 
                    method="post"
                    enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nama</label>
                    <input class="form-control" value="{{ $bio->nama }}" type="text" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="10">{{ $bio->alamat }}</textarea>
                </div>

                <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input class="form-control" value="{{ $bio->tgl_lahir }}" type="date" name="tgl_lahir" required>
                </div>

                <div class="form-group">
                        <label for="">Foto</label>
                        @if (isset($bio) && $bio->foto)
                        <p>
                                <img width:100%
                                src ="{{asset('/assets/img/biodata/'.
                                $bio->foto.'') }}"
                                alt="foto">
                        </p>
                        @endif
                        <input class="form-control" value="{{ $bio->foto }}" type="file" name="foto" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">
                        Simpan Data
                    </button>
                </div>
                </form>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
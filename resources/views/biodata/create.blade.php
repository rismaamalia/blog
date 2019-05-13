@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Biodata Baru</div>

                <div class="card-body">
                <form action="{{ route('biodata.store') }}" 
                    method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nama</label>
                    <input class="form-control" type="text" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input class="form-control" type="date" name="tgl_lahir" required>
                </div>

                <div class="form-group">
                        <label for="">Foto</label>
                        <input class="form-control" type="file" name="foto" required>
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
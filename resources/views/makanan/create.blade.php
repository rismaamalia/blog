              
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data makanan</div>

                <div class="card-body">
                <form action="{{ route('makanan.store') }}" method="post">
                    {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Nama Supplier</label>
                    <select name="id_supplier" class="form-control">
                        @foreach($sup as $data)
                        <option value="{{ $data->id }}">{{ $data->nm_supplier }}</option>
                         @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label for="">Nama makanan</label>
                    <input class="form-control" type="text" name="nm_makanan">
                </div>
                <div class="form-group">
                        <label for="">Harga makanan</label>
                        <input class="form-control" type="text" name="harga_makanan">
                    </div>

                <div class="form-group">
                        <label for="">Stok makanan</label>
                        <input class="form-control" type="text" name="stok_makanan">
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
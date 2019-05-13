@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                    <form action="{{ route('minuman.update',$min->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

                     
                        <div class="form-group">
                            <label for="">Nama Supplier</label>
                            <select name="id_supplier" class="form-control">
                                @foreach($sup as $data)
                                <option value="{{ $data->id }}"
                                    {{ $min->supplier->id == $data->id ? 'selected="selected"' : '' }}>
                                {{ $data->nm_supplier }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                    <div class="form-group">
                        <label for="">Nama minuman</label>
                        <input class="form-control" value="{{ $min->nm_minuman }}" type="text" name="nm_minuman">

                    </div>
                    <div class="form-group">
                            <label for="">Harga minuman</label>
                            <input class="form-control" value="{{ $min->harga_minuman }}" type="text" name="harga_minuman">
                        </div>

                        <div class="form-group">
                            <label for="">Stok minuman</label>
                            <input class="form-control" value="{{ $min->stok_minuman }}" type="text" name="stok_minuman">
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
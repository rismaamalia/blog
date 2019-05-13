@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="form-group">
                        <label for="">Nama Supplier</label>
                        <input class="form-control" value="{{ $min->supplier->nm_supplier }}" type="text"disabled>
                </div>
                    
                    <div class="form-group">
                        <label for="">Nama minuman</label>
                        <input class="form-control" value="{{ $min->nm_minuman }}" type="text" name="nm_minuman" disabled>

                    </div>
                    <div class="form-group">
                            <label for="">Harga minuman</label>
                            <input class="form-control" value="{{ $min->harga_minuman }}" type="text" name="harga_minuman" disabled>
                        </div>

                        <div class="form-group">
                            <label for="">Stok minuman</label>
                            <input class="form-control" value="{{ $min->stok_minuman }}" type="text" name="stok_minuman" disabled>
                        </div>

                      
                        <div class="form-group">
                        
                                <a href="{{ url('minuman') }}" class="btn btn-outline-info">
                                    Kembali
                                </a>


           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
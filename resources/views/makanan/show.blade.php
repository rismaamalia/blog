@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Data</div>

                <div class="form-group">
                        <label for="">Nama Supplier</label>
                        <input class="form-control" value="{{ $mak->supplier->nm_supplier }}" type="text"disabled>
                </div>
                    
                    <div class="form-group">
                        <label for="">Nama makanan</label>
                        <input class="form-control" value="{{ $mak->nm_makanan }}" type="text" name="nm_makanan" disabled>

                    </div>
                    <div class="form-group">
                            <label for="">Harga makanan</label>
                            <input class="form-control" value="{{ $mak->harga_makanan }}" type="text" name="harga_makanan" disabled>
                        </div>

                        <div class="form-group">
                            <label for="">Stok makanan</label>
                            <input class="form-control" value="{{ $mak->stok_makanan }}" type="text" name="stok_makanan" disabled>
                        </div>

                      
                        <div class="form-group">
                        
                                <a href="{{ url('makanan') }}" class="btn btn-outline-info">
                                    Kembali
                                </a>


           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
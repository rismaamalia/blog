@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Supplier</div>

                <div class="card-body">
                        <form action="{{ route('supplier.update',$sup->id) }}" method="post">
                            <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}

                <div class="form-group">

                    <label for="">Nama supplier</label>
                    <input class="form-control" type="text" value="{{ $sup->nm_supplier }}" name="nm_supplier">
                </div>
                <div class="form-group">
                        <label for="">kota supplier</label>
                        <input class="form-control" type="text"value="{{ $sup->kota_supplier }}" name="kota_supplier">
                    </div>

                <div class="form-group">
                        <label for="">alamat supplier</label>
                        <input class="form-control" type="text" value="{{ $sup->alamat_supplier }}" name="alamat_supplier">
                </div>

                <div class="form-group">
                    <label for="">No Tlp supplier</label>
                    <input class="form-control" type="text" value="{{ $sup->no_tlp_supplier }}" name="no_tlp_supplier">
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

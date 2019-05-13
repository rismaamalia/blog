@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Supplier</div>

                <div class="card-body">
                <div class="form-group">

                    <label for="">Nama supplier</label>
                    <input class="form-control" type="text"  value="{{ $sup->nm_supplier }}"name="nm_supplier" disabled>
                </div>
                <div class="form-group">
                        <label for="">kota supplier</label>
                        <input class="form-control" type="text" value="{{ $sup->kota_supplier }}" name="kota_supplier" disabled>
                    </div>

                <div class="form-group">
                        <label for="">alamat supplier</label>
                        <input class="form-control" type="text" value="{{ $sup->alamat_supplier }}" name="alamat_supplier" disabled>
                </div>

                <div class="form-group">
                    <label for="">No Tlp supplier</label>
                    <input class="form-control" type="text"  value="{{ $sup->no_tlp_supplier }}"name="no_tlp_supplier" disabled>
                </div>


                </form>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

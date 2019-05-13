@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Customer</div>

                <div class="card-body">
                <form action="{{ route('customer.store') }}" method="post">
                    {{ csrf_field() }}
                
                    <div class="form-group">
                        <label for="">Nama customer</label>
                        <input class="form-control" type="text" name="nm_customer">
                    </div>

                    <div class="form-group">
                        <label for="">alamat customer</label>
                        <input class="form-control" type="text" name="alamat_customer">
                </div>

                    <div class="form-group">
                            <label for="">kota customer</label>
                            <input class="form-control" type="text" name="kota">
                        </div>
    
                    <div class="form-group">
                        <label for="">No Tlp customer</label>
                        <input class="form-control" type="text" name="no_tlp">
                    </div>

                    <div class="form-group">
                        <label for="">Email customer</label>
                        <input class="form-control" type="text" name="email">
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
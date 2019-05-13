@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit customer</div>

                <div class="card-body">
                        <form action="{{ route('customer.update',$cus->id) }}" method="post">
                            <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}

                <div class="form-group">

                    <label for="">Nama customer</label>
                    <input class="form-control" type="text" value="{{ $cus->nm_customer }}" name="nm_customer">
                </div>

                <div class="form-group">
                    <label for="">alamat customer</label>
                    <input class="form-control" type="text" value="{{ $cus->alamat_customer }}" name="alamat_customer">
            </div>
                <div class="form-group">
                        <label for="">kota customer</label>
                        <input class="form-control" type="text"value="{{ $cus->kota }}" name="kota">
                    </div>

                <div class="form-group">
                    <label for="">No Tlp customer</label>
                    <input class="form-control" type="text" value="{{ $cus->no_tlp }}" name="no_tlp">
                </div>

                <div class="form-group">
                    <label for="">Email customer</label>
                    <input class="form-control" type="text"value="{{ $cus->email }}" name="email">
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

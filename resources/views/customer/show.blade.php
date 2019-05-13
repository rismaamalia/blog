@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail customer</div>

                <div class="form-group">

                    <label for="">Nama customer</label>
                    <input class="form-control" type="text" value="{{ $cus->nm_customer }}" name="nm_customer" disabled>
                </div>

                <div class="form-group">
                    <label for="">alamat customer</label>
                    <input class="form-control" type="text" value="{{ $cus->alamat_customer }}" name="alamat_customer" disabled>
            </div>
                <div class="form-group">
                        <label for="">kota customer</label>
                        <input class="form-control" type="text"value="{{ $cus->kota }}" name="kota" disabled>
                    </div>

                <div class="form-group">
                    <label for="">No Tlp customer</label>
                    <input class="form-control" type="text" value="{{ $cus->no_tlp }}" name="no_tlp" disabled>
                </div>

                <div class="form-group">
                    <label for="">Email customer</label>
                    <input class="form-control" type="text"value="{{ $cus->email }}" name="email" disabled>
                </div>

                <a href="{{ url('customer') }}" class="btn btn-outline-info">
                    Kembali
                </a>
                </form>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
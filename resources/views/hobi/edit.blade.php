@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Hobbi</div>

                <div class="card-body">
                    <form action="{{ route('hobi.update',$hobi->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                    <div class="form-group">
                            <label for="">Hobi</label>
                            <input class="form-control" value="{{ $hobi->hobi }}" type="text" name="hobi">
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
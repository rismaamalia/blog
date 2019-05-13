@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Hobi</div>

                <div class="card-body">
                    
                    
                    <div class="form-group">
                            <label for="">Hobi</label>
                            <input class="form-control" value="{{ $hobi->hobi }}" type="text" name="hobi" disabled>
                        </div>
                                       
                                                                                                           

                                                                                                
        </div>
    </div>
</div>
@endsection                                      
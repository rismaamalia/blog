@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                    <form action="{{ route('mahasiswa.update',$mhs->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <input class="form-control" value="{{ $mhs->nama }}" type="text" name="nama">

                    </div>
                    <div class="form-group">
                            <label for="">Nomor Induk Mahasiswa</label>
                            <input class="form-control" value="{{ $mhs->nim }}" type="text" name="nim">
                        </div>
                        <div class="form-group">
                                <label for="">Nama Dosen</label>
                                <select name="id_dosen" class="form-control">
                                    @foreach($dosen as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $mhs->dosen->id == $data->id ? 'selected="selected"' : '' }}>
                                    {{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        
                            <div class="form-group">
                                <label for=""> Hobi</label>
                                <select name="hobi[]" class="form-control multiple" multiple>
                                    @foreach($hobi as $data)
                                    <option value="{{ $data->id }}"
                                            {{ (in_array($data->id, $selected)) ? 'selected="selected"' : '' }}>
                                    {{ $data->hobi }}
                                    </option>
                                    @endforeach
                                    </select>
                                </div>
                                
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">
                            Edit Data
                        </button>


           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
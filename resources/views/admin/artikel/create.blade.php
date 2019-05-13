@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="/backend/assets/vendor/select2/select2.min.css">
@endsection
@section('js')
<script src="/backend/assets/vendor/select2/select2.min.js"></script>
<script src="/backend/assets/js/components/select2-init.js"></script>
<script src="/backend/assets/vendor/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Artikel Baru</div>

                <div class="card-body">
                <form action="{{ route('artikel.store') }}" 
                    method="post"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Judul</label>
                    <input class="form-control" type="text" name="judul" required>
                </div>


                <div class="form-group">
                        <label for="">Konten</label>
                       <textarea id="editor1" name="konten" id="" cols="30" rows="10" required></textarea>

                 <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="kategori_id" class="form-control">
                            @foreach($kategori as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                
                    
                <div class="form-group">
                        <label for="">Tag</label>
                        <select name="tag_id[]" class="form-control" id="s2_demo3" multiple="multiple">
                                @foreach ($tag as $data )
                                <option value="{{ $data->id }}">{{ $data->nama_tag }}</option>
                                @endforeach
                        </select>
                    @if ($errors->has('tag'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('tag') }}</strong>
                        </span>
                        @endif

                    </div>
               
                    
               


                <div class="form-group">
                        <label for="">Foto</label>
                        <input class="form-control" type="file" name="foto" required>
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
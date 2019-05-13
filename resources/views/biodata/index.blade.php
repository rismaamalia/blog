@extends('layouts.admin')
<br>
<br>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Biodata</div>
                <div class="card-body">
                <br>
                    <center> <a href="{{ route('biodata.create') }}"
                    class="btn btn-primary">Tambah</a>
                    </center>
                <br>

                <div class="table-responsive">
                     <table class="table">
                       <tr>
                           <th>No</th>
                           <th>Nama</th>
                           <th>Alamat</th>
                           <th>Tanggal Lahir</th>
                           <th>Foto</th>
                           <th colspan="3">Aksi</th>
                       </tr>
                       @php $no =1; @endphp
                       @foreach ($bio as $data)
                       <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->tgl_lahir }}</td>
                            <td>
                                <img width="70%"; 
                                 src ="{{asset('assets/img/biodata/'.
                                 $data->foto.'') }}" alt="foto">
                            </td>
                            
                            <td>
                                <a href="{{ route('biodata.edit',$data->id) }}" class="btn btn-sm btn-success">
                                            Edit </a>
                            </td>
                            
                            <td>
                                <a href="{{ route('biodata.show',$data->id) }}" class="btn btn-sm btn-warning">
                                            Detail </a>
                            </td>        
                            
                            <td>
                                <form action="{{ route('biodata.destroy',$data->id) }}" method="post">
                                    @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-sm btn-danger" type="submit">Hapus
        
                                        </button>
                                </form>
                            </td>
                        </tr>                      
                        @endforeach
                    </table>
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
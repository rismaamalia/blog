@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data makanan</div>
                <br>
               <center> <a href="{{ route('makanan.create') }}"
                class="btn btn-primary">Tambah</a>
            </center>
               <br>
               <div class="table-responsive">
                    <table class="table">
                      <tr>
                          <th>No</th>
                          <th>Nama Supplier</th>
                          <th>Nama makanan</th>
                          <th>Harga makanan</th>
                          <th>Stok makanan</th>
                          <th colspan="3">Aksi</th>
                      </tr>
                      @php $no =1; @endphp
                      @foreach ($mak as $data)
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->supplier->nm_supplier }}</td>
                            <td>{{ $data->nm_makanan }}</td>
                            <td>{{ $data->harga_makanan }}</td>
                            <td>{{ $data->stok_makanan }}</td>
                            
                            <td><a href="{{ route('makanan.edit',$data->id) }}" class="btn btn-sm btn-success">
                            Edit Data</a></td>
                            <td><a href="{{ route('makanan.show',$data->id) }}" class="btn btn-sm btn-warning">
                                    Detail Data</a></td>
                                    
                            <td>
                                <form action="{{ route('makanan.destroy',$data->id) }}" method="post">
                                    @csrf
                              
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-sm btn-danger" type="submit">Hapus Data

                                </button>
                            </form>

                            </td>
                        </tr>                      
                      @endforeach
                    </table>
                  </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
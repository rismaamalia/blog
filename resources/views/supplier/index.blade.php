@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data supplier</div>
                <br>
               <center> <a href="{{ route('supplier.create') }}"
                class="btn btn-primary">Tambah</a>
            </center>
               <br>
               <div class="table-responsive">
                    <table class="table">
                      <tr>
                          <th>No</th>
                          <th>Nama supplier</th>
                          <th>Kota supplier</th>
                          <th>Alamat supplier</th>
                          <th>No Tlp supplier</th>
                          <th colspan="3">Aksi</th>
                      </tr>
                      @php $no =1; @endphp
                      @foreach ($sup as $data)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->nm_supplier }}</td>
                        <td>{{ $data->kota_supplier }}</td>
                        <td>{{ $data->alamat_supplier }}</td>
                        <td>{{ $data->no_tlp_supplier }}</td>
                        <td><a href="{{ route('supplier.edit',$data->id) }}" class="btn btn-sm btn-success">
                        Edit Data</a></td>
                        <td><a href="{{ route('supplier.show',$data->id) }}" class="btn btn-sm btn-warning">
                                Detail Data</a></td>
                                
                        <td>
                            <form action="{{ route('supplier.destroy',$data->id) }}" method="post">
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


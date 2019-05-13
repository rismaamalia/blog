@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Dosen</div>
                <br>
               <center> <a href="{{ route('customer.create') }}"
                class="btn btn-primary">Tambah</a>
            </center>
               <br>
               <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th>No</th>
                        <th>Nama customer</th>
                        <th>Alamat customer</th>
                        <th>Kota customer</th>
                        <th>No Tlp customer</th>
                        <th>Email customer</th>

                        <th colspan="3">Aksi</th>
                          
                      </tr>
                      @php $no =1; @endphp
                      @foreach ($cus as $data)
                          <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nm_customer }}</td>
                            <td>{{ $data->alamat_customer }}</td>
                            <td>{{ $data->kota }}</td>
                            <td>{{ $data->no_tlp }}</td>
                            <td>{{ $data->email }}</td>
                            <td><a href="{{ route('customer.edit',$data->id) }}" class="btn btn-sm btn-success">
                            Edit Data</a></td>
                            <td><a href="{{ route('customer.show',$data->id) }}" class="btn btn-sm btn-warning">
                                    Detail Data</a></td>
                                    
                            <td>
                                <form action="{{ route('customer.destroy',$data->id) }}" method="post">
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
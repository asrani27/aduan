@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <a href="/admin/pegawai/create" class="btn btn-primary"><strong><i class="fas fa-plus"></i> Tambah</strong></a><br/><br/>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pegawai</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-sm">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Telp</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
                @php
                    $no =1;
                @endphp
                @foreach ($data as $item)
                    <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->telp}}</td>
                    <td>
                      <form action="/admin/pegawai/{{$item->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('yakin DI Hapus?');"><i class="fas fa-trash"></i> Delete</button>     
                      </form>
                        <a href="/admin/pegawai/{{$item->id}}/edit" class="btn btn-xs btn-success"><i class="fas fa-edit"></i> Edit</a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
                
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
@endsection
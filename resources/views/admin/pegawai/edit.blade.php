@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Edit Pegawai</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="/admin/pegawai/{{$data->id}}">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Telp</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="telp" value="{{$data->telp}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat_lahir" value="{{$data->tempat_lahir}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Pendidikan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="pendidikan" value="{{$data->pendidikan}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                      <select name="jenis_kelamin" class="form-control">
                          <option value="L" {{$data->jenis_kelamin == 'L' ? 'selected':''}}>Laki-Laki</option>
                          <option value="P" {{$data->jenis_kelamin == 'P' ? 'selected':''}}>perempuan</option>
                      </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="agama" value="{{$data->agama}}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Status Kawin</label>
                  <div class="col-sm-10">
                    <select name="status_kawin" class="form-control">
                        <option value="1" {{$data->status_kawin == '1' ? 'selected':''}}>Kawin</option>
                        <option value="2" {{$data->status_kawin == '2' ? 'selected':''}}>Belum Kawin</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Jumlah Anak</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="jumlah_anak" value="{{$data->jumlah_anak}}">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
              </div>
              <!-- /.card-footer -->
            </form>
        </div>
    </div>
</div>
@endsection
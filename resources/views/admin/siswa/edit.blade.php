@extends('layouts.admin')
@section('content')
  <!-- Table -->
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Tentang</h4>
    </div>
<div class="card-body">
<div class="table-responsive">
<table class="table">
<thead class=" text-primary">
 <!-- CREATE -->
 <div class="card-body">
    <form action="{{ route('update-siswa', $siswa->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}                                
                                        
    <div class="form-group">
                            <label for="reg">reg</label>
                            <input type="number" name="reg" class="form-control" id="reg" value="{{ $siswa->reg}}" required>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                    <label for="nama">nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" onkeypress="return event.charCode <48 || event.charCode >57" value="{{ $siswa->nama}}" required>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control" >
                                    <option value="{{ $siswa->jk}}" >{{ $siswa->jk}}</option>
                                        <option value="laki-laki">laki-laki</option>
                                        <option value="perempuan">perempuan</option>
                                    </select>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                    <label for="alamat">alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $siswa->alamat}}" required>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                <label for="agama">Agama</label>
                                    <select name="agama" id="agama" class="form-control" >
                                    <option value="{{ $siswa->agama}}" >{{ $siswa->agama}}</option>
                                        <option value="islam">islam</option>
                                        <option value="kristen">kristen</option>
                                    </select>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                    <label for="asal_sekolah">asal_sekolah</label>
                                    <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" value="{{ $siswa->asal_sekolah}}" required>
                            </div>

                            <br>
                            <br>

                            <div class="form-group">
                                <label for="minat_jurusan">Minat Jurusan</label>
                                    <select name="minat_jurusan" id="minat_jurusan" class="form-control" >
                                    <option value="{{ $siswa->minat_jurusan}}" >{{ $siswa->minat_jurusan}}</option>
                                        <option value="rpl">rpl</option>
                                        <option value="tkj">tkj</option>
                                    </select>
                            </div>
                                                           
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update Data</button>
            </div>
    </form>

</thead>
</table>
</div>
</div>
</div>
</div>

    </div>
  </div>
  @endsection
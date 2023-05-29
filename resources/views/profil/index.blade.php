@extends('main')

@section('content')
    <div class="card border">
        <div class="card-header d-flex justify-content-between pb-1">
            <h5 class="mb-0 card-title">Profil</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="">No Presensi</label>
                            <input type="text" class='form-control' readonly disabled value='{{ $user->no_presensi }}'>
                        </div>
                        <div class="col-md-8">
                            <label for="">Nama</label>
                            <input type="text" class='form-control' readonly disabled value='{{ $user->name }}'>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">Alamat</label>
                            <textarea class='form-control' readonly disabled>{{ $user->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" class='form-control' value="{{ $user->jenis_kelamin == 'l' ?'Laki Laki':'Perempuan' }}" readonly disabled>
                        </div>
                        <div class="col">
                            <label for="">Jabatan</label>
                            <input type="text" class='form-control' value="{{ $user->jabatan->jabatan }}" readonly disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">Pendidikan</label>
                            <input type="text" class='form-control' value="{{ $user->pendidikan }}" readonly disabled>
                        </div>
                        <div class="col">
                            <label for="">Pengabdian</label>
                            <input type="text" class='form-control' value="{{ $user->pengabdian }} Tahun" readonly disabled>
                        </div>
                    </div>     
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">Email</label>
                            <input type="text" class='form-control' value="{{ $user->email }}" readonly disabled>
                        </div>
                    </div>     

                </div>
                <div class="col-md-3">
                    <form method="post" enctype="multipart/form-data" action="{{ route('update-profil',auth()->user()->id) }}">
                        @csrf
                        <br>
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('storage/foto_pegawai/'.$user->foto) }}" alt="Card image cap" >
                        </div>
                        <hr>
                        <label for="">Foto</label>
                        <input type="file" class='form-control' name='foto' accept=".jpg,.png">
                        <br>
                        <button class='btn btn-success'>Update</button>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
@endsection

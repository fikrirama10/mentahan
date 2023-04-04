@extends('main')

@section('content')
    <div class="card border">
        <div class="card-header d-flex justify-content-between pb-1">
            <h5 class="mb-0 card-title">{{ $title }}</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="">No Presensi</label>
                            <input type="text" disabled readonly class='form-control' value='{{ $pegawai->no_presensi }}'>
                        </div>
                        <div class="col-md-8">
                            <label for="">Nama</label>
                            <input type="text" name='nama' class='form-control' value='{{ $pegawai->name }}'>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">Alamat</label>
                            <textarea name='alamat' class='form-control'>{{ $pegawai->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class='form-select' id="">
                                <option value="l" {{ $pegawai->jenis_kelamin == 'l' ? 'selected' : '' }}>Laki Laki
                                </option>
                                <option value="p" {{ $pegawai->jenis_kelamin == 'p' ? 'selected' : '' }}>Perempuan
                                </option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Jabatan</label>
                            <select name="jabatan" class='form-select' id="">
                                @foreach ($jabatan as $j)
                                    <option value="{{ $j->id }}"
                                        {{ $pegawai->id_jabatan == $j->id ? 'selected' : '' }}>{{ $j->jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">Pendidikan</label>
                            <input type="text" name='pendidikan' class='form-control' value="{{ $pegawai->pendidikan }}">
                        </div>
                        <div class="col">
                            <label for="">Pengabdian</label>
                            <input type="text" name='pengabdian' class='form-control'
                                value="{{ $pegawai->pengabdian }} Tahun" readonly disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="">Email</label>
                            <input type="text" name='email' class='form-control' value="{{ $pegawai->email }}">
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <br>
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/foto_pegawai/' . $pegawai->foto) }}"
                            alt="Card image cap">
                    </div>
                    <hr>
                    <label for="">Foto</label>
                    <input type="file" class='form-control' name='foto'>
                    <br>
                    <button class='btn btn-success'>Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection

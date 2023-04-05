@extends('main')

@section('content')
    <div class="card border">
        <div class="card-header d-flex justify-content-between pb-1">
            <h5 class="mb-0 card-title">{{ $title }}</h5>
        </div>
        <form action="{{ route('post.edit-pegawai', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="">No Presensi</label>
                                <input type="text" disabled readonly class='form-control'
                                    value='{{ $pegawai->no_presensi }}'>
                            </div>
                            <div class="col-md-8">
                                <label for="">Nama</label>
                                <input type="text" required name='nama' class='form-control'
                                    value='{{ $pegawai->name }}'>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="">Alamat</label>
                                <textarea name='alamat' required class='form-control'>{{ $pegawai->alamat }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin" required class='form-select' id="">
                                    <option value="l" {{ $pegawai->jenis_kelamin == 'l' ? 'selected' : '' }}>Laki Laki
                                    </option>
                                    <option value="p" {{ $pegawai->jenis_kelamin == 'p' ? 'selected' : '' }}>Perempuan
                                    </option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="">Jabatan</label>
                                <select name="jabatan" required class='form-select' id="">
                                    @foreach ($jabatan as $j)
                                        <option value="{{ $j->id }}"
                                            {{ $pegawai->id_jabatan == $j->id ? 'selected' : '' }}>{{ $j->jabatan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="">Pendidikan</label>
                                <input type="text" required name='pendidikan' class='form-control'
                                    value="{{ $pegawai->pendidikan }}">
                            </div>
                            <div class="col">
                                <label for="">Pengabdian (Tahun)</label>
                                <input type="number" required name='pengabdian' class='form-control'
                                    value="{{ $pegawai->pengabdian }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="">Pertama Kerja</label>
                                <input type="date" required name='pertama_kerja' class='form-control'
                                    value="{{ $pegawai->pertama_kerja }}">
                            </div>
                            <div class="col">
                                <label for="">Email</label>
                                <input type="text" required name='email' class='form-control'
                                    value="{{ $pegawai->email }}">
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
                        <input type="file" accept=".jpg,.png" class='form-control' name='foto'>
                        <br>
                        <button class='btn btn-success'>Update</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection

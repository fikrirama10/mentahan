@extends('main')

@section('content')
    <div class="card border">
        <div class="card-header d-flex justify-content-between pb-1">
            <h5 class="mb-0 card-title">{{ $title }}</h5>
        </div>
        <div class="card-body">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="card border">
                
                <form action="{{ route('post-edit',$kriteria->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="" class='mb-1'><i>Kriteria</i></label>
                                <input type="text" required name='kriteria' value='{{ $kriteria->kriteria }}' class='form-control'>
                            </div>
                            <div class="col-md-12">
                                <label for="" class='mb-1'><i>Bobot (%)</i></label>
                                <input type="text" required name='bobot' value='{{ $kriteria->bobot }}' class='form-control'>
                            </div>
                        </div>                    
                    </div>
                    <div class="card-footer">
                        <button type='submit' class='btn btn-success'>Simpan</button>
                        <a href='{{ route('kriteria') }}' class='btn btn-secondary'>Kembali</a>
                    </div>
                </form>
                
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border">
                <div class="card-header d-flex justify-content-between pb-1">
                    <h5 class="mb-0 card-title">Sub Kriteria</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sub Kriteria</th>
                                <th>Poin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sub_kriteria as $sk)
                                <tr>
                                    <td>{{ $sk->sub_kriteria }}</td>
                                    <td>{{ $sk->bobot_sub }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
@endsection
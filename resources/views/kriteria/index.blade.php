@extends('main')

@section('content')
    <div class="card border">
        <div class="card-header d-flex justify-content-between pb-1">
            <h5 class="mb-0 card-title">Kriteria</h5>
        </div>
        <div class="card-body">

        </div>
    </div>
    <br>
    <div class="card border">
        <div class="card-body">
            @if ($kriteria_sum < 100)
                <div class="alert alert-warning" role="alert">
                    Nilai Bobot Kurang dari 100
                </div>
            @elseif($kriteria_sum > 100)
                <div class="alert alert-danger" role="alert">
                    Nilai Bobot Lebih dari 100
                </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class='border'>
                                <tr>
                                    <th>Kriteria</th>
                                    <th>Bobot</th>
                                    <th>Sub Kriteria</th>
                                    <th>Poin</th>
                                </tr>
                            </thead>
                            <tbody class='border'>
                                @foreach ($array_kriteria as $k)
                                    <tr>
                                        <td rowspan="{{ count($k['sub_kriteria']) + 1 }}">{{ $k['kriteria'] }} <a
                                                href="{{ route('edit-kriteria', $k['id_kriteria']) }}"><i
                                                    class="fas fa-pencil"></i></a></td>
                                        <td width=10 rowspan="{{ count($k['sub_kriteria']) + 1 }}">{{ $k['bobot'] }} %
                                        </td>
                                    </tr>
                                    @foreach ($k['sub_kriteria'] as $sub)
                                        <tr>
                                            <td>{{ $sub['sub_kriteria'] }}</td>
                                            <td width=10>{{ $sub['bobot_sub'] }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

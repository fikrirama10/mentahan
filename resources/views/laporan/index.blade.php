@extends('main')

@section('content')
    <div class="card border">
        <div class="card-header border-bottom d-flex justify-content-between pb-1">
            <h5 class="mb-3 card-title">{{ $title }}</h5>
        </div>
        <div class="card-body">
            <div class="row mb-3 mt-3">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <label class='form-label' for="">Tahun</label>
                            <select name="tahun" required id='tahun' class='form-select' id="">
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class='form-label' for="">Kelas / Kode Absen</label>
                            <div class="input-group mb-3">
                                <select name="kode_absen" class='form-select' id="kode_absen">
                                    @foreach ($kode_absen as $ka)
                                        <option value="{{ $ka->id }}">{{ $ka->kode_absen }}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-outline-success" type="button" id="button_laporan"> Lihat </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div id="laporan"></div>
            </div>
            
        </div>
    </div>
    <br>
@endsection
@push('scripts')
    <script>
        $('#button_laporan').click(function() {
            var tahun = $('#tahun').val();
            var absen = $('#kode_absen').val();

            let url = '{{ route('lihat-laporan', ['tahun' => ':post_id', 'kode_absen' => ':vote']) }}';
            url = url.replace(':post_id', tahun);
            url = url.replace(':vote', absen);
            $.get(url).done(function(data) {
                $('#laporan').html(data);
            })
        })
        $(document).ready(function() {
            $('#example').DataTable({
                searching: false,
                paging: false,
                info: false,
                sorting: false
            });
            $('#tbl_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url()->current() }}',
                fixedColumns: {
                    left: 0,
                    right: 1
                },
                order: [
                    [4, 'asc']
                ],
                columnDefs: [{
                    targets: "_all",
                    orderable: true
                }],
                columns: [{
                        data: 'id',
                        render: function(data, type, row, meta, no) {
                            no = meta.row + meta.settings._iDisplayStart + 1;
                            return no;
                        }
                    },
                    {
                        data: 'no_presensi',
                        name: 'users.no_presensi'
                    },
                    {
                        data: 'name',
                        name: 'users.name'
                    },
                    {
                        data: 'kriteria',
                        name: 'kriteria'
                    },
                    {
                        data: 'total',
                        name: 'total',
                    },


                ]
            });
        });
    </script>
@endpush

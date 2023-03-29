@if (count($array_nilai) > 0)
    <div class="row mb-2">
        <div class="col">
            <form action="{{ route('print-laporan') }}" method="POST">
                @csrf
                <input type="hidden" name='tahun' value='{{ $tahun }}'>
                <input type="hidden" name='kode_absen' value='{{ $kode_absen }}'>
                <button class='btn btn-danger'>Print PDF</button>
            </form>
        </div>
    </div>
@endif
<div class="table-responsive">
    <table id="example" class="table table-bordered " cellspacing="0" width="100%">
        <thead class='text-nowrap border'>
            <tr>
                <th>No</th>
                <th>No Presesnsi</th>
                <th>Nama</th>
                <th>Kriteria - Nilai Kriteria</th>
                <th>Total</th>
                <th>Ranking</th>
            </tr>
        </thead>
        {{-- <tbody class='text-nowrap'>

        </tbody> --}}
        <tbody class='border'>
            @foreach ($array_nilai as $an)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $an['no_presensi'] }}</td>
                    <td>{{ $an['nama'] }}</td>
                    <td>
                        <table class='table table-bordered'>
                            @foreach ($an['kriteria'] as $kriteria)
                                <tr>
                                    <td>{{ $kriteria['kriteria'] }}</td>
                                    <td>: {{ $kriteria['nilai'] }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </td>
                    <td>{{ $an['total'] }} %</td>
                    <td>{{ $ranking++ }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
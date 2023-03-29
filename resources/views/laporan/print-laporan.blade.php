<style>
    table {
        border-collapse: collapse;
    }

    table,
    td,
    th {
        border: 1px solid;
    }
</style>
<center>
    <h1>Laporan Penilaian Kelas {{ $absen->kode_absen }} Tahun {{ $tahun }}</h1>
</center>
<table class='table' width='100%'>
    <tr>
        <th>No</th>
        <th>No Presesnsi</th>
        <th>Nama</th>
        <th>Kriteria - Nilai Kriteria</th>
        <th>Total</th>
        <th>Ranking</th>
    </tr>
    @foreach ($array_nilai as $an)
        <tr>
            <td align='center'>{{ $no++ }}</td>
            <td align='center'>{{ $an['no_presensi'] }}</td>
            <td>{{ $an['nama'] }}</td>
            <td>
                <table  width='100%'>
                    @foreach ($an['kriteria'] as $kriteria)
                        <tr>
                            <td>{{ $kriteria['kriteria'] }}</td>
                            <td>: {{ $kriteria['nilai'] }} %</td>
                        </tr>
                    @endforeach
                </table>
            </td>
            <td align='center'>{{ $an['total'] }} %</td>
            <td align='center'>{{ $ranking++ }}</td>
        </tr>
    @endforeach
</table>

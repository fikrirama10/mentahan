<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $jabatan = [
            ['jabatan' => 'Kepala sekolah'],
            ['jabatan' => 'Wakil kepala sekolah'],
            ['jabatan' => 'Guru'],
            ['jabatan' => 'Staff kurikulum'],
            ['jabatan' => 'Staff administrasi'],
            ['jabatan' => 'Kepala kbk'],
            ['jabatan' => 'Kepala perpustakaan'],
            ['jabatan' => 'Kepala tu'],
        ];

        $kode_absen = [
            ['kode_absen'=>'TKCC'],
            ['kode_absen'=>'SDCC'],
            ['kode_absen'=>'SMCC'],
        ];
        $users = [
            [
                'password' => Hash::make('12345'),
                'id_presensi'=>3,
                'email' => $faker->unique()->safeEmail(),
                'id_jabatan' => 1,
                'name' => $faker->name,
                'alamat' => 'Cicukang',
                'foto' => 'fikri.jpg',
                'jenis_kelamin' => 'l',
                'pengabdian' => '2',
                'pendidikan' => 'S1',
                'pertama_kerja' => '2022-01-01',
                'aktif' => '1',
            ],
            [
                'password' => Hash::make('12345'),
                'email' => $faker->unique()->safeEmail(),
                'id_jabatan' => 3,
                'id_presensi'=>2,
                'name' => $faker->name,
                'alamat' => 'Cicukang',
                'foto' => 'fikri.jpg',
                'jenis_kelamin' => 'l',
                'pengabdian' => '2',
                'pendidikan' => 'S1',
                'pertama_kerja' => '2022-01-01',
                'aktif' => '1',
            ],
        ];

        $kriteria = [
            ['kriteria'=>'Presensi' , 'bobot'=>30],
            ['kriteria'=>'Disiplin' , 'bobot'=>10],
            ['kriteria'=>'Sikap' , 'bobot'=>20],
            ['kriteria'=>'Kualitas' , 'bobot'=>40],
        ];
        $subkriteria = [
            ['id_kriteria'=>1 , 'sub_kriteria'=>'Kehadiran', 'bobot_sub'=>100],
            ['id_kriteria'=>2 , 'sub_kriteria'=>'Hadir Tepat Waktu', 'bobot_sub'=>50],
            ['id_kriteria'=>2 , 'sub_kriteria'=>'Bertanggung Jawab', 'bobot_sub'=>21],
            ['id_kriteria'=>2 , 'sub_kriteria'=>'Patuh Terhadap Aturan', 'bobot_sub'=>19],
            ['id_kriteria'=>2 , 'sub_kriteria'=>'Hadir Tepat Waktu', 'bobot_sub'=>10],
            ['id_kriteria'=>3 , 'sub_kriteria'=>'Sangat Baik', 'bobot_sub'=>60],
            ['id_kriteria'=>3 , 'sub_kriteria'=>'Baik', 'bobot_sub'=>40],
            ['id_kriteria'=>4 , 'sub_kriteria'=>'Kecakapan', 'bobot_sub'=>30],
            ['id_kriteria'=>4 , 'sub_kriteria'=>'Keterampilan', 'bobot_sub'=>25],
            ['id_kriteria'=>4 , 'sub_kriteria'=>'Inisiatif', 'bobot_sub'=>10],
            ['id_kriteria'=>4 , 'sub_kriteria'=>'Kompetisi', 'bobot_sub'=>35],
        ];

        DB::table('tbl_jabatan')->insert($jabatan);
        DB::table('tbl_kode_absen')->insert($kode_absen);
        DB::table('users')->insert($users);
        //User::create($users);
        DB::table('tbl_kriteria')->insert($kriteria);
        DB::table('tbl_sub_kriteria')->insert($subkriteria);
    }
}

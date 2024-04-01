<?php

namespace Database\Seeders;

use App\Models\data_infaq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataInfaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_infaq = [
            [
                'user_id' => 1,
                'nama_pengirim' => 'Dummy data',
                'bank' => 'BCA',
                'periode_bayar' => 'Januari 2024 - Februaari 2024',
                'bukti_bayar' => '../bukti_boongan.jpg',
                'catatan' => 'Data dummy',
                'nominal' => 50000,
                'status' => 'pending'
            ],
            [
                'user_id' => 2,
                'nama_pengirim' => 'Dummy data',
                'bank' => 'BRI',
                'periode_bayar' => 'Desember 2023 - Februaari 2024',
                'bukti_bayar' => '../bukti_boongan1.jpg',
                'catatan' => 'Data dummy',
                'nominal' => 30000,
                'status' => 'approved'
            ],
            [
                'user_id' => 3,
                'nama_pengirim' => 'Dummy data',
                'bank' => 'Mandiri',
                'periode_bayar' => 'Januari 2024',
                'bukti_bayar' => '../bukti_boongan2.jpg',
                'catatan' => 'Data dummy',
                'nominal' => 30000,
                'status' => 'failed'
            ]
        ];

        foreach ($data_infaq as $key => $infaq) {
            data_infaq::create($infaq);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Fzaninotto\Faker;
use App\Models\Penerbit;

class PenerbitSeeder extends Seeder{

    public function run(){

        Penerbit::create(array(
            'name' => 'Mizan',
            'alamat' => 'Jl. Cinambo (Cisaranten Wetan) no. 146 UjungBerung Bandung 40294'
        ));

        Penerbit::create(array(
            'name' => 'Bentang Pustaka',
            'alamat' => 'Jalan Plemburan No.1, Kec. Sleman, Daerah Istimewa Yogyakarta 55284'
        ));

        Penerbit::create(array(
            'name' => 'Gramedia Pustaka Umum',
            'alamat' => 'Jl. Palmerah Barat,
(021) 53650111,
Open until 11:00 PM'
        ));

        Penerbit::create(array(
            'name' => 'Bukune',
            'alamat' => 'Jl. H. Montong No.57,
    Ciganjur - Jagakarsa,
    Jakarta Selatan,
    12630,
    Indonesia'
        ));

    }
}
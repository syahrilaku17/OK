<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){

            // insert data ke table pegawai menggunakan Faker
            DB::table('jurusan')->insert([
                'nama_jurusan' => $faker->city,
                'visi' => $faker-> company,
                'misi' => $faker-> macAddress
            ]);

        }
    }
}

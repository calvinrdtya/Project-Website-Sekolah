<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 5; $i++ ) {
            $gender = $faker->randomElement($array = array('male', 'female', 'mixed'));
            $image = $faker->randomElement($array = array('calvin.jfif', 'dea.jfif', 'anin.jfif', 'dessy.jfif', 'adra.jfif', 'berlian.jfif'));
            DB::table('students')->insert([
                'id' => $faker->numberBetween($min=700, $max=1000),
                'Nama' => $faker->name($gender),
                'kelas' => $faker->century,
                'Jenis_kelamin' => $gender,
                'Alamat' => $faker->address,
                'Foto' => $image
            ]);
        }
    }
}

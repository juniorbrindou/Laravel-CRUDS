<?php

use App\Internaute;
use Illuminate\Database\Seeder;

class InternauteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Internaute::create([
            'name'=>'test',
            'firstname'=>'second',
            'age'=>55,
            'email'=>'225juniorbrindou@gmail.comcom',
        ]);
    }
}

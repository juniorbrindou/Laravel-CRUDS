<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i=1; $i <= 10; $i++) { 
            User::create([
                'name'=>$faker->name,
                'age'=>$faker->numberBetween(15,90) ,
                'email'=>$faker->email,
                'password'=>Hash::make('Nom seed'),
            ]);
        }
        
    }
}

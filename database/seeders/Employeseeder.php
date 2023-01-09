<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Employe;

class Employeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employe = [
            'firstname' => 'paras',
            'lastname' => 'parmar',
            'company_id' => '1',
            'email' => 'paras@gmail.com',
            'phone' => '7778888999',
        ];

        Employe::create($employe);
    }
}


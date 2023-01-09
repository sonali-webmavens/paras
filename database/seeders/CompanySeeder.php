<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = [
            'cnm'       => 'Company',
            'email'     => 'Company@email.com',
            'logo'      => 'logo',
            'website'   => 'www.Company.com',
        ];
        Company::create($company);
    }
}

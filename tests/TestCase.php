<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\UserLogin;
use Database\Seeders\Employeseeder;
use Database\Seeders\CompanySeeder;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, UserLogin;


        /**
         * Run a specific seeder before each test.
         *
         * @var string
         */
        protected $seed = Employeseeder::class;
}

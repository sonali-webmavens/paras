<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
<<<<<<< Updated upstream
    use CreatesApplication;
=======
    use CreatesApplication, UserLogin;

    
        /**
         * Run a specific seeder before each test.
         *
         * @var string
         */
        protected $seed = Employeseeder::class;
>>>>>>> Stashed changes
}

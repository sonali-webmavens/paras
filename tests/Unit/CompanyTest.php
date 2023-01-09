<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\Company;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CompanyTest extends TestCase
{
    use WithoutMiddleware, RefreshDatabase;
    use DatabaseMigrations;

    // use RefreshDatabase ,WithFaker;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_create_company()
    {
        
        $company = Company::factory()->create();
        $company=[
            'cnm'       => 'testCompany',
            'email'     => 'test@email.com',
            'logo'      => 'test.jpg',
            'website'   => 'www.test.com'    
        ];
        
        $this -> post('/CompanyResource.store',$company);
        $this->withoutExceptionHandling();
        $response = $this -> get('/CompanyResource/en');
        $response -> assertStatus(200);
    }

    public function test_a_update_company()
    {
        // $this -> actingAs(Company::factory())->create();
        $company = Company::factory()->create([
            'cnm'       => 'testCompany',
            'email'     => 'test@email.com',
            'logo'      => 'test.jpg',
            'website'   => 'www.test.com'
        ]);
        
        $this->put('/CompanyResource.update/'.$company->id,$company->toArray());
        $this->assertDatabaseHas('companies',['id'=>$company->id, 'cnm' => 'testCompany']);
    }
    public function test_a_delete_company()
    {
        $company = Company::factory()->create([
            'cnm'       => 'testCompany',
            'email'     => 'test@email.com',
            'logo'      => 'test.jpg',
            'website'   => 'www.test.com'
       ]);
       
       $this->delete('/CompanyResource.destroy/'.$company->id,$company->toArray());
       $this->assertDatabaseMissing('companies',['id'=>$company->id,$company]);
    }
}

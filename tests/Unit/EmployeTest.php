<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use \App\Models\{
    Employe,
    Company
};

class EmployeTest extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;
    use DatabaseMigrations;
    /**
     * A basic unit test example.
     *
     * @return void
     */
   
    public function test_a_create_employe()
    {
        $employe = Employe::factory()->create();
        $employe = [
            'firstname'     => 'test Employe',
            'lastname'      => 'test Employe',
            'company_id'    => '$company -> id',
            'email'         => 'test@email.com',
            'phone'         => '1234567890'
        ];
        
        $this -> post('/EmpResource.store',$employe);
        $this ->withoutExceptionHandling();
        $response = $this -> get('/EmpResource/en');
        $response -> assertStatus(200);
    }

    public function test_a_delete_employe()
    {
        $employe = Employe::factory()->make([
            'firstname'     => 'test Employe',
            'lastname'      => 'test Employe',
            'company_id'    => '1',
            'email'         => 'test@email.com',
            'phone'         => '1234567890'
        ]);

        $this -> delete('/EmpResource.destroy/'.$employe->id,$employe->toArray());
        $this -> assertDatabaseMissing('employes',['id'=>$employe->id,$employe]);
    }

    public function test_a_update_employe()
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
        $response = $this-> get('/CompanyResource/en');
        $response -> assertStatus(200);

        $employe = Employe::factory()->create();
        $employe = [
            'firstname'     => 'test Employe',
            'lastname'      => 'test Employe',
            'company_id'    => '1',
            'email'         => 'test@email.com',
            'phone'         => '1234567890'
        ];
        $this-> post('EmpResource',$employe);
        $this->withoutExceptionHandling();
        $response = $this-> get('/EmpResource/en');
        $response -> assertStatus(200);

        $employe = Employe::first();
        $data = [
            'firstname'     => 'test Employe',
            'lastname'      => 'test Employe',
            'company_id'    => '1',
            'email'         => 'test@email.com',
            'phone'         => '1234567890'
        ];
        $this->json('post','EmpResource',$data);
        $results = [
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
        ];
        $this->assertDatabaseHas('employes',$data);
            
    }

   

}



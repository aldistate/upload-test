<?php

namespace Tests\Feature;

use App\Models\Cuti;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CutiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    // menguji apakah bisa memasukan data ke tabel cuti
    public function test_create_cuti()
    {
        $data = [
            'user_id' => 1,
            'start_date' => '2023-03-15',
            'end_date' => '2023-03-17',
            'description' => 'lorem ipsum',
            'status' => false
        ];

        $response = $this->post('/annual-leaves', $data);

        $response->assertStatus(201)
                ->assertJson([
                    'message' => 'Cuti request created successfully'
                ]);

        $this->assertDatabaseHas('cutis', $data);
    }

    // menguji apakah dapat mengakses end point /annual-leaves
    public function test_get_all_cuti()
    {
        $response = $this->get('/annual-leaves');

        $response->assertStatus(200);
    }

    // menguji apakah bisa mendapatkan data by Id
    public function test_get_cuti_by_id()
    {
        $cuti = Cuti::first();
        $data = [
            'id' => $cuti->id,
            'user_id' => $cuti->user_id,
            'start_date' => $cuti->start_date,
            'end_date' => $cuti->end_date,
            'description' => $cuti->description,
            'status' => $cuti->status
        ];
        $response = $this->get("/annual-leaves/{$cuti->id}");

        $response->assertStatus(200);
        
        $this->assertDatabaseHas('cutis', $data);
    }
}

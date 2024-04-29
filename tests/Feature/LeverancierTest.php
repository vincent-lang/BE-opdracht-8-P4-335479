<?php

namespace Tests\Feature;

use App\Models\Leverancier;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LeverancierTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $leverancier = Leverancier::create([
            'Naam' => 'pietje',
            'ContactPersoon' => 'jan de kip',
            'LeverancierNummer' => '90345732839345',
            'Mobiel' => '06-3029857684',
            'contact_id' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $response = $this->get('/allergeen/index');

        $response->assertStatus(200);
    }
}

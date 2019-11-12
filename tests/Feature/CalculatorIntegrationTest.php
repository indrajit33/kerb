<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CalculatorIntegrationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSummation()
    {
        $response = $this->json('POST', '/api/v1/test-result', ['numbers' => [1,2,3]] );
        $response->assertStatus(200);
    }
}

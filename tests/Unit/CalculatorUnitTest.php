<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CalculatorUnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSummation()
    {
    	$data = ['numbers' => [1,2,3] ];
    	$total = array_sum($data['numbers']);

        $response = $this->json('POST', '/api/v1/test-result', $data );
        $result     = $response->getData('total');
        $response->assertJson(['total' => $result['total']]);
        $this->assertEquals($total, $result['total']);
    }
}

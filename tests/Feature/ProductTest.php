<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_if_homepage_contain_empty_table()
    {
        $response = $this->get('/');
        $response->assertSee('No product found');
        $response->assertStatus(200);
    }
    public function test_if_homepage_contain_non_empty_table()
    {
        Product::create([
            'product_name'=>'bean',
            'price'=>30
        ]);
        $response = $this->get('/');
        $response->assertDontSee('No product found');
        $response->assertStatus(200);
    }
}

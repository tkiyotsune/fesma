<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;

class HomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_homeBasicTest()
    {

      $product = Product::first();
      $product_name = $product->name;

      $this->assertTrue($product_name == "test_item");

      // $this->assertTrue(true);

    }
}

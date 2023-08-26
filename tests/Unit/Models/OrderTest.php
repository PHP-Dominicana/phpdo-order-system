<?php

namespace Tests\Unit\Models;

use App\Models\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    private Order $model;

    /**
     * Set up method.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->model = new Order();
    }

    /**
     * Tear down method. Reset testing environment.
     */
    protected function tearDown(): void
    {
        unset($this->model);

        parent::tearDown();
    }

    /**
     * Test that model is a instance of Order.
     */
    public function test_that_model_is_a_instance_of_order(): void
    {
        $this->assertInstanceOf(Order::class, $this->model);
    }
}

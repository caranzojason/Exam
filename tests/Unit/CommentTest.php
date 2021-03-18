<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentTest extends TestCase
{
    /**
     * A basic test example.
     * we just test if our web api can insert data
     * @return void
     */
    public function test_can_insert_data()
    {
        $formData = ['Comment'=>'sample1'];
        $this->post(route('saveComments'),$formData)->assertStatus(201);
    }
}

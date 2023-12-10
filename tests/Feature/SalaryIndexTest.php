<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\SalaryPay;

class SalaryIndexTest extends TestCase
{

    public function test_UnauthenticatedUser_is_RedirectedToLogin()
    {

        $response = $this->get(route('salary.index'));
        $response->assertStatus(302);
        $response->assertRedirect(route('login'));
    }
}

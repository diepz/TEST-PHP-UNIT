<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\UserController;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
//    public function testExample()
//    {
//        $response = $this->get('/');
//
//
//    }

    public function testADD()
    {

        $result = new UserController();
        $this->assertEquals(1, $result->add(1, 0));
        $this->assertEquals(0, $result->add(0, 0));
        $this->assertEquals(0, $result->add(0, 0));


    }

    public function testSub() {
        $sub = new UserController();
        $this->assertEquals(0, $sub->sub(0,0));
        $this->assertEquals(1, $sub->sub(1,0));
        $this->assertEquals(-1, $sub->sub(0,1));
        $this->assertEquals(2, $sub->sub(5,3));

    }

    public function testFindAbsolute() {
        $absolute = new UserController();
        $this->assertEquals(0, $absolute->abb(0));
        $this->assertEquals(1, $absolute->abb(1));
        $this->assertEquals(1, $absolute->abb(-1));
    }




}

<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
//        $this->assertTrue(true);
        $response = $this->get('books');
        dd($response->getContent());
    }
}
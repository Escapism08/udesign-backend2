<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class productzApiTest extends TestCase
{
    use MakeproductzTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateproductz()
    {
        $productz = $this->fakeproductzData();
        $this->json('POST', '/api/v1/productzs', $productz);

        $this->assertApiResponse($productz);
    }

    /**
     * @test
     */
    public function testReadproductz()
    {
        $productz = $this->makeproductz();
        $this->json('GET', '/api/v1/productzs/'.$productz->id);

        $this->assertApiResponse($productz->toArray());
    }

    /**
     * @test
     */
    public function testUpdateproductz()
    {
        $productz = $this->makeproductz();
        $editedproductz = $this->fakeproductzData();

        $this->json('PUT', '/api/v1/productzs/'.$productz->id, $editedproductz);

        $this->assertApiResponse($editedproductz);
    }

    /**
     * @test
     */
    public function testDeleteproductz()
    {
        $productz = $this->makeproductz();
        $this->json('DELETE', '/api/v1/productzs/'.$productz->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/productzs/'.$productz->id);

        $this->assertResponseStatus(404);
    }
}

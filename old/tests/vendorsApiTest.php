<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class vendorsApiTest extends TestCase
{
    use MakevendorsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatevendors()
    {
        $vendors = $this->fakevendorsData();
        $this->json('POST', '/api/v1/vendors', $vendors);

        $this->assertApiResponse($vendors);
    }

    /**
     * @test
     */
    public function testReadvendors()
    {
        $vendors = $this->makevendors();
        $this->json('GET', '/api/v1/vendors/'.$vendors->id);

        $this->assertApiResponse($vendors->toArray());
    }

    /**
     * @test
     */
    public function testUpdatevendors()
    {
        $vendors = $this->makevendors();
        $editedvendors = $this->fakevendorsData();

        $this->json('PUT', '/api/v1/vendors/'.$vendors->id, $editedvendors);

        $this->assertApiResponse($editedvendors);
    }

    /**
     * @test
     */
    public function testDeletevendors()
    {
        $vendors = $this->makevendors();
        $this->json('DELETE', '/api/v1/vendors/'.$vendors->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/vendors/'.$vendors->id);

        $this->assertResponseStatus(404);
    }
}

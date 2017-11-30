<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class brandApiTest extends TestCase
{
    use MakebrandTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatebrand()
    {
        $brand = $this->fakebrandData();
        $this->json('POST', '/api/v1/brands', $brand);

        $this->assertApiResponse($brand);
    }

    /**
     * @test
     */
    public function testReadbrand()
    {
        $brand = $this->makebrand();
        $this->json('GET', '/api/v1/brands/'.$brand->id);

        $this->assertApiResponse($brand->toArray());
    }

    /**
     * @test
     */
    public function testUpdatebrand()
    {
        $brand = $this->makebrand();
        $editedbrand = $this->fakebrandData();

        $this->json('PUT', '/api/v1/brands/'.$brand->id, $editedbrand);

        $this->assertApiResponse($editedbrand);
    }

    /**
     * @test
     */
    public function testDeletebrand()
    {
        $brand = $this->makebrand();
        $this->json('DELETE', '/api/v1/brands/'.$brand->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/brands/'.$brand->id);

        $this->assertResponseStatus(404);
    }
}

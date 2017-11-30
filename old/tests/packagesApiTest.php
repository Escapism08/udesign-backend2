<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class packagesApiTest extends TestCase
{
    use MakepackagesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatepackages()
    {
        $packages = $this->fakepackagesData();
        $this->json('POST', '/api/v1/packages', $packages);

        $this->assertApiResponse($packages);
    }

    /**
     * @test
     */
    public function testReadpackages()
    {
        $packages = $this->makepackages();
        $this->json('GET', '/api/v1/packages/'.$packages->id);

        $this->assertApiResponse($packages->toArray());
    }

    /**
     * @test
     */
    public function testUpdatepackages()
    {
        $packages = $this->makepackages();
        $editedpackages = $this->fakepackagesData();

        $this->json('PUT', '/api/v1/packages/'.$packages->id, $editedpackages);

        $this->assertApiResponse($editedpackages);
    }

    /**
     * @test
     */
    public function testDeletepackages()
    {
        $packages = $this->makepackages();
        $this->json('DELETE', '/api/v1/packages/'.$packages->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/packages/'.$packages->id);

        $this->assertResponseStatus(404);
    }
}

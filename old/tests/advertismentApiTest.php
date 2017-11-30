<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class advertismentApiTest extends TestCase
{
    use MakeadvertismentTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateadvertisment()
    {
        $advertisment = $this->fakeadvertismentData();
        $this->json('POST', '/api/v1/advertisments', $advertisment);

        $this->assertApiResponse($advertisment);
    }

    /**
     * @test
     */
    public function testReadadvertisment()
    {
        $advertisment = $this->makeadvertisment();
        $this->json('GET', '/api/v1/advertisments/'.$advertisment->id);

        $this->assertApiResponse($advertisment->toArray());
    }

    /**
     * @test
     */
    public function testUpdateadvertisment()
    {
        $advertisment = $this->makeadvertisment();
        $editedadvertisment = $this->fakeadvertismentData();

        $this->json('PUT', '/api/v1/advertisments/'.$advertisment->id, $editedadvertisment);

        $this->assertApiResponse($editedadvertisment);
    }

    /**
     * @test
     */
    public function testDeleteadvertisment()
    {
        $advertisment = $this->makeadvertisment();
        $this->json('DELETE', '/api/v1/advertisments/'.$advertisment->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/advertisments/'.$advertisment->id);

        $this->assertResponseStatus(404);
    }
}

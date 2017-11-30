<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class promotionsApiTest extends TestCase
{
    use MakepromotionsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatepromotions()
    {
        $promotions = $this->fakepromotionsData();
        $this->json('POST', '/api/v1/promotions', $promotions);

        $this->assertApiResponse($promotions);
    }

    /**
     * @test
     */
    public function testReadpromotions()
    {
        $promotions = $this->makepromotions();
        $this->json('GET', '/api/v1/promotions/'.$promotions->id);

        $this->assertApiResponse($promotions->toArray());
    }

    /**
     * @test
     */
    public function testUpdatepromotions()
    {
        $promotions = $this->makepromotions();
        $editedpromotions = $this->fakepromotionsData();

        $this->json('PUT', '/api/v1/promotions/'.$promotions->id, $editedpromotions);

        $this->assertApiResponse($editedpromotions);
    }

    /**
     * @test
     */
    public function testDeletepromotions()
    {
        $promotions = $this->makepromotions();
        $this->json('DELETE', '/api/v1/promotions/'.$promotions->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/promotions/'.$promotions->id);

        $this->assertResponseStatus(404);
    }
}

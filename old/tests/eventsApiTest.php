<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class eventsApiTest extends TestCase
{
    use MakeeventsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateevents()
    {
        $events = $this->fakeeventsData();
        $this->json('POST', '/api/v1/events', $events);

        $this->assertApiResponse($events);
    }

    /**
     * @test
     */
    public function testReadevents()
    {
        $events = $this->makeevents();
        $this->json('GET', '/api/v1/events/'.$events->id);

        $this->assertApiResponse($events->toArray());
    }

    /**
     * @test
     */
    public function testUpdateevents()
    {
        $events = $this->makeevents();
        $editedevents = $this->fakeeventsData();

        $this->json('PUT', '/api/v1/events/'.$events->id, $editedevents);

        $this->assertApiResponse($editedevents);
    }

    /**
     * @test
     */
    public function testDeleteevents()
    {
        $events = $this->makeevents();
        $this->json('DELETE', '/api/v1/events/'.$events->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/events/'.$events->id);

        $this->assertResponseStatus(404);
    }
}

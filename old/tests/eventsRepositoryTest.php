<?php

use App\Models\events;
use App\Repositories\eventsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class eventsRepositoryTest extends TestCase
{
    use MakeeventsTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var eventsRepository
     */
    protected $eventsRepo;

    public function setUp()
    {
        parent::setUp();
        $this->eventsRepo = App::make(eventsRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateevents()
    {
        $events = $this->fakeeventsData();
        $createdevents = $this->eventsRepo->create($events);
        $createdevents = $createdevents->toArray();
        $this->assertArrayHasKey('id', $createdevents);
        $this->assertNotNull($createdevents['id'], 'Created events must have id specified');
        $this->assertNotNull(events::find($createdevents['id']), 'events with given id must be in DB');
        $this->assertModelData($events, $createdevents);
    }

    /**
     * @test read
     */
    public function testReadevents()
    {
        $events = $this->makeevents();
        $dbevents = $this->eventsRepo->find($events->id);
        $dbevents = $dbevents->toArray();
        $this->assertModelData($events->toArray(), $dbevents);
    }

    /**
     * @test update
     */
    public function testUpdateevents()
    {
        $events = $this->makeevents();
        $fakeevents = $this->fakeeventsData();
        $updatedevents = $this->eventsRepo->update($fakeevents, $events->id);
        $this->assertModelData($fakeevents, $updatedevents->toArray());
        $dbevents = $this->eventsRepo->find($events->id);
        $this->assertModelData($fakeevents, $dbevents->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteevents()
    {
        $events = $this->makeevents();
        $resp = $this->eventsRepo->delete($events->id);
        $this->assertTrue($resp);
        $this->assertNull(events::find($events->id), 'events should not exist in DB');
    }
}

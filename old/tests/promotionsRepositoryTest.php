<?php

use App\Models\promotions;
use App\Repositories\promotionsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class promotionsRepositoryTest extends TestCase
{
    use MakepromotionsTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var promotionsRepository
     */
    protected $promotionsRepo;

    public function setUp()
    {
        parent::setUp();
        $this->promotionsRepo = App::make(promotionsRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatepromotions()
    {
        $promotions = $this->fakepromotionsData();
        $createdpromotions = $this->promotionsRepo->create($promotions);
        $createdpromotions = $createdpromotions->toArray();
        $this->assertArrayHasKey('id', $createdpromotions);
        $this->assertNotNull($createdpromotions['id'], 'Created promotions must have id specified');
        $this->assertNotNull(promotions::find($createdpromotions['id']), 'promotions with given id must be in DB');
        $this->assertModelData($promotions, $createdpromotions);
    }

    /**
     * @test read
     */
    public function testReadpromotions()
    {
        $promotions = $this->makepromotions();
        $dbpromotions = $this->promotionsRepo->find($promotions->id);
        $dbpromotions = $dbpromotions->toArray();
        $this->assertModelData($promotions->toArray(), $dbpromotions);
    }

    /**
     * @test update
     */
    public function testUpdatepromotions()
    {
        $promotions = $this->makepromotions();
        $fakepromotions = $this->fakepromotionsData();
        $updatedpromotions = $this->promotionsRepo->update($fakepromotions, $promotions->id);
        $this->assertModelData($fakepromotions, $updatedpromotions->toArray());
        $dbpromotions = $this->promotionsRepo->find($promotions->id);
        $this->assertModelData($fakepromotions, $dbpromotions->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletepromotions()
    {
        $promotions = $this->makepromotions();
        $resp = $this->promotionsRepo->delete($promotions->id);
        $this->assertTrue($resp);
        $this->assertNull(promotions::find($promotions->id), 'promotions should not exist in DB');
    }
}

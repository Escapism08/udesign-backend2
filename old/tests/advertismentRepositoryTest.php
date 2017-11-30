<?php

use App\Models\advertisment;
use App\Repositories\advertismentRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class advertismentRepositoryTest extends TestCase
{
    use MakeadvertismentTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var advertismentRepository
     */
    protected $advertismentRepo;

    public function setUp()
    {
        parent::setUp();
        $this->advertismentRepo = App::make(advertismentRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateadvertisment()
    {
        $advertisment = $this->fakeadvertismentData();
        $createdadvertisment = $this->advertismentRepo->create($advertisment);
        $createdadvertisment = $createdadvertisment->toArray();
        $this->assertArrayHasKey('id', $createdadvertisment);
        $this->assertNotNull($createdadvertisment['id'], 'Created advertisment must have id specified');
        $this->assertNotNull(advertisment::find($createdadvertisment['id']), 'advertisment with given id must be in DB');
        $this->assertModelData($advertisment, $createdadvertisment);
    }

    /**
     * @test read
     */
    public function testReadadvertisment()
    {
        $advertisment = $this->makeadvertisment();
        $dbadvertisment = $this->advertismentRepo->find($advertisment->id);
        $dbadvertisment = $dbadvertisment->toArray();
        $this->assertModelData($advertisment->toArray(), $dbadvertisment);
    }

    /**
     * @test update
     */
    public function testUpdateadvertisment()
    {
        $advertisment = $this->makeadvertisment();
        $fakeadvertisment = $this->fakeadvertismentData();
        $updatedadvertisment = $this->advertismentRepo->update($fakeadvertisment, $advertisment->id);
        $this->assertModelData($fakeadvertisment, $updatedadvertisment->toArray());
        $dbadvertisment = $this->advertismentRepo->find($advertisment->id);
        $this->assertModelData($fakeadvertisment, $dbadvertisment->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteadvertisment()
    {
        $advertisment = $this->makeadvertisment();
        $resp = $this->advertismentRepo->delete($advertisment->id);
        $this->assertTrue($resp);
        $this->assertNull(advertisment::find($advertisment->id), 'advertisment should not exist in DB');
    }
}

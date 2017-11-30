<?php

use App\Models\vendors;
use App\Repositories\vendorsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class vendorsRepositoryTest extends TestCase
{
    use MakevendorsTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var vendorsRepository
     */
    protected $vendorsRepo;

    public function setUp()
    {
        parent::setUp();
        $this->vendorsRepo = App::make(vendorsRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatevendors()
    {
        $vendors = $this->fakevendorsData();
        $createdvendors = $this->vendorsRepo->create($vendors);
        $createdvendors = $createdvendors->toArray();
        $this->assertArrayHasKey('id', $createdvendors);
        $this->assertNotNull($createdvendors['id'], 'Created vendors must have id specified');
        $this->assertNotNull(vendors::find($createdvendors['id']), 'vendors with given id must be in DB');
        $this->assertModelData($vendors, $createdvendors);
    }

    /**
     * @test read
     */
    public function testReadvendors()
    {
        $vendors = $this->makevendors();
        $dbvendors = $this->vendorsRepo->find($vendors->id);
        $dbvendors = $dbvendors->toArray();
        $this->assertModelData($vendors->toArray(), $dbvendors);
    }

    /**
     * @test update
     */
    public function testUpdatevendors()
    {
        $vendors = $this->makevendors();
        $fakevendors = $this->fakevendorsData();
        $updatedvendors = $this->vendorsRepo->update($fakevendors, $vendors->id);
        $this->assertModelData($fakevendors, $updatedvendors->toArray());
        $dbvendors = $this->vendorsRepo->find($vendors->id);
        $this->assertModelData($fakevendors, $dbvendors->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletevendors()
    {
        $vendors = $this->makevendors();
        $resp = $this->vendorsRepo->delete($vendors->id);
        $this->assertTrue($resp);
        $this->assertNull(vendors::find($vendors->id), 'vendors should not exist in DB');
    }
}

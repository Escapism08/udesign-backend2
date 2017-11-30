<?php

use App\Models\packages;
use App\Repositories\packagesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class packagesRepositoryTest extends TestCase
{
    use MakepackagesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var packagesRepository
     */
    protected $packagesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->packagesRepo = App::make(packagesRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatepackages()
    {
        $packages = $this->fakepackagesData();
        $createdpackages = $this->packagesRepo->create($packages);
        $createdpackages = $createdpackages->toArray();
        $this->assertArrayHasKey('id', $createdpackages);
        $this->assertNotNull($createdpackages['id'], 'Created packages must have id specified');
        $this->assertNotNull(packages::find($createdpackages['id']), 'packages with given id must be in DB');
        $this->assertModelData($packages, $createdpackages);
    }

    /**
     * @test read
     */
    public function testReadpackages()
    {
        $packages = $this->makepackages();
        $dbpackages = $this->packagesRepo->find($packages->id);
        $dbpackages = $dbpackages->toArray();
        $this->assertModelData($packages->toArray(), $dbpackages);
    }

    /**
     * @test update
     */
    public function testUpdatepackages()
    {
        $packages = $this->makepackages();
        $fakepackages = $this->fakepackagesData();
        $updatedpackages = $this->packagesRepo->update($fakepackages, $packages->id);
        $this->assertModelData($fakepackages, $updatedpackages->toArray());
        $dbpackages = $this->packagesRepo->find($packages->id);
        $this->assertModelData($fakepackages, $dbpackages->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletepackages()
    {
        $packages = $this->makepackages();
        $resp = $this->packagesRepo->delete($packages->id);
        $this->assertTrue($resp);
        $this->assertNull(packages::find($packages->id), 'packages should not exist in DB');
    }
}

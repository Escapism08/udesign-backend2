<?php

use App\Models\vendor_guy;
use App\Repositories\vendor_guyRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class vendor_guyRepositoryTest extends TestCase
{
    use Makevendor_guyTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var vendor_guyRepository
     */
    protected $vendorGuyRepo;

    public function setUp()
    {
        parent::setUp();
        $this->vendorGuyRepo = App::make(vendor_guyRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatevendor_guy()
    {
        $vendorGuy = $this->fakevendor_guyData();
        $createdvendor_guy = $this->vendorGuyRepo->create($vendorGuy);
        $createdvendor_guy = $createdvendor_guy->toArray();
        $this->assertArrayHasKey('id', $createdvendor_guy);
        $this->assertNotNull($createdvendor_guy['id'], 'Created vendor_guy must have id specified');
        $this->assertNotNull(vendor_guy::find($createdvendor_guy['id']), 'vendor_guy with given id must be in DB');
        $this->assertModelData($vendorGuy, $createdvendor_guy);
    }

    /**
     * @test read
     */
    public function testReadvendor_guy()
    {
        $vendorGuy = $this->makevendor_guy();
        $dbvendor_guy = $this->vendorGuyRepo->find($vendorGuy->id);
        $dbvendor_guy = $dbvendor_guy->toArray();
        $this->assertModelData($vendorGuy->toArray(), $dbvendor_guy);
    }

    /**
     * @test update
     */
    public function testUpdatevendor_guy()
    {
        $vendorGuy = $this->makevendor_guy();
        $fakevendor_guy = $this->fakevendor_guyData();
        $updatedvendor_guy = $this->vendorGuyRepo->update($fakevendor_guy, $vendorGuy->id);
        $this->assertModelData($fakevendor_guy, $updatedvendor_guy->toArray());
        $dbvendor_guy = $this->vendorGuyRepo->find($vendorGuy->id);
        $this->assertModelData($fakevendor_guy, $dbvendor_guy->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletevendor_guy()
    {
        $vendorGuy = $this->makevendor_guy();
        $resp = $this->vendorGuyRepo->delete($vendorGuy->id);
        $this->assertTrue($resp);
        $this->assertNull(vendor_guy::find($vendorGuy->id), 'vendor_guy should not exist in DB');
    }
}

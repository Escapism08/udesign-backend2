<?php

use App\Models\brand;
use App\Repositories\brandRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class brandRepositoryTest extends TestCase
{
    use MakebrandTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var brandRepository
     */
    protected $brandRepo;

    public function setUp()
    {
        parent::setUp();
        $this->brandRepo = App::make(brandRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatebrand()
    {
        $brand = $this->fakebrandData();
        $createdbrand = $this->brandRepo->create($brand);
        $createdbrand = $createdbrand->toArray();
        $this->assertArrayHasKey('id', $createdbrand);
        $this->assertNotNull($createdbrand['id'], 'Created brand must have id specified');
        $this->assertNotNull(brand::find($createdbrand['id']), 'brand with given id must be in DB');
        $this->assertModelData($brand, $createdbrand);
    }

    /**
     * @test read
     */
    public function testReadbrand()
    {
        $brand = $this->makebrand();
        $dbbrand = $this->brandRepo->find($brand->id);
        $dbbrand = $dbbrand->toArray();
        $this->assertModelData($brand->toArray(), $dbbrand);
    }

    /**
     * @test update
     */
    public function testUpdatebrand()
    {
        $brand = $this->makebrand();
        $fakebrand = $this->fakebrandData();
        $updatedbrand = $this->brandRepo->update($fakebrand, $brand->id);
        $this->assertModelData($fakebrand, $updatedbrand->toArray());
        $dbbrand = $this->brandRepo->find($brand->id);
        $this->assertModelData($fakebrand, $dbbrand->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletebrand()
    {
        $brand = $this->makebrand();
        $resp = $this->brandRepo->delete($brand->id);
        $this->assertTrue($resp);
        $this->assertNull(brand::find($brand->id), 'brand should not exist in DB');
    }
}

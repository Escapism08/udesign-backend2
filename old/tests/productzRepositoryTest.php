<?php

use App\Models\productz;
use App\Repositories\productzRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class productzRepositoryTest extends TestCase
{
    use MakeproductzTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var productzRepository
     */
    protected $productzRepo;

    public function setUp()
    {
        parent::setUp();
        $this->productzRepo = App::make(productzRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateproductz()
    {
        $productz = $this->fakeproductzData();
        $createdproductz = $this->productzRepo->create($productz);
        $createdproductz = $createdproductz->toArray();
        $this->assertArrayHasKey('id', $createdproductz);
        $this->assertNotNull($createdproductz['id'], 'Created productz must have id specified');
        $this->assertNotNull(productz::find($createdproductz['id']), 'productz with given id must be in DB');
        $this->assertModelData($productz, $createdproductz);
    }

    /**
     * @test read
     */
    public function testReadproductz()
    {
        $productz = $this->makeproductz();
        $dbproductz = $this->productzRepo->find($productz->id);
        $dbproductz = $dbproductz->toArray();
        $this->assertModelData($productz->toArray(), $dbproductz);
    }

    /**
     * @test update
     */
    public function testUpdateproductz()
    {
        $productz = $this->makeproductz();
        $fakeproductz = $this->fakeproductzData();
        $updatedproductz = $this->productzRepo->update($fakeproductz, $productz->id);
        $this->assertModelData($fakeproductz, $updatedproductz->toArray());
        $dbproductz = $this->productzRepo->find($productz->id);
        $this->assertModelData($fakeproductz, $dbproductz->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteproductz()
    {
        $productz = $this->makeproductz();
        $resp = $this->productzRepo->delete($productz->id);
        $this->assertTrue($resp);
        $this->assertNull(productz::find($productz->id), 'productz should not exist in DB');
    }
}

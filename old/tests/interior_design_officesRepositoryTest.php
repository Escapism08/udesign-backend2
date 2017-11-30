<?php

use App\Models\interior_design_offices;
use App\Repositories\interior_design_officesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class interior_design_officesRepositoryTest extends TestCase
{
    use Makeinterior_design_officesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var interior_design_officesRepository
     */
    protected $interiorDesignOfficesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->interiorDesignOfficesRepo = App::make(interior_design_officesRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateinterior_design_offices()
    {
        $interiorDesignOffices = $this->fakeinterior_design_officesData();
        $createdinterior_design_offices = $this->interiorDesignOfficesRepo->create($interiorDesignOffices);
        $createdinterior_design_offices = $createdinterior_design_offices->toArray();
        $this->assertArrayHasKey('id', $createdinterior_design_offices);
        $this->assertNotNull($createdinterior_design_offices['id'], 'Created interior_design_offices must have id specified');
        $this->assertNotNull(interior_design_offices::find($createdinterior_design_offices['id']), 'interior_design_offices with given id must be in DB');
        $this->assertModelData($interiorDesignOffices, $createdinterior_design_offices);
    }

    /**
     * @test read
     */
    public function testReadinterior_design_offices()
    {
        $interiorDesignOffices = $this->makeinterior_design_offices();
        $dbinterior_design_offices = $this->interiorDesignOfficesRepo->find($interiorDesignOffices->id);
        $dbinterior_design_offices = $dbinterior_design_offices->toArray();
        $this->assertModelData($interiorDesignOffices->toArray(), $dbinterior_design_offices);
    }

    /**
     * @test update
     */
    public function testUpdateinterior_design_offices()
    {
        $interiorDesignOffices = $this->makeinterior_design_offices();
        $fakeinterior_design_offices = $this->fakeinterior_design_officesData();
        $updatedinterior_design_offices = $this->interiorDesignOfficesRepo->update($fakeinterior_design_offices, $interiorDesignOffices->id);
        $this->assertModelData($fakeinterior_design_offices, $updatedinterior_design_offices->toArray());
        $dbinterior_design_offices = $this->interiorDesignOfficesRepo->find($interiorDesignOffices->id);
        $this->assertModelData($fakeinterior_design_offices, $dbinterior_design_offices->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteinterior_design_offices()
    {
        $interiorDesignOffices = $this->makeinterior_design_offices();
        $resp = $this->interiorDesignOfficesRepo->delete($interiorDesignOffices->id);
        $this->assertTrue($resp);
        $this->assertNull(interior_design_offices::find($interiorDesignOffices->id), 'interior_design_offices should not exist in DB');
    }
}

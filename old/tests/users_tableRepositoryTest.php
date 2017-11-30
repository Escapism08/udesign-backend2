<?php

use App\Models\users_table;
use App\Repositories\users_tableRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class users_tableRepositoryTest extends TestCase
{
    use Makeusers_tableTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var users_tableRepository
     */
    protected $usersTableRepo;

    public function setUp()
    {
        parent::setUp();
        $this->usersTableRepo = App::make(users_tableRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateusers_table()
    {
        $usersTable = $this->fakeusers_tableData();
        $createdusers_table = $this->usersTableRepo->create($usersTable);
        $createdusers_table = $createdusers_table->toArray();
        $this->assertArrayHasKey('id', $createdusers_table);
        $this->assertNotNull($createdusers_table['id'], 'Created users_table must have id specified');
        $this->assertNotNull(users_table::find($createdusers_table['id']), 'users_table with given id must be in DB');
        $this->assertModelData($usersTable, $createdusers_table);
    }

    /**
     * @test read
     */
    public function testReadusers_table()
    {
        $usersTable = $this->makeusers_table();
        $dbusers_table = $this->usersTableRepo->find($usersTable->id);
        $dbusers_table = $dbusers_table->toArray();
        $this->assertModelData($usersTable->toArray(), $dbusers_table);
    }

    /**
     * @test update
     */
    public function testUpdateusers_table()
    {
        $usersTable = $this->makeusers_table();
        $fakeusers_table = $this->fakeusers_tableData();
        $updatedusers_table = $this->usersTableRepo->update($fakeusers_table, $usersTable->id);
        $this->assertModelData($fakeusers_table, $updatedusers_table->toArray());
        $dbusers_table = $this->usersTableRepo->find($usersTable->id);
        $this->assertModelData($fakeusers_table, $dbusers_table->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteusers_table()
    {
        $usersTable = $this->makeusers_table();
        $resp = $this->usersTableRepo->delete($usersTable->id);
        $this->assertTrue($resp);
        $this->assertNull(users_table::find($usersTable->id), 'users_table should not exist in DB');
    }
}

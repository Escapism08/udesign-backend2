<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class users_tableApiTest extends TestCase
{
    use Makeusers_tableTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateusers_table()
    {
        $usersTable = $this->fakeusers_tableData();
        $this->json('POST', '/api/v1/usersTables', $usersTable);

        $this->assertApiResponse($usersTable);
    }

    /**
     * @test
     */
    public function testReadusers_table()
    {
        $usersTable = $this->makeusers_table();
        $this->json('GET', '/api/v1/usersTables/'.$usersTable->id);

        $this->assertApiResponse($usersTable->toArray());
    }

    /**
     * @test
     */
    public function testUpdateusers_table()
    {
        $usersTable = $this->makeusers_table();
        $editedusers_table = $this->fakeusers_tableData();

        $this->json('PUT', '/api/v1/usersTables/'.$usersTable->id, $editedusers_table);

        $this->assertApiResponse($editedusers_table);
    }

    /**
     * @test
     */
    public function testDeleteusers_table()
    {
        $usersTable = $this->makeusers_table();
        $this->json('DELETE', '/api/v1/usersTables/'.$usersTable->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/usersTables/'.$usersTable->id);

        $this->assertResponseStatus(404);
    }
}

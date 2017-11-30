<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class vendor_guyApiTest extends TestCase
{
    use Makevendor_guyTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatevendor_guy()
    {
        $vendorGuy = $this->fakevendor_guyData();
        $this->json('POST', '/api/v1/vendorGuys', $vendorGuy);

        $this->assertApiResponse($vendorGuy);
    }

    /**
     * @test
     */
    public function testReadvendor_guy()
    {
        $vendorGuy = $this->makevendor_guy();
        $this->json('GET', '/api/v1/vendorGuys/'.$vendorGuy->id);

        $this->assertApiResponse($vendorGuy->toArray());
    }

    /**
     * @test
     */
    public function testUpdatevendor_guy()
    {
        $vendorGuy = $this->makevendor_guy();
        $editedvendor_guy = $this->fakevendor_guyData();

        $this->json('PUT', '/api/v1/vendorGuys/'.$vendorGuy->id, $editedvendor_guy);

        $this->assertApiResponse($editedvendor_guy);
    }

    /**
     * @test
     */
    public function testDeletevendor_guy()
    {
        $vendorGuy = $this->makevendor_guy();
        $this->json('DELETE', '/api/v1/vendorGuys/'.$vendorGuy->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/vendorGuys/'.$vendorGuy->id);

        $this->assertResponseStatus(404);
    }
}

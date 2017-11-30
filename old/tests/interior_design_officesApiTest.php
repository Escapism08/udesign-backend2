<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class interior_design_officesApiTest extends TestCase
{
    use Makeinterior_design_officesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateinterior_design_offices()
    {
        $interiorDesignOffices = $this->fakeinterior_design_officesData();
        $this->json('POST', '/api/v1/interiorDesignOffices', $interiorDesignOffices);

        $this->assertApiResponse($interiorDesignOffices);
    }

    /**
     * @test
     */
    public function testReadinterior_design_offices()
    {
        $interiorDesignOffices = $this->makeinterior_design_offices();
        $this->json('GET', '/api/v1/interiorDesignOffices/'.$interiorDesignOffices->id);

        $this->assertApiResponse($interiorDesignOffices->toArray());
    }

    /**
     * @test
     */
    public function testUpdateinterior_design_offices()
    {
        $interiorDesignOffices = $this->makeinterior_design_offices();
        $editedinterior_design_offices = $this->fakeinterior_design_officesData();

        $this->json('PUT', '/api/v1/interiorDesignOffices/'.$interiorDesignOffices->id, $editedinterior_design_offices);

        $this->assertApiResponse($editedinterior_design_offices);
    }

    /**
     * @test
     */
    public function testDeleteinterior_design_offices()
    {
        $interiorDesignOffices = $this->makeinterior_design_offices();
        $this->json('DELETE', '/api/v1/interiorDesignOffices/'.$interiorDesignOffices->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/interiorDesignOffices/'.$interiorDesignOffices->id);

        $this->assertResponseStatus(404);
    }
}

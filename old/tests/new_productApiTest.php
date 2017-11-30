<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class new_productApiTest extends TestCase
{
    use Makenew_productTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatenew_product()
    {
        $newProduct = $this->fakenew_productData();
        $this->json('POST', '/api/v1/newProducts', $newProduct);

        $this->assertApiResponse($newProduct);
    }

    /**
     * @test
     */
    public function testReadnew_product()
    {
        $newProduct = $this->makenew_product();
        $this->json('GET', '/api/v1/newProducts/'.$newProduct->id);

        $this->assertApiResponse($newProduct->toArray());
    }

    /**
     * @test
     */
    public function testUpdatenew_product()
    {
        $newProduct = $this->makenew_product();
        $editednew_product = $this->fakenew_productData();

        $this->json('PUT', '/api/v1/newProducts/'.$newProduct->id, $editednew_product);

        $this->assertApiResponse($editednew_product);
    }

    /**
     * @test
     */
    public function testDeletenew_product()
    {
        $newProduct = $this->makenew_product();
        $this->json('DELETE', '/api/v1/newProducts/'.$newProduct->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/newProducts/'.$newProduct->id);

        $this->assertResponseStatus(404);
    }
}

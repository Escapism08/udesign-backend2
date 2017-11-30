<?php

use App\Models\new_product;
use App\Repositories\new_productRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class new_productRepositoryTest extends TestCase
{
    use Makenew_productTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var new_productRepository
     */
    protected $newProductRepo;

    public function setUp()
    {
        parent::setUp();
        $this->newProductRepo = App::make(new_productRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatenew_product()
    {
        $newProduct = $this->fakenew_productData();
        $creatednew_product = $this->newProductRepo->create($newProduct);
        $creatednew_product = $creatednew_product->toArray();
        $this->assertArrayHasKey('id', $creatednew_product);
        $this->assertNotNull($creatednew_product['id'], 'Created new_product must have id specified');
        $this->assertNotNull(new_product::find($creatednew_product['id']), 'new_product with given id must be in DB');
        $this->assertModelData($newProduct, $creatednew_product);
    }

    /**
     * @test read
     */
    public function testReadnew_product()
    {
        $newProduct = $this->makenew_product();
        $dbnew_product = $this->newProductRepo->find($newProduct->id);
        $dbnew_product = $dbnew_product->toArray();
        $this->assertModelData($newProduct->toArray(), $dbnew_product);
    }

    /**
     * @test update
     */
    public function testUpdatenew_product()
    {
        $newProduct = $this->makenew_product();
        $fakenew_product = $this->fakenew_productData();
        $updatednew_product = $this->newProductRepo->update($fakenew_product, $newProduct->id);
        $this->assertModelData($fakenew_product, $updatednew_product->toArray());
        $dbnew_product = $this->newProductRepo->find($newProduct->id);
        $this->assertModelData($fakenew_product, $dbnew_product->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletenew_product()
    {
        $newProduct = $this->makenew_product();
        $resp = $this->newProductRepo->delete($newProduct->id);
        $this->assertTrue($resp);
        $this->assertNull(new_product::find($newProduct->id), 'new_product should not exist in DB');
    }
}

<?php

use Faker\Factory as Faker;
use App\Models\new_product;
use App\Repositories\new_productRepository;

trait Makenew_productTrait
{
    /**
     * Create fake instance of new_product and save it in database
     *
     * @param array $newProductFields
     * @return new_product
     */
    public function makenew_product($newProductFields = [])
    {
        /** @var new_productRepository $newProductRepo */
        $newProductRepo = App::make(new_productRepository::class);
        $theme = $this->fakenew_productData($newProductFields);
        return $newProductRepo->create($theme);
    }

    /**
     * Get fake instance of new_product
     *
     * @param array $newProductFields
     * @return new_product
     */
    public function fakenew_product($newProductFields = [])
    {
        return new new_product($this->fakenew_productData($newProductFields));
    }

    /**
     * Get fake data of new_product
     *
     * @param array $postFields
     * @return array
     */
    public function fakenew_productData($newProductFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'product_name' => $fake->word,
            'product_brand' => $fake->word,
            'product_image' => $fake->word,
            'product_category' => $fake->word,
            'product_image_2' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $newProductFields);
    }
}

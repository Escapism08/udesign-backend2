<?php

use Faker\Factory as Faker;
use App\Models\productz;
use App\Repositories\productzRepository;

trait MakeproductzTrait
{
    /**
     * Create fake instance of productz and save it in database
     *
     * @param array $productzFields
     * @return productz
     */
    public function makeproductz($productzFields = [])
    {
        /** @var productzRepository $productzRepo */
        $productzRepo = App::make(productzRepository::class);
        $theme = $this->fakeproductzData($productzFields);
        return $productzRepo->create($theme);
    }

    /**
     * Get fake instance of productz
     *
     * @param array $productzFields
     * @return productz
     */
    public function fakeproductz($productzFields = [])
    {
        return new productz($this->fakeproductzData($productzFields));
    }

    /**
     * Get fake data of productz
     *
     * @param array $postFields
     * @return array
     */
    public function fakeproductzData($productzFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'product_name' => $fake->word,
            'product_type' => $fake->word,
            'product_brand' => $fake->word,
            'product_category' => $fake->word,
            'product_image' => $fake->word,
            'product_image2' => $fake->word,
            'product_price' => $fake->randomDigitNotNull,
            'product_old_price' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $productzFields);
    }
}

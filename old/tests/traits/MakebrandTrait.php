<?php

use Faker\Factory as Faker;
use App\Models\brand;
use App\Repositories\brandRepository;

trait MakebrandTrait
{
    /**
     * Create fake instance of brand and save it in database
     *
     * @param array $brandFields
     * @return brand
     */
    public function makebrand($brandFields = [])
    {
        /** @var brandRepository $brandRepo */
        $brandRepo = App::make(brandRepository::class);
        $theme = $this->fakebrandData($brandFields);
        return $brandRepo->create($theme);
    }

    /**
     * Get fake instance of brand
     *
     * @param array $brandFields
     * @return brand
     */
    public function fakebrand($brandFields = [])
    {
        return new brand($this->fakebrandData($brandFields));
    }

    /**
     * Get fake data of brand
     *
     * @param array $postFields
     * @return array
     */
    public function fakebrandData($brandFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'brand_name' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $brandFields);
    }
}

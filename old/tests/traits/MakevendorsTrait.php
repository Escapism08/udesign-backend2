<?php

use Faker\Factory as Faker;
use App\Models\vendors;
use App\Repositories\vendorsRepository;

trait MakevendorsTrait
{
    /**
     * Create fake instance of vendors and save it in database
     *
     * @param array $vendorsFields
     * @return vendors
     */
    public function makevendors($vendorsFields = [])
    {
        /** @var vendorsRepository $vendorsRepo */
        $vendorsRepo = App::make(vendorsRepository::class);
        $theme = $this->fakevendorsData($vendorsFields);
        return $vendorsRepo->create($theme);
    }

    /**
     * Get fake instance of vendors
     *
     * @param array $vendorsFields
     * @return vendors
     */
    public function fakevendors($vendorsFields = [])
    {
        return new vendors($this->fakevendorsData($vendorsFields));
    }

    /**
     * Get fake data of vendors
     *
     * @param array $postFields
     * @return array
     */
    public function fakevendorsData($vendorsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'vendor_total_sales' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $vendorsFields);
    }
}

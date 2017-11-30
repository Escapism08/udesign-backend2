<?php

use Faker\Factory as Faker;
use App\Models\packages;
use App\Repositories\packagesRepository;

trait MakepackagesTrait
{
    /**
     * Create fake instance of packages and save it in database
     *
     * @param array $packagesFields
     * @return packages
     */
    public function makepackages($packagesFields = [])
    {
        /** @var packagesRepository $packagesRepo */
        $packagesRepo = App::make(packagesRepository::class);
        $theme = $this->fakepackagesData($packagesFields);
        return $packagesRepo->create($theme);
    }

    /**
     * Get fake instance of packages
     *
     * @param array $packagesFields
     * @return packages
     */
    public function fakepackages($packagesFields = [])
    {
        return new packages($this->fakepackagesData($packagesFields));
    }

    /**
     * Get fake data of packages
     *
     * @param array $postFields
     * @return array
     */
    public function fakepackagesData($packagesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'package_name' => $fake->word,
            'package_category' => $fake->word,
            'package_description' => $fake->word,
            'package_offer' => $fake->word,
            'package_items_from_existing_products' => $fake->word,
            'package_featured_images' => $fake->word,
            'package_image1' => $fake->word,
            'package_image2' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $packagesFields);
    }
}

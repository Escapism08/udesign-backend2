<?php

use Faker\Factory as Faker;
use App\Models\vendor_guy;
use App\Repositories\vendor_guyRepository;

trait Makevendor_guyTrait
{
    /**
     * Create fake instance of vendor_guy and save it in database
     *
     * @param array $vendorGuyFields
     * @return vendor_guy
     */
    public function makevendor_guy($vendorGuyFields = [])
    {
        /** @var vendor_guyRepository $vendorGuyRepo */
        $vendorGuyRepo = App::make(vendor_guyRepository::class);
        $theme = $this->fakevendor_guyData($vendorGuyFields);
        return $vendorGuyRepo->create($theme);
    }

    /**
     * Get fake instance of vendor_guy
     *
     * @param array $vendorGuyFields
     * @return vendor_guy
     */
    public function fakevendor_guy($vendorGuyFields = [])
    {
        return new vendor_guy($this->fakevendor_guyData($vendorGuyFields));
    }

    /**
     * Get fake data of vendor_guy
     *
     * @param array $postFields
     * @return array
     */
    public function fakevendor_guyData($vendorGuyFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'vendor_name' => $fake->word,
            'vendor_brand' => $fake->word,
            'vendor_password' => $fake->word,
            'vendor_sales' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $vendorGuyFields);
    }
}

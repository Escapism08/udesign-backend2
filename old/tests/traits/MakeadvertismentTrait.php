<?php

use Faker\Factory as Faker;
use App\Models\advertisment;
use App\Repositories\advertismentRepository;

trait MakeadvertismentTrait
{
    /**
     * Create fake instance of advertisment and save it in database
     *
     * @param array $advertismentFields
     * @return advertisment
     */
    public function makeadvertisment($advertismentFields = [])
    {
        /** @var advertismentRepository $advertismentRepo */
        $advertismentRepo = App::make(advertismentRepository::class);
        $theme = $this->fakeadvertismentData($advertismentFields);
        return $advertismentRepo->create($theme);
    }

    /**
     * Get fake instance of advertisment
     *
     * @param array $advertismentFields
     * @return advertisment
     */
    public function fakeadvertisment($advertismentFields = [])
    {
        return new advertisment($this->fakeadvertismentData($advertismentFields));
    }

    /**
     * Get fake data of advertisment
     *
     * @param array $postFields
     * @return array
     */
    public function fakeadvertismentData($advertismentFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'ad_image' => $fake->word,
            'ad_name' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $advertismentFields);
    }
}

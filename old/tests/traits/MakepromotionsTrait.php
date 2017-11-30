<?php

use Faker\Factory as Faker;
use App\Models\promotions;
use App\Repositories\promotionsRepository;

trait MakepromotionsTrait
{
    /**
     * Create fake instance of promotions and save it in database
     *
     * @param array $promotionsFields
     * @return promotions
     */
    public function makepromotions($promotionsFields = [])
    {
        /** @var promotionsRepository $promotionsRepo */
        $promotionsRepo = App::make(promotionsRepository::class);
        $theme = $this->fakepromotionsData($promotionsFields);
        return $promotionsRepo->create($theme);
    }

    /**
     * Get fake instance of promotions
     *
     * @param array $promotionsFields
     * @return promotions
     */
    public function fakepromotions($promotionsFields = [])
    {
        return new promotions($this->fakepromotionsData($promotionsFields));
    }

    /**
     * Get fake data of promotions
     *
     * @param array $postFields
     * @return array
     */
    public function fakepromotionsData($promotionsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'promotions_type' => $fake->word,
            'promotion_code' => $fake->word,
            'promotion_name' => $fake->word,
            'promotion_start_date' => $fake->word,
            'promotion_end_date' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $promotionsFields);
    }
}

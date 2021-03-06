<?php

use Faker\Factory as Faker;
use App\Models\post;
use App\Repositories\postRepository;

trait MakepostTrait
{
    /**
     * Create fake instance of post and save it in database
     *
     * @param array $postFields
     * @return post
     */
    public function makepost($postFields = [])
    {
        /** @var postRepository $postRepo */
        $postRepo = App::make(postRepository::class);
        $theme = $this->fakepostData($postFields);
        return $postRepo->create($theme);
    }

    /**
     * Get fake instance of post
     *
     * @param array $postFields
     * @return post
     */
    public function fakepost($postFields = [])
    {
        return new post($this->fakepostData($postFields));
    }

    /**
     * Get fake data of post
     *
     * @param array $postFields
     * @return array
     */
    public function fakepostData($postFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'post_title' => $fake->word,
            'post_body' => $fake->word,
            'post_user_id' => $fake->randomDigitNotNull,
            'post_image' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $postFields);
    }
}

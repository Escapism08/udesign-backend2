<?php

use Faker\Factory as Faker;
use App\Models\users_table;
use App\Repositories\users_tableRepository;

trait Makeusers_tableTrait
{
    /**
     * Create fake instance of users_table and save it in database
     *
     * @param array $usersTableFields
     * @return users_table
     */
    public function makeusers_table($usersTableFields = [])
    {
        /** @var users_tableRepository $usersTableRepo */
        $usersTableRepo = App::make(users_tableRepository::class);
        $theme = $this->fakeusers_tableData($usersTableFields);
        return $usersTableRepo->create($theme);
    }

    /**
     * Get fake instance of users_table
     *
     * @param array $usersTableFields
     * @return users_table
     */
    public function fakeusers_table($usersTableFields = [])
    {
        return new users_table($this->fakeusers_tableData($usersTableFields));
    }

    /**
     * Get fake data of users_table
     *
     * @param array $postFields
     * @return array
     */
    public function fakeusers_tableData($usersTableFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'user_name' => $fake->word,
            'user_password' => $fake->word,
            'user_image' => $fake->word,
            'user_subscription_type' => $fake->word,
            'user_age' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $usersTableFields);
    }
}

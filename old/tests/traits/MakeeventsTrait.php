<?php

use Faker\Factory as Faker;
use App\Models\events;
use App\Repositories\eventsRepository;

trait MakeeventsTrait
{
    /**
     * Create fake instance of events and save it in database
     *
     * @param array $eventsFields
     * @return events
     */
    public function makeevents($eventsFields = [])
    {
        /** @var eventsRepository $eventsRepo */
        $eventsRepo = App::make(eventsRepository::class);
        $theme = $this->fakeeventsData($eventsFields);
        return $eventsRepo->create($theme);
    }

    /**
     * Get fake instance of events
     *
     * @param array $eventsFields
     * @return events
     */
    public function fakeevents($eventsFields = [])
    {
        return new events($this->fakeeventsData($eventsFields));
    }

    /**
     * Get fake data of events
     *
     * @param array $postFields
     * @return array
     */
    public function fakeeventsData($eventsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'event_name' => $fake->word,
            'event_start_of_date' => $fake->word,
            'event_end_date' => $fake->word,
            'event_belongs_to_what_brand' => $fake->word,
            'event_place' => $fake->word,
            'event_owner' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $eventsFields);
    }
}

<?php

use Faker\Factory as Faker;
use App\Models\interior_design_offices;
use App\Repositories\interior_design_officesRepository;

trait Makeinterior_design_officesTrait
{
    /**
     * Create fake instance of interior_design_offices and save it in database
     *
     * @param array $interiorDesignOfficesFields
     * @return interior_design_offices
     */
    public function makeinterior_design_offices($interiorDesignOfficesFields = [])
    {
        /** @var interior_design_officesRepository $interiorDesignOfficesRepo */
        $interiorDesignOfficesRepo = App::make(interior_design_officesRepository::class);
        $theme = $this->fakeinterior_design_officesData($interiorDesignOfficesFields);
        return $interiorDesignOfficesRepo->create($theme);
    }

    /**
     * Get fake instance of interior_design_offices
     *
     * @param array $interiorDesignOfficesFields
     * @return interior_design_offices
     */
    public function fakeinterior_design_offices($interiorDesignOfficesFields = [])
    {
        return new interior_design_offices($this->fakeinterior_design_officesData($interiorDesignOfficesFields));
    }

    /**
     * Get fake data of interior_design_offices
     *
     * @param array $postFields
     * @return array
     */
    public function fakeinterior_design_officesData($interiorDesignOfficesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'office_name' => $fake->word,
            'office_location' => $fake->word,
            'office_number' => $fake->word,
            'office_services' => $fake->word,
            'office_description' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $interiorDesignOfficesFields);
    }
}

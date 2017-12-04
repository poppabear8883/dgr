<?php

namespace App\Contact\Repositories;

use App\Contact;
use App\Contact\Contracts\ContactInterface;
use Carbon\Carbon;

class ContactRepository implements ContactInterface
{

    /**
     * @var Contact
     */
    private $contact;

    /**
     * @var Carbon
     */
    private $carbon;

    public function __construct(Contact $contact, Carbon $carbon)
    {
        $this->contact = $contact;
        $this->carbon = $carbon;
        $this->carbon->setTimezone('America/New_York');
    }

    /**
     * Gets all contacts
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->contact->all();
    }

    /**
     * Gets Daily statistics
     *
     * @param int $days
     * @param string $format
     * @return static
     */
    public function getDailyStats($days = 6, $format = 'm/d')
    {
        return $this->generateData(
            $this->carbon->now()->subDays($days),
            $this->carbon->now(),
            $format
        );
    }

    /**
     * Gets Monthly statistics
     *
     * @param int $months
     * @param string $format
     * @return static
     */
    public function getMonthlyStats($months = 5, $format = 'M')
    {
        return $this->generateData(
            $this->carbon->now()->subMonths($months),
            $this->carbon->now(),
            $format
        );
    }

    public function importCsv($file)
    {

        if (($handle = fopen(public_path() . '/' . $file,'r')) !== false)
        {
            while (($data = fgetcsv($handle, 1000, ',')) !== false)
            {
//                $contact = $this->contact->create([
//                    'name' => $data[0],
//                    ...
//                ]);
            }
            fclose($handle);
        }

        return $this;

    }

    /*
     * PRIVATE METHODS
     */


    /**
     * Generates data using Carbon start and end dates then formats it.
     *
     * @param $start
     * @param $end
     * @param string $format
     * @return static
     */
    private function generateData($start, $end, $format = 'm/d/y')
    {
        $contacts = $this->contact->where('created_at', '>', $start)->get();
        $dates = [];

        for($date = $start; $date->lte($end); $date->addDay()) {

            $dates[$date->format($format)] = 0;
        }

        $weeks = collect($dates);

        $merged = $weeks->merge($contacts->groupBy(function ($date) use ($format) {
            return $this->carbon->parse($date->created_at)->format($format);
        })->sortBy(function($key) {
            return $key;
        })->map(function ($item, $key) {
            return collect($item)->count();
        }));

        return $merged;
    }
}
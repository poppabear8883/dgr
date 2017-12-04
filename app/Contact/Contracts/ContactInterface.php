<?php

namespace App\Contact\Contracts;

interface ContactInterface
{
    public function all();
    public function getDailyStats($days = 6, $format = 'm/d');
    public function getMonthlyStats($months = 5, $format = 'M');
    public function importCsv($file);
}
<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usaStates = [
            "AL" => 'Alabama',
            "AK" => 'Alaska',
            "AZ" => 'Arizona',
            "AR" => 'Arkansas',
            "CA" => 'California'
        ];

        $countries = [
            ['code' => 'AZ', 'name' => 'Azerbaijan', 'states' => null],
            ['code' => 'TR', 'name' => 'Türkiye', 'states' => null],
            ['code' => 'geo', 'name' => 'Georgia', 'states' => null],
            ['code' => 'ing', 'name' => 'India', 'states' => null],
            ['code' => 'usa', 'name' => 'United States of America', 'states' => json_encode($usaStates)],
            ['code' => 'ger', 'name' => 'Germany', 'states' => null],
        ];

        Country::insert($countries);
    }
}

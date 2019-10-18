<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimeTimeZonesToTimeZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Db::table('time_zones')->insert([
            ['name' => "Pacific Time (US &amp; Canada)", 'gmt' => '(GMT-08:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Mountain Time (US &amp; Canada)", 'gmt' => '(GMT-07:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Central Time (US &amp; Canada)", 'gmt' => '(GMT-06:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Eastern Time (US &amp; Canada)", 'gmt' => '(GMT-05:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "International Date Line West", 'gmt' => '(GMT-12:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "American Samoa", 'gmt' => '(GMT-11:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Midway Island", 'gmt' => '(GMT-11:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Hawaii", 'gmt' => '(GMT-10:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Alaska", 'gmt' => '(GMT-09:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Tijuana", 'gmt' => '(GMT-08:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Arizona", 'gmt' => '(GMT-07:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Chihuahua", 'gmt' => '(GMT-07:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Mazatlan", 'gmt' => '(GMT-07:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Central America", 'gmt' => '(GMT-06:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Guadalajara", 'gmt' => '(GMT-06:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Mexico City", 'gmt' => '(GMT-06:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Monterrey", 'gmt' => '(GMT-06:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Saskatchewan", 'gmt' => '(GMT-06:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Bogota", 'gmt' => '(GMT-05:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Indiana (East)", 'gmt' => '(GMT-05:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Lima", 'gmt' => '(GMT-05:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Quito", 'gmt' => '(GMT-05:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Atlantic Time (Canada)", 'gmt' => '(GMT-04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Caracas", 'gmt' => '(GMT-04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Georgetown", 'gmt' => '(GMT-04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "La Paz", 'gmt' => '(GMT-04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Puerto Rico", 'gmt' => '(GMT-04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Santiago", 'gmt' => '(GMT-04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Newfoundland", 'gmt' => '(GMT-03:30)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Brasilia", 'gmt' => '(GMT-03:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Buenos Aires", 'gmt' => '(GMT-03:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Greenland", 'gmt' => '(GMT-03:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Montevideo", 'gmt' => '(GMT-03:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Mid-Atlantic", 'gmt' => '(GMT-02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Azores", 'gmt' => '(GMT-01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Cape Verde Is.", 'gmt' => '(GMT-01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Casablanca", 'gmt' => '(GMT+00:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Dublin", 'gmt' => '(GMT+00:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Edinburgh", 'gmt' => '(GMT+00:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Lisbon", 'gmt' => '(GMT+00:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "London", 'gmt' => '(GMT+00:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Monrovia", 'gmt' => '(GMT+00:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "UTC", 'gmt' => '(GMT+00:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Amsterdam", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Belgrade", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Berlin", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Bern", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Bratislava", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Brussels", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Budapest", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Copenhagen", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Ljubljana", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Madrid", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Paris", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Prague", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Rome", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Sarajevo", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Skopje", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Stockholm", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Vienna", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Warsaw", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "West Central Africa", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Zagreb", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Zurich", 'gmt' => '(GMT+01:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Athens", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Bucharest", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Cairo", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Harare", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Helsinki", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Jerusalem", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Kaliningrad", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Kyiv", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Pretoria", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Riga", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Sofia", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Tallinn", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Vilnius", 'gmt' => '(GMT+02:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Baghdad", 'gmt' => '(GMT+03:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Istanbul", 'gmt' => '(GMT+03:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Kuwait", 'gmt' => '(GMT+03:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Minsk", 'gmt' => '(GMT+03:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Moscow", 'gmt' => '(GMT+03:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Nairobi", 'gmt' => '(GMT+03:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Riyadh", 'gmt' => '(GMT+03:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "St. Petersburg", 'gmt' => '(GMT+03:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Tehran", 'gmt' => '(GMT+03:30)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Abu Dhabi", 'gmt' => '(GMT+04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Baku", 'gmt' => '(GMT+04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Muscat", 'gmt' => '(GMT+04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Samara", 'gmt' => '(GMT+04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Tbilisi", 'gmt' => '(GMT+04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Volgograd", 'gmt' => '(GMT+04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Yerevan", 'gmt' => '(GMT+04:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Kabul", 'gmt' => '(GMT+04:30)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Ekaterinburg", 'gmt' => '(GMT+05:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Islamabad", 'gmt' => '(GMT+05:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Karachi", 'gmt' => '(GMT+05:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Tashkent", 'gmt' => '(GMT+05:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Chennai", 'gmt' => '(GMT+05:30)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Kolkata", 'gmt' => '(GMT+05:30)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Mumbai", 'gmt' => '(GMT+05:30)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "New Delhi", 'gmt' => '(GMT+05:30)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Sri Jayawardenepura", 'gmt' => '(GMT+05:30)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Kathmandu", 'gmt' => '(GMT+05:45)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Almaty", 'gmt' => '(GMT+06:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Astana", 'gmt' => '(GMT+06:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Dhaka", 'gmt' => '(GMT+06:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Urumqi", 'gmt' => '(GMT+06:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Rangoon", 'gmt' => '(GMT+06:30)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Bangkok", 'gmt' => '(GMT+07:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Hanoi", 'gmt' => '(GMT+07:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Jakarta", 'gmt' => '(GMT+07:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Krasnoyarsk", 'gmt' => '(GMT+07:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Novosibirsk", 'gmt' => '(GMT+07:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Beijing", 'gmt' => '(GMT+08:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Chongqing", 'gmt' => '(GMT+08:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Hong Kong", 'gmt' => '(GMT+08:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Irkutsk", 'gmt' => '(GMT+08:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Kuala Lumpur", 'gmt' => '(GMT+08:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Perth", 'gmt' => '(GMT+08:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Singapore", 'gmt' => '(GMT+08:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Taipei", 'gmt' => '(GMT+08:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Ulaanbaatar", 'gmt' => '(GMT+08:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Osaka", 'gmt' => '(GMT+09:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Sapporo", 'gmt' => '(GMT+09:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Seoul", 'gmt' => '(GMT+09:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Tokyo", 'gmt' => '(GMT+09:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Yakutsk", 'gmt' => '(GMT+09:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Adelaide", 'gmt' => '(GMT+09:30)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Darwin", 'gmt' => '(GMT+09:30)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Brisbane", 'gmt' => '(GMT+10:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Canberra", 'gmt' => '(GMT+10:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Guam", 'gmt' => '(GMT+10:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Hobart", 'gmt' => '(GMT+10:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Melbourne", 'gmt' => '(GMT+10:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Port Moresby", 'gmt' => '(GMT+10:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Sydney", 'gmt' => '(GMT+10:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Vladivostok", 'gmt' => '(GMT+10:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Magadan", 'gmt' => '(GMT+11:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "New Caledonia", 'gmt' => '(GMT+11:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Solomon Is.", 'gmt' => '(GMT+11:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Srednekolymsk", 'gmt' => '(GMT+11:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Auckland", 'gmt' => '(GMT+12:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Fiji", 'gmt' => '(GMT+12:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Kamchatka", 'gmt' => '(GMT+12:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Marshall Is.", 'gmt' => '(GMT+12:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Wellington", 'gmt' => '(GMT+12:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Chatham Is.", 'gmt' => '(GMT+12:45)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Nuku'alofa", 'gmt' => '(GMT+13:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Samoa", 'gmt' => '(GMT+13:00)', 'created_at' => now(), 'updated_at' => now()],
            ['name' => "Tokelau Is.", 'gmt' => '(GMT+13:00)', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('time_zones', function (Blueprint $table) {
            //
        });
    }
}

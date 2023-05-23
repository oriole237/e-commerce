<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "name" => "Habits",
                "sigle" => "HBT",
                "description" => "Tous Habits",
                "created_at" => date("Y-m-d H:m:s"),
            ],
            [
                "name" => "Chaussures",
                "sigle" => "CH",
                "description" => "Tous chaussures",
                "created" => date("Y-m-d H:m:s"),
            ],
        ];

        DB::table("categories")->insert($categories);
    }
}

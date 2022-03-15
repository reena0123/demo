<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	"Nike",
        	"Adidas",
        	"Clarks",
        	"Seeandwear",
        	"Woodland",
        	"Lee Cooper",
        	"Fila",
        	"Puma",
        	"Reebok",
        	"Hush Puppies"
        ];

        foreach ($data as $name) {
        	Brand::create([
        		"name" => $name
        	]);
        }
    }
}

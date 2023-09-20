<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Oex_category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=[
                'name'=>'Kuli IT Tecno',
                'status'=>'1'
        ];

        Oex_category::create($category);
    }
}
